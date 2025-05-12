<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ReactionType extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'icon'];

    public function reactions() {
        return $this->hasMany(Reaction::class);
    }
}
