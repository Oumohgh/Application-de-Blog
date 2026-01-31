<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>


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
                    <a class="nav-link" href="/posts">Posts</a>
                </li>
            </ul>
        </div>
    </div>
</nav>


<section class="bg-success text-white text-center py-5">
    <div class="container">
        <h1 class="display-4 fw-bold">Bienvenue sur mon blog</h1>
        <p class="lead mt-3">Un blog </p>
        <a href="/posts" class="btn btn-light btn-lg mt-3">
            Explorer les publications
        </a>
    </div>
</section>


<div class="container my-5">
    <div class="row text-center">
        <div class="col-md-6 mb-4">
            <h3 class="text-success">Categories</h3>
            <p class="text-muted">Organisez votre contenu facilement.</p>
        </div>

        <div class="col-md-6 mb-4">
            <h3 class="text-danger">Posts</h3>
            <p class="text-muted">Partagez vos articles avec le monde.</p>
        </div>
    </div>
</div>


<footer class="bg-danger text-white text-center py-3">
    <div class="container">
        <small>© 2026 </small>
    </div>
</footer>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
