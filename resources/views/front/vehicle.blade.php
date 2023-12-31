@extends('front.layouts.app')
@section('content')
    <div class="breadcrumb-area pt-255 pb-170" style="background-image: url('assets/img/banner/banner-4.jpg')">
        <div class="container-fluid">
            <div class="breadcrumb-content text-center">
                <h2>Our Vehicle</h2>
                <ul>
                    <li>
                        <a href="#">home</a>
                    </li>
                    <li>Vehicle</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="shop-wrapper fluid-padding-2 pt-120 pb-150">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="grid-list-product-wrapper tab-content">
                        <div id="new-product" class="product-grid product-view tab-pane active">
                            <div class="row">
                                @if (count($products) > 0)
                                    @foreach ($products as $product)
                                        <div class="product-width col-md-6 col-xl-4 col-lg-6">
                                            <div class="product-wrapper mb-35">
                                                <div class="product-img">
                                                    <img src="{{ asset('storage/' . $product->image) }}" alt="">
                                                    <div class="product-content-wrapper">
                                                        <div class="product-title-spreed">
                                                            <h4>{{ $product->modal_no }}</h4>
                                                        </div>
                                                        <div class="product-price">
                                                            <span>Rs. {{ $product->price }}</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
@endsection
