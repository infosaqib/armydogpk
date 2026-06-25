<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ServicePage;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ServicePageController extends Controller
{
    public function index()
    {
        $servicePages = ServicePage::latest()->paginate(20);

        return view('admin.service-pages.index', compact('servicePages'));
    }

    public function create()
    {
        $provinces = [
            'punjab',
            'sindh',
            'balochistan',
            'kpk',
            'gilgit',
            'kashmir',
        ];

        return view('admin.service-pages.create', compact('provinces'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'city' => ['required', 'string', 'max:255'],
            'province' => [
                'required',
                Rule::in([
                    'punjab',
                    'sindh',
                    'balochistan',
                    'kpk',
                    'gilgit',
                    'kashmir',
                ]),
            ],
            'phone_1' => ['required', 'string', 'max:50'],
            'phone_2' => ['nullable', 'string', 'max:50'],
        ]);

        $servicePage = ServicePage::create($validated);

        return redirect()
            ->route('service-pages.edit', $servicePage)
            ->with('success', 'Service page created successfully.');
    }

    public function show(ServicePage $servicePage)
    {
        return view('admin.service-pages.show', compact('servicePage'));
    }

    public function edit(ServicePage $servicePage)
    {
        $provinces = [
            'punjab',
            'sindh',
            'balochistan',
            'kpk',
            'gilgit',
            'kashmir',
        ];

        return view('admin.service-pages.edit', compact('servicePage', 'provinces'));
    }

    public function update(Request $request, ServicePage $servicePage)
    {
        $validated = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'city' => ['required', 'string', 'max:255'],
            'province' => [
                'required',
                Rule::in([
                    'punjab',
                    'sindh',
                    'balochistan',
                    'kpk',
                    'gilgit',
                    'kashmir',
                ]),
            ],
            'phone_1' => ['required', 'string', 'max:50'],
            'phone_2' => ['nullable', 'string', 'max:50'],
        ]);

        $servicePage->update($validated);

        return redirect()
            ->route('service-pages.edit', $servicePage)
            ->with('success', 'Service page updated successfully.');
    }

    public function destroy(ServicePage $servicePage)
    {
        $servicePage->delete();

        return redirect()
            ->route('service-pages.index')
            ->with('success', 'Service page deleted successfully.');
    }
}