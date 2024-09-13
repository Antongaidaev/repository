<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Articles;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class MainController extends Controller
{
    // ==================== Управление категориями ====================

    /**
     * Отображение главной страницы с категориями.
     */
    public function index()
    {
        $categories = Category::get();
        return view('index', compact('categories'));
    }

    /**
     * Отображение страницы конкретной категории с продуктами.
     */
    public function category($code)
    {
        $category = Category::where('code', $code)->first();
        $products = Product::where('category_id', $category->id)->get(); // Получаем все записи из таблицы Product
        return view('category', compact('category', 'products'));
    }

    /**
     * Отображение страницы со списком всех категорий.
     */
    public function categories()
    {
        $categories = Category::get();
        return view('categories', compact('categories'));
    }

    // ==================== Управление продуктами ====================

    /**
     * Отображение страницы со списком всех продуктов.
     */
    public function products()
    {
        $products = Product::get(); // Получаем все записи из таблицы Product
        $productCount = $products->count(); // Считаем количество записей
        return view('products', compact('products', 'productCount'));
    }

    /**
     * Отображение страницы конкретного продукта.
     */
    public function product($code)
    {
        $categories = Category::all(); // Получаем все категории
        $product = Product::where('code', $code)->first();
        $currentCategory = $product->category;

        return view('product', [
            'product' => $product,
            'categories' => $categories, // Передаем $categories в шаблон
            'currentCategory' => $currentCategory,
        ]);
    }

    /**
     * Удаление продукта по его коду.
     */
    public function delete($code)
    {
        $product = Product::where('code', $code)->firstOrFail();
        $product->delete();

        return redirect()->route('products')->with('success', 'Товар удален');
    }

    /**
     * Отображение формы добавления нового продукта.
     */
    public function create()
    {
        $categories = Category::all(); // Получаем все категории
        return view('products.create', ['categories' => $categories]);
    }

    /**
     * Обработка формы и добавление нового продукта в базу данных.
     */
    public function store(Request $request)
    {
        // Валидируем данные
        $request->validate([
            'name' => 'required|string|max:255',
            'code' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'category_id' => 'nullable|integer' // Валидация для поля category_id
        ]);

        // Создаем новый продукт
        Product::create([
            'name' => $request->input('name'),
            'code' => $request->input('code'),
            'price' => $request->input('price'),
            'category_id' => $request->input('category_id', 0), // Устанавливаем значение 0 по умолчанию
        ]);

        return redirect()->route('products')->with('success', 'Product added successfully!');
    }

    /**
     * Обновление существующего продукта по его коду.
     */
    public function update(Request $request, $code)
    {
        // Валидация данных
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'category_id' => 'nullable|integer',
        ]);

        // Найти продукт по code и обновить его
        $product = Product::where('code', $code)->firstOrFail();
        $product->update($validated);

        return redirect()->back()->with('success', 'Product updated successfully');
    }

    // ==================== Управление блогами ====================

    /**
     * Отображение страницы со списком всех блогов.
     */
    public function blog()
    {
        $blogs = Blog::get(); // Получаем все записи из таблицы blogs
        return view('blog', compact('blogs'));
    }

    /**
     * Отображение конкретного блога по его коду.
     */
    public function blogView($code)
    {
        $blog = Blog::where('code', $code)->first(); // Получаем конкретный блог по коду
        return view('blog_view', ['blog' => $blog]);
    }

    // ==================== Управление статьями ====================

    /**
     * Отображение страницы со списком всех статей.
     */
    public function articles()
    {
        $articles = Articles::get(); // Получаем все записи из таблицы blogs
        return view('articles', compact('articles'));
    }

    /**
     * Отображение конкретной статьи по её коду.
     */
    public function article($code)
    {
        $article = Articles::where('code', $code)->first(); // Получаем конкретный блог по коду
        return view('article', ['article' => $article]);
    }

    /**
     * Отображение формы добавления новой статьи.
     */
    public function create_article()
    {
        return view('articles.create_article');
    }

    /**
     * Обработка формы и добавление новой статьи в базу данных.
     */
    public function store_article(Request $request)
    {
        // Валидируем данные
        $request->validate([
            'name' => 'required|string|max:255',
            'code' => 'required|string|max:255',
        ]);

        // Создаем новую статью
        Articles::create([
            'name' => $request->input('name'),
            'code' => $request->input('code'),
        ]);

        return redirect()->route('articles')->with('success', 'Статья успешно добавлена!');
    }

    public function update_article(Request $request, $code)
    {
        // Валидация данных
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'code' => 'required|string|max:255', // Заменено на 'string' вместо 'numeric'
        ]);

        // Найти статью по code и обновить её
        $article = Articles::where('code', $code)->firstOrFail();
        $article->update($validated);

        return redirect()->back()->with('success', 'Article updated successfully');
    }

}
