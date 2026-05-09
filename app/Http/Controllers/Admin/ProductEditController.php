<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductEditController extends Controller
{
    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        if (!$product) {
            return back()->with('error', 'Product not found');
        }

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric|min:0',
            'quantity' => 'required|integer|min:0',
            'category' => 'nullable|string|max:255',
        ]);

        $product->update($validated);
        return back()->with('success', 'Product updated successfully');
    }

    public function destroy($id)
    {
        $product = Product::find($id);
        if ($product) {
            $product->delete();
            return back()->with('success', 'Product deleted successfully');
        }
        return back()->with('error', 'Product not found');
    }
}
