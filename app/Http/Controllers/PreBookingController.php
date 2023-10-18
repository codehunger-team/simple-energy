<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PreBooking;


class PreBookingController extends Controller
{
    public function index()
    {
        $preBookings = PreBooking::latest()->paginate(5);
        return view('admin/prebooking/index',compact('preBookings'))->with('i', (request()->input('page', 1) - 1) * 5);
    }
}
