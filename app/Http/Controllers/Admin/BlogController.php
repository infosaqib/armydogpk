<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use App\Services\StaticSiteGenerator;
use Mews\Purifier\Facades\Purifier;

class BlogController extends Controller
{

    protected StaticSiteGenerator $generator;

    public function __construct(StaticSiteGenerator $generator)
    {
        $this->generator = $generator;
    }

    protected function attachEditorImages(Blog $blog): void
    {
        $pattern = '/storage\/(uploads\/editor\/[^"\']+)/';

        try {
            if (@preg_match($pattern, '') === false) {
                throw new \Exception("Invalid regex pattern");
            }
            preg_match_all($pattern, $blog->content, $matches);
        } catch (\Exception $e) {
            Log::error("Failed to attach editor images", ['error' => $e->getMessage()]);
            throw $e;
        }

        foreach (array_unique($matches[1]) as $path) {
            $blog->images()->firstOrCreate([
                'path' => $path,
            ]);
        }
    }
    public function index()
    {
        $blogs = Blog::latest()->paginate(20);

        return view('admin.blogs.index', compact('blogs'));
    }

    public function create()
    {
        return view('admin.blogs.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'content' => ['required', 'string'],
        ]);

        $validated['content'] = Purifier::clean($validated['content']);
        $blog = Blog::create($validated);

        $this->attachEditorImages($blog);

        $this->generator->generateBlog($blog);

        return redirect()
            ->route('admin.blogs.index')
            ->with('success', 'Blog created successfully.');
    }

    public function edit(Blog $blog)
    {
        return view('admin.blogs.edit', compact('blog'));
    }

    public function update(Request $request, Blog $blog)
    {

        $oldSlug = $blog->slug;
        
        $validated = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'content' => ['required', 'string'],
        ]);

        $validated['content'] = Purifier::clean($validated['content']);

        $blog->update($validated);

        $blog->images()->delete();

        $this->attachEditorImages($blog);

        $this->generator->generateBlog($blog, $oldSlug);

        return redirect()
            ->route('admin.blogs.index')
            ->with('success', 'Blog updated successfully.');
    }


    public function destroy(Blog $blog)
    {
        DB::transaction(function () use ($blog) {
            foreach ($blog->images as $image) {
                try {
                    Storage::disk('public')->delete($image->path);
                } catch (\Exception $e) {
                    Log::error("Failed to delete image file", ['image_id' => $image->id]);
                }
                $image->delete();
            }

            $this->generator->deleteBlog($blog);
            $blog->delete();
        });

        return redirect()
            ->route('admin.blogs.index')
            ->with('success', 'Blog deleted successfully.');
    }
}