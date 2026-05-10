<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BlogPost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'title'   => 'required|string|max:255',
            'content' => 'required|string',
            'author'  => 'nullable|string|max:255',
            'image'   => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:4096',
        ]);

        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('blog', 'public');
        }

        BlogPost::create([
            'title'   => $request->title,
            'content' => $request->content,
            'author'  => $request->author ?? 'Admin',
            'image'   => $imagePath,
        ]);

        return redirect()->route('admin.blog.index')->with('success', 'Blog post created successfully');
    }

    public function destroy($id)
    {
        $post = BlogPost::find($id);
        if ($post) {
            if ($post->image) {
                Storage::disk('public')->delete($post->image);
            }
            $post->delete();
            return back()->with('success', 'Blog post deleted successfully');
        }
        return back()->with('error', 'Blog post not found');
    }
}
