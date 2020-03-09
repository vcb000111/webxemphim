<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Year extends Model
{
    //
    protected $table='years';
    protected $fillable=['year'];
    public $timestamps=false;

    public function movie()
    {
        return $this->hasMany('App\Movie');
    }
}
