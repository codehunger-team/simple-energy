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
                <h6 class="m-0 font-weight-bold text-primary">Invoices</h6>
            </div>
            <div class="col-lg-2">
                <a href="{{ url('invoice/create') }}" class="btn btn-info mb-2"><span class="text text-right">Add New
                        Invoice</span></a>
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
                        <th>Invoice Date</th>
                        <th>Registration Amount</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Invoice Date</th>
                        <th>Registration Amount</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
                <tbody>
                    @isset($invoices)
                        @foreach($invoices as $key => $agreement)
                        <tr>
                            <td>{{ $key+1 }}</td>
                            <td>{{ $agreement->user->name ?? '' }}</td>
                            <td>{{ $agreement->invoice_date }}</td>
                            <td>{{ $agreement->registration_amount }}</td>
                            <td>
                                <a href="{{ route('invoice.edit', $agreement->id) }}" class="btn btn-success btn-sm rounded-0"
                                    type="button" data-toggle="tooltip" data-placement="top" title="Edit"><i
                                        class="fa fa-edit"></i></a>

                                {{-- <a href="{{ route('agreement.download', $agreement->id) }}"
                                    class="btn btn-warning btn-sm rounded-0" type="button" data-toggle="tooltip"
                                    data-placement="top" title="Download"><i class="fa fa-download"></i></a> --}}
                                <a href="invoice-letter/download/{{ $agreement->id }}"
                                    class="btn btn-warning btn-sm rounded-0" type="button" data-toggle="tooltip"
                                    data-placement="top" title="Download"><i class="fa fa-download"></i></a>
                                <button data-delete="{{ $agreement->id }}"
                                    class="btn btn-danger btn-sm rounded-0 delete-agreement" type="button"
                                    data-toggle="tooltip" data-placement="top" title="Delete"><i
                                        class="fa fa-trash"></i></button>
                            </td>
                        </tr>
                        @endforeach
                    @endisset
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
@push('scripts')
<script>
    $('.delete-agreement').click(function () {
        swal({
            title: 'Are You Sure?',
            icon: 'warning',
            text: 'Once Done, You Wont Be Able To Recover This Invoice',
            buttons: true,
        }).then((willDelete) => {
            if (willDelete) {
                var url = '{{ route("invoice.destroy", ":id") }}';
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
</script>
@endpush