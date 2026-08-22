<?php

namespace App\Console\Commands;

use App\Models\Blog;
use App\Models\ServicePage;
use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;

class GenerateSitemap extends Command
{
    protected $signature = 'sitemap:generate {--gzip : Also create sitemap.xml.gz}';

    protected $description = 'Generate the sitemap.xml file';

    public function handle(): void
    {
        $this->info('Generating sitemap...');

        $sitemap = Sitemap::create()
            ->add(Url::create(route('home'))->setPriority(1.0))
            ->add(Url::create(route('services'))->setPriority(0.8))
            ->add(Url::create(route('blog'))->setPriority(0.8))
            ->add(Url::create(route('about'))->setPriority(0.5))
            ->add(Url::create(route('contact'))->setPriority(0.5));

        $serviceCount = 0;
        ServicePage::query()
            ->select(['id', 'slug', 'updated_at', 'created_at'])
            ->orderBy('id')
            ->cursor()
            ->each(function (ServicePage $page) use (&$sitemap, &$serviceCount) {
                $lastMod = $page->updated_at ?? $page->created_at ?? now();
                $sitemap->add(
                    Url::create(route('services.show', ['slug' => $page->slug]))
                        ->setLastModificationDate(Carbon::parse($lastMod))
                        ->setPriority(0.7)
                        ->setChangeFrequency(Url::CHANGE_FREQUENCY_WEEKLY)
                );
                $serviceCount++;
            });

        $this->info("Added {$serviceCount} service pages to sitemap.");

        $blogCount = 0;
        Blog::query()
            ->select(['id', 'slug', 'updated_at', 'created_at'])
            ->orderBy('id')
            ->cursor()
            ->each(function (Blog $blog) use (&$sitemap, &$blogCount) {
                $lastMod = $blog->updated_at ?? $blog->created_at ?? now();
                $sitemap->add(
                    Url::create(route('blogs.show', ['slug' => $blog->slug]))
                        ->setLastModificationDate(Carbon::parse($lastMod))
                        ->setPriority(0.6)
                        ->setChangeFrequency(Url::CHANGE_FREQUENCY_WEEKLY)
                );
                $blogCount++;
            });

        $this->info("Added {$blogCount} blog pages to sitemap.");

        $sitemapPath = public_path('sitemap.xml');
        $sitemap->writeToFile($sitemapPath);
        $this->info("Sitemap written to {$sitemapPath}");

        if ($this->option('gzip')) {
            try {
                $xml = File::get($sitemapPath);
                $gzPath = public_path('sitemap.xml.gz');
                File::put($gzPath, gzencode($xml, 9));
                $this->info("Gzipped sitemap written to {$gzPath}");
            } catch (\Throwable $e) {
                $this->error('Failed to create gzip sitemap: ' . $e->getMessage());
            }
        }

        $this->info('Sitemap generation complete.');
    }
}