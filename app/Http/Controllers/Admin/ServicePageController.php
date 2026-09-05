<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ServicePage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;

class ServicePageController extends Controller
{
    public function index()
    public function index(Request $request)
    {
        $servicePages = ServicePage::latest()->paginate(12);
        $servicePages = ServicePage::query()
            ->when($request->filled('search'), function ($query) use ($request) {
                $query->where('city', 'like', '%' . $request->search . '%');
            })
            ->latest()
            ->paginate(12)
            ->withQueryString();

        return view('admin.service-pages.index', compact('servicePages'));
    }

    public function create()
    {
        $provinces = config('services.provinces');

        return view('admin.service-pages.create', compact('provinces'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'city' => ['required', 'string', 'max:255'],
            'province' => [
                'required',
                Rule::in(config('services.provinces')),
            ],
            'phone_1' => ['required', 'string', 'max:50'],
            'phone_2' => ['nullable', 'string', 'max:50'],
            'image' => ['required', 'image', 'max:5120'],
        ]);

        $servicePage = ServicePage::create($validated);

        $path = $request->file('image')->store('uploads/services', 'public');

        $servicePage->image()->create([
            'path' => $path,
        ]);

        Artisan::call('sitemap:generate');

        return redirect()
            ->route('admin.service-pages.create')
            ->with('success', 'Service page created successfully.');
    }


    public function destroy(ServicePage $servicePage)
    {
        DB::transaction(function () use ($servicePage) {
            try {
                // Delete the image file from storage
                if ($servicePage->image) {
                    try {
                        Storage::disk('public')->delete($servicePage->image->path);
                    } catch (\Exception $e) {
                        Log::error("Failed to delete service page image file", [
                            'service_page_id' => $servicePage->id,
                            'image_path' => $servicePage->image->path,
                            'error' => $e->getMessage()
                        ]);
                    }
                    $servicePage->image()->delete();
                }

                // Delete the service page record
                $servicePage->delete();

                Artisan::call('sitemap:generate');
            } catch (\Exception $e) {
                Log::error("Failed to delete service page", [
                    'service_page_id' => $servicePage->id,
                    'error' => $e->getMessage()
                ]);
                throw $e;
            }
        });

        return redirect()
            ->route('admin.service-pages.index')
            ->with('success', 'Service page deleted successfully.');
    }
}