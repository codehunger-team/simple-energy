@extends('layouts.admin')
@section('main-content')
    <!-- Page Heading -->
      @include('common.status')
       <div class="row">
       <div class="col-lg-12 order-lg-1">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Edit Invoice</h6>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('invoice.update', $invoice->id) }}" autocomplete="off">
                        @csrf
                        <input type="hidden" name="_method" value="put" />
                        <div class="pl-lg-4">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="name">Customer Name<span class="small text-danger">*</span></label>
                                        <select class="form-control" id="name" name="user_id" >
										     <option>< -- Select User -- > </option>
										     @foreach($users as $user)
											     <option {{ ($user->id == $invoice->user_id ) ? 'selected' : '' }} value="{{ $user->id }}">{{ $user->name }}</option>
											 @endforeach
										</select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="approval_date">invoice Date<span class="small text-danger">*</span></label>
                                        <input type="date" id="invoice_date" class="form-control" name="invoice_date" placeholder="" value="{{$invoice->invoice_date ?? ''}}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="registration">Stamp Duty<span class="small text-danger">*</span></label>
                                        <input type="number" id="stamp_duty" class="form-control" name="stamp_duty" value="{{$invoice->stamp_duty ?? ''}}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="registration">Approval Fees<span class="small text-danger">*</span></label>
                                        <input type="number" id="approval_fee" class="form-control" name="approval_fee" value="{{$invoice->approval_fee ?? ''}}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="registration">Registration Amount<span class="small text-danger">*</span></label>
                                        <input type="text" id="registration_amount" class="form-control" name="registration_amount" value="{{$invoice->registration_amount ?? ''}}">
                                    </div>
                                </div>
                            </div>
                        <!-- Button -->
                        <div class="pl-lg-4">
                            <div class="row">
                                <div class="col text-center">
                                    <button type="submit" class="btn btn-primary">Save</button>
                                    <button type="reset" class="btn btn-light">Cancel</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
