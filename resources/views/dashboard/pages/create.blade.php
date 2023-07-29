@extends('dashboard.layouts.app')
@section('content')
<div class="aiz-titlebar text-left mt-2 mb-3">
	<div class="row align-items-center">
		<div class="col">
			<h1 class="h3">Add About Us Section</h1>
		</div>
	</div>
</div>
<div class="card">
	<form action="{{ route('page.store') }}" method="POST" enctype="multipart/form-data">
		@csrf
		<div class="card-header">
			<h6 class="fw-600 mb-0">Page Content</h6>
		</div>

        <div class="card-body">
            <div class="form-group row">
                <label for="image" class="col-sm-2 col-from-label">Image</label>
                <div class="col-sm-10">
                    <input class="form-control" id="image-input" name="image" type="file">
                    <div id="image-preview"></div>
                </div>
            </div>
        </div>

		<div class="card-body">
			<div class="form-group row">
				<label class="col-sm-2 col-from-label" for="name">Title <span class="text-danger">*</span></label>
				<div class="col-sm-10">
					<input type="text" class="form-control" placeholder="Title" name="title" required>
				</div>
			</div>
		</div>

        <div class="card-body">
            <div class="form-group row">
                <label class="col-sm-2 col-from-label" for="name">Add Content<span class="text-danger">*</span></label>
                <div class="col-sm-10">
                    <textarea class="aiz-text-editor form-control" placeholder="Content.." data-min-height="300" name="contents" required></textarea>
                </div>
            </div>
        </div>

        <div class="text-right">
            <button type="submit" class="btn btn-primary">Save</button>
        </div>

	</form>
</div>
@endsection
