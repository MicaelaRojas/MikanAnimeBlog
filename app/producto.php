<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class producto extends Model
{
 protected $table='producto';
 
 protected $primaryKey = 'idproducto';

 protected $fillable =  array('nombre_p', 'marca', 'precio','cantidad','categoria');

 protected $hidden = ['created_at','updated_at'];
}