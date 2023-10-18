<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Product;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $users = User::count();

        $widget = [
            'users' => $users,
            //...
        ];

        return view('home', compact('widget'));
    }

    public function admin()
    {
        $users = User::count();

        $widget = [
            'users' => $users,
            //...
        ];

        return view('admin/home', compact('widget'));
    }

    public function user()
    {
        $product = Product::all();
        return view('user/home', compact('product'));
    }

    public function contactByForm()
    {

        $contacts = Contact::get();

        return view('', compact('$contacts'));
    }
}
