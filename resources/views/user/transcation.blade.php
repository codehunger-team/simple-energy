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
                           <img src="{{ url('/public/letter/qrcode.jpg') }}" style="width: 250px;height: 250px;"><br><br>
                           <h1>Please Pay the 50% Advance of your Order Value to Place your Order Successfully.</h1>
                        </div>
                    </div>
                    </div>  
                  			
                  <hr class="mt-0 mb-4" />
                     <div class="row">
                      <div class="col-xl-12">
					  <form method="POST" action="{{ url('/user/transcation') }}">
					    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="hidden" name="_method" value="POST">
						 <input type="hidden" name="id" value="{{$id}}">
                       <div class="row gx-3 mb-3">
                             <div class="col-md-6">
                                <label class="small mb-1">Transaction ID</label>
                                <input class="form-control" type="text" name="transaction" value="" />
                            </div>
                            <div class="col-md-6">
                               <div class="card-body">
                                    <button class="btn btn-primary" type="submit">Submit</button>
                                 </div>
                             </div>
                         </div>
					  </form>
			      </div>
				</div>
            </div>

        </div>

    </div>

</div>


@endsection
