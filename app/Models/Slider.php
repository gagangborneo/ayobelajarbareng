<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Slider extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'subtitle', 'image', 'link', 'is_active'];

    protected $casts = [
        'is_active' => 'boolean',
    ];
}
