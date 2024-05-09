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

    // RELASI BELONGS TO || POST KE CATEGORY
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // RLEASI BELONGS TO || POST KE USER
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // RELASI ONE TO MANY || POST KE POSTVIEW
    public function views()
    {
        return $this->hasMany(PostView::class);
    }
}
