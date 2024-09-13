<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    // Разрешаем массовое присвоение для указанных полей
    protected $fillable = ['name', 'description', 'price', 'category_id', 'code'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function getPriceForCount($count)
    {
        if (!is_null($this->pivot)) {
            return $this->pivot->count * $this->price;
        } else {
            return $this->price;
        }
    }
}
