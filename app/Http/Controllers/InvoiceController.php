<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use Illuminate\Http\Request;
use App\Models\User;
use NumberFormatter;

class InvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $invoices = Invoice::with('user')->latest()->paginate(10);
        return view('admin/invoice/index',compact('invoices')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::where('is_admin',0 )->get();
        return view('admin/invoice/create',compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $data = $request->except('_token');
        try{
            invoice::create($data);
            return redirect()->route('invoice.index')->with('success', 'invoice Successfully Added');
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
        $invoice = invoice::findOrFail($id);
        $users = User::where('is_admin',0 )->get();
        return view('admin/invoice/edit',compact('invoice','users'));
    }

    /**
     * Show the form for editing the specified resource.
     * @method GET /action/invoice/3/edit
     * @param  invoice
     * @return Renderable
     */
    public function edit(invoice $invoice)
    {
        $users = User::where('is_admin', 0)->get();
        return view('admin.invoice.edit',compact('invoice','users'));
    }

    /**
     * Update the specified resource in storage.
     * @method PUT /action/invoice/{id}
     * @param invoice
     * @return Renderable
     */
    public function update(Request $request, invoice $invoice)
    {
        try{
            $data = $request->except('_token');
            $invoice->update($data);
            return redirect()->back()->with('success', 'invoice Successfully Updated');
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
    public function destroy(invoice $invoice)
    {
        try{
            $invoice->delete();
            $data = ['success' => true, 'message' => 'invoice Deleted Successfully'];
            return response()->json($data);
        }catch(Exception $e){
            $data = ['success' => false, 'message' => $e->getMessage()];
            return response()->json($data, 422);
        }
    }

    public function download($id) 
    {   
        $invoice = Invoice::findOrFail($id);
        $totalAmount = $invoice->stamp_duty + $invoice->approval_fee + $invoice->registration_amount;
        $amountInWords = ucwords((new NumberFormatter('en_IN', NumberFormatter::SPELLOUT))->format($totalAmount));
        return view('admin/invoice/viewLetter', compact('invoice','totalAmount','amountInWords'));
    }

}
