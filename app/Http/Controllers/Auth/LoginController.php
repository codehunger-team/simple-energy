<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Validator;
use Session;
use Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
     protected $redirectTo = '/user/profile';
     protected $redirectAfterLogout = 'user-login';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout','userLogout');
    }

    // protected function redirectTo()
    // {
    //     session()->flash('success', 'You are logged in!');
    //     $redirectTo = RouteServiceProvider::HOME;

    //     return $redirectTo;
    // }

    // protected function loggedOut()
    // {
    //     return redirect('login');
    // }

    public function getUserLogin()
    {
        return view('auth.login');
    }
    public function postUserLogin(Request $request)
    {
        $field = filter_var($request->email, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';
        $email = trim($request->email);
        $password = trim($request->password);
        $session_id = Session::getId();
        // dd($email,$password);
        // if (Auth::attempt(array($field => $email, 'password' =>  $password, 'verified' => 1, 'approved' => 'yes', 'drop_status' => 'no' )))
		if (Auth::attempt(array($field => $email, 'password' =>  $password, 'is_admin' => '0', 'role_id' => 2)))
        {   
		    Session::setId($session_id);
			$updata = array('user_id' => auth()->user()->id); 
			if(auth()->user()->is_admin == '0')
			{
			 return redirect('/user/profile');
			}
         }
        return redirect('user-login')->withErrors([
            'error' => 'These credentials do not match our records.',
        ]);
    }

    public function logout()
    {
        Auth::logout();    
        return redirect(route('userLogin'));
    }
}
