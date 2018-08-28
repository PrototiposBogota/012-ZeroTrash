<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class novelty extends Model
{
    protected $table = 'novelty';
    protected $fillable = ['id', 'id_novelty_type', 'novelty','id_user','id_car'];
}
