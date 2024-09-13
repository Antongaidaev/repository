@extends('master')
@section('title', 'Блог')
@section('content')

    <div class="col-12">
        <div class="main__title">
            <h1 style="color: #fff">Товары</h1>
            <a href="catalog_arhiv?brand=&type=" class="main__title-link">Архив</a>
            <a href="new_order.php" class="main__title-link">Добавить</a>
        </div>
    </div>
    <div class="col-12">
        <div class="main__table-wrap">
            <table class="main__table">
                <thead>
                <tr>
                    <th>ИЗОБРАЖЕНИЕ</th>
                    <th>ТОВАР</th>
                    <th>ВИДИМОСТЬ</th>
                    <th>ПОДРОБНЕЕ</th>
                </tr>
                </thead>

                <tbody>
                @foreach($blogs as $blog)
                    <div>
                        <a href="/blog/{{ $blog->code }}">{{ $blog->name }}</a> <!-- Пример вывода данных из столбца title -->
                    </div>
                @endforeach

                </tbody>
            </table>
        </div>
    </div>
@endsection
