<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BlogPost;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'author' => 'required|string|max:255',
        ]);

        BlogPost::create($validated);
        return back()->with('success', 'Blog post created successfully');
    }

    public function destroy($id)
    {
        $post = BlogPost::find($id);
        if ($post) {
            $post->delete();
            return back()->with('success', 'Blog post deleted successfully');
        }
        return back()->with('error', 'Blog post not found');
    }
}
