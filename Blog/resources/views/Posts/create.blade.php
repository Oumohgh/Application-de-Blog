<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Post</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<nav class="navbar navbar-expand-lg navbar-dark bg-danger">
    <div class="container">
        <a class="navbar-brand fw-bold" href="/app">Blog</a>

        <div class="collapse navbar-collapse">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/app">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/categories">Categories</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="/posts">Posts</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container mt-5">

    <h2 class="text-danger mb-4">Create New Post</h2>


    

    <form method="POST"
          action="{{ route('posts.store') }}"
          enctype="multipart/form-data">

        @csrf

        <div class="input-group mb-3">
            <span class="input-group-text bg-success text-white">Titre</span>
            <input type="text"
                   class="form-control"
                   name="titre"
                   required>
        </div>

        <div class="input-group mb-3">
            <span class="input-group-text bg-danger text-white">Contenu</span>
            <textarea class="form-control"
                      name="contenu"
                      rows="4"
                      required></textarea>
        </div>

        <div class="input-group mb-3">
            <span class="input-group-text bg-success text-white">Image</span>
            <input type="file"
                   class="form-control"
                   name="image"
                   required>
        </div>

        <div class="input-group mb-4">
            <span class="input-group-text bg-danger text-white">Categorie</span>
            <select class="form-select" name="categorie_id" required>
                <option disabled selected>Choisir une categorie</option>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}">
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="d-flex justify-content-end">
            <button type="submit" class="btn btn-success">
                Enregistrer
            </button>
        </div>

    </form>
</div>

</body>
</html>
