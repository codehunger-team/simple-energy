@extends('layouts.user')

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

    <div class="card-body">
	    @if( count($agreements) < 1)
	      <p>Sorry No Record Found!!!</p>
	    @else
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Agreement Date</th>
                        <th>Agreement Validity Time</th>
                        <th>Stamp Duty Fees</th>
                        <th>Registration Fees</th>
                        <th>Payable Amount</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Agreement Date</th>
                        <th>Agreement Validity Time</th>
                        <th>Stamp Duty Fees</th>
                        <th>Registration Fees</th>
                        <th>Payable Amount</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
                <tbody>
                    @isset($agreements)
                        @foreach($agreements as $key => $agreement)
                        <tr>
                            <td>{{ $key+1 }}</td>
                            <td>{{ $agreement->user->name ?? '' }}</td>
                            
                            <td>{{ date('d-M-Y', strtotime($agreement->agreement_date)) }}</td>
                            <td>{{ $agreement->agreement_validity_time }} Years</td>
                            <td>₹{{ $agreement->stamp_duty_fee }}</td>
                            <td>₹{{ $agreement->registration_fee }}</td>
                            <td>₹{{ $agreement->payable_amount }}</td>
                            <td>
                                <a href="{{ route('user.agreement.download', $agreement->id) }}"
                                    class="btn btn-warning btn-sm rounded-0" type="button" data-toggle="tooltip"
                                    data-placement="top" title="Download"><i class="fa fa-download"></i></a>
                            </td>
                        </tr>
                        @endforeach
                    @endisset
                </tbody>
            </table>
        </div> @endif
		  <div class="d-flex justify-content-center">
            {!! $agreements->links() !!}
          </div>
    </div> 
</div>
@endsection
