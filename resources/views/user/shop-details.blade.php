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
                            <a class="nav-link" href="{{ url('/user/profile')}}">Personal Profile</a>
                            <a class="nav-link" href="{{ url('/user/profile-branch')}}">Identity Proof</a>
							<a class="nav-link" href="{{ url('/user/profile-branch')}}">Communication Address</a>
							<a class="nav-link active ms-0" href="{{ url('/user/profile-branch')}}">Shop Details</a>
                        </nav>
                        <hr class="mt-0 mb-4" />
                        <div class="row">
                         
                            <div class="col-xl-12">
                                <!-- Account details card-->
                                <div class="card mb-4">
                                    <div class="card-header">Shop Details</div>
                                    <div class="card-body">
                                        <form>
                                           <!-- Form Row-->
                                            <div class="row gx-3 mb-3">
                                                <div class="col-md-4">
                                                    <label class="small mb-1" >Shop Name</label>
                                                    <input class="form-control" type="text"  value="{{ @$appointment->sname }}" readonly/>
                                                </div>
                                              	<div class="col-md-4">
                                                    <label class="small mb-1">Plot Number</label>
                                                    <input class="form-control" type="tel" value="{{ @$appointment->pnumber }}" readonly/>
                                                </div>
												<div class="col-md-4">
                                                    <label class="small mb-1">Street Number</label>
                                                    <input class="form-control" type="tel" value="{{ @$appointment->snumber }}" readonly/>
                                                </div>
                                             </div>
                                            <div class="row gx-3 mb-3">
											 <div class="col-md-4">
                                                    <label class="small mb-1">Post Office</label>
                                                    <input class="form-control" type="text" name="birthday" value="{{ @$appointment->post_office }}" readonly/>
                                                </div>
											 <div class="col-md-4">
                                                    <label class="small mb-1">City</label>
                                                    <input class="form-control" type="text" value="{{ @$appointment->city }}" readonly/>
                                                </div>
                                             <div class="col-md-4">
                                                    <label class="small mb-1">District</label>
                                                    <input class="form-control" type="text"  value="{{ @$appointment->district }}" readonly />
                                                </div>
                                            </div>
                                            <div class="row gx-3 mb-3">
                                               
                                            </div>
											 <div class="row gx-3 mb-3">
                                               <div class="col-md-4">
                                                    <label class="small mb-1" >State</label>
                                                    <input class="form-control" type="tel" value="{{ @$appointment->state }}" readonly />
                                                </div>
                                                <div class="col-md-4">
                                                    <label class="small mb-1">Pincode</label>
                                                    <input class="form-control" type="text" name="birthday" value="{{ @$appointment->picode }}" readonly />
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
  @endsection