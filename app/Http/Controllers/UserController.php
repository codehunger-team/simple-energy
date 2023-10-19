<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{


    public function index()
    {
        $users = User::latest()->paginate(10);
        return view('admin/users/index', compact('users'));
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
            'login_id' => 'required|string|max:255',
            // 'password_confirmation' => 'nullable|min:8|max:12|required_with:new_password|same:new_password'
        ]);

        $data = $request->except('_token');


        $data['role_id'] = 2;
        $data['last_name'] = '';

        User::create($data);

        return redirect('users')->withSuccess('New user added successfully.');
    }

    public function show($id)
    {

        $user = User::findOrFail($id);
        return view('admin/users/edit', compact('user'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email',
            'password' => 'nullable|min:8|max:12|required_with:current_password',
            'login_id' => 'required|string|max:255',
            // 'password_confirmation' => 'nullable|min:8|max:12|required_with:new_password|same:new_password'
        ]);


        $user = User::findOrFail($request->id);
        $data = $request->except('_token');
        $user->update($data);

        return redirect('users')->withSuccess('User information updated successfully.');
    }
}
