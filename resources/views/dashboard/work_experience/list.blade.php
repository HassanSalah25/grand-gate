@extends('dashboard.layouts.app')

@section('content')

    <div class="row">

        <div class="bg-light rounded h-100 p-4">
            <div class="row justify-content-between">
                <div class="col-2">
                    <h6 class="mb-4">{{__('All Works Exprience')}}</h6>
                </div>
                <div class="col-2">

                    <a href="{{route('work_experience.create')}}" type="button" class="btn btn-success m-2 w-50">{{__('New')}}</a>
                </div>
            </div>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Description</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($workexps as $workexp)
                    <tr>
                        <th scope="row">{{$workexp->id}}</th>
                        <td>{{$workexp->name}}</td>
                        <td>{!! $workexp->description !!}</td>
                        <td>
                            <a class="btn btn-info btn-icon btn-circle btn-sm"
                               href="{{ route('work_experience.edit', ['id' => $workexp->id]) }}"
                               >{{ __('Edit') }}
                                <i class="las la-edit"></i>
                            </a>

                            <a class="btn btn-danger  btn-icon btn-circle btn-sm"
                               href="{{ route('work_experience.destroy', $workexp->id) }}"
                               >{{ __('Delete') }}
                                <i class="las la-trash"></i>
                            </a></td>
                    </tr>
                @endforeach

                </tbody>
            </table>
        </div>
    </div>

@endsection
