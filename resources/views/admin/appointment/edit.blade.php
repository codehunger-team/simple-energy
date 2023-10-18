@extends('layouts.admin')

@section('main-content')
    <!-- Page Heading -->
    {{-- <h1 class="h3 mb-4 text-gray-800">{{ __('Profile') }}</h1> --}}

    @if (session('success'))
        <div class="alert alert-success border-left-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    @if ($errors->any())
        <div class="alert alert-danger border-left-danger" role="alert">
            <ul class="pl-4 my-2">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="row">

      

        <div class="col-lg-12 order-lg-1">

            <div class="card shadow mb-4">

                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Applications</h6>
                </div>

                <div class="card-body">

                    <form method="POST" action="{{ url('/appointment/'.$appointment->id) }}" autocomplete="off"  enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="hidden" name="_method" value="PUT">
                        <input type="hidden" name="id" value="{{ $appointment->id }}">

                        <div class="pl-lg-4">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="name">Name<span class="small text-danger">*</span></label>
                                        <input type="text" id="name" class="form-control" name="name" placeholder="" value="{{ $appointment->name }}">
                                    </div>
                                </div>
                                 <div class="col-lg-6">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="fname">Father's Name<span class="small text-danger">*</span></label>
                                        <input type="text" id="fname" class="form-control" name="father_name" placeholder="" value="{{ $appointment->father_name }}">
                                    </div>
                                </div>
                                 <div class="col-lg-6">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="name">Date of Birth<span class="small text-danger">*</span></label>
                                        <input type="date" id="dob" class="form-control" name="dob" placeholder="" value="{{ $appointment->dob }}">
                                    </div>
                                </div>
                                 <div class="col-lg-6">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="name">Email<span class="small text-danger">*</span></label>
                                        <input type="email" id="email" class="form-control" name="email" placeholder="" value="{{ $appointment->email }}">
                                    </div>
                                </div>       
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="email">Mobile<span class="small text-danger">*</span></label>
                                        <input type="text" id="email" class="form-control" name="mobile" placeholder="example@example.com" value="{{ $appointment->mobile }}">
                                    </div>
                                </div>
								 <div class="col-lg-6">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="name">Dealer Name<span class="small text-danger">*</span></label>
                                        <input type="text" id="name" class="form-control" name="dealerName" placeholder="Name" value="{{ $appointment->dealerName }}">
                                    </div>
                                </div>
                            </div>
                           
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="loginID">PAN Number<span class="small text-danger">*</span></label>
                                        <input type="text" id="loginID" class="form-control" name="panNumber" placeholder="" value="{{ $appointment->panNumber }}">
                                    </div>
                                </div>
								 <div class="col-lg-6">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="name">Aadhar Number<span class="small text-danger">*</span></label>
                                        <input type="text" id="name" class="form-control" name="aadharNumber" placeholder="Name" value="{{ $appointment->aadharNumber }}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="password">Address<span class="small text-danger">*</span></label>
                                        <input type="text" id="name" class="form-control" name="address" placeholder="" value="{{ $appointment->address }}">
                                    </div>
                                </div>
								 <div class="col-lg-6">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="name">Post Office<span class="small text-danger">*</span></label>
                                        <input type="text" id="name" class="form-control" name="post_office" placeholder="" value="{{ $appointment->post_office }}">
                                    </div>
                                </div>
                            </div>
                            
                                     <div class="row">
                               
								 <div class="col-lg-6">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="name">City<span class="small text-danger">*</span></label>
                                        <input type="text" id="name" class="form-control" name="city" placeholder="" value="{{ $appointment->city }}">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="password">District<span class="small text-danger">*</span></label>
                                        <input type="text" id="password" class="form-control" name="district" placeholder="" value="{{ $appointment->district }}">
                                    </div>
                                </div>
                            </div>
						

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="password">State<span class="small text-danger">*</span></label>
                                        <input type="text" id="password" class="form-control" name="state" placeholder="" value="{{ $appointment->state }}">
                                    </div>
                                </div>
                                 <div class="col-lg-6">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="name">Pincode<span class="small text-danger">*</span></label>
                                        <input type="text" id="name" class="form-control" name="pincode" placeholder="" value="{{ $appointment->pincode }}">
                                    </div>
                                </div>
								
                            </div>
						
 						   
								
                            
							
							<div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="password">Dealership<span class="small text-danger">*</span></label>
                                        <input type="text" id="password" class="form-control" name="dealership" placeholder="" value="{{ $appointment->name }}">
                                    </div>
                                </div>
                                
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="password">Qualification<span class="small text-danger">*</span></label>
                                        <input type="text" id="qualification" class="form-control" name="qualification" placeholder=""
										value="{{ $appointment->qualification }}">
                                    </div>
                                </div>
                                </div>
                                <div class="row">
                                
								 <div class="col-lg-6">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="name">Account Name<span class="small text-danger">*</span></label>
                                        <input type="text" id="aname" class="form-control" name="b_holder_name" placeholder="" value="{{ $appointment->b_holder_name }}">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="password">Account Number<span class="small text-danger">*</span></label>
                                        <input type="text" id=" anumber " class="form-control" name="b_account_no" placeholder="" value="{{ $appointment-> b_account_no }}">
                                    </div>
                                </div>

                            </div>
                               <div class="row">
                           
								 <div class="col-lg-6">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="name">IFSC Code<span class="small text-danger">*</span></label>
                                        <input type="text" id="ifsc" class="form-control" name="b_ifsc_code" placeholder="" value="{{ $appointment->b_ifsc_code }}">
                                    </div>
                                </div>
                                                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="password">Bank Name<span class="small text-danger">*</span></label>
                                        <input type="text" id="bname" class="form-control" name="b_bank_name" placeholder="" value="{{ $appointment->b_bank_name }}">
                                    </div>
                                </div>

                            </div>
                            
							<div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="password">Branch Address<span class="small text-danger">*</span></label>
                                        <input type="text" id="baddress" class="form-control" name="b_branch_address" placeholder="" value="{{ $appointment->b_branch_address }}">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="password">Shop Name<span class="small text-danger">*</span></label>
                                        <input type="text" id="sname" class="form-control" name="sname" placeholder="" value="{{ $appointment->sname }}">
                                    </div>
                                </div>
                                </div>
                                <div class="row">
                                
                                                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="password">Plot Number<span class="small text-danger">*</span></label>
                                        <input type="text" id="pnumber" class="form-control" name="pnumber" placeholder="" value="{{ $appointment->pnumber }}">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="password">Street Number<span class="small text-danger">*</span></label>
                                        <input type="text" id="snumber" class="form-control" name="snumber" placeholder="" value="{{ $appointment->snumber }}">
                                    </div>
                                </div>
                                </div>
                                <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="password">City<span class="small text-danger">*</span></label>
                                        <input type="text" id="city" class="form-control" name="scity" placeholder="" value="{{ $appointment->scity }}">
                                    </div>
                                </div>
								 <div class="col-lg-6">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="name">Status<span class="small text-danger">*</span></label>
                                        <select class="custom-select px-10" style="height: 47px;" name="status">
                                            <option selected>Select</option>
                                            <option value="success" @if($appointment->status == 'success') selected="selected" @endif >Success</option>
                                            <option value="pending" @if($appointment->status == 'pending') selected="selected" @endif>Pending</option>
                                            
                                        </select>
                                    </div>
                                </div>
                                 <div class="col-lg-6">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="name">Do You Want to Create User Id for this User?<span class="small text-danger">*</span></label>
                                        <select class="custom-select px-10" style="height: 47px;" name="userCreate">
                                            <option selected>Select</option>
                                            <option value="yes" @if($appointment->userCreate == 'yes') selected="selected" @endif>Yes</option>
                                            <option value="no" @if($appointment->userCreate == 'no') selected="selected" @endif>No</option>
                                            
                                        </select>
                                    </div>
                                </div>
								 <div class="col-lg-6">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="name">Profile Picture<span class="small text-danger">*</span></label>
                                          <input type="file" class="form-control" name="profile_pic" >
										 <img src="{{ url('/') }}/public/storage/profile/{{ $appointment->profile_pic }}" 
										     width="100px" height="100px" alt="{{ $appointment->profile_pic }}" >
										  <input type="hidden" name="save_profile_pic" value="{{ $appointment->profile_pic }}">   
                                    </div>
                                </div>
                            </div>


                        <!-- Button -->
                        <div class="pl-lg-4">
                            <div class="row">
                                <div class="col text-center">
                                    <button type="submit" class="btn btn-primary">Update</button>
                                    <a href="{{ url('appointment') }}" class="btn btn-light" title="Cancel">Cancel</a>
                                </div>
                            </div>
                        </div>
                    </form>

                </div>

            </div>

        </div>

    </div>

@endsection
