@extends('dashboard.layouts.app')

@section('content')
<div class="aiz-titlebar text-left mt-2 mb-3">
	<div class="row align-items-center">
		<div class="col">
			<h1 class="h3">Edit Abou Us Information</h1>
		</div>
	</div>
</div>

<div class="row m-4">
    <div class="row">
        <button onclick="openTab('item1',this)" id="btn_item1" class="col btn">English</button>
        <button onclick="openTab('item2',this)" id="btn_item2" class="col btn">Arabic</button>
    </div>
    <div class="bg-light rounded h-100 p-4">
	<form  action="{{ route('page.update', $page->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="_method" value="PATCH">
        <div class="card-body">
            <div class="form-group row">
                <label for="image" class="col-sm-2 col-from-label">Image</label>
                <div class="col-sm-10">
                    <input class="form-control" id="image-input" name="image" type="file">
                    <div id="image-preview">
                        <img width="100" height="100" src="{{asset($page->getImg())}}">
                    </div>
                </div>
            </div>
        </div>
        <div id="item1" class="tab-content" >
                <div class="card-body">
                    <div class="form-group row">
                        <label class="col-sm-2 col-from-label" for="name">Title <span class="text-danger">*</span></label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" placeholder="Title" name="title" value="{{$page->translate('title','en')}}" >
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="form-group row">
                        <label class="col-sm-2 col-from-label" for="name">Add Content<span class="text-danger">*</span></label>
                        <div class="col-sm-10">
                            <textarea class="aiz-text-editor form-control" placeholder="Content.." data-min-height="300" name="contents" >{!! $page->translate('content','en') !!}</textarea>
                        </div>
                    </div>
                </div>
                <div class="text-right">
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
        </div>

        <div id="item2" class="tab-content" >
            <div class="card-body">
                <div class="form-group row">
                    <label class="col-sm-2 col-from-label" for="name">Title <span class="text-danger">*</span></label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" placeholder="Title" name="title_ar" value="{{$page->translate('title','ar')}}" >
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="form-group row">
                    <label class="col-sm-2 col-from-label" for="name">Add Content<span class="text-danger">*</span></label>
                    <div class="col-sm-10">
                        <textarea class="aiz-text-editor form-control" placeholder="Content.." data-min-height="300" name="contents_ar" >{!! $page->translate('content','ar') !!}</textarea>
                    </div>
                </div>
            </div>
            <div class="text-right">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </div>
    </form>
    </div>
</div>
@endsection
