<!-- Sidebar Start -->
<div class="sidebar pe-4 pb-3">
    <nav class="navbar bg-light navbar-light">
        <a href="{{route('dashboard.home')}}" class="navbar-brand mx-4 mb-3">
            <h3 class="text-primary"><img src="{{asset('assets/images/logo (1).png')}}" width="200" height="80"/></h3>
        </a>
        <!--<div class="d-flex align-items-center ms-4 mb-4">-->
        <!--    <div class="position-relative">-->
        <!--        <img class="rounded-circle" src="{{asset(auth()->user()->getImg())}}" alt="" style="width: 40px; height: 40px;">-->
        <!--        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>-->
        <!--    </div>-->
        <!--    <div class="ms-3">-->
        <!--        <h6 class="mb-0">{{auth()->user()->name}}</h6>-->
        <!--        <span>Admin</span>-->
        <!--    </div>-->
        <!--</div>-->
        <div class="navbar-nav w-100">
            <a href="{{route('dashboard.home')}}" class="nav-item nav-link {{areActiveRoutes(['dashboard.home'])}}"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
            <a href="{{route('profile.index')}}" class="nav-link nav-item  {{areActiveRoutes(['profile.index','profile.create','profile.edit'])}}"><i class="fas fa-user me-2"></i>{{__('Profile')}}</a>
            <a href="{{route('product.index')}}" class="nav-link nav-item  {{areActiveRoutes(['product.index','product.create','product.edit'])}}"><i class="fas fa-shopping-bag me-2"></i>{{__('Product')}}</a>
            <a href="{{route('gallery.index')}}" class="nav-link nav-item  {{areActiveRoutes(['gallery.index','gallery.create','gallery.edit'])}}"><i class="fa fa-images me-2"></i>{{__('Gallery')}}</a>
            <a href="{{route('work_experience.index')}}" class="nav-link nav-item {{areActiveRoutes(['work_experience.index','work_experience.crete','work_experience.edit'])}}"><i class="fa-solid fa-briefcase"></i>{{__('Work Experience')}}</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle {{areActiveRoutes(['pages.index','pages.create','pages.edit'])}} " data-bs-toggle="dropdown" ><i class="fa fa-file-alt me-2"></i>{{__('Pages')}}</a>
                <div class="dropdown-menu bg-transparent border-0 {{areActiveRoutes(['pages.index','pages.create','pages.edit']) == "active" ? "show" : ""}}">
                    <a href="{{route('pages.index')}}" class=" nav-link nav-item {{areActiveRoutes(['pages.index','pages.create','pages.edit'])}}"><i class="fa-solid fa-file-alt"></i>{{__('About Us Pages')}}</a>
                </div>
            </div>
{{--            <a href="{{route('service.index')}}" class="nav-link nav-item  {{areActiveRoutes(['service'])}}"><i class="fa-solid fa-suitcase-medical"></i>{{__('Service')}}</a>--}}
{{--            <a href="{{route('offer-category.index')}}" class="nav-link nav-item {{areActiveRoutes(['offer-category'])}}"><i class="fa-regular fa-percent"></i>{{__('Offer Category')}}</a>--}}
{{--            <a href="{{route('offer.index')}}" class="nav-link nav-item {{areActiveRoutes(['offer'])}}"><i class="fa-solid fa-percent"></i>{{__('Offer')}}</a>--}}
{{--            <a href="{{route('register-offer.index')}}" class="nav-link nav-item {{areActiveRoutes(['register-offer'])}}"><i class="fa-solid fa-percent"></i>{{__('Registered Offers')}}</a>--}}
{{--            <a href="{{route('discount.index')}}" class="nav-link nav-item {{areActiveRoutes(['discount'])}}"><i class="fa-solid fa-percent"></i>{{__('Discounts')}}</a>--}}
            <a href="{{route('blog.index')}}" class="nav-link nav-item {{areActiveRoutes(['blog.index','blog.create','blog.edit'])}}"><i class="fa-solid fa-blog"></i>{{__('Blog')}}</a>
{{--            <a href="{{route('blog-cats.index')}}" class="nav-link nav-item {{areActiveRoutes(['blog-cats'])}}"><i class="fa-solid fa-blog"></i>{{__('Blog Categories')}}</a>--}}
{{--            <a href="{{route('blog_comment.index')}}" class="nav-link nav-item {{areActiveRoutes(['blog_comment'])}}"><i class="fa-solid fa-blog"></i>{{__('Blog Comments    ')}}</a>--}}
{{--            <a href="{{route('feedback.index')}}" class="nav-link nav-item {{areActiveRoutes(['feedback'])}}"><i class="fa-solid fa-comment"></i>{{__('Feedback')}}</a>--}}
{{--            <a href="{{route('applicant.index')}}" class="nav-link nav-item {{areActiveRoutes(['applicant'])}}"><i class="fa-solid fa-comment"></i>{{__('Applicants')}}</a>--}}
            <a href="{{route('appInfo.index')}}" class="nav-link nav-item {{areActiveRoutes(['appInfo.index','appInfo.create','appInfo.edit'])}}"><i class="fa-solid fa-cog"></i>{{__('Settings')}}</a>
            <a href="{{route('contact.index')}}" class="nav-link nav-item {{areActiveRoutes(['contact.index','contact.show'])}}"><i class="fa-solid fa-envelope"></i>{{__('Contact Us')}}</a>
{{--            <a href="{{route('job.index')}}" class="nav-link nav-item {{areActiveRoutes(['job'])}}"><i class="fa-solid fa-cog"></i>{{__('Jobs')}}</a>--}}
{{--            <a href="#" class="nav-link nav-item {{active_if_full_match('setting')}}"><i class="fa fa-circle me-2"></i>{{__('Settings')}}</a>--}}

{{--                <a href="{{ route('chats.index') }}"--}}
{{--                   class="nav-link nav-item {{ areActiveRoutes(['chats.index', 'chats.show']) }}">--}}
{{--                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">--}}
{{--                        <g id="Group_8863" data-name="Group 8863" transform="translate(-4 -4)">--}}
{{--                            <path id="Path_18925" data-name="Path 18925"--}}
{{--                                  d="M18.4,4H5.6A1.593,1.593,0,0,0,4.008,5.6L4,20l3.2-3.2H18.4A1.6,1.6,0,0,0,20,15.2V5.6A1.6,1.6,0,0,0,18.4,4ZM7.2,9.6h9.6v1.6H7.2Zm6.4,4H7.2V12h6.4Zm3.2-4.8H7.2V7.2h9.6Z"--}}
{{--                                  fill="#03A9F4" />--}}
{{--                            fill="#03A9F4" />--}}
{{--                        </g>--}}
{{--                    </svg>--}}
{{--                    <span class="aiz-side-nav-text">{{ __('Support chat') }}</span>--}}
{{--                </a>--}}
        </div>
    </nav>
</div>
<!-- Sidebar End -->
