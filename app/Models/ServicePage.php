<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class ServicePage extends Model
{
    protected $fillable = [
        'title',
        'city',
        'province',
        'phone_1',
        'phone_2',
    ];

    protected static function booted()
    {
        static::saving(function (ServicePage $page) {

            if ($page->isDirty('city')) {

                $slug = Str::slug($page->city);
                $originalSlug = $slug;
                $count = 1;

                // Check if the slug already exists for another service page
                while (
                    ServicePage::where('slug', $slug)
                        ->where('id', '!=', $page->id)
                        ->exists()
                ) {
                    // If it exists, append an incremental number (e.g., chicago-1, chicago-2)
                    $slug = $originalSlug . '-' . $count++;
                }

                $page->slug = $slug;
            }
        });
    }

    public function image()
    {
        return $this->morphOne(Image::class, 'imageable');
    }
}