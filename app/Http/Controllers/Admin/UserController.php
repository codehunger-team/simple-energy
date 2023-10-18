<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Appointment;
use Storage;
use Illuminate\Support\Facades\File;

class UserController extends Controller
{
  

    public function index()
    {
        $users = User::where('is_admin',0 )->latest()->paginate(10);
        return view('admin/users/index',compact('users'));
    }


     public function create()
    {
		 return view('admin/users/create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . Auth::user()->id,
            'password' => 'nullable|min:8|max:12|required_with:current_password',
            'loginID' => 'required|string|max:255',
            
			'father_name' => 'required',
            'mobile' => 'required',
			'dob' => 'required',
            'qualification' => 'required',
            'panNumber' => 'required',
            'aadharNumber' => 'required',
			'dealerName' => 'required',
            'address' => 'required',
            'post_office' => 'required',
            'state' => 'required',
            'city' => 'required',
			'district' => 'required',
            'pincode' => 'required',
			'b_holder_name' => 'required',
            'b_account_no' => 'required',
            'b_ifsc_code' => 'required',
            'b_bank_name' => 'required',
			'b_branch_address' => 'required'
        ]);


        $user = new User;
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = $request->input('password');
		$user->decrypt_password = $request->input('password');
        $user->login_id = $request->input('loginID');
        $user->is_admin = 0;
        $user->role_id = 2;

      

        $appointment = new Appointment;
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
        $appointment->applying_dealership = 1;
		$appointment->status = 'success';
        $appointment->is_admin_add = 1;
		
		if ($request->hasFile('profile_pic')) 
		  {
			  $image = $request->file('profile_pic');
			  $img_name = time() . '147.'.$image->getClientOriginalExtension();
			
			    Appointment::dropProfile($id);
				$destinationPath = public_path('/storage/profile');
				$imagePath = $destinationPath. "/".  $img_name;
				$image->move($destinationPath, $img_name);
				$profile_pic = $img_name;
		
		  }
		  else
		  {
		     $profile_pic = $request->input('save_product_file');
		 }	
		
		$user->save();
		$appointment->user_id = $user->id;

        $appointment->save();
		
        return redirect('users')->withSuccess('New user added successfully.');
    }

    public function show($id)
    {

        $user = User::findOrFail($id);
		$appointment = Appointment::where('user_id',$id)->first();
		return view('admin/users/edit',compact('user','appointment'));
    }

    public function update(Request $request)
    {
       $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required',
            'password' => 'nullable|min:8|max:12|required_with:current_password',
            'loginID' => 'required|string|max:255',
            
			'father_name' => 'required',
            'mobile' => 'required',
			'dob' => 'required',
            'qualification' => 'required',
            'panNumber' => 'required',
            'aadharNumber' => 'required',
			'dealerName' => 'required',
            'address' => 'required',
            'post_office' => 'required',
            'state' => 'required',
            'city' => 'required',
			'district' => 'required',
            'pincode' => 'required',
			'b_holder_name' => 'required',
            'b_account_no' => 'required',
            'b_ifsc_code' => 'required',
            'b_bank_name' => 'required',
			'b_branch_address' => 'required'
        ]);


        $user = User::findOrFail( $request->id);
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = $request->input('password');
		$user->decrypt_password = $request->input('password');
        $user->login_id = $request->input('loginID');
        

      

        $appointment = Appointment::where('user_id',$request->id)->first();
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
        
		
		$user->save();
		$appointment->save();
		
        return redirect('users')->withSuccess('User information updated successfully.');
    }
	
	 /**
     * This function is used to Delete the Letter
     * @method DELETE /user/delete/
     * @param User
     * @return JSON
     */

    public function destroy(User $user)
    {
        try{
             Appointment::where('user_id','=',$user->id)->delete();
			 $user->delete();
			 $data = ['success' => true, 'message' => 'User data Deleted Successfully'];
             return response()->json($data);
        }catch(Exception $e){
            $data = ['success' => false, 'message' => $e->getMessage()];
            return response()->json($data, 422);
        }
    }

}
