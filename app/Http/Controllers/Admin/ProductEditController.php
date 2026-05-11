<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
<<<<<<< HEAD
use Illuminate\Support\Facades\Storage;
=======
>>>>>>> e448ae559fcabf58ac1decb1137d7f4c90e449a8

class ProductEditController extends Controller
{
    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        if (!$product) {
            return back()->with('error', 'Product not found');
        }

<<<<<<< HEAD
        $request->validate([
            'name'        => 'required|string|max:255',
            'description' => 'required|string',
            'price'       => 'required|numeric|min:0',
            'quantity'    => 'required|integer|min:0',
            'category'    => 'nullable|string|max:255',
            'image'       => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:4096',
        ]);

        $data = $request->only(['name', 'description', 'price', 'quantity', 'category']);

        if ($request->hasFile('image')) {
            if ($product->image) {
                Storage::disk('public')->delete($product->image);
            }
            $data['image'] = $request->file('image')->store('products', 'public');
        }

        $product->update($data);
=======
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric|min:0',
            'quantity' => 'required|integer|min:0',
            'category' => 'nullable|string|max:255',
        ]);

        $product->update($validated);
>>>>>>> e448ae559fcabf58ac1decb1137d7f4c90e449a8
        return back()->with('success', 'Product updated successfully');
    }

    public function destroy($id)
    {
        $product = Product::find($id);
        if ($product) {
<<<<<<< HEAD
            if ($product->image) {
                Storage::disk('public')->delete($product->image);
            }
=======
>>>>>>> e448ae559fcabf58ac1decb1137d7f4c90e449a8
            $product->delete();
            return back()->with('success', 'Product deleted successfully');
        }
        return back()->with('error', 'Product not found');
    }
}
