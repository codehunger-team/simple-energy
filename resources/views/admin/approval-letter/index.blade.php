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
                <h6 class="m-0 font-weight-bold text-primary">Approval Letter</h6>
            </div>
            <div class="col-lg-2">
                <a href="{{ url('approval-letter/create') }}" class="btn btn-info mb-2"><span
                        class="text text-right">Add New Approval</span></a>
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
                        <th>Registration</th>
                        <th>Period of Years</th>
                        <th>Approval Date</th>
                        <th>File No</th>
                        <th>KYC Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Registration</th>
                        <th>Period of Years</th>
                        <th>Approval Date</th>
                        <th>File No</th>
                        <th>KYC Status</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
                <tbody>
                    @php $i = count($approvalLetters); @endphp
                    @foreach($approvalLetters as $approvalLetter)
                    <tr>
                        <td>{{ $i }}</td>
                        <td>{{ $approvalLetter->name }}</td>
                        <td>{{ $approvalLetter->registration }}</td>
                        <td>{{ $approvalLetter->year }}</td>
                        <td>{{ $approvalLetter->approval_date }}</td>
                        <td>{{ $approvalLetter->file_no }}</td>
                        <td>{{ $approvalLetter->kyc_status }}</td>
                        <td>
                            <a href="approval-letter/{{ $approvalLetter->id }}" class="btn btn-success btn-sm rounded-0"
                                type="button" data-toggle="tooltip" data-placement="top" title="Edit"><i
                                    class="fa fa-edit"></i></a>

                            <a href="approval-letter/download/{{ $approvalLetter->id }}"
                                class="btn btn-warning btn-sm rounded-0" type="button" data-toggle="tooltip"
                                data-placement="top" title="Download"><i class="fa fa-download"></i></a>

                            <button data-delete="{{ $approvalLetter->id }}"
                                class="btn btn-danger btn-sm rounded-0 delete-letter" type="button"
                                data-toggle="tooltip" data-placement="top" title="Delete"><i
                                    class="fa fa-trash"></i></button>
                        </td>
                    </tr>
                    @php $i--; @endphp
                    @endforeach
                </tbody>
            </table>
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
            text: 'Once Done, You Wont Be Able To Recover This Letter',
            buttons: true,
        }).then((willDelete) => {
            if (willDelete) {
                var url = '{{ route('approval-letter.destroy', ':id') }}';
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