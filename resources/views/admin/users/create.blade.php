@extends('layouts.admin')
@section('main-content')
<!-- Page Heading -->
{{-- 
<h1 class="h3 mb-4 text-gray-800">{{ __('Profile') }}</h1>
--}}
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
   <h4 class="m-0 font-weight-bold text-primary">Add New</h4>
</div>
<div class="card-body">
   <form method="POST" action="{{ url('/users') }}" autocomplete="off"  enctype="multipart/form-data">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <input type="hidden" name="_method" value="POST">
      <h5 class=" text-muted text-center mb-4">Profile Settings</h5>
      <hr>
      <div class="pl-lg-4">
         <div class="row">
            <div class="col-lg-6">
               <div class="form-group focused">
                  <label class="form-control-label" for="name">Name<span class="small text-danger">*</span></label>
                  <input type="text" id="name" class="form-control" name="name" placeholder="Name" value="">
               </div>
            </div>
            <div class="col-lg-6">
               <div class="form-group">
                  <label class="form-control-label" for="email">Email address<span class="small text-danger">*</span></label>
                  <input type="email" id="email" class="form-control" name="email" placeholder="example@example.com" value="">
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-lg-6">
               <div class="form-group">
                  <label class="form-control-label" for="loginID">Registration ID<span class="small text-danger">*</span></label>
                  <input type="text" id="loginID" class="form-control" name="loginID" placeholder="" value="">
               </div>
            </div>
            <div class="col-lg-6">
               <div class="form-group">
                  <label class="form-control-label" for="password">Password<span class="small text-danger">*</span></label>
                  <input type="text" id="password" class="form-control" name="password" placeholder="" value="">
               </div>
            </div>
         </div>
         <br>
         <h5 class=" text-muted text-center mb-4">Personal Details</h5>
         <hr>
         <div class="pl-lg-4">
            <div class="row">
               <div class="col-lg-4">
                  <div class="form-group focused">
                     <label class="form-control-label" for="fname">Father Name<span class="small text-danger">*</span></label>
                     <input type="text" id="fname" class="form-control" name="father_name" placeholder="" value="">
                  </div>
               </div>
               <div class="col-lg-4">
                  <div class="form-group">
                     <label class="form-control-label" for="mobile">Mobile<span class="small text-danger">*</span></label>
                     <input type="text" id="mobile" class="form-control" name="mobile" placeholder="" value="">
                  </div>
               </div>
			   <div class="col-lg-4">
                  <div class="form-group">
                     <label class="form-control-label" for="dob">Date of Birth<span class="small text-danger">*</span></label>
                     <input type="date" id="dob" class="form-control" name="dob" placeholder="" value="">
                  </div>
               </div>
            </div>
            <div class="row">
			 <div class="col-lg-4">
                  <div class="form-group">
                     <label class="form-control-label" for="qualification">Qualification<span class="small text-danger">*</span></label>
                     <input type="text" id="qualification" class="form-control" name="qualification" placeholder="" value="">
                  </div>
               </div>
               <div class="col-lg-4">
                  <div class="form-group">
                     <label class="form-control-label" for="panNumber">Pan Number<span class="small text-danger">*</span></label>
                     <input type="text" id="panNumber" class="form-control" name="panNumber" placeholder="" value="">
                  </div>
               </div>
               <div class="col-lg-4">
                  <div class="form-group">
                     <label class="form-control-label" for="aadharNumber">Aadhar Number<span class="small text-danger">*</span></label>
                     <input type="text" id="aadharNumber" class="form-control" name="aadharNumber" placeholder="" value="">
                  </div>
               </div>
            </div>
            <br>
            <h5 class=" text-muted text-center mb-4">Branch Details</h5>
            <hr>
            <div class="pl-lg-4">
               <div class="row">
                  <div class="col-lg-4">
                     <div class="form-group focused">
                        <label class="form-control-label" for="address">Address<span class="small text-danger">*</span></label>
                        <input type="text" id="address" class="form-control" name="address" placeholder="Name" value="">
                     </div>
                  </div>
                  <div class="col-lg-4">
                     <div class="form-group">
                        <label class="form-control-label" for="district">District<span class="small text-danger">*</span></label>
                        <input type="text" id="district" class="form-control" name="district" placeholder="" value="">
                     </div>
                  </div>
				  <div class="col-lg-4">
                     <div class="form-group">
                        <label class="form-control-label" for="state">State<span class="small text-danger">*</span></label>
                        <input type="text" id="state" class="form-control" name="state" placeholder="" value="">
                     </div>
                  </div>
               </div>
               <div class="row">
			    <div class="col-lg-4">
                     <div class="form-group">
                        <label class="form-control-label" for="city">City<span class="small text-danger">*</span></label>
                        <input type="text" id="city" class="form-control" name="city" placeholder="" value="">
                     </div>
                  </div>
                  <div class="col-lg-4">
                     <div class="form-group">
                        <label class="form-control-label" for="post_office">Post Office<span class="small text-danger">*</span></label>
                        <input type="text" id="post_office" class="form-control" name="post_office" placeholder="" value="">
                     </div>
                  </div>
                  <div class="col-lg-4">
                     <div class="form-group">
                        <label class="form-control-label" for="pincode">Pincode<span class="small text-danger">*</span></label>
                        <input type="text" id="pincode" class="form-control" name="pincode" placeholder="" value="">
                     </div>
                  </div>
               </div>
			      <div class="row">
				  <div class="col-lg-6">
                     <div class="form-group focused">
                        <label class="form-control-label" for="dealerName">Dealer/Shop Name<span class="small text-danger">*</span></label>
                        <input type="text" id="dealerName" class="form-control" name="dealerName" placeholder="" value="">
                     </div>
                  </div>
                     </div>
                 
            </div>
            <br>
            <h5 class=" text-muted text-center mb-4">Bank Details</h5>
            <hr>
            <div class="pl-lg-4">
               <div class="row">
                  <div class="col-lg-4">
                     <div class="form-group focused">
                        <label class="form-control-label" for="b_holder_name">Account Holder Name<span class="small text-danger">*</span></label>
                        <input type="text" id="b_holder_name" class="form-control" name="b_holder_name"  value="">
                     </div>
                  </div>
				   <div class="col-lg-4">
                     <div class="form-group">
                        <label class="form-control-label" for="b_account_no">Account Number<span class="small text-danger">*</span></label>
                        <input type="text" id="b_account_no" class="form-control" name="b_account_no" value="">
                     </div>
                  </div>
                  <div class="col-lg-4">
                     <div class="form-group">
                        <label class="form-control-label" for="b_ifsc_code">IFSC Code<span class="small text-danger">*</span></label>
                        <input type="text" id="b_ifsc_code" class="form-control" name="b_ifsc_code" value="">
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-lg-6">
                     <div class="form-group">
                        <label class="form-control-label" for="b_bank_name">Bank Name<span class="small text-danger">*</span></label>
                        <input type="text" id="b_bank_name" class="form-control" name="b_bank_name" placeholder="" value="">
                     </div>
                  </div>
                  <div class="col-lg-6">
                     <div class="form-group">
                        <label class="form-control-label" for="b_branch_address">Branch Address<span class="small text-danger">*</span></label>
                        <input type="text" id="b_branch_address" class="form-control" name="b_branch_address" placeholder="" value="">
                     </div>
                  </div>
               </div>
			   </div>
			   </div>
               <br> 
               <!-- Button -->
               <div class="pl-lg-4">
                  <div class="row">
                     <div class="col text-center">
                        <button type="submit" class="btn btn-primary">Save</button>
                        <a href="{{ url('users') }}" class="btn btn-light" title="Cancel">Cancel</a>
                     </div>
                  </div>
               </div>
   </form>
   </div>
   </div>
   </div>
</div>
@endsection