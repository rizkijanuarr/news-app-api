<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Slider extends Model
{
    use HasFactory;

    // MENYESUAIKAN KELAS
    protected $fillable = [
        'image', 'link'
    ];

    // MENGGUNAKAN ACCESSOR
    protected function image(): Attribute
    {
        return Attribute::make(
            get: fn ($image) => asset('/storage/sliders/' . $image),
        );
    }
}
