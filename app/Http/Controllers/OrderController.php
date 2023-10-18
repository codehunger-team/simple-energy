<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use App\Notifications\NewOrderNotification;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::latest()->paginate(10);
        return view('user/order', compact('orders'));
    }

    public function store(Request $request)
    {
        $rows = [];
        $data = $request->all();

        $model = $data['model'];
        $model_color = $data['model_color'];
        $quantity = $data['quantity'];
        $price = $data['price'];
        $amount = $data['amount'];
        $remark = $data['remark'];
        $transcationID = round(microtime(true) * 1000);

        foreach ($model as $key => $input) {
            array_push($rows, [
                'user_id' => Auth::user()->id,
                'model_no' => isset($model[$key]) ? $model[$key] : '',
                'color' => isset($model_color[$key]) ? $model_color[$key] : '',
                'qty' => isset($quantity[$key]) ? $quantity[$key] : '',
                'price' => isset($price[$key]) ? $price[$key] : '',
                'amount' => isset($amount[$key]) ? $amount[$key] : '',
                'status' => 'pending',
                'remarks' => isset($remark[$key]) ? $remark[$key] : '',
                'order_id' => $transcationID,

            ]);
        }
        $order = Order::insert($rows);
        $user = User::where('role_id', 1)->first();
        // \Notification::send($user, new NewOrderNotification());
        return redirect('user/transcation/' . $transcationID)->withSuccess('');

    }

    public function views()
    {
        $orders = Order::orderBy('id', 'DESC')->paginate(10);
        return view('admin/order/index', compact('orders'));
    }

    /**
     * This function is used to Delete the Letter
     * @method DELETE /admin/approval-letter/
     * @param ApprovalLetter
     * @return JSON
     */

    public function destroy(Order $order)
    {
        try {
            $order->delete();
            $data = ['success' => true, 'message' => 'Order Deleted Successfully'];
            return response()->json($data);
        } catch (Exception $e) {
            $data = ['success' => false, 'message' => $e->getMessage()];
            return response()->json($data, 422);
        }
    }

    public function saveTransaction(Request $request)
    {
        $transaction = $request->input('transaction');
        $order = $request->id;
        Order::where(['order_id' => $order])->update(['transcation_id' => $transaction]);

        return redirect('/user/orders')->withSuccess('Your order has been placed.Thank you');
    }

    /**
     * This function is used to Generate the Invoice of the Order
     * @method POST /orders/generate-invoice
     * @param Order
     * @return JSON
     */

    public function generateInvoice(Order $order)
    {
        try{
            if($order->transcation_id == null){
                $order->update(['status' => 'unpaid']);
            }else{
                $order->update(['status' => 'paid']);
            }
            $data = ['success' => true, 'message' => "Invoice Generated Successfully"];
            return response()->json($data);
        }catch(Exception $e){
            $data = ['success' => false, 'message' => $e->getMessage()];
            return response()->json($data, 422);
        }
    }

    /**
     * This function is used to show the Invoice
     * @method GET
     * @param Order
     * @return Renderable
     */

    public function showInvoice(Order $order)
    {
        try{
            $this->checkIfOrderInvoiced($order->status);
            $user = User::find($order->user_id);
            return view('admin.order.showInvoice', compact('order', 'user'));
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
        return view('admin.order.printInvoice', compact('order', 'user'));
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
