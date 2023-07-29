@extends('dashboard.layouts.app')

@section('content')

    <div class="row m-4">
        <div class="row">
            <button onclick="openTab('item1',this)" id="btn_item1" class="col btn">English</button>
            <button onclick="openTab('item2',this)" id="btn_item2" class="col btn">Arabic</button>
        </div>
        <div class="bg-light rounded h-100 p-4">
            <h6 class="mb-4">Basic Form</h6>
            <form id="item1" class="tab-content" action="{{route('product.update',$product->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="lang" value="en">
                <div class="mb-3">
                    <label for="image" class="form-label">Image</label>
                    <input class="form-control" name="image" type="file" id="image-input">
                    <div id="image-preview">
                            <img class="image" width="100" src="{{asset($product->getImg())}}" >
                    </div>
                </div>

                <div class="mb-3">
                    <label for="images" class="form-label">Images</label>
                    <input class="form-control" id="images-input" name="images[]" type="file" id="images" multiple>
                    <div id="images-preview">
                        @foreach($product->convertPhotos() as $img)
                            <img class="images" width="100" src="{{asset($img)}}" >
                        @endforeach
                    </div>
                </div>

                <div class="row">
                    <div class="mb-3 col-md-6">
                        <label for="name" class="form-label">Name in English</label>
                        <input type="text" class="form-control" name="name" id="name" value="{{$product->name}}">
                    </div>
                </div>
                <div class="row">
                    <div class="mb-3 col-md-6">
                        <label for="description" class="form-label">Description in English</label>
                        <div class="col">
                            <textarea class="aiz-text-editor form-control" placeholder="Description.." data-min-height="300" name="description" required>{{$product->description}}</textarea>
                        </div>
                    </div>
                </div>

                <div class="mb-3 mt-3">
                    <h2 for="content" class="form-label">SEO Information</h2>
                </div>
                <div class="mb-3">
                    <label for="canonical" class="form-label">Canonical</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="canonical" value="{{$product->canonical}}">
                    </div>
                </div>
                <div class="row">
                    <div class="mb-3 col-md-6">
                        <label for="slug" class="form-label">slug</label>
                        <input type="text" class="form-control" name="slug" id="slug" value="{{$product->slug}}">
                    </div>
                    <div class="mb-3 col-md-6">
                        <label for="new_slug" class="form-label">New Slug</label>
                        <input type="text" class="form-control" name="new_slug" id="new_slug" value="{{$product->new_slug}}">
                    </div>
                </div>
                <div class="row">
                    <div class="mb-3 col-md-6">
                        <label for="meta_title" class="form-label">meta title</label>
                        <input type="text" class="form-control" name="meta_title" id="meta_title" value="{{$product->meta_title}}">
                    </div>
                    <div class="mb-3 col-md-6">
                        <label for="meta_description" class="form-label">meta description</label>
                        <input type="text" class="form-control" name="meta_description" id="meta_description" value="{{$product->meta_description}}">
                    </div>
                </div>
                <div class="row">
                    <div class="mb-3 col-md-6">
                        <label for="meta_keyword" class="form-label">meta keyword</label>
                        <input type="text" class="form-control" name="meta_keyword" id="meta_keyword" value="{{$product->meta_keyword}}">
                    </div>
                    <div class="mb-3 col-md-6">
                        <label for="alt_image" class="form-label">Alt image</label>
                        <input type="text" class="form-control" name="alt_image" id="alt_image" value="{{$product->alt_image}}">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">{{__('Save')}}</button>
            </form>
            <form id="item2" class="tab-content" action="{{route('product.update',$product->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="lang" value="ar">
                <div class="mb-3">
                    <label for="image" class="form-label">Image</label>
                    <input class="form-control" name="image" type="file" id="image">
                    <div id="image-preview">
                        <img class="image" width="100" src="{{asset($product->getImg())}}" >
                    </div>
                </div>
                <div class="mb-3">
                    <label for="images" class="form-label">Images</label>
                    <input class="form-control" id="images-input" name="images[]" type="file" id="images" multiple>
                    <div id="images-preview">
                        @foreach($product->convertPhotos() as $img)
                            <img class="images" width="100" src="{{asset($img)}}" >
                        @endforeach
                    </div>
                </div>
                <div class="row">
                    <div class="mb-3 col-md-6">
                        <label for="name" class="form-label">Name in Arabic</label>
                        <input type="text" class="form-control" name="name" id="name" value="{{$product->translate('name','ar')}}">
                    </div>
                </div>
                <div class="row">
                    <div class="mb-3 col-md-6">
                        <label for="description" class="form-label">Description in Arabic</label>
                        <div class="col">
                            <textarea class="aiz-text-editor form-control" placeholder="Description.." data-min-height="300" name="description" required>{{$product->translate('description','ar')}}</textarea>
                        </div>
                    </div>
                </div>
                <div class="mb-3 mt-3">
                    <h2 for="content" class="form-label">SEO Information</h2>
                </div>
                <div class="mb-3">
                    <label for="canonical" class="form-label">Canonical</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="canonical" value="{{$product->translate('canonical','ar')}}">
                    </div>
                </div>
                <div class="row">
                    <div class="mb-3 col-md-6">
                        <label for="slug" class="form-label">slug</label>
                        <input type="text" class="form-control" name="slug" id="slug" value="{{$product->translate('slug','ar')}}">
                    </div>
                    <div class="mb-3 col-md-6">
                        <label for="new_slug" class="form-label">New Slug</label>
                        <input type="text" class="form-control" name="new_slug" id="new_slug" value="{{$product->translate('new_slug','ar')}}">
                    </div>
                </div>
                <div class="row">
                    <div class="mb-3 col-md-6">
                        <label for="meta_title" class="form-label">meta title</label>
                        <input type="text" class="form-control" name="meta_title" id="meta_title" value="{{$product->translate('meta_title','ar')}}">
                    </div>
                    <div class="mb-3 col-md-6">
                        <label for="meta_description" class="form-label">meta description</label>
                        <input type="text" class="form-control" name="meta_description" id="meta_description" value="{{$product->translate('meta_description','ar')}}">
                    </div>
                </div>
                <div class="row">
                    <div class="mb-3 col-md-6">
                        <label for="meta_keyword" class="form-label">meta keyword</label>
                        <input type="text" class="form-control" name="meta_keyword" id="meta_keyword" value="{{$product->translate('meta_keyword','ar')}}">
                    </div>
                    <div class="mb-3 col-md-6">
                        <label for="alt_image" class="form-label">Alt image</label>
                        <input type="text" class="form-control" name="alt_image" id="alt_image" value="{{$product->translate('alt_image','ar')}}">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">{{__('Save')}}</button>
            </form>
        </div>
    </div>
@endsection
