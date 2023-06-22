@extends('layouts.app')

@section('title')
    Project | Show
@endsection

@section('content')
    <div class="container">
        <h1 class="text-center mt-3 text-uppercase">Single Project</h1>

        <div class="col-3 m-auto">
            <div class="card h-100">
                <img class="card-img-top" src="{{ asset('storage/' . $project->project_image) }}" alt="{{ $project->title }}">
                <div class="card-body">
                    <h4 class="card-title text-uppercase">{{ $project->title }}</h4>
                    <p class="card-text"><strong>Description:</strong> {{ $project->description }}</p>
                    <p class="card-text"><strong>Price:</strong> {{ $project->price }}&euro;</p>
                </div>
            </div>
        </div>
    </div>
@endsection
