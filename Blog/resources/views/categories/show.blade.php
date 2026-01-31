<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Posts</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container mt-5">

    <div class="d-flex justify-content-between mb-3">
        <h2 class="text-danger">Posts</h2>
        <a href="{{ route('posts.create') }}" class="btn btn-success">Add Post</a>
    </div>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table table-bordered table-striped">
        <thead class="table-danger">
            <tr>
                <th>Title</th>
                <th>Content</th>
                <th>Category</th>
                <th>Actions</th>
            </tr>
        </thead>

        <tbody>
        @foreach($posts as $post)
            <tr>
                <td>{{ $post->titre }}</td>
                <td>{{ Str::limit($post->contenu, 50) }}</td>
                <td>{{ $post->categorie_id }}</td>

                <td class="d-flex gap-2">
                    <a href="{{ route('posts.edit', $post) }}" class="btn btn-warning btn-sm">
                        Edit
                    </a>

                    <form action="{{ route('categories.destroy', $post) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm">
                            Delete
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

</div>

</body>
</html>
