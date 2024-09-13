<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class BasketController extends Controller
{
    public function basket()
    {
        $orderId = session('order_id');
        $order = null;
        if (!is_null($orderId)) {
            $order = Order::find($orderId);
        }

        if (is_null($order)) {
            $order = new Order(); // Создаем пустой объект Order, если заказа нет
        }

        return view('basket', compact('order'));
    }

    public function basketСonfirm(Request $request)
    {
        $orderId = session('order_id');
        $order = Order::find($orderId);

        // Проверка, существует ли заказ и содержит ли он продукты
        if (is_null($order) || $order->products->isEmpty()) {
            return redirect()->route('index'); // Если заказа нет или корзина пуста
        }
        $result=$order->saveOrder( $request->your_name, $request->phone);

        session()->flash('success', 'Ваш заказ оформлен!');
        return redirect()->route('index');
    }





    public function basketPlace()
    {
        $orderId = session('order_id');
        $order = Order::find($orderId);

        // Проверка, существует ли заказ и содержит ли он продукты
        if (is_null($order) || $order->products->isEmpty()) {
            return redirect()->route('index'); // Если заказа нет или корзина пуста
        }

        return view('order',compact('order'));
    }



    public function basketAdd($product_id)
    {
        $orderId = session('order_id');
        if (is_null($orderId)){
            $order = Order::create(); // Создаем новый заказ
            session(['order_id' => $order->id]); // Сохраняем id заказа в сессии
        } else {
            $order = Order::find($orderId); // Ищем существующий заказ по ID
            if (is_null($order)) {
                $order = Order::create(); // Если заказ не найден, создаём новый
                session(['order_id' => $order->id]); // Обновляем id заказа в сессии
            }
        }
        if ($order->products->contains($product_id)){
           $pivotRow=$order->products()->where('product_id',$product_id)->first()->pivot;
            $pivotRow->count++;
            $pivotRow->save();
        }
        else {
            $order->products()->attach($product_id); // Присоединяем продукт к заказу
        }
        return redirect()->route('basket');
        //return view('basket', compact('order'));
    }









    public function basketRemove($product_id)
    {
        $orderId = session('order_id');
        if (is_null($orderId)){
            return redirect()->route('basket');
            //return view('basket', compact('order'));
        }
        $order = Order::find($orderId); // Ищем существующий заказ по ID

        if ($order->products->contains($product_id)){
            $pivotRow=$order->products()->where('product_id',$product_id)->first()->pivot;
            if($pivotRow->count<2){
                $order->products()->detach($product_id); // Присоединяем продукт к заказу
            }
            else {
                $pivotRow->count--;
                $pivotRow->save();
            }

        }
        else {
            $order->products()->detach($product_id); // Присоединяем продукт к заказу
        }




        return redirect()->route('basket');
        //return view('basket', compact('order'));



    }


}

