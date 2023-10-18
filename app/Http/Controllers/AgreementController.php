<?php

namespace App\Http\Controllers;

use App\Models\Agreement;
use Illuminate\Http\Request;
use App\Models\User;
use Exception;
use Illuminate\Support\Facades\Auth;
use NumberFormatter;

class AgreementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $agreements = Agreement::with('user')->latest()->paginate(10);
        return view('admin/agreement/index',compact('agreements')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::where('is_admin',0 )->get();
        return view('admin/agreement/create',compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try{
            $request->validate([
                'user_id' => 'required',
                'agreement_validity_time' => 'required',
                'agreement_date' => 'required',
                'registration_fee' => 'required',
                'stamp_duty_fee' => 'required',
                'payable_amount' => 'required',
            ]);
            Agreement::create($request->only([
                'user_id', 'agreement_validity_time', 'agreement_date', 
                'registration_fee', 'stamp_duty_fee', 'payable_amount'
            ]));
            return redirect()->route('agreement.index')->with('success', 'Agreement Successfully Added');
        }catch(Exception $e){
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $agreement = Agreement::findOrFail($id);
        $users = User::where('is_admin',0 )->get();
        return view('admin/agreement/edit',compact('agreement','users'));
    }

    /**
     * Show the form for editing the specified resource.
     * @method GET /action/agreement/3/edit
     * @param  Agreement
     * @return Renderable
     */
    public function edit(Agreement $agreement)
    {
        $users = User::where('is_admin', 0)->get();
        return view('admin.agreement.edit',compact('agreement','users'));
    }

    /**
     * Update the specified resource in storage.
     * @method PUT /action/agreement/{id}
     * @param Agreement
     * @return Renderable
     */
    public function update(Request $request, Agreement $agreement)
    {
        try{
            $request->validate([
                'user_id' => 'required',
                'agreement_validity_time' => 'required',
                'agreement_date' => 'required',
                'registration_fee' => 'required',
                'stamp_duty_fee' => 'required',
                'payable_amount' => 'required',
            ]);
            $agreement->update($request->only([
                'user_id', 'agreement_validity_time', 'agreement_date', 
                'registration_fee', 'stamp_duty_fee', 'payable_amount'
            ]));
            return redirect()->back()->with('success', 'Agreement Successfully Updated');
        }catch(Exception $e){
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Agreement $agreement)
    {
        try{
            $agreement->delete();
            $data = ['success' => true, 'message' => 'Agreement Deleted Successfully'];
            return response()->json($data);
        }catch(Exception $e){
            $data = ['success' => false, 'message' => $e->getMessage()];
            return response()->json($data, 422);
        }
    }

    /**
     * This function is used to handle the Agreement Download Request
     * @method GET /action/agreement/download/{id}
     * @param ID
     * @return Renderable
     */
    public function downloadAgreement(Agreement $agreement)
    {
        $agreement->load('user');
        $amountInWords = ucwords((new NumberFormatter('en_IN', NumberFormatter::SPELLOUT))->format($agreement->stamp_duty_fee));
        return view('admin.agreement.viewAgreement', compact('agreement', 'amountInWords'));
    }

    /**
     * This function will excute at the user level
     * @return Renderable
     */
    public function userAgreement()
    {
        $agreements = Agreement::with('user')->where('user_id',Auth::user()->id )->latest()->paginate(10);
        return view('user/agreement',compact('agreements'));
    }
}
