<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Boglanish extends Model
{
    protected $fillable = [
        'name', 'email', 'number','title',
    ];
}
