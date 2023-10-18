@extends('layouts.user')

@section('main-content')
                    <header class="page-header page-header-compact page-header-light border-bottom bg-white mb-4">
                        <div class="container-xl px-4">
                            <div class="page-header-content">
                                <div class="row align-items-center justify-content-between pt-3">
                                    <div class="col-auto mb-3">
                                        <h1 class="page-header-title">
                                            <div class="page-header-icon"><i data-feather="user"></i></div>
                                             Profile Information
                                        </h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </header>
                    <!-- Main page content-->
                    <div class="container-xl px-4 mt-4">
                        <!-- Account page navigation-->
                        <nav class="nav nav-borders">
                            <a class="nav-link active ms-0" href="{{ url('/user/profile')}}">Personal Profile</a>
                            <a class="nav-link" href="{{ url('/user/id-proof')}}">Identity Proof</a>
							<a class="nav-link" href="{{ url('/user/profile-branch')}}">Communication Address</a>
							<a class="nav-link" href="{{ url('/user/shop')}}">Shop Details</a>
                        </nav>
                        <hr class="mt-0 mb-4" />
                        <div class="row">
                         
                            <div class="col-xl-12">
                                <!-- Account details card-->
                                <div class="card mb-4">
                                    <div class="card-header">Personal Profile</div>
                                    <div class="card-body">
                                        <form>
                                           <!-- Form Row-->
                                            <div class="row gx-3 mb-3">
                                                <div class="col-md-6">
                                                    <label class="small mb-1" >Name</label>
                                                    <input class="form-control" type="text"  value="{{ $user->name }}" readonly/>
                                                </div>
                                              	<div class="col-md-6">
                                                    <label class="small mb-1">Father Name</label>
                                                    <input class="form-control" type="tel" value="{{ @$appointment->father_name }}" readonly/>
                                                </div>
                                             </div>
                                            <div class="row gx-3 mb-3">
											 <div class="col-md-4">
                                                    <label class="small mb-1">Date of Birth</label>
                                                    <input class="form-control" type="text" name="birthday" value="{{ date('d-M-Y', strtotime(@$appointment->dob)) }}" readonly/>
                                                </div>
											 <div class="col-md-4">
                                                    <label class="small mb-1">Email ID</label>
                                                    <input class="form-control" type="text" value="{{ $user->email }}" readonly/>
                                                </div>
                                             <div class="col-md-4">
                                                    <label class="small mb-1">Phone Number</label>
                                                    <input class="form-control" type="text"  value="{{ @$appointment->mobile }}" readonly />
                                                </div>
                                            </div>
                                            <div class="row gx-3 mb-3">
                                               
                                            </div>
											 <div class="row gx-3 mb-3">
                                               <div class="col-md-4">
                                                    <label class="small mb-1" >Dealer Name</label>
                                                    <input class="form-control" type="tel" value="{{ @$appointment->dealerName }}" readonly />
                                                </div>
                                                <div class="col-md-4">
                                                    <label class="small mb-1">Dealership</label>
                                                    <input class="form-control" type="text" name="birthday" value="{{ @$appointment->applying_dealership }}" readonly />
                                                </div>
												<div class="col-md-4">
                                                    <label class="small mb-1">Qualification</label>
                                                    <input class="form-control" type="text" name="birthday" value="{{ @$appointment->qualification }}" readonly/>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
  @endsection