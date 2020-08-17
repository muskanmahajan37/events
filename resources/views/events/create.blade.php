@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>
                    <div class="card-body">
                        <form action="/events" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="title">Event Title</label>
                                <input name="name" type="text" class="form-control" id="title" aria-describedby="titleHelp" value="{{ old('name') }}" placeholder="Event name">
                                @error('name')
                                <small class="text-danger"> {{$message}}</small>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="description">Event Description</label>
                                <input name="description" type="text" class="form-control" id="description" aria-describedby="purposeHelp" value="{{ old('description') }}" placeholder="Event Description">
                                @error('description')
                                <small class="text-danger"> {{$message}}</small>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="date">Purpose</label>
                                <input name="date" type="date" class="form-control" id="date" aria-describedby="purposeHelp" placeholder="Event Date">
                                @error('date')
                                <small class="text-danger"> {{$message}}</small>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-primary">Create questionnaire</button>
                        </form>


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
