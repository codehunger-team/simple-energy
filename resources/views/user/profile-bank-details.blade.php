@extends('layouts.user')

@section('main-content')
                    <header class="page-header page-header-compact page-header-light border-bottom bg-white mb-4">
                        <div class="container-xl px-4">
                            <div class="page-header-content">
                                <div class="row align-items-center justify-content-between pt-3">
                                    <div class="col-auto mb-3">
                                        <h1 class="page-header-title">
                                            <div class="page-header-icon"><i data-feather="user"></i></div>
                                            Account Information
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
                            <a class="nav-link  active ms-0" href="{{ url('/user/profile-bank')}}">Bank Details</a>
                        </nav>
                        <hr class="mt-0 mb-4" />
                        <div class="row">
                     
                            <div class="col-xl-12">
                                <!-- Account details card-->
                                <div class="card mb-4">
                                    <div class="card-header">Bank Details</div>
                                    <div class="card-body">
                                        <form>
                                           <!-- Form Row-->
                                            <div class="row gx-3 mb-3">
                                                <div class="col-md-6">
                                                    <label class="small mb-1" >Account Holder Name</label>
                                                    <input class="form-control" type="text"  value="{{ @$appointment->b_holder_name }}" readonly/>
                                                </div>
                                              	<div class="col-md-6">
                                                    <label class="small mb-1">Account Number</label>
                                                    <input class="form-control" type="text"  value="{{ @$appointment->b_account_no }}" readonly/>
                                                </div>
                                             </div>
                                            <div class="row gx-3 mb-3">
											 <div class="col-md-6">
                                                    <label class="small mb-1">IFSC Code</label>
                                                    <input class="form-control" type="text" value="{{ @$appointment->b_ifsc_code }}" readonly/>
                                                </div>
                                             <div class="col-md-6">
                                                    <label class="small mb-1">Bank Name</label>
                                                    <input class="form-control" type="text"  value="{{ @$appointment->b_bank_name }}" readonly />
                                                </div>
                                            </div>
                                            <div class="row gx-3 mb-3">
                                                <div class="col-md-6">
                                                    <label class="small mb-1">Branch Address</label>
                                                    <input class="form-control" type="tel" value="{{ @$appointment->b_branch_address }}" readonly/>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
  @endsection