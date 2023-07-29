@extends('dashboard.layouts.app')

@section('content')
<div class="aiz-titlebar text-left mt-2 mb-3">
	<div class="row align-items-center">
		<div class="col">
            <h6 class="mb-0 fw-600">About Us Sections</h6>
		</div>
	</div>
</div>

<div class="card">
	<div class="card-header">
		<a href="{{ route('page.create') }}" class="btn btn-primary">Add New Page</a>
	</div>
	<div class="card-body">
		<table class="table aiz-table mb-0">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th data-breakpoints="md">URL</th>
                <th class="text-right">Actions</th>
            </tr>
        </thead>
        <tbody>
        	@foreach (\App\Models\Page::all() as $key => $page)
        	<tr>
        		<td>{{ $key+1 }}</td>
        		<td>{{ $page->title }}</td>
        		<td>
                    {{ route('home') }}/{{ $page->id }}
				</td>
        		<td class="text-right">

					<a href="{{route('page.edit',$page->id)}}" class="btn btn-icon btn-circle btn-sm btn-primary" title="Edit">
						<i class="fas fa-pen"></i>
					</a>
                    <a  class="btn btn-danger btn-icon btn-circle btn-sm " href="{{ route('page.delete', $page->id)}} " title="Delete">
                        <i class="fas fa-trash"></i>
                    </a>

        		</td>
        	</tr>
        	@endforeach
        </tbody>
    </table>
	</div>
</div>
@endsection

@section('modal')
    @include('dashboard.inc.delete_modal')
@endsection
