<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email'],
            'phone' => ['nullable', 'string', 'max:20'],
            'service' => ['required', 'string', 'in:detection,protection,rescue,consultation'],
            'message' => ['required', 'string', 'min:10', 'max:1000'],
        ]);

        try {
            Mail::to(env('CONTACT_EMAIL'))->send(new ContactMail($validated));

            return back()->with('success', 'Thank you! Your message has been sent successfully. We will respond within 24 hours.');
        } catch (\Exception $e) {
            Log::error('Contact mail failed: ' . $e->getMessage());

            return back()->withInput()->withErrors(['error' => 'Failed to send message. Please try again later.']);
        }
    }
}
