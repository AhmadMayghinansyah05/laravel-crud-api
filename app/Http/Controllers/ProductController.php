<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // 🔹 GET /api/products
    public function index()
    {
        return response()->json(Product::all(), 200);
    }

    // 🔹 POST /api/products
    public function store(Request $request)
    {
        $request->validate([
            'name'  => 'required|string|max:255',
            'price' => 'required|numeric',
            'description' => 'nullable|string',
        ]);

        $product = Product::create($request->only(['name','description','price']));

        return response()->json([
            'message' => 'Product created successfully',
            'data'    => $product
        ], 201);
    }

    // 🔹 GET /api/products/{id}
    public function show(Product $product)
    {
        return response()->json($product, 200);
    }

    // 🔹 PUT /api/products/{id}
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name'  => 'sometimes|required|string|max:255',
            'price' => 'sometimes|required|numeric',
            'description' => 'nullable|string',
        ]);

        $product->update($request->only(['name','description','price']));

        return response()->json([
            'message' => 'Product updated successfully',
            'data'    => $product
        ], 200);
    }

    // 🔹 DELETE /api/products/{id}
    public function destroy(Product $product)
    {
        $product->delete();

        return response()->json([
            'message' => 'Product deleted successfully'
        ], 200);
    }
}
