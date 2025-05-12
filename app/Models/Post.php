<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;

    protected $casts = [
        'meta' => 'array',
    ];

    protected $fillable = ['user_id', 'pinned', 'title', 'slug', 'content', 'cover_image', 'meta', 'status', 'category_id'];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function comments() {
        return $this->hasMany(Comment::class);
    }

    public function reactions() {
        return $this->hasMany(Reaction::class);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }

}

