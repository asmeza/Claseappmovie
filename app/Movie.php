<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{

    public $timestamps='false';


    protected $table = 'movies';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id', 'name', 'movie_types_id'

    ];

    public function movietype()
{
    return $this->belongsTo('MovieType::class');
}

}
