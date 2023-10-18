@extends('layouts.admin')

@section('main-content')
    <!-- Page Heading -->
    {{-- <h1 class="h3 mb-4 text-gray-800">{{ __('Profile') }}</h1> --}}
	
 @include('common.status')

    <div class="row">

      

        <div class="col-lg-12 order-lg-1">

            <div class="card shadow mb-4">

                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Approval Letter</h6>
                </div>

                <div class="card-body">

                    <form method="POST" action="{{ url('approval-letter/'.$approvalLetter->id) }}" autocomplete="off">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="hidden" name="_method" value="PUT">
                        <input type="hidden" name="id" value="{{ $approvalLetter->id}}">

                        
                        <div class="pl-lg-4">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="name">Name<span class="small text-danger">*</span></label>
                                         <select class="form-control" id="name" name="user_id" readonly disabled="true" >
										     <option>< -- Select User -- > </option>
										     @foreach($users as $u)
											     <option value="{{ $u->id }}" @if($u->id ==$approvalLetter->user_id ) selected @endif >{{ $u->name }}</option>
											 @endforeach
										</select>
                                    </div>
                                </div>
                          
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="registration">Registration Fee<span class="small text-danger">*</span></label>
                                        <input type="text" id="registration" class="form-control" name="registration" value="{{ $approvalLetter->registration }}">
                                    </div>
                                </div>
                            </div>
                           
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="file_no">File No<span class="small text-danger">*</span></label>
                                        <input type="text" id="file_no" class="form-control" name="file_no"  value="{{ $approvalLetter->file_no }}">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="year">Period of Years<span class="small text-danger">*</span></label>
                                        <input type="text" id="year" class="form-control" name="year" placeholder="" value="{{ $approvalLetter->year }}">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="approval_date">Approval Date<span class="small text-danger">*</span></label>
                                        <input type="date" id="approval_date" class="form-control" name="approval_date" placeholder="" value="{{ $approvalLetter->approval_date }}">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="kyc_status">Kyc Status<span class="small text-danger">*</span></label>
                                        <input type="Text" id="kyc_status" class="form-control" name="kyc_status" placeholder="" value="{{ $approvalLetter->kyc_status }}">
                                    </div>
                                </div>
                            </div>


                        <!-- Button -->
                        <div class="pl-lg-4">
                            <div class="row">
                                <div class="col text-center">
                                    <button type="submit" class="btn btn-primary">Save</button>
                                     <a href="{{ url('approval-letter') }}" class="btn btn-light" title="Cancel">Cancel</a>
                                </div>
                            </div>
                        </div>
                    </form>

                </div>

            </div>

        </div>

    </div>

@endsection
