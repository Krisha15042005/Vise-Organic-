<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\GalleryImage;
use Illuminate\Http\Request;
<<<<<<< HEAD
use Illuminate\Support\Facades\Storage;
=======
>>>>>>> e448ae559fcabf58ac1decb1137d7f4c90e449a8

class GalleryController extends Controller
{
    public function store(Request $request)
    {
<<<<<<< HEAD
        $request->validate([
            'title'    => 'required|string|max:255',
            'category' => 'nullable|string|max:255',
            'image'    => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:4096',
        ]);

        $path = $request->file('image')->store('gallery', 'public');

        GalleryImage::create([
            'title'      => $request->title,
            'category'   => $request->category ?? 'General',
            'image_path' => $path,
        ]);

        return redirect()->route('admin.gallery.index')->with('success', 'Gallery image added successfully');
=======
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'image_path' => 'required|string',
            'category' => 'required|string|max:255',
        ]);

        GalleryImage::create($validated);
        return back()->with('success', 'Gallery image added successfully');
>>>>>>> e448ae559fcabf58ac1decb1137d7f4c90e449a8
    }

    public function destroy($id)
    {
        $image = GalleryImage::find($id);
        if ($image) {
<<<<<<< HEAD
            Storage::disk('public')->delete($image->image_path);
=======
>>>>>>> e448ae559fcabf58ac1decb1137d7f4c90e449a8
            $image->delete();
            return back()->with('success', 'Gallery image deleted successfully');
        }
        return back()->with('error', 'Image not found');
    }
}
