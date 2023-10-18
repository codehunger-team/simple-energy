<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Qrcode;
use Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use URL;

class QrcodeController extends Controller
{
    public function index()
    {
        $qrcode = Qrcode::find(1);
        return view('admin/qrcode/index',compact('qrcode'));
    }

    public function update(Request $request)
    {
        $qrcode = Qrcode::findOrFail(1);
      
        if ($request->hasFile('image')) 
		   {

		    $file= $qrcode->image;
			$filename = public_path().'/storage/qrcode/'.$file;
			File::delete($filename); 

			$image = $request->file('image');
			$img_name = time() . '1.'.$image->getClientOriginalExtension();
			$destinationPath = public_path('/storage/qrcode');
            $imagePath = $destinationPath. "/".  $img_name;
			$image->move($destinationPath, $img_name);
			$qrcode->image = $img_name;
		  }
		  else
		  {
		     $qrcode->image = $request->input('save_qrcode_image');
		  }
         
        $qrcode->save();

        return redirect('qrcode')->withSuccess('Qrcode updated successfully.');
    }
	public function userQrcode()
    {
        $qrcode = Qrcode::find(1);
        return view('user/qrcode',compact('qrcode'));
    }
	
	public function getTransaction($id)
    {
        $qrcode = Qrcode::find(1);
        return view('user/transcation',compact('qrcode','id'));
    }
	
	public function getQrcodeDownload()
    {
     $qrcode = Qrcode::find(1);		
     $file= public_path().'/storage/qrcode/'.$qrcode->image;
     return response()->download($file);
    }
}
