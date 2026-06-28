<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Blog extends Model
{
    protected $fillable = [
        'title',
        'content',
    ];

    protected static function booted()
    {
        static::saving(function (Blog $blog) {

            if ($blog->isDirty('title')) {

                $slug = Str::slug($blog->title);
                $originalSlug = $slug;
                $count = 1;

                while (
                    Blog::where('slug', $slug)
                        ->where('id', '!=', $blog->id)
                        ->exists()
                ) {
                    $slug = $originalSlug . '-' . $count++;
                }

                $blog->slug = $slug;
            }

            if ($blog->isDirty('content')) {
                $blog->excerpt = Str::limit(strip_tags($blog->content), 200);
            }
        });
    }

    public function images()
    {
        return $this->morphMany(Image::class, 'imageable');
    }
}