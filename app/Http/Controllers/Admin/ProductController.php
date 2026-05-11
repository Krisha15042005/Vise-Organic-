<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
<<<<<<< HEAD
use Illuminate\Support\Facades\Storage;
=======
>>>>>>> e448ae559fcabf58ac1decb1137d7f4c90e449a8

class ProductController extends Controller
{
    public function store(Request $request)
    {
<<<<<<< HEAD
        $request->validate([
            'name'        => 'required|string|max:255',
            'description' => 'required|string',
            'price'       => 'required|numeric|min:0',
            'quantity'    => 'required|integer|min:0',
            'category'    => 'nullable|string|max:255',
            'image'       => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:4096',
        ]);

        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('products', 'public');
        }

        Product::create([
            'name'        => $request->name,
            'description' => $request->description,
            'price'       => $request->price,
            'quantity'    => $request->quantity,
            'category'    => $request->category,
            'image'       => $imagePath,
        ]);

        return redirect()->route('admin.products.index')->with('success', 'Product saved successfully');
=======
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric|min:0',
            'quantity' => 'required|integer|min:0',
            'category' => 'nullable|string|max:255',
        ]);

        Product::create($validated);

        return back()->with('success', 'Product saved successfully');
>>>>>>> e448ae559fcabf58ac1decb1137d7f4c90e449a8
    }
}
