<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RecyclingType extends Model
{
    protected $table = 'recycling_type';
    protected $fillable = ['id', 'description'];
}
