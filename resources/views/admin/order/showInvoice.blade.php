@extends('layouts.admin')

@section('main-content')

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <div class="row">
            <div class="col-lg-10">
                <h6 class="m-0 font-weight-bold text-primary">Order Invoice</h6>
            </div>
        </div>
    </div>
    <div class="card-body">
        <table class="table">
            <tbody>
                <tr>
                    <td>Name: </td>
                    <td>{{ $user->name ?? ''}}</td>
                </tr>
                <tr>
                    <td>Model Number: </td>
                    <td>{{ $order->model_no }}</td>
                </tr>
                <tr>
                    <td>Color: </td>
                    <td>{{ $order->color }}</td>
                </tr>
                <tr>
                    <td>Quantity: </td>
                    <td>{{ $order->qty }}</td>
                </tr>
                <tr>
                    <td>Price: </td>
                    <td>{{ $order->price }}</td>
                </tr>
                <tr>
                    <td>Amount: </td>
                    <td>{{ $order->amount }}</td>
                </tr>
                <tr>
                    <td>Remarks: </td>
                    <td>{{ $order->remarks }}</td>
                </tr>
                <tr>
                    <td>Order ID: </td>
                    <td>{{ $order->order_id }}</td>
                </tr>
                <tr>
                    <td>Status: </td>
                    <td>{{ ucwords($order->status) }}</td>
                </tr>
                <tr>
                    <td>Transaction ID: </td>
                    <td>{{ ucwords($order->transcation_id) }}</td>
                </tr>
                <tr>
                    <td>Created At: </td>
                    <td>{{ date('d-m-Y H:i:s', strtotime($order->created_at)) }}</td>
                </tr>
                <tr>
                    <td>Updated At: </td>
                    <td>{{ date('d-m-Y h:i:s A', strtotime($order->updated_at)) }}</td>
                </tr>
            </tbody>
        </table>
        <div class="text-center">
            <a target="_blank" href="{{ route('user.order.invoice.print', $order->id) }}"
                class="btn btn-secondary rounded-0" type="button" data-toggle="tooltip"
                data-placement="top" title="Print Invoice"><i class="fa fa-print me-1"></i> Print Invoice</a>
        </div>
    </div>
</div>
@endsection