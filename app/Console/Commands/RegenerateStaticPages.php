<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Blog;
use App\Models\ServicePage;
use App\Services\StaticSiteGenerator;

class RegenerateStaticPages extends Command
{
    protected $signature = 'static:regenerate {--b : Regenerate blog pages} {--s : Regenerate service pages}';

    protected $description = 'Regenerate all existing static blog and service pages';

    public function handle(StaticSiteGenerator $generator): int
    {
        $blogs = $this->option('b');
        $services = $this->option('s');

        if (!$blogs && !$services) {
            $this->error('Specify at least one option: --b, --s, or both.');
            return self::FAILURE;
        }

        if ($blogs) {
            Blog::with('images')->chunk(100, function ($blogs) use ($generator) {
                foreach ($blogs as $blog) {
                    $generator->generateBlog($blog);
                }
            });

            $this->info('Blogs regenerated.');
        }

        if ($services) {
            ServicePage::with('image')->chunk(100, function ($pages) use ($generator) {
                foreach ($pages as $page) {
                    $generator->generateServicePage($page);
                }
            });

            $this->info('Service pages regenerated.');
        }

        return self::SUCCESS;
    }
}