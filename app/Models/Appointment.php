<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class Appointment extends Model
{
    use HasFactory;
    protected $table = 'appointment';

    protected $guarded = [];
	
    public static function dropProfile($id){
   
            $image = DB::table('appointment')->where('id', $id)->first();
			$file= $image->profile_pic;
			$filename = public_path().'/storage/profile/'.$file;
			File::delete($filename); 
     }
}
