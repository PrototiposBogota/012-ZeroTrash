<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Locality extends Model
{
    protected $table = 'locality';
    protected $fillable = ['id', 'description','id_departament'];
}
