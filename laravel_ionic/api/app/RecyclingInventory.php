<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RecyclingInventory extends Model
{
    protected $table = 'recycling_inventory';
    protected $fillable = ['id', 'id_recycling_type', 'cantidad', 'id_user'];
}
