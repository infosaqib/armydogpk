<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Services\StaticSiteGenerator;

class BlogController extends Controller
{

    protected StaticSiteGenerator $generator;

    public function __construct(StaticSiteGenerator $generator)
    {
        $this->generator = $generator;
    }

    protected function attachEditorImages(Blog $blog): void
    {
        preg_match_all(
            '/storage\/(uploads\/editor\/[^"\']+)/',
            $blog->content,
            $matches
        );

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
        $blog = Blog::create($validated);

        $this->attachEditorImages($blog);

        $this->generator->generateBlog($blog);

        return redirect()
            ->route('admin.blogs.edit', $blog)
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

        $blog->update($validated);

        $blog->images()->delete();

        $this->attachEditorImages($blog);

        $this->generator->generateBlog($blog, $oldSlug);

        return redirect()
            ->route('admin.blogs.edit', $blog)
            ->with('success', 'Blog updated successfully.');
    }

    public function destroy(Blog $blog)
    {
        foreach ($blog->images as $image) {

            Storage::disk('public')->delete($image->path);

            $image->delete();
        }

        $this->generator->deleteBlog($blog);
        
        $blog->delete();

        return redirect()
            ->route('admin.blogs.index')
            ->with('success', 'Blog deleted successfully.');
    }
}