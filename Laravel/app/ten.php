<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ten extends Model
{
    protected $table='ten';
    public function ten()
    {
    	return $this->belongsTo('App\loaitin','id_loaitin','id');
    }
}
