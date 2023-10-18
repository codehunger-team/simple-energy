<?php 
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;

use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Models\Settings;
use Auth;
use Socialite;
use App\User;
use Illuminate\Support\Facades\Validator;
use Session;
use App\Models\Product;

class AdminAuthController extends Controller
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
    protected $redirectTo = 'home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
    }
    public function getLogin()
    {
        return view('auth.admin.login');
    }
    public function authenticated($request , $user)
    {
        if($user->user_type=='admin')
        {
            return redirect('/admin');
        }

    } 

    public function redirectToProvider($provider)
    {
        return Socialite::driver($provider)->scopes(['email'])->redirect();
    }

   /* public function handleProviderCallback($provider)
    {
        $user = Socialite::driver($provider)->user();
        $authUser = $this->CreateUser($user,$provider);
        Auth::login($authUser, true); 
        return redirect('/');

    }  */

    /**
     * Show the application loginprocess.
     *
     * @return \Illuminate\Http\Response
     */
    public function postLogin(Request $request)
    {
        $field = filter_var($request->email, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';
        $email = trim($request->email);
        $password = trim($request->password);
        $session_id = Session::getId();

        // if (Auth::attempt(array($field => $email, 'password' =>  $password, 'verified' => 1, 'approved' => 'yes', 'drop_status' => 'no' )))
		if (Auth::attempt(array($field => $email, 'password' =>  $password, 'is_admin' => 1, 'role_id' => 1)))
		
        {
		    Session::setId($session_id);
			$updata = array('user_id' => auth()->user()->id); 
			if(auth()->user()->is_admin == 1)
			{
			 return redirect('home');
			}
         }

        return redirect('/login')->withErrors([
            'error' => 'These credentials do not match our records.',
        ]);
    }

    /**
     * Show the application logout.
     *
     * @return \Illuminate\Http\Response
     */
    public function logout()
    {
        Auth::logout();    
        return redirect(route('adminLogin'));
    }
 }   
?>