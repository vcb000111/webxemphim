<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    //
    protected $table='images';
    protected $fillable=['movie_id','image'];
    public $timestamps=false;

    public function movie()
    {
        return $this->belongsTo('App\Movie');
    }
}
