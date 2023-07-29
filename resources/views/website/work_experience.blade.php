@extends('website.layouts.app')
@section('content')

    <main aria-live="polite" aria-atomic="true" class="position-relative">
        <div class="container-fluid p-0" id="item-detail-container">
            <!--carousler-->
            @foreach($workExperiences as $workExperience)
                <section class="item-head container-fluid">
                    <div class="container">
                        <div class="row py-4 w-100 justify-content-center">
                            <div class="col-xs-12 col-md-3 text-center">
                                <h1 class="h1 fw-bold text-danger text-uppercase text-center">{{$workExperience->name}}</h1>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="item-detail container-fluid">
                    <div style="display: flex;flex-wrap: wrap;flex-direction: row;justify-content: center;align-items: center;">

                        @foreach($workExperience->convertPhotos() as $img)
                            <img src="{{asset($img)}}">
                        @endforeach
                    </div>
                </section>

                <hr class="w-75 mt-5 d-block m-auto" style="opacity: 0.3">
            @endforeach



        </div>
    </main>
@endsection
