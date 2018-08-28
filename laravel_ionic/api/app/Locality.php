<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Locality extends Model
{
    protected $table = 'locality';
    protected $fillable = ['id', 'description','id_departament'];
}
