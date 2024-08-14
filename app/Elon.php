<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Elon extends Model
{
    protected $fillable = [
        'name', 'surname', 'news','image','file',
    ];
}
