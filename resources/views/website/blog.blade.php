@extends('website.layouts.app')
@section('content')

    <main aria-live="polite" aria-atomic="true" class="position-relative">
        <div class="container-fluid p-0" id="item-detail-container">
            <!--carousler-->
            <section class="item-head container-fluid">
                <div class="container">
                    <div class="row py-4 w-100 justify-content-center">
                        <div class="col-xs-12 col-md-3 text-center">
                            <h3 class="h3 fw-bold text-uppercase text-center">{{$blog->translate('title')}}</h3>
                        </div>
                    </div>
                    <nav class="page-breadcrumb">
                        <ol class="breadcrumb mt-2" dir="ltr">


                            <li class="breadcrumb-item pl-0">
                                <a href="/en/products/autodoor">
                                    المقالات
                                </a>
                            </li>

                            <li class="breadcrumb-item pl-0">
                                <a href="/en/products/autodoor/accessori">
                                    {{$blog->translate('title')}}
                                </a>
                            </li>


                        </ol>
                    </nav>
                </div>
            </section>
            <section class="item-detail container-fluid">
                <div class="item-container container">
                        <div class="row">
                            <div class="" style="height: 100%">
                                <img src="{{asset($blog->getImg())}}" alt="{{$blog->translate('alt_image')}}" class="card-img-top h-100 rounded-0">
                            </div>
                        </div>
                        <div class="row m-3 justify-content-center">
                           <h1>{{$blog->translate('title')}}</h1>
                        </div>
                        <div class="row m-3 ">
                            {!! $blog->translate('content') !!}
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
