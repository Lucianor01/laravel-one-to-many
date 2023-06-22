@extends('layouts.app')

@section('title')
    Project | Edit
@endsection

@section('content')
    <div class="container">
        <h1 class="text-center mt-3 text-uppercase">Edit Project</h1>

        {{-- VALIDATION ERRORS LISTS --}}
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $item)
                        <li>{{ $item }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        {{-- ! FORM --}}
        <form action="{{ route('admin.project.update', $project) }}" method="POST" enctype="multipart/form-data">

            @csrf

            @method('PUT')

            <div class="mb-3">
                <label for="project-title" class="form-label">Title</label>
                <input type="text" class="form-control" name="title" id="project-title" aria-describedby="helpId"
                    value="{{ old('title') ?? $project->title }}">
                @error('title')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="project-description" class="form-label">Description</label>
                <textarea class="form-control" name="description" id="project-description" rows="3">{{ old('description') ?? $project->description }}</textarea>
                @error('description')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="project-price" class="form-label">Price</label>
                <input type="number" class="form-control" name="price" step="0.01" id="project-price"
                    aria-describedby="helpId" value="{{ old('price') ?? $project->price }}">
                @error('price')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="project-image" class="form-label">Project Image</label>
                <input type="file" class="form-control" name="project_image" id="project-image"
                    aria-describedby="helpId">
                @error('project_image')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-success">Confirm Edit</button>
        </form>
    </div>
@endsection
