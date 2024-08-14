<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Yangilik extends Model
{
    // Bu yerda kerakli konfiguratsiyalarni qo'shishingiz mumkin, masalan, jadval nomi:
    protected $table = 'yangiliks';
    // Agar kerak bo'lsa, fillable maydonlar
    protected $fillable = ['name', 'title', 'news'];
}
