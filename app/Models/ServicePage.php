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
                $page->slug = Str::slug($page->city) . '-' . Str::random(10);
            }
        });
    }

    public function image()
    {
        return $this->morphOne(Image::class, 'imageable');
    }
}