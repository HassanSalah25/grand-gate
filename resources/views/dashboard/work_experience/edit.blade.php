@extends('dashboard.layouts.app')

@section('content')

    <div class="row m-4">
        <div class="row">
            <button onclick="openTab('item1',this)" id="btn_item1" class="col btn">English</button>
            <button onclick="openTab('item2',this)" id="btn_item2" class="col btn">Arabic</button>
        </div>
        <div class="bg-light rounded h-100 p-4">
            <h6 class="mb-4">Basic Form</h6>
            <form id="item1" class="tab-content" action="{{route('work_experience.update',$we->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="lang" value="en">
                <div class="mb-3">
                    <label for="image" class="form-label">Image</label>
                    <input class="form-control" name="image" type="file" id="image">
                    <div id="images-preview">
                        @foreach($we->convertPhotos() as $img)
                            <img class="images" width="100" src="{{asset($img)}}" >
                        @endforeach
                    </div>
                </div>
                <div class="row">
                    <div class="mb-3 col-md-6">
                        <label for="name" class="form-label">Name in English</label>
                        <input type="text" class="form-control" name="name" id="name" value="{{$we->name}}">
                    </div>
                </div>
                <div class="row">
                    <div class="mb-3 col-md-6">
                        <label for="description" class="form-label">Description in English</label>
                        <div class="col">
                            <textarea class="aiz-text-editor form-control" placeholder="Description.." data-min-height="300" name="description" required>{{$we->description}}</textarea>
                        </div>
                    </div>
                </div>

                <div class="mb-3 mt-3">
                    <h2 for="content" class="form-label">SEO Information</h2>
                </div>
                <div class="mb-3">
                    <label for="canonical" class="form-label">Canonical</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="canonical" value="{{$we->canonical}}">
                    </div>
                </div>
                <div class="row">
                    <div class="mb-3 col-md-6">
                        <label for="slug" class="form-label">slug</label>
                        <input type="text" class="form-control" name="slug" id="slug" value="{{$we->slug}}">
                    </div>
                    <div class="mb-3 col-md-6">
                        <label for="new_slug" class="form-label">New Slug</label>
                        <input type="text" class="form-control" name="new_slug" id="new_slug" value="{{$we->new_slug}}">
                    </div>
                </div>
                <div class="row">
                    <div class="mb-3 col-md-6">
                        <label for="meta_title" class="form-label">meta title</label>
                        <input type="text" class="form-control" name="meta_title" id="meta_title" value="{{$we->meta_title}}">
                    </div>
                    <div class="mb-3 col-md-6">
                        <label for="meta_description" class="form-label">meta description</label>
                        <input type="text" class="form-control" name="meta_description" id="meta_description" value="{{$we->meta_description}}">
                    </div>
                </div>
                <div class="row">
                    <div class="mb-3 col-md-6">
                        <label for="meta_keyword" class="form-label">meta keyword</label>
                        <input type="text" class="form-control" name="meta_keyword" id="meta_keyword" value="{{$we->meta_keyword}}">
                    </div>
                    <div class="mb-3 col-md-6">
                        <label for="alt_image" class="form-label">Alt image</label>
                        <input type="text" class="form-control" name="alt_image" id="alt_image" value="{{$we->alt_image}}">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">{{__('Save')}}</button>
            </form>
            <form id="item2" class="tab-content" action="{{route('work_experience.update',$we->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="lang" value="ar">
                <div class="mb-3">
                    <label for="image" class="form-label">Image</label>
                    <input class="form-control" name="image" type="file" id="image">
                </div>
                <div class="row">
                    <div class="mb-3 col-md-6">
                        <label for="name" class="form-label">Name in Arabic</label>
                        <input type="text" class="form-control" name="name" id="name" value="{{$we->translate('name','ar')}}">
                    </div>
                </div>
                <div class="row">
                    <div class="mb-3 col-md-6">
                        <label for="description" class="form-label">Description in Arabic</label>
                        <div class="col">
                            <textarea class="aiz-text-editor form-control" placeholder="Description.." data-min-height="300" name="description" required>{{$we->translate('description','ar')}}</textarea>
                        </div>
                    </div>
                </div>
                <div class="mb-3 mt-3">
                    <h2 for="content" class="form-label">SEO Information</h2>
                </div>
                <div class="mb-3">
                    <label for="canonical" class="form-label">Canonical</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="canonical" value="{{$we->translate('canonical','ar')}}">
                    </div>
                </div>
                <div class="row">
                    <div class="mb-3 col-md-6">
                        <label for="slug" class="form-label">slug</label>
                        <input type="text" class="form-control" name="slug" id="slug" value="{{$we->translate('slug','ar')}}">
                    </div>
                    <div class="mb-3 col-md-6">
                        <label for="new_slug" class="form-label">New Slug</label>
                        <input type="text" class="form-control" name="new_slug" id="new_slug" value="{{$we->translate('new_slug','ar')}}">
                    </div>
                </div>
                <div class="row">
                    <div class="mb-3 col-md-6">
                        <label for="meta_title" class="form-label">meta title</label>
                        <input type="text" class="form-control" name="meta_title" id="meta_title" value="{{$we->translate('meta_title','ar')}}">
                    </div>
                    <div class="mb-3 col-md-6">
                        <label for="meta_description" class="form-label">meta description</label>
                        <input type="text" class="form-control" name="meta_description" id="meta_description" value="{{$we->translate('meta_description','ar')}}">
                    </div>
                </div>
                <div class="row">
                    <div class="mb-3 col-md-6">
                        <label for="meta_keyword" class="form-label">meta keyword</label>
                        <input type="text" class="form-control" name="meta_keyword" id="meta_keyword" value="{{$we->translate('meta_keyword','ar')}}">
                    </div>
                    <div class="mb-3 col-md-6">
                        <label for="alt_image" class="form-label">Alt image</label>
                        <input type="text" class="form-control" name="alt_image" id="alt_image" value="{{$we->translate('alt_image','ar')}}">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">{{__('Save')}}</button>
            </form>
        </div>
    </div>
@endsection
