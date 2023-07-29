@extends('dashboard.layouts.app')

@section('content')

    <div class="row m-4">
        <div class="bg-light rounded h-100 p-4">
            <h6 class="mb-4">Basic Form</h6>
            <form  action="{{route('product.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="lang" value="en">
                <div class="mb-3">
                    <label for="image" class="form-label">Image</label>
                    <input class="form-control" id="image-input" name="image" type="file">
                    <div id="image-preview"></div>
                </div>

                <div class="mb-3">
                    <label for="images" class="form-label">Images</label>
                    <input class="form-control" id="images-input" name="images[]" type="file" id="images" multiple>
                    <div id="images-preview"></div>
                </div>

                <div class="row">
                    <div class="mb-3 col-md-6">
                        <label for="name" class="form-label">Name in English</label>
                        <input type="text" class="form-control" name="name" id="name" >
                    </div>
                </div>
                <div class="row">
                    <div class="mb-3 ">
                        <label for="description" class="form-label">Description in English</label>
                        <div class="col">
                            <textarea class="aiz-text-editor form-control" placeholder="Description.." data-min-height="300" name="description" required></textarea>
                        </div>
                    </div>
                </div>
                <div class="mb-3 mt-3">
                    <h2 for="description" class="form-label">SEO Information</h2>
                </div>
                <div class="mb-3">
                    <label for="canonical" class="form-label">Canonical</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="canonical" >
                    </div>
                </div>
                <div class="row">
                    <div class="mb-3 col-md-6">
                        <label for="slug" class="form-label">slug</label>
                        <input type="text" class="form-control" name="slug" id="slug" >
                    </div>
                    <div class="mb-3 col-md-6">
                        <label for="new_slug" class="form-label">New Slug</label>
                        <input type="text" class="form-control" name="new_slug" id="new_slug" >
                    </div>
                </div>
                <div class="row">
                    <div class="mb-3 col-md-6">
                        <label for="meta_title" class="form-label">meta title</label>
                        <input type="text" class="form-control" name="meta_title" id="meta_title" >
                    </div>
                    <div class="mb-3 col-md-6">
                        <label for="meta_description" class="form-label">meta description</label>
                        <input type="text" class="form-control" name="meta_description" id="meta_description" >
                    </div>
                </div>
                <div class="row">
                    <div class="mb-3 col-md-6">
                        <label for="meta_keyword" class="form-label">meta keyword</label>
                        <input type="text" class="form-control" name="meta_keyword" id="meta_keyword" >
                    </div>
                    <div class="mb-3 col-md-6">
                        <label for="alt_image" class="form-label">Alt image</label>
                        <input type="text" class="form-control" name="alt_image" id="alt_image" >
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">{{__('Save')}}</button>
            </form>
        </div>
    </div>
@endsection
