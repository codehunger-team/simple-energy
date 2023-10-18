@extends('layouts.admin')
@section('main-content')
    <!-- Page Heading -->
      @include('common.status')
       <div class="row">
       <div class="col-lg-12 order-lg-1">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Edit Agreement Letter</h6>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('agreement.update', $agreement->id) }}" autocomplete="off">
                        @csrf
                        <input type="hidden" name="_method" value="put" />
                        <div class="pl-lg-4">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="name">Agreemental Name<span class="small text-danger">*</span></label>
                                        <select class="form-control" id="name" name="user_id" >
										     <option>< -- Select User -- > </option>
										     @foreach($users as $user)
											     <option {{ ($user->id == $agreement->user_id ) ? 'selected' : '' }} value="{{ $user->id }}">{{ $user->name }}</option>
											 @endforeach
										</select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="agreement_validity_time">Agreement Validity Time<span class="small text-danger">*</span></label>
                                        <input type="number" id="agreement_validity_time" class="form-control" name="agreement_validity_time" placeholder="" value="{{$agreement->agreement_validity_time ?? ''}}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="approval_date">Agreement Date<span class="small text-danger">*</span></label>
                                        <input type="date" id="agreement_date" class="form-control" name="agreement_date" placeholder="" value="{{$agreement->agreement_date ?? ''}}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="registration">Registration Fee<span class="small text-danger">*</span></label>
                                        <input type="text" id="registration_fee" class="form-control" name="registration_fee" value="{{$agreement->registration_fee ?? ''}}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="registration">Stamp Duty Fees<span class="small text-danger">*</span></label>
                                        <input type="text" id="stamp_duty_fee" class="form-control" name="stamp_duty_fee" value="{{$agreement->stamp_duty_fee ?? ''}}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="kyc_status">Payable Amount<span class="small text-danger">*</span></label>
                                        <input type="Text" id="payable_amount" class="form-control" name="payable_amount" placeholder="" value="{{$agreement->payable_amount ?? ''}}">
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
