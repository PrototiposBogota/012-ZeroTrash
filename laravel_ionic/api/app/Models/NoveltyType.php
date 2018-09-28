<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NoveltyType extends Model
{
    protected $table = 'novelty_type';
    protected $fillable = ['id', 'description'];
}
