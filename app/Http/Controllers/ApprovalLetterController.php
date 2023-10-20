<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ApprovalLetter;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ApprovalLetterController extends Controller
{
    public function index()
    {
        $approvalLetters = ApprovalLetter::latest()->paginate(10);
        return view('admin/approval-letter/index', compact('approvalLetters'));
    }

    public function create()
    {
        $users = User::where('is_admin', '0')->get();
        return view('admin/approval-letter/create', compact('users'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required|string|max:255',
            'registration' => 'required',
            'file_no' => 'required',
            'year' => 'required',
            'approval_date' => 'required',
            'kyc_status' => 'required',
        ]);


        $approvalLetter = new ApprovalLetter;
        $users = User::where('id', $request->input('user_id'))->first();

        $approvalLetter->user_id = $request->input('user_id');
        $approvalLetter->name = $users->name;
        $approvalLetter->registration = $request->input('registration');
        $approvalLetter->file_no = $request->input('file_no');
        $approvalLetter->year = $request->input('year');
        $approvalLetter->approval_date = $request->input('approval_date');
        $approvalLetter->kyc_status =  $request->input('kyc_status');

        $approvalLetter->save();

        return redirect('approval-letter')->withSuccess('New approval letter added successfully.');
    }

    public function show($id)
    {

        $approvalLetter = ApprovalLetter::findOrFail($id);
        $users = User::where('is_admin', 0)->get();
        return view('admin/approval-letter/edit', compact('approvalLetter', 'users'));
    }

    public function download($id)
    {
        $approval = ApprovalLetter::findOrFail($id);
        return view('admin/approval-letter/viewLetter', compact('approval'));
    }


    public function update(Request $request)
    {
        $request->validate([
            'registration' => 'required',
            'file_no' => 'required',
            'year' => 'required',
            'approval_date' => 'required',
            'kyc_status' => 'required',
        ]);


        $approvalLetter = ApprovalLetter::findOrFail($request->id);
        $approvalLetter->registration = $request->input('registration');
        $approvalLetter->file_no = $request->input('file_no');
        $approvalLetter->year = $request->input('year');
        $approvalLetter->approval_date = $request->input('approval_date');
        $approvalLetter->kyc_status =  $request->input('kyc_status');

        $approvalLetter->save();

        return redirect('approval-letter')->withSuccess('Approval letter updated successfully.');
    }

    /**
     * This function is used to Delete the Letter
     * @method DELETE /admin/approval-letter/
     * @param ApprovalLetter
     * @return JSON
     */

    public function destroy(ApprovalLetter $approval_letter)
    {
        try {
            $approval_letter->delete();
            $data = ['success' => true, 'message' => 'Approval Letter Deleted Successfully'];
            return response()->json($data);
        } catch (Exception $e) {
            $data = ['success' => false, 'message' => $e->getMessage()];
            return response()->json($data, 422);
        }
    }

    public function userApprovalLetter()
    {
        $approvalLetters = ApprovalLetter::where('user_id', Auth::user()->id)->latest()->paginate(10);
        return view('user/approval-letter', compact('approvalLetters'));
    }
}
