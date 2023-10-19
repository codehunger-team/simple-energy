<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Dealership;
use App\Models\PreBooking;
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

    /**
     * list of the contact form submitting from website.
     * @return array
     */

    public function contactByForm()
    {
        $contacts = Contact::orderBy('id', 'desc')->get();
        return view('contact-list', compact('contacts'));
    }

    /**
     *  Show the booking List from website.
     * @return array
     */

    public function bookingList()
    {
        $bookings = PreBooking::orderBy('id', 'desc')->get();
        return view('booking-list', compact('bookings'));
    }


    /**
     * Show the leadership List from website
     * @return array
     */

    public function dealershipList()
    {
        $dealerships = Dealership::orderBy('id', 'desc')->get();
        return view('dealership-list', compact('dealerships'));
    }
}
