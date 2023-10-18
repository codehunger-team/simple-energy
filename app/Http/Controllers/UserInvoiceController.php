<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\User;
use NumberFormatter;

class UserInvoiceController extends Controller
{
    /**
     * This function is used to show the Users orders index
     * @method GET /user/orders/show
     * @return Renderable
     */

    public function index()
    {
        $orders = Order::where('user_id', auth()->user()->id)->paginate(10);
        return view('user.invoice.index', compact('orders'));
    }


        /**
     * This function is used to show the Invoice
     * @method GET /user/invoices/show/{order}
     * @param Order
     * @return Renderable
     */

    public function showInvoice(Order $order)
    {
        try{
            $this->checkIfOrderInvoiced($order->status);
            $user = User::find($order->user_id);
            return view('user.invoice.showInvoice', compact('order', 'user'));
        }catch(Exception $e){
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    /**
     * This function is used to print the Order Invoice
     * @method GET /orders/print-invoice/{order}
     * @return Renderable
     */

    public function printInvoice(Order $order)
    {
        $this->checkIfOrderInvoiced($order->status);
        $user = User::find($order->user_id);
        $amountInWords = ucwords((new NumberFormatter('en_IN', NumberFormatter::SPELLOUT))->format($order->amount));
        return view('admin.order.printInvoice', compact('order', 'user', 'amountInWords'));
    }

    /**
     * This function is used to make sure if the Order is in right stage to show/print the Invoice
     */

    public function checkIfOrderInvoiced($status)
    {
        $accesptedStatus = ['paid', 'unpaid'];
        if(!in_array($status, $accesptedStatus)){
            abort(redirect()->back()->with('error', 'Something Went Wrong!'));
        }
        return true;
    }
}
