<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Funtion extends Model
{
    protected $fillable = [
        'start',
        'end',
        'available',
        'type'
    ];
}
