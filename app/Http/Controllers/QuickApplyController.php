<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\QuickApply;

class QuickApplyController extends Controller
{
    public function index()
    {
        $quickApplys = QuickApply::latest()->paginate(15);
        return view('admin/quickapply/index',compact('quickApplys'))->with('i', (request()->input('page', 1) - 1) * 5);
    }
}
