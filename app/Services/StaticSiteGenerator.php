<?php

namespace App\Services;

use App\Models\Blog;
use Illuminate\Support\Facades\File;

class StaticSiteGenerator
{
    public function generateBlog(Blog $blog): void
    {
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
}