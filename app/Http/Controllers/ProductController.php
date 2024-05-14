<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('products.create', compact('categories'));
    }

    public function store(ProductRequest $request)
    {
        $validated = $request->validated();

        if ($request->hasFile('image')) {
            $filePath = Storage::disk('public')->put('images/posts/featured-images', request()->file('image'));
            $validated['image'] = $filePath;
        }
        Product::create($validated);
        return redirect()->route('products.index')->with('success', 'Product created successfully.');
    }

    public function show(Product $product)
    {
        return view('products.show', compact('product'));
    }

    public function edit(Product $product)
    {
        $categories = Category::all();
        return view('products.edit', compact('product', 'categories'));
    }

    public function update(ProductRequest $request, Product $product)
    {
        $validated = $request->validated();

        if ($request->hasFile('image')) {
            // delete image
            Storage::disk('public')->delete($product->featured_image);

            $filePath = Storage::disk('public')->put('images/posts/featured-images', request()->file('image'), 'public');
            $validated['image'] = $filePath;
        }
        $product->update($validated);
        return redirect()->route('products.index')->with('success', 'Product updated successfully.');
    }

    public function destroy(Product $product)
    {
        Storage::disk('public')->delete($product->image);
        $product->delete();
        return redirect()->route('products.index')->with('success', 'Product deleted successfully.');
    }
}
