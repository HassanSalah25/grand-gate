@extends('website.layouts.app')
@section('content')

    <main aria-live="polite" aria-atomic="true" class="position-relative">
        <div class="container-fluid p-0" id="item-detail-container">
            <!--carousler-->
            <section class="item-head container-fluid">
                <div class="container">
                    <div class="row py-4 w-100 justify-content-center">
                        <div class="col-xs-12 col-md-3 text-center">
                            <h3 class="h3 fw-bold text-uppercase text-center">{{$product->name}}</h3>
                        </div>
                    </div>
                    <nav class="page-breadcrumb">
                        <ol class="breadcrumb mt-2" dir="ltr">


                            <li class="breadcrumb-item pl-0">
                                <a href="/en/products/autodoor">
                                    المنتجات
                                </a>
                            </li>

                            <li class="breadcrumb-item pl-0">
                                <a href="/en/products/autodoor/accessori">
                                    {{$product->name}}
                                </a>
                            </li>


                        </ol>
                    </nav>
                </div>
            </section>
            <section class="item-detail container-fluid">
                <div class="item-container container">
                    <div class="d-flex flex-sm-row flex-row flex-column-reverse py-4 " dir="ltr">
                        <div class="item mt-3 mt-sm-0">
                            <div class="card rounded-0 border-0 item-image-c">

                                <div class="temp" style="height: 100%">
                                    <div class="owl-stage-outer" style="height: 100%">
                                        <img class="iot-icon d-none" src="/icons/iot.png" alt="">
                                        <img class="night-icon d-none" src="/icons/fastline.png" alt="">
                                        <img class="clock-icon d-none" src="/icons/clock.png" alt="">
                                        <div class="owl-stage" style="height: 100%">
                                            <div class="owl-item" style="height: 100%">
                                                <img src="{{asset($product->getImg())}}"
                                                     onerror="this.onerror=null;this.src='/images/placeholder-image.jpg';"
                                                     class="card-img-top h-100 rounded-0" alt="900PRO2_WEB.png">
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            {!! $product->description !!}
                        </div>
                    </div>
                </div>
            </section>
            <section class="item-download container-fluid">
                <div class="item-container container">
                    <h3 class="h3 fw-bold text-uppercase text-center my-4">Download</h3>
                    <div class="d-sm-flex justify-content-center align-items-center text-uppercase banner">
                        <div class="buttons text-center flex-fill">
                            <a href="{{asset('assets/images/product-category/images/1.jpg')}}   "
                               target="_blank"
                               class="button">Product Sheet</a>
                        </div>

                        <div class="buttons text-center flex-fill">
                            <a href="{{asset($product->getImg())}}"
                               target="_blank"
                               class="button">Image HD</a>
                        </div>
                    </div>
                </div>
            </section>
            <section class="item-plus container-fluid p-0 mt-4">

                <div class="item-container item-images-d-l container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-6">
                        </div>
                        <div class="col-xs-12 col-sm-6">
                        </div>
                    </div>
                </div>
            </section>


            <hr class="w-100 d-block m-auto">

        </div>
    </main>
@endsection
