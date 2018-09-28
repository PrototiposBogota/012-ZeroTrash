<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RecyclingType extends Model
{
    protected $table = 'recycling_type';
    protected $fillable = ['id', 'description'];
}
