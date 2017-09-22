<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class loaitin extends Model
{
    protected $table='loaitin';
    public function ten()
    {
    	return $this->hasMany('App\ten','id_loaitin','id');
    }
    public function theloai()
    {
    	return $this->belongsTo('App\theloai','id_theloai','id');
    }
}
