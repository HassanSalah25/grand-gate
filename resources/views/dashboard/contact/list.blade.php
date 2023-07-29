@extends('dashboard.layouts.app')

@section('content')

    <div class="row">

        <div class="bg-light rounded h-100 p-4">
            <div class="row justify-content-between">
                <div class="col-2">
                    <h6 class="mb-4">{{__('All Complains and Suggestions')}}</h6>
                </div>

            </div>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Company</th>
                    <th scope="col">City</th>
                    <th scope="col">Country</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($contacts as $contact)
                    <tr>
                        <th scope="row">{{$contact->id}}</th>
                        <td>{{$contact->name}}</td>
                        <td>{{$contact->email}}</td>
                        <td>{{$contact->company}}</td>
                        <td>{{$contact->city}}</td>
                        <td>{{$contact->country}}</td>
                        <td>{{$contact->phone}}</td>
                        <td>
                            <a class="btn btn-info btn-icon btn-circle btn-sm"
                               href="{{ route('contact.show', ['contact' => $contact]) }}"
                               >
                                <i class="fas fa-eye"></i>
                            </a>
                        </td>
                    </tr>
                @endforeach

                </tbody>
            </table>
        </div>
    </div>

@endsection
