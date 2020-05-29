<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $table = "movies";
    protected $primaryKey = "id";
    protected $fillable = [
        'title', 'synopsis', 'cover_image'
    ];
}
