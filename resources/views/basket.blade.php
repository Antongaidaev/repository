@extends('master')
@section('title', 'Корзина')
@section('content')
    <div class="col-12">
        <div class="main__title">
            <h1 style="color: #fff">Корзина {{$order->getFullPrice()}}</h1>
            <a href="catalog_arhiv?brand=&type=" class="main__title-link">Архив</a>
            <a href="new_order.php" class="main__title-link">Добавить</a>
        </div>
    </div>
    <div class="col-12">
        <div class="main__table-wrap">
            <table class="main__table">

                <tbody>


                @foreach($order->products as $product)

                    <tr>

                        <td>
                            <div class="main__table-text">

                                <a href="/products/{{$product->code}}"
                                   style="padding: 10px 0px;">{{$product->name}} {{$product->getPriceForCount($product->pivot->count)}}</a>
                            </div>
                        </td>
                        <td>
                            <div class="main__table-text">
                                <form action="{{route('basket-add', $product)}}" method="post">
                                    <button type="submit">+</button>
                                    @csrf
                                </form>
                            </div>
                        </td>
                        <td>
                            <div class="main__table-text">
                                <span>{{$product->pivot->count}}</span>
                            </div>
                        </td>

                        <td>
                            <div class="main__table-text">
                                <form action="{{route('basket-remove', $product)}}" method="post">
                                    <button type="submit">-</button>
                                    @csrf
                                </form>

                            </div>
                        </td>


                    </tr>
                @endforeach


                </tbody>
            </table>
                <br><br>
            <a href="{{route ('basket-place')}}">Оформить заказ</a>
        </div>
    </div>

@endsection



