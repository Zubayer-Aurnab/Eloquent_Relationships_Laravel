<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Post extends Model
{
    use HasFactory;

    // Allow mass assignment for the `title` attribute
    protected $fillable = ['title'];

    public function comment()
    {
        return $this->hasMany(Comment::class);
    }
}