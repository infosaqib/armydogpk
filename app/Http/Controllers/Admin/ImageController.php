<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Image;
use App\Models\ServicePage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{


    public function ckeditor(Request $request)
    {
        $request->validate([
            'upload' => ['required', 'image', 'max:5120'],
        ]);

        $file = $request->file('upload');

        $path = $file->store('uploads/editor', 'public');

        return response()->json([
            'uploaded' => 1,
            'fileName' => $file->getClientOriginalName(),
            'url' => asset('storage/' . $path),
        ]);
    }
    
    public function store(Request $request)
    {
        $validated = $request->validate([
            'image' => ['required', 'image', 'max:5120'],
            'type' => ['required', 'in:blog,service_page'],
            'id' => ['required', 'integer'],
        ]);

        $path = $request->file('image')->store('uploads', 'public');

        if ($validated['type'] === 'blog') {
            $blog = Blog::findOrFail($validated['id']);

            $blog->images()->create([
                'path' => $path,
            ]);
        } else {
            $servicePage = ServicePage::findOrFail($validated['id']);

            $servicePage->image()->create([
                'path' => $path,
            ]);
        }

        return back()->with('success', 'Image uploaded successfully.');
    }

    public function destroy(Image $image)
    {
        Storage::disk('public')->delete($image->path);

        $image->delete();

        return back()->with('success', 'Image deleted successfully.');
    }
}