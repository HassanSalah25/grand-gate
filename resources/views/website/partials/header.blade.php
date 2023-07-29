<header class="main-header" role="banner">
    <nav class="navbar navbar-dark fixed-top-custom navbar-expand-lg border-bottom">
        <div class="container">
            <a
                class="navbar-brand"
                href="{{route('home')}}">
                <img src="{{asset('assets/images/logo.png')}}" alt="key automation" width="175px">
            </a>
            <button
                class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbar-content"
                aria-controls="navbar-content"
                aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="navbar-collapse collapse" id="navbar-content">
                <ul class="nav navbar-nav">
                    <li class="nav-item dropdown has-megamenu">
                        <a href="{{route('website.setting.about')}}" class="nav-link dropdown-toggle"
                           role="button"
                           id="subdropdown2"
                           aria-haspopup="true"
                           aria-expanded="false"
                        >{{trans('website.whous')}}<span class="caret"></span></a>
                    </li>

                    <li class="nav-item dropdown has-megamenu">
                        <a
                            href="/en/products"
                            class="nav-link dropdown-toggle"
                            data-bs-toggle="dropdown"
                            role="button"
                            aria-haspopup="true"
                            aria-expanded="false"
                            id="product_menu">
                            {{trans('website.products')}}
                        </a>
                        <div
                            class="dropdown-menu megamenu border-bottom"
                            role="menu"
                            data-bs-popper="none">
                            <div class="row g-3 w-100">
                                <div class="offset-md-1 col-md-2 white-border text-white">
                                    <div class="col-megamenu first-level">

                                        <ul class="list-unstyled">
                                            @foreach(\App\Models\Product::all() as $product)
                                            <li class="">
                                                <a  id="linkGATEfirst"
                                                    class="dropdown-toggle-custom"
                                                    href="{{route('website.product.show',$product)}}"
                                                    role="button">
                                                   {{$product->name}}
                                                </a>
                                                <!-- / second level -->
                                            </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div><!-- end row -->
                        </div> <!-- dropdown-mega-menu.// -->
                    </li>
                    <li class="nav-item dropdown has-megamenu">
                        <a href="{{route('website.work_experience.index')}}" class="nav-link dropdown-toggle"
                           role="button"
                           aria-haspopup="true"
                           aria-expanded="false"
                        >{{trans('website.exp')}}<span class="caret"></span></a>
                    </li>

                    <li class="nav-item dropdown has-megamenu">
                        <a href="" class="nav-link dropdown-toggle"
                           data-bs-toggle="dropdown"
                           role="button"
                           id="subdropdown2"
                           aria-haspopup="true"
                           aria-expanded="false"
                        >{{trans('website.gallery')}}<span class="caret"></span></a>
                        <div class="dropdown-menu megamenu border-bottom"
                             role="menu" data-bs-popper="none">
                            <div class="row g-3 w-100">
                                <div class="offset-md-1 col-md-2 white-border text-white">
                                    <div class="col-megamenu first-level">
                                        <ul class="list-unstyled">

                                            @foreach(\App\Models\Product::all() as $product)
                                                <li class="">
                                                    <a  id="linkGATEfirst"
                                                        class="dropdown-toggle-custom"
                                                        href="{{route('website.product.show_gallery',$product)}}"
                                                        role="button">
                                                        {{$product->name}}
                                                    </a>
                                                    <!-- / second level -->
                                                </li>
                                            @endforeach

                                        </ul>
                                    </div> <!-- col-megamenu.// -->
                                </div><!-- end col-1 -->
                                <div id="boxlink0"
                                     class="col-md-2 second-level white-border text-white">
                                    <div class="col-megamenu">
                                        <ul class="list-unstyled">
                                        </ul>
                                    </div> <!-- col-megamenu.// -->
                                </div><!-- end col-3 -->
                                <div id="boxlink1"
                                     class="col-md-2 second-level white-border text-white">
                                    <div class="col-megamenu">
                                        <ul class="list-unstyled">
                                        </ul>
                                    </div> <!-- col-megamenu.// -->
                                </div><!-- end col-3 -->
                                <div id="boxlink2"
                                     class="col-md-2 second-level white-border text-white">
                                    <div class="col-megamenu">
                                        <ul class="list-unstyled">
                                        </ul>
                                    </div> <!-- col-megamenu.// -->
                                </div><!-- end col-3 -->
                                <div id="boxlink3"
                                     class="col-md-2 second-level white-border text-white">
                                    <div class="col-megamenu">
                                        <ul class="list-unstyled">
                                        </ul>
                                    </div> <!-- col-megamenu.// -->
                                </div><!-- end col-3 -->
                            </div><!-- end row -->
                        </div> <!-- dropdown-mega-menu.// -->

                    </li>
                    <li class="nav-item dropdown has-megamenu">
                        <a href="{{route('website.blog.index')}}"
                           class="nav-link dropdown-toggle"
                        >
                            {{trans('website.blogs')}}
                        </a>
                    </li>
                    <li class="nav-item dropdown has-megamenu">
                        <a href="{{route('website.contact.create')}}"
                           class="nav-link dropdown-toggle"
                        >
                            {{trans('website.complains')}}
                        </a>
                    </li>
                </ul>

                <ul class="nav navbar-nav navbar-right align-items-sm-center">
                    {{--                        <li class="dropdown has-megamenu area-personal-menu">--}}
                    {{--                            <a href="/en/login"--}}
                    {{--                               class="nav-link text-sm text-gray-700 dark:text-gray-500 underline"--}}
                    {{--                            >Login</a>--}}
                    {{--                        </li>--}}
                    <li class="dropdown search">
                        <a
                            id="btn-cerca"
                            class="nav-link dropdown-toggle"
                            data-bs-toggle="dropdown"
                            role="button"
                            aria-haspopup="true"
                            aria-expanded="false">
                            <i class="fas fa-search"></i>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <li>
                                <form class="col-12" method="get" action="{{route('website.product.search')}}">
                                    <input
                                        id="cerca"
                                        type="search"
                                        class="form-control"
                                        placeholder="search...."
                                        aria-label="Search"
                                        name="nav_search"
                                        value="">
                                </form>
                            </li>
                        </ul>
                    </li>
                    {{-- <li class="dropdown lingue-menu">
                         <a
                             href="#"
                             class="nav-link dropdown-toggle"
                             data-bs-toggle="dropdown"
                             role="button"
                             aria-haspopup="true"
                             aria-expanded="false">
                         <span class="text-uppercase">
                             en
                         </span>
                         </a>
                         <ul
                             class="dropdown-menu default-dropdown-menu"
                             aria-labelledby="dropdownMenuLingue">
                             <li class="">
                                 <a
                                     href="#"
                                     class="dropdown-item "
                                     onclick="location.href ='/it'">
                                     <img
                                         class="image"
                                         src="/icons/it.svg"
                                         alt="0">
                                     <span class="text-capitalize">
                                     Italiano
                                 </span>
                                 </a>
                             </li>
                             <li class="">
                                 <a
                                     href="#"
                                     class="dropdown-item active"
                                     onclick="location.href ='/en'">
                                     <img
                                         class="image"
                                         src="/icons/en.svg"
                                         alt="1">
                                     <span class="text-capitalize">
                                     English
                                 </span>
                                 </a>
                             </li>
                             <li class="">
                                 <a
                                     href="#"
                                     class="dropdown-item "
                                     onclick="location.href ='/es'">
                                     <img
                                         class="image"
                                         src="/icons/es.svg"
                                         alt="2">
                                     <span class="text-capitalize">
                                     Español
                                 </span>
                                 </a>
                             </li>
                             <li class="">
                                 <a
                                     href="#"
                                     class="dropdown-item "
                                     onclick="location.href ='/fr'">
                                     <img
                                         class="image"
                                         src="/icons/fr.svg"
                                         alt="3">
                                     <span class="text-capitalize">
                                     Français
                                 </span>
                                 </a>
                             </li>
                         </ul>
                     </li>--}}
                    <li>   <a href="\{{\Config::get('app.locale') == 'en' ? 'ar' : 'en'}}" class="lang">{{\Config::get('app.locale') == 'en' ? 'ar' : 'en'}}</a></li>
                </ul>
            </div><!-- /.navbar-collapse -->

        </div><!-- /.container-fluid -->
    </nav>
</header>
