<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class theloai extends Model
{
    protected $table='theloai';
    public function loaitin()
    {
    	return $this->hasMany('App\loaitin','id_theloai','id');
    }
    public function ten()
    {
    	return $this->hasManyThrough('App\ten','App\loaitin','id_theloai','id_loaitin','id');
    }
}
