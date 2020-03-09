<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
    //hihi
    protected $table='links';
    protected $fillable=['movie_id','link1','link2','link3','link4','link5'];
    public $timestamps=false;

    public function movie()
    {
        return $this->hasOne('App\Movie');
    }
}
