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
        return view('admin/products/index',compact('products'))->with('i', (request()->input('page', 1) - 1) * 5);
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

        if ($request->hasFile('image')) 
		  {
			  $image = $request->file('image');
			  $img_name = time() . '147.'.$image->getClientOriginalExtension();
			//   if($allsettings->site_s3_storage == 1)
			//   {
			// 	 Storage::disk('s3')->put($img_name, file_get_contents($image), 'public');
			// 	 $product_file = $img_name;
			//   }
			//   else
			//   {
			
				//$destinationPath = public_path('/storage/product');
                $destinationPath = 'assets/product';
				$imagePath = $destinationPath. "/".  $img_name;
				$image->move($destinationPath, $img_name);
				$product_file = $img_name;
			//   }	
			
		  }
		  else
		  {
		     $product_file = "";
		  }


        $product = new Product;
        $product->modal_no = $request->input('modal_no');
        $product->color = $request->input('color');
        $product->price = $request->input('price');
        $product->image = $request->input('product_file');

        $product->save();

        return redirect('admin/product')->withSuccess('New product added successfully.');
    }

    public function show($id)
    {

         $product = Product::findOrFail($id);
         return view('admin/products/edit',compact('product'));
    }


    public function update(Request $request)
    {
        $request->validate([
            'modal_no' => 'required|string|max:255',
            'color' => 'required|string|max:255',
            'price' => 'required|string|max:255'
        ]);

        if ($request->hasFile('image')) 
		  {
			  $image = $request->file('image');
			  $img_name = time() . '147.'.$image->getClientOriginalExtension();
			//   if($allsettings->site_s3_storage == 1)
			//   {
			// 	 Storage::disk('s3')->put($img_name, file_get_contents($image), 'public');
			// 	 $product_file = $img_name;
			//   }
			//   else
			//   {
			
				//$destinationPath = public_path('/storage/product');
                $destinationPath = 'assets/product';
				$imagePath = $destinationPath. "/".  $img_name;
				$image->move($destinationPath, $img_name);
				$product_file = $img_name;
			//   }	
			
		  }
		  else
		  {
		     $product_file = $request->input('save_product_file');
		  }


        $product = Product::findOrFail($request->id);
        $product->modal_no = $request->input('modal_no');
        $product->color = $request->input('color');
        $product->price = $request->input('price');
        $product->image = $product_file;

        $product->save();

        return redirect('admin/product')->withSuccess('Product details updated successfully.');
    }
}
