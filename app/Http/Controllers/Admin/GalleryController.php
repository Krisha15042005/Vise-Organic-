<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\GalleryImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    public function store(Request $request)
    {
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
    }

    public function destroy($id)
    {
        $image = GalleryImage::find($id);
        if ($image) {
            Storage::disk('public')->delete($image->image_path);
            $image->delete();
            return back()->with('success', 'Gallery image deleted successfully');
        }
        return back()->with('error', 'Image not found');
    }
}
