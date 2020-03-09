<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    //
    protected $table='movies';
    protected $fillable=['vie_name','eng_name','cate_id','nation_id','language_id',
    'year_id','poster_image','information','trailer','director','actor','quality','point','time'];
    public $timestamps=false;
    //Xin chào mọi người nha hihihi
    public function cate()
    {
        return $this->belongsToMany('App\Cate');
    }

    public function language()
    {
        return $this->belongsTo('App\Language');
    }

    public function nation()
    {
        return $this->belongsTo('App\Nation');
    }

    public function year()
    {
        return $this->belongsTo('App\Year');
    }

    public function link()
    {
        return $this->hasOne('App\Link');
    }

    public function image()
    {
        return $this->hasMany('App\Image');
    }

    public function cabinet()
    {
        return $this->hasMany('App\Cabinet');
    }
}
