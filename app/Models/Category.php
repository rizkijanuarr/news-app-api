<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;


    // MENYESUAIKAN KELAS
    protected $fillable = [
        'name', 'slug', 'image'
    ];

    // RELASI ONE TO MANY || CATEGORY KE POST
    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}
