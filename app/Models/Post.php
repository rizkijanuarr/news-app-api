<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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

    // MENGGUNAKAN ACCESSOR
    protected function image(): Attribute
    {
        return Attribute::make(
            get: fn ($image) => asset('/storage/posts/' . $image),
        );
    }
}
