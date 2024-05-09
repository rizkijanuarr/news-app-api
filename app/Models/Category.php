<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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

    // MENGGUNAKAN ACCESSOR
    protected function image(): Attribute
    {
        return Attribute::make(
            get: fn ($image) => asset('/storage/categories/' . $image),
        );
    }
}
