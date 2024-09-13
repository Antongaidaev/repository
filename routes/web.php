<?php


use App\Http\Controllers\MainController; // Убедитесь, что этот импорт присутствует
use App\Http\Controllers\BasketController; // Убедитесь, что этот импорт присутствует



// Измените маршрут, чтобы использовать MainController через пространство имен
// Главная страница
Route::get('/', [MainController::class, 'index'])->middleware('auth')->name('index');

// Категории
Route::get('/categories', [MainController::class, 'categories'])->middleware('auth')->name('categories');
Route::get('/categories/{code}', [MainController::class, 'category'])->middleware('auth')->name('category');

// Продукты
Route::get('/products', [MainController::class, 'products'])->middleware('auth')->name('products');
Route::get('/products/{code}', [MainController::class, 'product'])->middleware('auth')->name('product');

// Корзина
Route::get('/basket', [BasketController::class, 'basket'])->middleware('auth')->name('basket');
Route::get('/basket/place', [BasketController::class, 'basketPlace'])->middleware('auth')->name('basket-place');
Route::post('/basket/place', [BasketController::class, 'basketСonfirm'])->middleware('auth')->name('basket-confirm');
Route::post('/basket/add/{product_id}', [BasketController::class, 'basketAdd'])->middleware('auth')->name('basket-add');
Route::post('/basket/remove/{product_id}', [BasketController::class, 'basketRemove'])->middleware('auth')->name('basket-remove');


// Оформление заказа

// Блоги
Route::get('/blog', [MainController::class, 'blog'])->middleware('auth')->name('blog');
Route::get('/blog/{code}', [MainController::class, 'blogView'])->middleware('auth')->name('blog_view');

// Статьи
Route::get('/articles', [MainController::class, 'articles'])->middleware('auth')->name('articles');





Route::get('/articles/{code}', [MainController::class, 'article'])->middleware('auth')->name('article');





// Путь для отображения формы добавления статьи
Route::get('/create_article', [MainController::class, 'create_article'])->middleware('auth')->name('articles.create');

// Путь для обработки данных формы добавления статьи
Route::post('/create_article', [MainController::class, 'store_article'])->middleware('auth')->name('articles.store_article');

// Путь для отображения формы изменение товара
Route::match(['put', 'patch'], '/articles/{code}', [MainController::class, 'update_article'])->middleware('auth')->name('articles.update');









// Путь для отображения формы изменение товара
Route::match(['put', 'patch'], '/products/{code}', [MainController::class, 'update'])->middleware('auth')->name('products.update');

// Товар
Route::get('/products/{code}', [MainController::class, 'product'])->middleware('auth')->name('product');
// Путь для отображения формы добавления товара
Route::get('/create', [MainController::class, 'create'])->middleware('auth')->name('products.create');

// Путь для обработки данных формы добавления товара
Route::post('/create', [MainController::class, 'store'])->middleware('auth')->name('products.store');


// Путь для обработки данных формы удаления товара
Route::delete('/products/{id}', [MainController::class, 'delete'])->middleware('auth')->name('products.delete');



// Логин и логаут
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');



