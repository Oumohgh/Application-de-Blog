<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class CategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Categorie::all();
        // dd($categories);
        return view('categories.index',compact('categories'));

    }


    public function create()
    {
        return view('categories.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'nom'=>'required',
            'description'=>'required'
        ]);
        Categorie::create($request->all());
        return redirect()->route('categories.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(Categorie $categorie)
    {


        return view('categories.index',compact('categorie'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Categorie $categorie)
    {
        return view('categories.edit',compact('categorie'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Categorie $categorie)
    {

    $request->validate([
        'nom'        => 'required',
        'description' => 'required',

    ]);
    $categorie->update($request->all());
    return redirect()->route('categories.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Categorie $categorie)
    {
        $categorie->delete();
        return redirect()->route('categories.index');
    }
}
