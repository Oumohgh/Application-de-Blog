<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Post</title>


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

<form method="POST" action ="/posts">
  @csrf
  <div class="input-group mb-3">
    <span class="input-group-text bg-success text-white">
      Titre
    </span>
    <input
      type="text" class="form-control" placeholder="Titre du post" name="title" required>
  </div>

  <div class="input-group mb-3">
    <span class="input-group-text bg-danger text-white">
      Contenu
    </span>
    <textarea  class="form-control"
 name="content"
      rows="4"
      placeholder="Contenu du post"
      required
    ></textarea>
  </div>

  <div class="input-group mb-3">
    <span class="input-group-text bg-success text-white">
      Image
    </span>
    <input type="file" class="form-control" name="image"
    >
  </div>


  <div class="input-group mb-4">
    <span class="input-group-text bg-danger text-white">
      Categorie
    </span>
    <select class="form-select" name="category" required>
      <option selected disabled>Choisir une categorie</option>

    </select>
  </div>


  <div class="d-flex justify-content-end">
    <button type="submit"  class="btn btn-success me-2">
      Enregistrer
    </button>
    <a href="/posts" class="btn btn-danger">
      Annuler
    </a>
  </div>

</form>
