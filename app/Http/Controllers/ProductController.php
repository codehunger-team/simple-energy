<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;

// Your code here


class ProductController extends Controller
{
    public function index()
    {
        $products = Product::latest()->paginate(15);
        return view('admin/products/index', compact('products'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        return view('admin/products/create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'modal_no' => 'required|string|max:255',
            'color' => 'required|string|max:255',
            'price' => 'required|string|max:255',
            'image' => 'required'
        ]);


        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $storagePath = 'products';
            $productImage = $image->store($storagePath, 'public');
        } else {
            $productImage = "";
        }

        $product = new Product;
        $product->modal_no = $request->input('modal_no');
        $product->color = $request->input('color');
        $product->price = $request->input('price');
        $product->image = $productImage;
        $product->save();

        return redirect('product')->withSuccess('New product added successfully.');
    }

    public function show($id)
    {

        $product = Product::findOrFail($id);
        return view('admin/products/edit', compact('product'));
    }


    public function update(Request $request)
    {
        $request->validate([
            'modal_no' => 'required|string|max:255',
            'color' => 'required|string|max:255',
            'price' => 'required|string|max:255'
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $storagePath = 'products';
            $productImage = $image->store($storagePath, 'public');
        } else {
            $productImage = $request->input('save_product_file');
        }


        $product = Product::findOrFail($request->id);
        $product->modal_no = $request->input('modal_no');
        $product->color = $request->input('color');
        $product->price = $request->input('price');
        $product->image = $productImage;


        $product->save();

        return redirect('product')->withSuccess('Product details updated successfully.');
    }

    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        if ($product->delete()) {

            $imagePath = $product->image;

            if (Storage::disk('public')->exists($imagePath)) {
                Storage::disk('public')->delete($imagePath);
            }

            return redirect('product')->withSuccess('Product deleted successfully.');
        }
    }
}
