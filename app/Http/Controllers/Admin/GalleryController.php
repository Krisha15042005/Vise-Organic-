<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\GalleryImage;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'image_path' => 'required|string',
            'category' => 'required|string|max:255',
        ]);

        GalleryImage::create($validated);
        return back()->with('success', 'Gallery image added successfully');
    }

    public function destroy($id)
    {
        $image = GalleryImage::find($id);
        if ($image) {
            $image->delete();
            return back()->with('success', 'Gallery image deleted successfully');
        }
        return back()->with('error', 'Image not found');
    }
}
