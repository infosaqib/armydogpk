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
    protected $signature = 'sitemap:generate';

    protected $description = 'Generate the sitemap.xml file';

    public function handle(): void
    {
        $sitemap = Sitemap::create()
            ->add(Url::create(route('home'))->setPriority(1.0))
            ->add(Url::create(route('services'))->setPriority(0.8))
            ->add(Url::create(route('blog'))->setPriority(0.8))
            ->add(Url::create(route('about'))->setPriority(0.5))
            ->add(Url::create(route('contact'))->setPriority(0.5));

        ServicePage::query()->select(['id', 'slug', 'updated_at'])->each(function (ServicePage $page) use ($sitemap) {
            $path = public_path("services/{$page->slug}.html");

            if (! File::exists($path)) {
                return;
            }

            $sitemap->add(
                Url::create(route('services.show', $page->slug))
                    ->setLastModificationDate(Carbon::createFromTimestamp(File::lastModified($path)))
                    ->setPriority(0.7)
                    ->setChangeFrequency(Url::CHANGE_FREQUENCY_WEEKLY)
            );
        });

        Blog::query()->select(['id', 'slug', 'updated_at'])->each(function (Blog $blog) use ($sitemap) {
            $path = public_path("blogs/{$blog->slug}.html");

            if (! File::exists($path)) {
                return;
            }

            $sitemap->add(
                Url::create(route('blogs.show', $blog->slug))
                    ->setLastModificationDate(Carbon::createFromTimestamp(File::lastModified($path)))
                    ->setPriority(0.6)
                    ->setChangeFrequency(Url::CHANGE_FREQUENCY_WEEKLY)
            );
        });

        $sitemap->writeToFile(public_path('sitemap.xml'));

        $this->info('Sitemap generated at public/sitemap.xml');
    }
}
