<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//use Illuminate\Database\Eloquent\SoftDeletes;

class client extends Model
{
	//use SoftDeletes;
	protected $fillable  = ['name','direccion_full','direccion' ,'barrio', 'localidad', 'latitude', 'longitude','telefono', 'celular', 'telefono2', 'acudiente', 'relacion'];
    //
}



          