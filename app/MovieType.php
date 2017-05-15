<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class MovieType extends Model
{
    public $timestamps='false';

    protected $table = 'movie_types';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id', 'name'

    ];

    public function movies()
    {
        return $this->hasMany('Movie::class');
    }
}
