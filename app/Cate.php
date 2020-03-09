<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cate extends Model
{
    //
    protected $table='cates';
    protected $fillable=['cate_name'];
    public $timestamps=false;

    public function movie()
    {
        return $this->belongsToMany('App\Movie');
    }
}
