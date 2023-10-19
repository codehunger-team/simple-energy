@extends('layouts.admin')

@section('main-content')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="row">
                <div class="col-lg-10">
                    <h6 class="m-0 font-weight-bold text-primary">Booking List</h6>
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
                            <th>Location</th>
                            <th>Vehicle Name</th>
                            <th>Vehicle Color</th>
                            <th>TRansaction Photo</th>

                        </tr>
                    </thead>
                    <tbody>
                        @php $i = count($bookings); @endphp
                        @if (count($bookings) > 0)
                            @foreach ($bookings as $booking)
                                <tr>
                                    <td>{{ $i }}</td>
                                    <td>{{ $booking->name }}</td>
                                    <td>{{ $booking->phone_no }}</td>
                                    <td>{{ $booking->email_id }}</td>
                                    <td>{{ $booking->location }}</td>
                                    <td>{{ $booking->vehicle_name }}</td>
                                    <td>{{ $booking->vehicle_color }}</td>
                                    <td><a href=""><img src="{{ asset('storage/' . $booking->transaction_photo) }}"
                                                alt="" style="width: 80px; height: 80px"></a></td>

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
@endsection
