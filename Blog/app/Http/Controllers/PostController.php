<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{


     public function index()
    {
        $posts=Post::all();//fetchi data from db and list it in view
        return view('Posts.index',compact('posts'));
    }


  
public function create()
{
    $categories = Categorie::all();
    return view('posts.create', compact('categories'));
}
    }


    public function store(Request $request)
    {
        $request->validate([

              'titre'=>'required|max:255',
        'contenu'=>'required|string',
        'image'=>'required',
        'categorie_id'=>'required'
        ]);
            Post::create($request->all());
        return redirect()->route('posts.index')
                        ->with('succes','Post a ajoute avec succes');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        return view('posts.index',compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        return view('posts.edit',compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {

    $request->validate([
        'titre'        => 'required',
        'contenu' => 'required',
        'image'=>'required',
        'categorie_id'=>'required'

    ]);
    $post->update($request->all());
    return redirect()->route('posts.index')
                     ->with('success', 'posts a ete modifie');
}

Public function destroy(Post $post){
$post->delete();
    return redirect()->route('posts.index')->with('success', 'post a ete supprime');
}
}

