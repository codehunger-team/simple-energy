<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AppointmentController extends Controller
{
    public function index()
    {
       // $appointments = Appointment::whereNull('user_id')->latest()->paginate(15);
	    $appointments = Appointment::latest()->paginate(15);
        return view('admin/appointment/index',compact('appointments'))->with('i', (request()->input('page', 1) - 1) * 5);
    }
	
    public function show($id)
    {

         $appointment = Appointment::findOrFail($id);
         return view('admin/appointment/edit',compact('appointment'));
    }


	
    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required',
            'mobile' => 'required',
            'dealerName' => 'required',
            'panNumber' => 'required',
            'aadharNumber' => 'required',
			'state' => 'required',
            'city' => 'required',
            'district' => 'required',
            'pincode' => 'required',
            'dealership' => 'required',
			
			'father_name' => 'required',
			'dob' => 'required',
            'qualification' => 'required',
            'address' => 'required',
            'post_office' => 'required',
			'b_holder_name' => 'required',
            'b_account_no' => 'required',
            'b_ifsc_code' => 'required',
            'b_bank_name' => 'required',
			'b_branch_address' => 'required',
			
			'sname' => 'required',
            'pnumber' => 'required',
            'snumber' => 'required',
            'scity' => 'required',
			'status' => 'required',
			'userCreate' => 'required'
			
        ]);


        $appointment = Appointment::findOrFail($request->id);
        $appointment->name = $request->input('name');
        $appointment->email = $request->input('email');
        $appointment->mobile = $request->input('mobile');
        $appointment->dealerName = $request->input('dealerName');
        $appointment->panNumber = $request->input('panNumber');
        $appointment->aadharNumber =  $request->input('aadharNumber');
		$appointment->state = $request->input('state');
        $appointment->city = $request->input('city');
        $appointment->district = $request->input('district');
        $appointment->pincode = $request->input('pincode');
        $appointment->applying_dealership = $request->input('dealership');
		$appointment->father_name = $request->input('father_name');
        $appointment->dob = $request->input('dob');
        $appointment->qualification = $request->input('qualification');
        $appointment->address = $request->input('address');
        $appointment->post_office = $request->input('post_office');
        $appointment->b_holder_name =  $request->input('b_holder_name');
		$appointment->b_account_no = $request->input('b_account_no');
        $appointment->b_ifsc_code = $request->input('b_ifsc_code');
        $appointment->b_bank_name = $request->input('b_bank_name');
        $appointment->b_branch_address = $request->input('b_branch_address');
		
		$appointment->sname =  $request->input('sname');
		$appointment->b_account_no = $request->input('b_account_no');
        $appointment->pnumber = $request->input('pnumber');
        $appointment->snumber = $request->input('snumber');
        $appointment->scity = $request->input('scity');
		
		$appointment->userCreate = $request->input('userCreate');
        $appointment->status = $request->input('status');
		
		
		if ($request->hasFile('profile_pic')) 
		  {
			  $image = $request->file('profile_pic');
			  $img_name = time() . '147.'.$image->getClientOriginalExtension();
			
			    Appointment::dropProfile($request->id);
				$destinationPath = public_path('/storage/profile');
				$imagePath = $destinationPath. "/".  $img_name;
				$image->move($destinationPath, $img_name);
				$profile_pic = $img_name;
		
		  }
		  else
		  {
		     $profile_pic = $request->input('save_profile_pic');
		 }	
		
		$status = $request->input('status');;
		$userCreate = $request->input('userCreate');
		
		$appointment->profile_pic = $profile_pic;
    
    	if($status == 'success' && $userCreate =='yes'){
			
			  //$user = User::where('id', '!=', $appointment->user_id)->first();
				//if ($user === null) {
				  $user = new User;
								$user->name = $request->input('name');
								$user->email = $request->input('email');
								$user->is_admin = 0;
								$user->role_id = 2;
								$user->image = $profile_pic;
								$user->save();
								
								$appointment->user_id = $user->id;    
								
                              //return redirect('users')->with Success('New application user is created.');
				//}
			   
        	}
       
        $appointment->save();
		
        return redirect('appointment')->withSuccess('Approval letter updated successfully.');
    }
	
	public function destroy($id) {
        Appointment::find($id)->delete();
	    return redirect('appointment')->withSuccess('Record was deleted successfully.');
   }
}
