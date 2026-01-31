<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;
class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Post::create([

            'titre'=>'Post 1',
        'contenu'=>'mohammed@gmail.com',
        'image'=>'https://picsum.photos/200/300.webp',
        'categorie_id'=>'2'

        ]);
    }
}
