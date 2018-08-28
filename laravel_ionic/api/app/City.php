<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $table = 'novelty';
    protected $fillable = ['id', 'description','id_departament'];
}
