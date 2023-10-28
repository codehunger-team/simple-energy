@extends('layouts.user')

@section('main-content')

   @include('common.status')

<div class="row">

      

    <div class="col-lg-12 order-lg-1">

        <div class="card shadow mb-4">

            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">QR Code</h6>
            </div>

            <div class="card-body">

                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <div class="form-group">
                           <img src="{{ url('/public/letter/qrcode.jpg') }}" style="width: 250px;height: 250px;">
                        </div>
                    </div>
                    </div>  
                     <br>
					<div class="pl-lg-4">
                        <div class="row">
                            <div class="col text-center">
                                <a href="{{route('qrcode.download')}}" type="button" class="btn btn-primary download">Download</a>
                             </div>
                        </div>
                    </div>
				</div>
            </div>

        </div>

    </div>

</div>


@endsection
