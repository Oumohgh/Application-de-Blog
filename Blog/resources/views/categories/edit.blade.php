<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit  Post</title>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<nav class="navbar navbar-expand-lg navbar-dark bg-danger">
    <div class="container">
        <a class="navbar-brand fw-bold" href="/app">Blog</a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">

            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link active" href="/app">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/categories">Categories</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/posts">Categorie</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class="container my-5">

    <h2 class="text-success mb-4">Edit Categorie</h2>

    <div class="card shadow-sm">
        <div class="card-body">

            <form action="{{ route('categories.update', $categorie) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label class="form-label">Title</label>
                    <input type="text" name="title"
                           value="{{ $categories->titre }}"
                           class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Content</label>
                    <textarea name="content" rows="5"
                              class="form-control" required>{{ $post->content }}</textarea>
                </div>

                <div class="d-flex justify-content-end">
                    <a href="{{ route('categories.index') }}" class="btn btn-secondary me-2">
                        return
                    </a>
                    <button type="submit" class="btn btn-success">
                        Modifier
                    </button>
                </div>

            </form>

        </div>
    </div>

</div>
@endsection
