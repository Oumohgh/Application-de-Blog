<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Post extends Model
{
    protected $fillable = [
        'titre',
        'contenu',
        'image',
        'categorie_id',
    ];
    use HasFactory;
    public function Categories()
    {
        return $this->BelongsTo(Post::class);
    }
    public function Tags()
    {
        return $this->belongsToMany(Tag::class);
    }
}
