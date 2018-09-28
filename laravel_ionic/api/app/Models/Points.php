<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Points extends Model
{
    protected $table = 'points';
    protected $fillable = ['id', 'id_user', 'id_recyling_inventory', 'points',];
}
