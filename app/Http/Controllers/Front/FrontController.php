<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\QuickApply;
use Illuminate\Http\Request;
use App\Models\Appointment;
use App\Models\Dealership;
use App\Models\PreBooking;
use App\Models\Product;
use Illuminate\Support\Facades\Mail;

class FrontController extends Controller
{
    /**
     * display the index page
     * @return renderable
     */
    public function index()
    {
        return view('front.index');
    }

    /**
     * display the about page
     * @return renderable
     */
    public function about()
    {
        return view('front.about');
    }


    /**
     * display the vehicle page
     * @return renderable
     */
    public function vehicle()
    {
        $products = Product::orderBy('id', 'desc')->get();
        return view('front.vehicle', compact('products'));
    }

    /**
     * display the dealership page
     * @return renderable
     */
    public function dealership()
    {
        return view('front.dealership');
    }


    /**
     * submit the dealership page
     * @param $request
     * @return renderable
     */
    public function dealershipSubmit(Request $request)
    {
        $validatedData = $request->validate([
            'f_name' => 'required',
            'name' => 'required',
            'mobile' => 'required',
            'email' => 'email',
            'city' => 'required',
            'state' => 'required',
            'address' => 'required',
            'pincode' => 'required',
            'rent' => 'required',
            'locality' => 'required',
            'turnover' => 'required',
            'experience' => 'required'
        ]);

        $randomNumber = 'SE' . str_pad(rand(0, 9999), 4, '0', STR_PAD_LEFT);

        $userEmail =  $validatedData['email'];

        $validatedData['application_number'] = $randomNumber;
        Dealership::create($validatedData);
        // send email to dealer 
        $this->sendMailToUser($randomNumber, $userEmail);

        // send email to admin
        $this->sendMailToAdmin($validatedData);

        return redirect()->back()->with('success', 'Thank you for applying to dealership with us, your application number (' . $randomNumber . ') has been successfully generated.');
    }



    /**
     * display the contact page
     * @return renderable
     */
    public function contact()
    {
        return view('front.contact');
    }

    /**
     * display the check-status page
     * @return renderable
     */
    public function checkStatus()
    {
        return view('front.check-status');
    }


    /**
     * display the book-now page
     * @return renderable
     */
    public function bookNow()
    {
        $products = Product::orderBy('id', 'desc')->get();
        return view('front.book-now', compact('products'));
    }


    /**
     * submit the book-now page
     * @param $request
     * @return renderable
     */
    public function bookNowSubmit(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'phone_no' => 'required',
            'email_id' => 'email',
            'location' => 'required',
            'vehicle_name' => 'required',
            'vehicle_color' => 'required',
            'transaction_id' => 'required',
            'amount_paid' => 'required',
            'transaction_photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $validatedData['user_id'] = 0;
        $validatedData['product_id'] = 0;
        $validatedData['status'] = '';


        if ($request->hasFile('transaction_photo')) {
            $imagePath = $request->file('transaction_photo')->store('booking/transaction-photo', 'public');
            $validatedData['transaction_photo'] = $imagePath;
        }

        PreBooking::create($validatedData);

        return redirect()->back()->with('success', 'Booking successful');
    }


    /**
     * display the book-now page
     * @return renderable
     */
    public function faqs()
    {
        return view('front.faqs');
    }


    /**
     * Store the data in apply quickly table
     * @param Request $request
     * @return renderable
     */
    public function applyQuickly(Request $request)
    {
        $data = $request->except('_token');
        QuickApply::create($data);
        $emails = ['enquiry@revoltfranchise.com', 'emobilityrevolt@gmail.com', 'enquiry@revoltfranchise.com'];
        Mail::send('mail.quick-apply', $data, function ($message) use ($emails) {
            $message->to($emails, 'Revolt Enquiry')
                ->subject('Quick Apply Data')
                ->from(env('MAIL_FROM_ADDRESS'), env('MAIL_FROM_NAME'));
        });
        return redirect()->back()->with('success', 'Applied Successfully');
    }

    /**
     * Store the data in apply quickly table
     * @param Request $request
     * @return renderable
     */
    public function submitContact(Request $request)
    {
        $data = $request->except('_token');
        Contact::create($data);
        $data['contact_message'] = $data['message'];
        $data['subject'] = 'Simple Energy Contact Form';
        $emails = env('RECIPIENT_EMAIL');
        Mail::send('mail.contact', $data, function ($message) use ($emails) {
            $message->to($emails, 'Simple Energy Enquiry')
                ->subject('Simple Energy Contact Form')
                ->from(env('MAIL_FROM_ADDRESS'), env('MAIL_FROM_NAME'));
        });
        return redirect()->back()->with('success', 'Message Sent Successfully');
    }

