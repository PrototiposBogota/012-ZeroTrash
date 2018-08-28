<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Departement extends Model
{
    protected $table = 'departament';
    protected $fillable = ['id', 'description','id_country'];
}
