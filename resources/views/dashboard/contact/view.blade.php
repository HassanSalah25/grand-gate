@extends('dashboard.layouts.app')

@section('content')

    <div class="row m-4">
        <div class="bg-light rounded h-100 p-4">
            <h6 class="mb-4">Basic Form</h6>
            <form  action="" method="POST" enctype="multipart/form-data">
                @csrf

                <div id="item1" class="tab-content">
                    <div class="row">
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" name="name" id="name" value="{{$contact->name}}" disabled>
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3">
                            <label for="content" class="form-label">Email</label>
                            <input type="text" class="form-control" name="name" id="name" value="{{$contact->email}}" disabled>
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3">
                            <label for="content" class="form-label">Company</label>
                            <input type="text" class="form-control" name="name" id="name" value="{{$contact->company}}" disabled>
                        </div>
                    </div>
                     <div class="row">
                        <div class="mb-3">
                            <label for="content" class="form-label">City</label>
                            <input type="text" class="form-control" name="name" id="name" value="{{$contact->city}}" disabled>
                        </div>
                    </div>
                     <div class="row">
                        <div class="mb-3">
                            <label for="content" class="form-label">Country</label>
                            <input type="text" class="form-control" name="name" id="name" value="{{$contact->country}}" disabled>
                        </div>
                    </div>
                     <div class="row">
                        <div class="mb-3">
                            <label for="content" class="form-label">Address</label>
                            <input type="text" class="form-control" name="name" id="name" value="{{$contact->address}}" disabled>
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3">
                            <label for="content" class="form-label">Phone</label>
                            <input type="text" class="form-control" name="name" id="name" value="{{$contact->telephone}}" disabled>
                        </div>
                    </div>
                <div class="row">
                        <div class="mb-3">
                            <label for="content" class="form-label">Fax</label>
                            <input type="text" class="form-control" name="name" id="name" value="{{$contact->fax}}" disabled>
                        </div>
                    </div>
                <div class="row">
                        <div class="mb-3">
                            <label for="content" class="form-label">Message</label>
                            <textarea type="text" class="form-control" name="name" id="name" disabled>{{$contact->message}}</textarea>
                        </div>
                    </div>

                </div>
            </form>
        </div>
    </div>
@endsection
