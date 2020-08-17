@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <a href="/events/create" class="btn btn-dark">Create a new event</a>
                    </div>
                </div>

                <div class="card mt-4">
                    <div class="card-header">My Questionnaires</div>

                    <div class="card-body">
                        <ul class="list-group">

                                <li class="list-group-item">

                                    <div class="mt-2">
                                        <small class="font-weight-bold">Share URL</small>
                                        <p>
                                        </p>
                                    </div>
                                </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
