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

    public function genre(){
        return $this->hasOne('App\Genre', 'id', 'genre_id');
    }
}
