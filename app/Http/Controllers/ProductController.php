<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use URL;

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
            $imgName = time() . '147.' . $image->getClientOriginalExtension();

            $destinationPath = 'assets/product';
            $imagePath = $destinationPath . "/" .  $imgName;
            $image->move($destinationPath, $imgName);
            $productImage = $imagePath;
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
            $imgName = time() . '147.' . $image->getClientOriginalExtension();

            $destinationPath = 'assets/product';
            $imagePath = $destinationPath . "/" .  $imgName;
            $image->move($destinationPath, $imgName);
            $product_file = $imagePath;
        } else {
            $product_file = $request->input('save_product_file');
        }


        $product = Product::findOrFail($request->id);
        $product->modal_no = $request->input('modal_no');
        $product->color = $request->input('color');
        $product->price = $request->input('price');
        $product->image = $product_file;

        $product->save();

        return redirect('product')->withSuccess('Product details updated successfully.');
    }

    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        if ($product->delete()) {

            if (!empty($product->image)) {
                $imagePath = public_path($product->image);
                if (file_exists($imagePath)) {
                    unlink($imagePath);
                }
            }

            return redirect('product')->withSuccess('Product deleted successfully.');
        }
    }
}
