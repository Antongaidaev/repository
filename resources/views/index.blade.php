@extends('master')
@section('title', 'Главная страница')
@section('content')

    <div class="d-flex align-items-lg-center flex-lg-row flex-column">
        <div class="flex-grow-1">
            <h4 class="fs-16 mb-1">Good Morning, Anna!</h4>
            <p class="text-muted mb-0">Here's what's happening with your store today.</p>
        </div>
        <div class="mt-3 mt-lg-0">
            @foreach($categories as $category)
                <li class="nav-item">
                    <a href="/categories/{{ $category->code }}" role="tab" aria-controls="tab-1"
                       aria-selected="true">{{ $category->name }}</a>
                </li>
            @endforeach
        </div>
    </div><!-- end card header -->
@endsection
