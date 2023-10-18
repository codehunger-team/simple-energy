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
                 <h6 class="m-0 font-weight-bold text-primary">Users</h6>
            </div>
            <div class="col-lg-2">
              <a  href="{{ url('users/create') }}" class="btn btn-info mb-2"><span class="text text-right">Add New</span></a>
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
                        <th>Email</th>
                        <th>Login ID</th>
                        <th>Password</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Login ID</th>
                        <th>Password</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
                <tbody>
                    @php $i = count($users); @endphp
                    @foreach($users as $user)
                    <tr>
                        <td>{{ $i }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->login_id }}</td>
                        <td>{{ $user->decrypt_password }}</td>
                        <td>
                            <a href="users/{{ $user->id }}" class="btn btn-success btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></a> 
                                          
                             <button data-delete="{{ $user->id }}"
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
		<div class="d-flex justify-content-center">
            {!! $users->links() !!}
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
           // text: 'Once Delete, You Wont Be Able To Recover This Letter',
            buttons: true,
        }).then((willDelete) => {
            if (willDelete) {
                var url = '{{ route('users.destroy', ':id') }}';
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
