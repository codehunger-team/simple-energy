@extends('layouts.admin')

@section('main-content')

@if (session('success'))
<div class="alert alert-success border-left-success alert-dismissible fade show" role="alert">
    {{ session('success') }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <div class="row">
            <div class="col-lg-10">
                <h6 class="m-0 font-weight-bold text-primary">Orders</h6>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Order No</th>
                        <th>Model No</th>
                        <th>Color</th>
                        <th>Quantity</th>
                        <th>Price</th>
                        <th>Total</th>
                        <th>Transaction</th>
                        <th>Payment Status</th>
                        <th style="width: 10px;">Remarks</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Order No</th>
                        <th>Model No</th>
                        <th>Color</th>
                        <th>Quantity</th>
                        <th>Price</th>
                        <th>Total</th>
                        <th>Transaction</th>
                        <th>Payment Status</th>
                        <th style="width: 10px;">Remarks</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
                <tbody>
                    @php $i = count($orders); @endphp
                    @foreach($orders as $order)
                    <tr>
                        <td>{{ $i }}</td>
                        <td>{{$order->user->name ?? ''}}</td>
                        <td>{{ $order->order_id }}</td>
                        <td>{{ $order->model_no }}</td>
                        <td>{{ $order->color }}</td>
                        <td>{{ $order->qty }}</td>
                        <td>{{ $order->price }}</td>
                        <td>{{ $order->amount }}</td>
                        <td>{{ $order->transcation_id }}</td>
                        @if($order->status == 'paid')
                            <td> <button class="btn btn-success">{{ ucwords($order->status) }}</button> </td>
                        @else
                        <td> <button class="btn btn-danger">{{ ucwords($order->status) }}</button> </td>
                        @endif
                        <td>{{ $order->remarks }}</td>
                        <td class="d-flex">
                            <button data-delete="{{ $order->id }}" class="btn btn-danger btn-sm rounded-0 delete-letter mx-1"
                                type="button" data-toggle="tooltip" data-placement="top" title="Delete"><i
                                    class="fa fa-trash"></i></button>
                            @if($order->status == 'paid' || $order->status == 'unpaid')
                            <a href="{{ route('order.invoice.show', $order->id) }}"
                                class="btn btn-secondary btn-sm rounded-0 mx-1" type="button" data-toggle="tooltip"
                                data-placement="top" title="Show Invoice"><i class="fa fa-info-circle"></i></a>
                            @else
                            <button data-invoice="{{ $order->id }}"
                                class="btn btn-success btn-sm rounded-0 invoice-order mx-1" type="button"
                                data-toggle="tooltip" data-placement="top" title="Invoice"><i
                                    class="fa fa-file-text"></i></button>
                            @endif

                        </td>
                    </tr>
                    @php $i--; @endphp
                    @endforeach

                </tbody>
            </table>
        </div>
        <div class="d-flex justify-content-center">
            {!! $orders->links() !!}
        </div>
    </div>
</div>


@endsection
@push('scripts')
<script>
    $('.delete-letter').click(function () {
        swal({
            title: 'Are You Sure?',
            icon: 'warning',
            buttons: true,
        }).then((willDelete) => {
            if (willDelete) {
                var url = '{{ route("orders.destroy", ":id") }}';
                var deleteEndpoint = url.replace(':id', $(this).data('delete'));
                $.ajax({
                    type: 'DELETE',
                    url: deleteEndpoint,
                    data: {
                        _token: $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function (data) {
                        swal({
                            title: data.message,
                            icon: 'success',
                        }).then(function () {
                            location.reload();
                        })
                    },
                    error: function (error) {
                        swal({
                            title: error.responseJSON.message,
                            icon: 'error',
                        }).then(function () {
                            location.reload();
                        })
                    }
                });
            } else {
                swal({
                    title: "Deletion Cancelled!",
                    icon: 'warning',
                })
            }
        })
    });
    $('.invoice-order').click(function () {
        swal({
            title: 'Generate Invoice? It Will Set Payment Status To Paid!',
            icon: 'warning',
            buttons: true,
        }).then((generateInvoice) => {
            if (generateInvoice) {
                var url = '{{ route("order.invoice.generate", ":id") }}';
                var invoiceEndpoint = url.replace(':id', $(this).data('invoice'));
                $.ajax({
                    type: 'POST',
                    url: invoiceEndpoint,
                    data: {
                        _token: $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function (data) {
                        swal({
                            title: data.message,
                            icon: 'success',
                        }).then(function () {
                            location.reload();
                        })
                    },
                    error: function (error) {
                        swal({
                            title: error.responseJSON.message,
                            icon: 'error',
                        }).then(function () {
                            location.reload();
                        })
                    }
                });
            } else {
                swal({
                    title: "Operation Cancelled!",
                    icon: 'warning',
                })
            }
        })
    });

</script>
@endpush