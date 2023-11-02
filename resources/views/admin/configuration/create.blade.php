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
    <form method="POST" action="{{ route('configuration.store') }}" autocomplete="off" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="hidden" name="_method" value="POST">
        <div class="row">



            <div class="col-lg-8 order-lg-1">

                <div class="card shadow mb-4">

                    <div class="card-header py-3">

                        <div class="row">
                            <div class="col-lg-10">
                                <h6 class="m-0 font-weight-bold text-primary">Contact & Address</h6>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">




                        <div class="pl-lg-4">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="modal_no">Toll Free number<span
                                                class="small text-danger">*</span></label>
                                        <input type="text" id="modal_no" class="form-control" name="contact_number_1"
                                            value="{{ getConfigValue('contact_number_1') }}">
                                    </div>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="color">Contact Number 2<span
                                                class="small text-danger">*</span></label>
                                        <input type="text" id="color" class="form-control" name="contact_number_2"
                                            value="{{ getConfigValue('contact_number_2') }}">
                                    </div>
                                </div>
                            </div>

                            {{-- <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="loginID">Toll Free Number<span
                                                class="small text-danger">*</span></label>
                                        <input type="price" id="price" class="form-control" name="toll_free_number">
                                    </div>
                                </div>
                            </div> --}}

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="loginID">Address<span
                                                class="small text-danger">*</span></label>
                                        <textarea id="address" class="form-control" name="address">{{ getConfigValue('address') }}"</textarea>
                                    </div>
                                </div>
                            </div>
                            <!-- Button -->
                            {{-- <div class="pl-lg-4">
                                <div class="row">
                                    <div class="col text-center">
                                        <button type="submit" class="btn btn-primary">Save</button>
                                        <a href="{{ url('product') }}" class="btn btn-light" title="Cancel">Cancel</a>
                                    </div>
                                </div>
                            </div> --}}
                        </div>



                    </div>

                </div>

            </div>


            <div class="col-lg-8 order-lg-1">

                <div class="card shadow mb-4">

                    <div class="card-header py-3">

                        <div class="row">
                            <div class="col-lg-10">
                                <h6 class="m-0 font-weight-bold text-primary">Bank Details</h6>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">




                        <div class="pl-lg-4">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="modal_no">Bank Name<span
                                                class="small text-danger">*</span></label>
                                        <input type="text" id="modal_no" class="form-control" name="bank_name"
                                            value="{{ getConfigValue('bank_name') }}">
                                    </div>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="modal_no">Account Holder Name<span
                                                class="small text-danger">*</span></label>
                                        <input type="text" id="modal_no" class="form-control" name="account_holder_name"
                                            value="{{ getConfigValue('account_holder_name') }}">
                                    </div>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="color">Account Number<span
                                                class="small text-danger">*</span></label>
                                        <input type="text" id="color" class="form-control" name="account_number"
                                            value="{{ getConfigValue('account_number') }}">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="loginID">Branch Name<span
                                                class="small text-danger">*</span></label>
                                        <input type="text" id="price" class="form-control" name="branch_name"
                                            value="{{ getConfigValue('branch_name') }}">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="loginID">IFSC Code<span
                                                class="small text-danger">*</span></label>
                                        <input type="text" id="price" class="form-control" name="ifsc_code"
                                            value="{{ getConfigValue('ifsc_code') }}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="loginID">Upload Scanner<span
                                                class="small text-danger">*</span></label>
                                        <input type="file" id="scanner" class="form-control" name="scanner"
                                            value="{{ getConfigValue('scanner') }}">
                                    </div>
                                </div>
                            </div>
                            <!-- Button -->
                            <div class="pl-lg-4">
                                <div class="row">
                                    <div class="col text-center">
                                        <button type="submit" class="btn btn-primary">Save</button>
                                    </div>
                                </div>
                            </div>
                        </div>



                    </div>

                </div>

            </div>

        </div>
    </form>


@endsection
