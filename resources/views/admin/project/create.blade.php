@extends('layouts.app')

@section('title')
    Project | Create
@endsection

@section('content')
    <div class="container">
        <h1 class="text-center mt-3 text-uppercase">New Project</h1>
        {{-- ! FORM --}}
        <form action="{{ route('admin.project.store') }}" method="POST" enctype="multipart/form-data">

            @csrf
            {{-- ? INPUT TITLE --}}
            <div class="mb-3">
                <label for="project-title" class="form-label">Title</label>
                <input type="text" class="form-control" name="title" id="project-title" aria-describedby="helpId"
                    placeholder="enter project title">
                @error('title')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            {{-- ? INPUT DESCRIPTION --}}
            <div class="mb-3">
                <label for="project-description" class="form-label">Description</label>
                <textarea class="form-control" name="description" id="project-description" rows="3"
                    placeholder="enter project description"></textarea>
                @error('description')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            {{-- ? INPUT PRICE --}}
            <div class="mb-3">
                <label for="project-price" class="form-label">Price</label>
                <input type="number" class="form-control" name="price" step="0.01" id="project-price"
                    aria-describedby="helpId" placeholder="enter the price">
                @error('price')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            {{-- ? INPUT FILE --}}
            <div class="mb-3">
                <label for="project-image" class="form-label">Project Image</label>
                <input type="file" class="form-control" name="project_image" id="project-image"
                    aria-describedby="helpId">
                @error('project_image')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            {{-- ? CICLO SELECT TYPES --}}
            <div class="mb-3">
                <label for="project-types" class="form-label">Types</label>
                <select class="form-select form-select-lg @error('type_id') is-invalid @enderror" name="type_id"
                    id="project-types">
                    <option value="">-- Choose a category --</option>
                    @foreach ($types as $elem)
                        <option value="{{ $elem->id }}">{{ $elem->name }}</option>
                    @endforeach
                </select>
                @error('type_id')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-success mt-3">New Post</button>
        </form>
    </div>
@endsection
