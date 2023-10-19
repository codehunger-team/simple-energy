@extends('layouts.admin')

@section('main-content')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="row">
                <div class="col-lg-10">
                    <h6 class="m-0 font-weight-bold text-primary">Contact List</h6>
                </div>
                <div class="col-lg-2">
                    <a href="{{ url('home') }}" class="btn btn-info mb-2"><span class="text text-right">Back</span></a>
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
                            <th>Mobile</th>
                            <th>Email</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $i = count($contacts); @endphp
                        @if (count($contacts) > 0)
                            @foreach ($contacts as $contact)
                                <tr>
                                    <td>{{ $i }}</td>
                                    <td>{{ $contact->name }}</td>
                                    <td>{{ $contact->mobile }}</td>
                                    <td>{{ $contact->email }}</td>
                                    <td class="d-none">{{ $contact->message }}</td>

                                    <td>
                                        <a class="btn btn-success btn-sm rounded-0 text-white contact-view" type="button"
                                            data-toggle="tooltip" data-placement="top" title="View"
                                            data-id="{{ $contact->id }}"><i class="fa fa-eye"></i></a>

                                    </td>
                                </tr>
                                @php $i--; @endphp
                            @endforeach
                        @else
                            <tr>
                                <td colspan="5" class="text-center">
                                    <h4>No data found</h4>
                                </td>
                            </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>



    <!-- Modal -->
    <div class="modal fade" id="messageModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="messageModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="messageModalLabel">Contact Message</h5>
                </div>
                <div class="modal-body">

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

                </div>
            </div>
        </div>
    </div>
    @push('scripts')
        <script>
            $(document).ready(function() {

                $('.contact-view').click(function() {

                    var message = $(this).closest('tr').find('.d-none').text();
                    console.log(message);
                    $('.modal-body').html(message);
                    $('#messageModal').modal('show');
                });
            });
        </script>
    @endpush
@endsection
