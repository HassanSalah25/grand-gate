@extends('website.layouts.app')
@section('content')
    <section class="prodotti">
        <div class="container-fluid" id="component-prodotti">
            <h4 class="text-center h3 my-4 text-uppercase fw-bold">المنتجات</h4>
            <div class="container product-list mt-4">
                <div class="row">
                    @foreach($products as $product)
                    <div class="col-xs-12 col-md-3 my-3">
                        <a href="{{route('website.product.show', $product->id)}}"
                        >
                            <div class="card rounded-0 border-0">
                                <img src="{{asset($product->getImg())}}"
                                     class="card-img-top rounded-0"
                                     onerror="this.onerror=null;this.src='https://keyautomation.com/images/placeholder-image.jpg';"
                                     alt="...">
                                <div class="card-body">
                                    <h6 class="card-title text-uppercase fw-bold">{{$product->name}}</h6>
                                    <div style="text-overflow: ellipsis;display:-webkit-box;-webkit-box-orient:vertical;-webkit-line-clamp: 3;overflow:hidden">
                                    <p class="card-text">{!! $product->description !!}</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    @endforeach
                   {{-- <div class="d-flex justify-content-lg-end">
                        <nav>
                            <ul class="pagination">

                                <li class="page-item disabled" aria-disabled="true" aria-label="&laquo; Previous">
                                    <span class="page-link" aria-hidden="true">&lsaquo;</span>
                                </li>





                                <li class="page-item active" aria-current="page"><span class="page-link">1</span></li>
                                <li class="page-item"><a class="page-link" href="https://keyautomation.com/en/products/gate/battenti/arm?page=2">2</a></li>


                                <li class="page-item">
                                    <a class="page-link" href="https://keyautomation.com/en/products/gate/battenti/arm?page=2" rel="next" aria-label="Next &raquo;">&rsaquo;</a>
                                </li>
                            </ul>
                        </nav>

                    </div>--}}
                </div>
            </div>
        </div>
    </section>
@endsection
