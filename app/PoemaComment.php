<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PoemaComment extends Model
{
    //
    protected $fillable = [
        'poema_id', 'user_id'
    ];
}
