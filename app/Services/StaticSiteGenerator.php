<?php


namespace App\Services;

use App\Models\Blog;
use App\Models\ServicePage;
use Illuminate\Support\Facades\File;

class StaticSiteGenerator
{
    public function generateBlog(Blog $blog, ?string $oldSlug = null): void
    {

        if ($oldSlug && $oldSlug !== $blog->slug) {

            $oldFile = public_path("blogs/{$oldSlug}.html");

            if (File::exists($oldFile)) {
                File::delete($oldFile);
            }
        }
        $directory = public_path('blogs');

        File::ensureDirectoryExists($directory);

        $html = view('static.blog', [
            'blog' => $blog,
        ])->render();

        File::put(
            $directory . '/' . $blog->slug . '.html',
            $html
        );
    }

    public function deleteBlog(Blog $blog): void
    {
        $path = public_path('blogs/' . $blog->slug . '.html');

        if (File::exists($path)) {
            File::delete($path);
        }
    }

    public function generateServicePage(ServicePage $servicePage): void
    {
        File::ensureDirectoryExists(public_path('services'));

        $html = view('static.services', [
            'servicePage' => $servicePage,
        ])->render();

        File::put(
            public_path("services/{$servicePage->slug}.html"),
            $html
        );
    }

    public function deleteServicePage(ServicePage $servicePage): void
    {
        $path = public_path("services/{$servicePage->slug}.html");

        if (File::exists($path)) {
            File::delete($path);
        }
    }
}