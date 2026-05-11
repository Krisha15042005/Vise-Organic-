<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BlogPost;
use Illuminate\Http\Request;
<<<<<<< HEAD
use Illuminate\Support\Facades\Storage;
=======
>>>>>>> e448ae559fcabf58ac1decb1137d7f4c90e449a8

class BlogController extends Controller
{
    public function store(Request $request)
    {
<<<<<<< HEAD
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
=======
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'author' => 'required|string|max:255',
        ]);

        BlogPost::create($validated);
        return back()->with('success', 'Blog post created successfully');
>>>>>>> e448ae559fcabf58ac1decb1137d7f4c90e449a8
    }

    public function destroy($id)
    {
        $post = BlogPost::find($id);
        if ($post) {
<<<<<<< HEAD
            if ($post->image) {
                Storage::disk('public')->delete($post->image);
            }
=======
>>>>>>> e448ae559fcabf58ac1decb1137d7f4c90e449a8
            $post->delete();
            return back()->with('success', 'Blog post deleted successfully');
        }
        return back()->with('error', 'Blog post not found');
    }
}
