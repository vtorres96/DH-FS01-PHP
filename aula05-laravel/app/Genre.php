<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    protected $table = "genres";
    protected $primaryKey = "id";
    protected $fillable = [
        'description'
    ];

    public function movies(){
        return $this->hasMany('App\Movie', 'genre_id', 'id');
    }
}
