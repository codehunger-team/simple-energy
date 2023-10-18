<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Appointment;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('profile');
    }

    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'last_name' => 'nullable|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . Auth::user()->id,
            'current_password' => 'nullable|required_with:new_password',
            'new_password' => 'nullable|min:8|max:12|required_with:current_password',
            'password_confirmation' => 'nullable|min:8|max:12|required_with:new_password|same:new_password'
        ]);


        $user = User::findOrFail(Auth::user()->id);
        $user->name = $request->input('name');
        $user->last_name = $request->input('last_name');
        $user->email = $request->input('email');

        if (!is_null($request->input('current_password'))) {
            if (Hash::check($request->input('current_password'), $user->password)) {
                $user->password = $request->input('new_password');
            } else {
                return redirect()->back()->withInput();
            }
        }

        $user->save();

        return redirect()->route('profile')->withSuccess('Profile updated successfully.');
    }
	
	public function userView()
    {
        $user = User::findOrFail(Auth::user()->id);
		$appointment = Appointment::where('user_id',Auth::user()->id)->first();
		return view('user.profile',compact('user','appointment'));
    }
	public function profileBank()
    {
        $user = User::findOrFail(Auth::user()->id);
		$appointment = Appointment::where('user_id',Auth::user()->id)->first();
		return view('user.profile-bank-details',compact('user','appointment'));
    }
	public function profileBranch()
    {
        $user = User::findOrFail(Auth::user()->id);
		$appointment = Appointment::where('user_id',Auth::user()->id)->first();
		return view('user.profile-branch-details',compact('user','appointment'));
    }
	public function profileIdProof()
    {
        $user = User::findOrFail(Auth::user()->id);
		$appointment = Appointment::where('user_id',Auth::user()->id)->first();
		return view('user.id-proof',compact('user','appointment'));
    }
	public function profileShop()
    {
        $user = User::findOrFail(Auth::user()->id);
		$appointment = Appointment::where('user_id',Auth::user()->id)->first();
		return view('user.shop-details',compact('user','appointment'));
    }
}
