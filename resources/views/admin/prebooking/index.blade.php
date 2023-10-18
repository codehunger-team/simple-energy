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
        <h6 class="m-0 font-weight-bold text-primary">Pre Booking</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>S.N</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Contact Number</th>
                        <th>Qualification</th>
                        <th>Date of Birth</th>
                        <th>Address</th>
                        <th>Post Office</th>
                        <th>City</th>
                        <th>District</th>
                        <th>State</th>
                        <th>Pin Code</th>
                        <th>Model</th>
                        <th>Colour</th>
                        <th>Registration Number</th>
                        <th>Accessories Installation</th>
                        <th>Quantity</th>
                        <th>Bike Receiving</th>
                        <th>Delivery Address</th>
                        <th>Transaction Id</th>
                        <th>Action</th>
                        
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>S.N</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Contact Number</th>
                        <th>Qualification</th>
                        <th>Date of Birth</th>
                        <th>Address</th>
                        <th>Post Office</th>
                        <th>City</th>
                        <th>District</th>
                        <th>State</th>
                        <th>Pin Code</th>
                        <th>Model</th>
                        <th>Colour</th>
                        <th>Registration Number</th>
                        <th>Accessories Installation</th>
                        <th>Quantity</th>
                        <th>Bike Receiving</th>
                        <th>Delivery Address</th>
                        <th>Transaction Id</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
                <tbody>
                    @php $i = count($preBookings); @endphp
                    @foreach($preBookings as $preBooking)
                    <tr>
                        <td>{{ $i }}</td>
                        <td>{{ $preBooking->fname }}</td>
                        <td>{{ $preBooking->lname }}</td>
                        <td>{{ $preBooking->email }}</td>
                        <td>{{ $preBooking->number }}</td>
                        <td>{{ $preBooking->qualification }}</td>
                        <td>{{ $preBooking->dob }}</td>
                        <td>{{ $preBooking->address }}</td>
                        <td>{{ $preBooking->post_office }}</td>
						<td>{{ $preBooking->city }}</td>
						<td>{{ $preBooking->district }}</td>
                        <td>{{ $preBooking->state }}</td>
                        <td>{{ $preBooking->pincode }}</td>
                        <td>{{ $preBooking->model }}</td>
                        <td>{{ $preBooking->color }}</td>
                        <td>{{ $preBooking->registerBike }}</td>
                        <td>{{ $preBooking->installation }}</td>
                        <td>{{ $preBooking->quantity }}</td>
                        <td>{{ $preBooking->receive }}</td>
                        <td>{{ $preBooking->daddress }}</td>
						<td>{{ $preBooking->transactionID }}</td>
					    <td></td>
                    </tr>
                    @php $i--; @endphp
                    @endforeach
                  
                </tbody>
            </table>
        </div>
    </div>
</div>


@endsection