    /**
     * This function is used to store the Appointment details in Database
     * @method POST /save-appointment
     * @param Request
     * @return Renderable
     */
    public function saveAppointment(Request $request)
    {
        try {
            $validator = \Validator::make($request->all(), [
                'fname' => 'required|min:3',
                'email' => 'required|email',
                'mobile' => 'required|digits:10',
                'dealer' => 'required',
                'pan' => 'required|min:10|max:10',
                'aadhar' => 'required|digits:12',
                'address' => 'required',
                'postoffice' => 'required',
                'city' => 'required',
                'district' => 'required',
                'state' => 'required',
                'pin' => 'required|digits:6',
                'dealership' => 'required|in:revolt,others',
            ]);

            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator->errors());
            }

            Appointment::create([
                'name' => $request->fname,
                'email' => $request->email,
                'mobile' => $request->mobile,
                'dealerName' => $request->dealer,
                'panNumber' => $request->pan,
                'aadharNumber' => $request->aadhar,
                'address' => $request->address,
                'post_office' => $request->postoffice,
                'city' => $request->city,
                'district' => $request->district,
                'state' => $request->state,
                'pincode' => $request->pin,
                'applying_dealership' => $request->dealership,
            ]);
            $data = $request->except('_token');
            Mail::send('mail.appointment', $data, function ($message) {
                $message->to(env('MAIL_TO'), 'Revolt Enquiry')->subject('Appointment Form Data');
            });
            return redirect()->back()->with('success', 'Appointment Booked Successfully');
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    /**
     * This function is used to store the Appointment details in Database
     * @method POST /save-service
     * @param Request
     * @return Renderable
     */

    public function saveService(Request $request)
    {
        try {
            $validator = \Validator::make($request->all(), [
                'fname' => 'required|min:3',
                'email' => 'required|email',
                'mobile' => 'required|digits:10',
                'degree' => 'required',
                'dob' => 'required|date',
                'address' => 'required',
                'postoffice' => 'required',
                'city' => 'required',
                'district' => 'required',
                'state' => 'required',
                'pin' => 'required|digits:6',
                'model' => 'required',
                'colour' => 'required',
                'receive_address' => 'required',
                'installation' => 'required',
                'transaction' => 'required',
            ]);

            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator->errors());
            }

            PreBooking::create([
                'fname' => $request->fname,
                'email' => $request->email,
                'number' => $request->mobile,
                'qualification' => $request->degree,
                'dob' => $request->dob,
                'address' => $request->address,
                'post_office' => $request->postoffice,
                'city' => $request->city,
                'district' => $request->district,
                'state' => $request->state,
                'pincode' => $request->pin,
                'model' => $request->model,
                'color' => $request->colour,
                'receive' => $request->receive_address,
                'installation' => $request->installation,
                'transactionID' => $request->transaction,
            ]);
            $data = $request->except('_token');
            Mail::send('mail.prebooking', $data, function ($message) {
                $message->to(env('MAIL_TO'), 'Revolt Enquiry')->subject('Prebooking Form Data');
            });
            return redirect()->back()->with('success', 'Service Booked Successfully');
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    /**
     * This function save data in appoinment table
     */
    public function applyNow(Request $request)
    {
        return view('front.apply-now');
    }

    /***
     * Submit apply now form
     */
    public function submitApplyNow(Request $request)
    {
        $data = $request->except('_token');
        Appointment::create($data);
        $emails = ['enquiry@revoltfranchise.com', 'emobilityrevolt@gmail.com'];
        Mail::send('mail.appointment', $data, function ($message) use ($emails) {
            $message->to($emails, 'Revolt Enquiry')
                ->subject('Apply Now Form Data')
                ->from(env('MAIL_FROM_ADDRESS'), env('MAIL_FROM_NAME'));
        });
        return redirect()->back()->with('success', 'Message Sent Successfully');
    }


    private function sendMailToUser($data, $email)
    {
        Mail::send('mail.dealership-user', ['thanking' => $data], function ($message) use ($email) {
            $message->to($email, 'Thanking from Simple Energy')
                ->subject('Thanking from Simple Energy')
                ->from(env('MAIL_FROM_ADDRESS'), env('MAIL_FROM_NAME'));
        });
    }

    private function sendMailToAdmin($data)
    {
        $email = env('RECIPIENT_EMAIL');
        Mail::send('mail.dealership-admin', $data, function ($message) use ($email) {
            $message->to($email, 'Simple Energy Dealership')
                ->subject('Simple Energy Dealership Form')
                ->from(env('MAIL_FROM_ADDRESS'), env('MAIL_FROM_NAME'));
        });
    }
}
