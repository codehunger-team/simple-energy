@extends('layouts.admin')

@section('main-content')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="row">
                <div class="col-lg-10">
                    <h6 class="m-0 font-weight-bold text-primary">Dealership List</h6>
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
                            <th>Firm Name</th>
                            <th>Name</th>
                            <th>Mobile</th>
                            <th>Email</th>
                            <th>City</th>
                            <th>State</th>
                            <th>Address</th>
                            <th>Pincode</th>
                            <th>Rent</th>
                            <th>Locality</th>
                            <th>Turn Over</th>
                            <th>Experience</th>
                            <th>Application Number</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $i = count($dealerships); @endphp
                        @if (count($dealerships) > 0)
                            @foreach ($dealerships as $dealership)
                                <tr>
                                    <td>{{ $i }}</td>
                                    <td>{{ $dealership->f_name }}</td>
                                    <td>{{ $dealership->name }}</td>
                                    <td>{{ $dealership->mobile }}</td>
                                    <td>{{ $dealership->email }}</td>
                                    <td>{{ $dealership->city }}</td>
                                    <td>{{ $dealership->state }}</td>
                                    <td>{{ $dealership->address }}</td>
                                    <td>{{ $dealership->pincode }}</td>
                                    <td>{{ $dealership->rent }}</td>
                                    <td>{{ $dealership->locality }}</td>
                                    <td>{{ $dealership->turnover }}</td>
                                    <td>{{ $dealership->experience }}</td>
                                    <td>{{ $dealership->application_number }}</td>
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
