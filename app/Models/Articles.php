<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Articles extends Model
{
    use HasFactory;

    // Разрешаем массовое присвоение для указанных полей
    protected $fillable = ['name', 'code', 'text'];


}
