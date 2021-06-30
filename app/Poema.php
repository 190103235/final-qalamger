<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Poema extends Model
{
    protected $fillable = [
        'title', 'description', 'category_id', 'text' ,'user_id',
    ];
}
