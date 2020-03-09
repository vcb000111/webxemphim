<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cabinet extends Model
{
    //
    protected $table='cabinets';
    protected $fillable=['movie_id','user_id'];
    public $timestamps=false;

    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function movie()
    {
        return $this->belongsTo('App\Movie');
    }
}
