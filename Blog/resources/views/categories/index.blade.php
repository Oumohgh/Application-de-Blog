@extends('layouts.app')

@section('title', 'Categories')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1>Categories</h1>
        <a href="{{ route('categories.create') }}" class="btn btn-primary">Add Category</a>
    </div>

    <div class="table-responsive">
        <table class="table table-striped table-hover">
            <thead class="table-dark">
                <tr>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($categories as $category)
                    <tr>
                        <td>{{ $category->name }}</td>
                        <td>{{ $category->description }}</td>
                        <td>
<a href="{{ route('categories.show', $category->id) }}" class="btn btn-sm btn-info">View</a>
                            <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-sm btn-warning">Edit</a>
                            <form action="{{ route('categories.destroy', $category->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3" class="text-center text-muted">No categories found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
