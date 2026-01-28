@extends('layouts.app')

@section('title', 'Add Category')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h2 class="mb-0">Add New Category</h2>
                </div>
                <div class="card-body">
                    <form action="{{ route('categories.store') }}" method="POST">
                        @csrf

                        <!-- Name Field -->
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input
                                type="text"
                                class="form-control @error('name') is-invalid @enderror"
                                id="name"
                                name="name"
                                value="{{ old('name') }}"
                                required
                            >
                            @error('name')
                                <div class="invalid-feedback d-block">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Description Field -->
                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea
                                class="form-control @error('description') is-invalid @enderror"
                                id="description"
                                name="description"
                                rows="4"
                            >{{ old('description') }}</textarea>
                            @error('description')
                                <div class="invalid-feedback d-block">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Form Actions -->
                        <div class="d-flex gap-2">
                            <button type="submit" class="btn btn-primary">Save Category</button>
                            <a href="{{ route('categories.index') }}" class="btn btn-secondary">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
