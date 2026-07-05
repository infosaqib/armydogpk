<?php

namespace App\Services;

use App\Models\ServicePage;

class ServiceLocations
{
    public function provinces(): array
    {
        $cities = ServicePage::orderBy('city')
            ->get(['city', 'province', 'slug'])
            ->groupBy('province');

        return collect(config('services.provinces'))
            ->map(function ($province) use ($cities) {
                return [
                    'name' => ucfirst($province),
                    'key' => $province,
                    'cities' => $cities->get($province, collect()),
                ];
            })
            ->all();
    }
}