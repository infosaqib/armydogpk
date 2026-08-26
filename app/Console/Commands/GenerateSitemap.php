<?php

namespace App\Console\Commands;

use App\Models\Blog;
use App\Models\ServicePage;
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

        $now = now(); // Capture execution time once for consistency

        $staticRoutes = [
            ['route' => 'home', 'priority' => 1.0],
            ['route' => 'services', 'priority' => 0.8],
            ['route' => 'blog', 'priority' => 0.8],
            ['route' => 'about', 'priority' => 0.5],
            ['route' => 'contact', 'priority' => 0.5],
        ];

        $sitemap = Sitemap::create();

        foreach ($staticRoutes as $page) {
            $sitemap->add(
                Url::create(route($page['route']))
                    ->setPriority($page['priority'])
                    ->setLastModificationDate($now)
                    ->setChangeFrequency(Url::CHANGE_FREQUENCY_DAILY)
            );
        }

        $serviceCount = 0;
        ServicePage::query()
            ->select(['id', 'slug'])
            ->orderBy('id')
            ->cursor()
            ->each(function (ServicePage $page) use (&$sitemap, &$serviceCount, $now) {
                $sitemap->add(
                    Url::create(route('services.show', ['slug' => $page->slug]))
                        ->setLastModificationDate($now)
                        ->setPriority(0.8)
                        ->setChangeFrequency(Url::CHANGE_FREQUENCY_DAILY)
                );
                $serviceCount++;
            });

        $this->info("Added {$serviceCount} service pages to sitemap.");

        $blogCount = 0;
        Blog::query()
            ->select(['id', 'slug'])
            ->orderBy('id')
            ->cursor()
            ->each(function (Blog $blog) use (&$sitemap, &$blogCount, $now) {
                $sitemap->add(
                    Url::create(route('blogs.show', ['slug' => $blog->slug]))
                        ->setLastModificationDate($now)
                        ->setPriority(0.64)
                        ->setChangeFrequency(Url::CHANGE_FREQUENCY_DAILY)
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