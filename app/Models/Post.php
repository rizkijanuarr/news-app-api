<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // MENYESUAIKAN KELAS
    protected $fillable = [
        'title', 'slug', 'category_id', 'user_id', 'content', 'image'
    ];

    // RELASI BELONGS TO
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
