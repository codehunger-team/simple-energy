@extends('layouts.admin')

@section('main-content')

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
                <h6 class="m-0 font-weight-bold text-primary">QR Code</h6>
            </div>

            <div class="card-body">

                <form method="POST" action="{{ url('qrcode/1') }}" autocomplete="off" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="hidden" name="_method" value="PUT">
                    <input type="hidden" name="id" value="1">
                    <input type="hidden" name="save_qrcode_image" value="{{ $qrcode->image }}">

                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <div class="form-group">
                           <img src="{{ url('/public/storage/qrcode/'.$qrcode->image) }}" style="width: 250px;height: 250px;">
                        </div>
                    </div>
                    </div>

                    <div class="pl-lg-4">
                      <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group focused">
                                    <label class="form-control-label" for="name"> QR Code Image<span class="small text-danger">*</span></label>
                                    <input type="file" id="image" class="form-control" name="image" placeholder="image" value="">
                                </div>
                            </div>
                      
                        </div>
                  
                      <!-- Button -->
                    <div class="pl-lg-4">
                        <div class="row">
                            <div class="col text-center">
                                <button type="submit" class="btn btn-primary">Update</button>
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
