<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    protected $fillable = ['name', 'birthday', 't_turi', 'q_turi', 'fakultet', 't_nomi', 'kurs'];
}
