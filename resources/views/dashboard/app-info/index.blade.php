@extends('dashboard.layouts.app')

@section('content')



    <div class="row m-4">
        <div class="bg-light rounded h-100 p-4">
            <h6 class="mb-4">Social Links</h6>
            <form action="{{route('appInfo.update')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Facebook Link</label>
                    <input type="hidden" name="type[]" value="facebook_link">
                    <input type="text" class="form-control" name="facebook_link" value="{{get_setting('facebook_link')}}">
                </div>

                <div class="mb-3">
                    <label for="name" class="form-label">Instagram Link</label>
                    <input type="hidden" name="type[]" value="instagram_link">
                    <input type="text" class="form-control" name="instagram_link" value="{{get_setting('instagram_link')}}">
                </div>

                <div class="mb-3">
                    <label for="name" class="form-label">Twitter Link</label>
                    <input type="hidden" name="type[]" value="twitter_link">
                    <input type="text" class="form-control" name="twitter_link" value="{{get_setting('twitter_link')}}">
                </div>

                <div class="mb-3">
                    <label for="name" class="form-label">Youtube Link</label>
                    <input type="hidden" name="type[]" value="youtube_link">
                    <input type="text" class="form-control" name="youtube_link" value="{{get_setting('youtube_link')}}">
                </div>

                <div class="mb-3">
                    <label for="name" class="form-label">Messanger Link</label>
                    <input type="hidden" name="type[]" value="messanger_link">
                    <input type="text" class="form-control" name="messanger_link" value="{{get_setting('messanger_link')}}">
                </div>


                <button type="submit" class="btn btn-primary">{{__('Save')}}</button>
            </form>
        </div>
    </div>


    <div class="row m-4">
        <div class="bg-light rounded h-100 p-4">
            <h6 class="mb-4">Contact Us</h6>
            <form action="{{route('appInfo.update')}}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="mb-3">
                    <label for="name" class="form-label">Phone</label>
                    <input type="hidden" name="type[]" value="phone">
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="phone" value="{{get_setting('phone')}}">
                    </div>
                </div>

                <div class="mb-3">
                    <label for="name" class="form-label">Whatsapp Number</label>
                    <input type="hidden" name="type[]" value="whatsapp_number">
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="whatsapp_number" value="{{get_setting('whatsapp_number')}}">
                    </div>
                </div>

                <div class="mb-3">
                    <label for="name" class="form-label">Email Address</label>
                    <input type="hidden" name="type[]" value="email_address">
                    <div class="col-sm-10">
                        <input type="email" class="form-control" name="email_address" value="{{get_setting('email_address')}}">
                    </div>
                </div>


                <div class="mb-3">
                    <label for="name" class="form-label">Address in Arabic</label>
                    <input type="hidden" name="type[]" value="address">
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="address" value="{{get_setting('address')}}">
                    </div>
                </div>

                <div class="mb-3">
                    <label for="name" class="form-label">Address in English</label>
                    <input type="hidden" name="type[]" value="address_en">
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="address_en" value="{{get_setting('address_en  ')}}">
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">{{__('Save')}}</button>
            </form>
        </div>
    </div>

@endsection
