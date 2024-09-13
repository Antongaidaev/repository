@extends('master')
@section('title', 'Категории')
@section('content')
    <div class="col-12">
        <div class="main__title">
            <h2>Каталог товаров</h2>
        </div>
    </div>
    <div class="col-12">
        <div class="profile__content">
            <ul class="nav nav-tabs profile__tabs" id="profile__tabs" role="tablist">

                @foreach($categories as $category)
                    <li class="nav-item">
                        <a href="/categories/{{ $category->code }}" role="tab" aria-controls="tab-1"
                           aria-selected="true">{{ $category->name }}</a>
                    </li>
                @endforeach


            </ul>
        </div>
    </div>
@endsection
