@extends('website.layouts.app')
@section('content')
    <section class="prodotti">
        <div class="container-fluid" id="component-prodotti">
            <h4 class="text-center h3 my-4 text-uppercase fw-bold">المقالات</h4>
            <div class="container product-list mt-4">
                <div class="row">
                    @foreach($blogs as $blog)
                        <div class="col-xs-12 col-md-3 my-3">
                            <a href="{{route('website.blog.show', $blog->id)}}"
                            >
                                <div class="card rounded-0 border-0">
                                    <img src="{{asset($blog->getImg())}}"
                                         class="card-img-top rounded-0"
                                         onerror="this.onerror=null;this.src='';"
                                         alt="...">
                                    <div class="card-body">
                                        <h6 class="card-title text-uppercase fw-bold">{{$blog->translate('title')}}</h6>
                                        <div style="text-overflow: ellipsis;display:-webkit-box;-webkit-box-orient:vertical;-webkit-line-clamp: 3;overflow:hidden">
                                            <p class="card-text">{!! $blog->translate('content') !!}</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                     <div class="d-flex justify-content-lg-end">
                         {{$blogs->links()}}
                     </div>
                </div>
            </div>
        </div>
    </section>
@endsection
