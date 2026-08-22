<?php

namespace App\Http\Controllers;

use App\Models\ServicePage;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function show(Request $request, $slug)
    {
        $servicePage = ServicePage::where('slug', $slug)->firstOrFail();
        if ($servicePage) {
            return view('services.view', compact('servicePage'));
        }
        abort(404);
    }
}
