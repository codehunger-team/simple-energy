<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::latest()->paginate(15);
        return view('admin/contact/index',compact('contacts'))->with('i', (request()->input('page', 1) - 1) * 5);
    }
}
