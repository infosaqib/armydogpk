<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ServicePage;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Services\StaticSiteGenerator;

class ServicePageController extends Controller
{

    protected StaticSiteGenerator $generator;

    public function __construct(StaticSiteGenerator $generator)
    {
        $this->generator = $generator;
    }
    public function index()
    {
        $servicePages = ServicePage::latest()->paginate(20);

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

        $this->generator->generateServicePage($servicePage);
        
        return redirect()
            ->route('admin.service-pages.index')
            ->with('success', 'Service page created successfully.');
    }


    public function destroy(ServicePage $servicePage)
    {
        $this->generator->deleteServicePage($servicePage);
        $servicePage->delete();

        return redirect()
            ->route('admin.service-pages.index')
            ->with('success', 'Service page deleted successfully.');
    }
}