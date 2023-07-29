<div class="container-fluid" id="footer-container">
    <footer>
        <div class="row bg-dark-blue text-white justify-content-center">
            <div class="col-lg-3 col-12 mb-0 mb-md-4 pb-0 " style=" margin-top: 1%;
    display: flex;
    flex-direction: column;
    flex-wrap: nowrap;
    align-content: flex-start;
    justify-content: center;
    align-items: flex-start;">
                <h4>{{trans('website.sections')}}</h4>
                <ul class="list-unstyled social mb-0">
                    <li class="icon mt-2">
                        <a href="{{get_setting('facebook_link')}}"
                                        target="_blank" >{{trans('website.main')}}</a></li>
                    <li class="icon mt-2"><a href="{{get_setting('instagram_link')}}"
                                        target="_blank" >{{trans('website.products')}}</a></li>
                    <li class="icon mt-2"><a href="{{get_setting('youtube_link')}}"
                                        target="_blank" >{{trans('website.exp')}}</a></li>
                    <li class="icon mt-2"><a href="{{get_setting('twitter_link')}}"
                                        target="_blank" >{{trans('website.gallery')}}</a></li>
                    <li class="icon mt-2"><a href="{{get_setting('twitter_link')}}"
                                        target="_blank" >{{trans('website.blogs')}}</a></li>
                    <li class="icon mt-2"><a href="{{get_setting('twitter_link')}}"
                                        target="_blank" >{{trans('website.complains')}}</a></li>

                </ul>
            </div>


            <div class="col-lg-3 col-12 mb-0 mb-md-4 pb-0 "  style="margin-top: 1%;display: flex;flex-direction: column;flex-wrap: nowrap;align-content: flex-start;justify-content: center;align-items: center;">
                <div class="logo mb-5"><img src="{{asset('assets/images/logo.png')}}" alt="key automation" width="225"></div>
                <div class="text-center" >
                   <p style="text-align: center">{{trans('website.address')}} : {{ app()->getLocale() == "ar" ? get_setting('address') : get_setting('address_en') }}</p>
                   <p style="text-align: center">{{trans('website.phone')}} : {{get_setting('phone') }}</p>
                   <p style="text-align: center">{{trans('website.email')}} : {{get_setting('email_address') }}</p>
                </div>

            </div>


            <div class="col-lg-3 col-12 mb-0 mb-md-4 pb-0 " style="
    justify-content: flex-end;">
                <h4 >{{trans('website.follow')}}</h4>
                <ul class="list-unstyled social-icon social mb-0 mt-4">
                    <li class="icon">
                        <a href="{{get_setting('facebook_link')}}" target="_blank" >
                            <i class="fab fa-facebook"></i></a></li>
                    <li class="icon"><a href="{{get_setting('instagram_link')}}"
                                        target="_blank"><i class="fab fa-instagram"></i></a></li>
                    <li class="icon"><a href="{{get_setting('youtube_link')}}"
                                        target="_blank"><i class="fab fa-youtube"></i></a></li>
                    <li class="icon"><a href="{{get_setting('twitter_link')}}"
                                        target="_blank"><i class="fab fa-twitter"></i></a></li>
                </ul>
            </div>



          {{--  <div class="col-lg-3 col-12 mb-0 mb-md-4 pb-0">
                <ul class="list-unstyled related-links mb-0 mt-4">

                    <li>
                        <a href="/en/pages/privacy">
                            Privacy &amp; Cookies
                        </a>
                    </li>
                    <li>
                        <a href="/en/pages/terms-of-sales">
                            Terms of sales
                        </a>
                    </li>
                    <li>
                        <a href="/en/pages/legal-disclaimer">
                            Legal Disclaimer
                        </a>
                    </li>
                </ul>
            </div>--}}
        </div>

    </footer><!--end footer-->
</div>
