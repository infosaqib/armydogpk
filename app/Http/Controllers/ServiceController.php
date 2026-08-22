<?php

namespace App\Http\Controllers;

use App\Models\ServicePage;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function show(Request $request, $slug)
    {
        $page = ServicePage::where('slug', $slug)->first();
        if ($page) {
            return view('services.view', [
                'page' => $page,
            ]);
        }
        abort(404);
    }
}
