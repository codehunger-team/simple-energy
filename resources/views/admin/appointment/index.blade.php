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
        <h6 class="m-0 font-weight-bold text-primary">All Applications</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>S.N.</th>
                        <th>Name</th>
                        <th>Father's Name</th>
                        <th>Email</th>
                        <th>Mobile</th>
                        <th>Dealer Name</th>
                        <th>PAN Number</th>
                        <th>Aadhar Number</th>
                        <th>Address</th>
                        <th>Post Office</th>
                        <th>City</th>
                        <th>District</th>
                        <th>State</th>
                        <th>Pincode</th>
                        <th>Dealership</th>
                        <th>Status</th>
                        <th>Action</th>
                        
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>S.N.</th>
                        <th>Name</th>
                        <th>Father's Name</th>
                        <th>Email</th>
                        <th>Mobile</th>
                        <th>Dealer Name</th>
                        <th>PAN Number</th>
                        <th>Aadhar Number</th>
                        <th>Address</th>
                        <th>Post Office</th>
                        <th>City</th>
                        <th>District</th>
                        <th>State</th>
                        <th>Pincode</th>
                        <th>Dealership</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
                <tbody>
                    @php $i = count($appointments); @endphp
                    @foreach($appointments as $appointment)
                    <tr>
                        <td>{{ $i }}</td>
                        <td>{{ $appointment->name }}</td>
                        <td>{{ $appointment->father_name }}</td>
                        <td>{{ $appointment->email }}</td>
                        <td>{{ $appointment->mobile }}</td>
                        <td>{{ $appointment->dealerName }}</td>
                        <td>{{ $appointment->panNumber }}</td>
                        <td>{{ $appointment->aadharNumber }}</td>
                        <td>{{ $appointment->address }}</td>
						<td>{{ $appointment->post_office }}</td>
                        <td>{{ $appointment->city }}</td>
                        <td>{{ $appointment->district }}</td>
                        <td>{{ $appointment->state }}</td>
                        <td>{{ $appointment->pincode }}</td>
                        <td>{{ $appointment->applying_dealership }}</td>
                        <td>{{ ucfirst($appointment->status) }}</td>
                        <td>
       						  <a href="{{ url('appointment/'.$appointment->id) }}" class="btn btn-success btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></a> 
                              <form action="{{ url('/appointment/'.$appointment->id) }}" onsubmit="return confirm('Are you sure?');" method="POST">
                                @csrf
                                @method('DELETE')
                              <button class="btn btn-danger btn-sm rounded-0" data-toggle="tooltip" data-placement="top" type="submit" title="Delete"><i class="fa fa-trash"></i></button>
                              </form>
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

@section('scripts')

<script>
    $(document).ready(function (){
        
        $(document).on('click', '.editbtn', function(){
            
            var appointment_id = $(this).val();
            alert(appointment_id);
            
            
        });
        
        
    });
    
</script>



@endsection
