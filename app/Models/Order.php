<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Order extends Model
{
    public function products()
    {
        return $this->belongsToMany(Product::class)->withPivot('count')->withTimestamps();
    }

    public function getFullPrice()
    {
        $sum = 0;
        foreach ($this->products as $product) {
            $sum += $product->getPriceForCount($product->pivot->count);
        }
        return $sum;
    }






    public function saveOrder($your_name, $phone)
    {
        if ($this->staus==0){
            $this->phone=$phone;
            $this->name=$your_name;
            $this->status=1;
            $this->save();

            session()->forget('order_id');
            return true;

        }
        else{
            return false;
        }


    }

    use HasFactory;
}
