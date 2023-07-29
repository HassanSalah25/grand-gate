@extends('website.layouts.app')
@section('content')

    <section class="page_content">

        @foreach(\App\Models\Page::all() as $page)

                <div class="container">

                </div>
                <div class="row align-items-center" @if($loop->iteration % 2 == 0) style="flex-direction: row-reverse;" @endif id="content-1">
                    <div class="col-xs-12 col-sm-6 text-center d-none d-sm-block">
                        <img src="{{asset($page->getImg())}}" class="img-responsive" width="100%"
                             height="100%">
                    </div>
                    <div class="p-5 col-xs-12 col-sm-6">
                        <div class="row">
                            <div class="col-12" style="font-size: 20px;">
                                <p><font color="#000000"><span style="font-size: 36px;"><b>{{ $page->translate('title') }}</b></span>
                                    </font></p>
                                <p><span style="font-size: 18px;">
                                        <font color="#000000">{!! $page->translate('content') !!}</font>
                                    </span>
                                </p>
                            </div>
                            <div class="col-md-6">
                                <p><br></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 text-center d-block d-sm-none">
                        <img src="{{asset($page->getImg())}}" class="img-responsive" width="100%"
                             height="100%">
                    </div>
                </div>

        @endforeach

    </section>
@endsection
