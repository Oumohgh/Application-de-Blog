<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


    class Categorie extends Model
{
    protected $fillable = ['nom', 'description'];

    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}

