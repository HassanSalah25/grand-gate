@extends('website.layouts.app')
@push('styles')
    <link rel="stylesheet" href="{{ asset('frontend/css/index.css') }}" />
    <style type="text/css">
        .sticky-icons {
            z-index: 500;
            position: fixed;
            display: inline-flex;
            flex-direction: column;
            flex-wrap: nowrap;
            justify-content: space-around;
            margin-top: 5%
        }

        .new_icon {
            display: block;
            margin-bottom: 10px;
            padding: 2px;
            text-align: center;
            text-decoration: none;
            margin-right: 14%;
        }
        .new_icon i {

            background-color:#ffffff;
            width:50px;
            height:50px;
            border-radius: 50%;
        }

        .new_icon i {
            font-size: 30px;
            display: flex;
            flex-direction: column;
            flex-wrap: nowrap;
            align-content: center;
            justify-content: center;
            align-items: center;
        }


        /*.new_icon:hover {*/
        /*    background-color: #333;*/
        /*    border-radius: 50%;*/
        /*}*/

    </style>
@endpush
@section('content')
    <!--end header-->
    <div class="sticky-icons">
                <a href="{{get_setting('messanger_link')}}" class="new_icon" style="color: #0a53be;">
                    <i class="fab fa-facebook-messenger"></i></a>
                <a href="{{get_setting('whatsapp_number')}}"
                   class="new_icon" style="color: #0abb75;"><i class="fab fa-whatsapp"></i></a>
    </div>
    <section class="first-banner container-fluid">
        <div class="container">
            <div class="row py-4"
                 style="display: flex;justify-content: center;align-items: center;flex-direction: row;flex-wrap: nowrap;">
                <div class="col-xs-12 col-md-6 text-center">
                    <h2 class="h6 fw-bold text-uppercase"></h2>
                    <p class="small">
                    <p style="text-align-last: center;">{{trans('website.about')}}</p>
                    <a href="{{route('website.gallery.index')}}" class="btn btn-dark btn-sm fw-bold text-uppercase ">{{trans('website.discover')}}</a>
                </div>
            </div>
        </div>
    </section>

    <div class="container-fluid gamme-prodotti">
        <h4 class="text-center h3 my-4 text-uppercase fw-bold">{{trans('website.products')}}</h4>
        <div class="container product-list mt-4">
            <div class="row">
                @foreach($products as $product)
                    <div class="col-xs-12 col-md-3 my-3">

                        <a href="/en/products/gate">
                            <div class="card rounded-0 border-0" style="height: 100% !important">
                                <img src="{{asset($product->getImg())}}"
                                     class="card-img-top imgg rounded-0 h-100"
                                     style="height: 100% !important"
                                     alt="Scorrevoli-1909867360.jpg"
                                     onerror="this.onerror=null;this.src='/images/placeholder-image.jpg';"
                                >
                                <div class="card-body">
                                    <h6 class="card-title text-uppercase fw-bold"
                                        style="text-align: start;">{{$product->name}}</h6>
                                    <div
                                        style="text-overflow: ellipsis;display:-webkit-box;-webkit-box-orient:vertical;-webkit-line-clamp: 3;overflow:hidden">
                                        <p class="card-text" style="text-align: start;">{!!$product->description!!}</p>
                                    </div>
                                    <div class="d-flex justify-content-between">


                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="container-fluid gamme-prodotti">
        <h4 class="text-center h3 my-4 text-uppercase fw-bold">{{trans('website.products')}}</h4>
        <div class="container product-list mt-4">
            <div class="row">
                @foreach($products as $product)
                    <div class="col-xs-12 col-md-3 my-3">

                        <a href="/en/products/gate">
                            <div class="card rounded-0 border-0" style="height: 100% !important">
                                <img src="{{asset($product->getImg())}}"
                                     class="card-img-top imgg rounded-0 h-100"
                                     style="height: 100% !important"
                                     alt="Scorrevoli-1909867360.jpg"
                                     onerror="this.onerror=null;this.src='/images/placeholder-image.jpg';"
                                >
                                <div class="card-body">
                                    <h6 class="card-title text-uppercase fw-bold"
                                        style="text-align: start;">{{$product->name}}</h6>
                                    <div
                                        style="text-overflow: ellipsis;display:-webkit-box;-webkit-box-orient:vertical;-webkit-line-clamp: 3;overflow:hidden">
                                        <p class="card-text" style="text-align: start;">{!!$product->description!!}</p>
                                    </div>
                                    <div class="d-flex justify-content-between">


                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <section class="illuminazione-banner container-fluid">

        <div class="banner-container text-center py-3 ">
            <h3 class="h3 fw-bold text-uppercase mt-2 mb-4"></h3>
            <img src="{{asset('assets/images/product-showcase/images/WhatsApp Image 2023-07-24 at 11.40.36 AM (1).jpeg')}}"
                 class="img-fluid w-100 image"
                 alt="BANNER-Garden_337371440.jpg">
            <div class="illuminazione-bottom-banner py-3"
                 style="display: flex;justify-content: center;align-items: center;align-content: flex-end;flex-wrap: nowrap;flex-direction: row-reverse;">
                <p></p>
                <a href="/en/pages/Illuminazione-per-aree-esterne"
                   class="btn btn-dark btn-sm fw-bold text-uppercase rounded-0"></a>
            </div>
        </div>

    </section>

    <section class="maps">
        <h3 class="h3 fw-bold text-uppercase text-light text-center bg-secondary py-3 mb-4">{{trans('website.whereus')}}</h3>
        <div class="map" id="map">

            <iframe
                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13824.983844322329!2d31.091353!3d29.9723606!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14584f9b51b6227b%3A0xf22bd2f46425494!2z2KzYsdin2YbYryDYrNmK2Ko!5e0!3m2!1sar!2seg!4v1689611284937!5m2!1sar!2seg"
                width="600"
                height="450"
                style="border:0;"
                allowfullscreen=""
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>
    <br>
    <br>
    <br>

@endsection
