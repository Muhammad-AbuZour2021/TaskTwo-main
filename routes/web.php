<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\BlogSectionController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\FeatureController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PlanController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ScanningSolutionController;
use Illuminate\Support\Facades\Auth;


Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/why-lazord', [HomeController::class, 'why_lazord'])->name('why-lazord');
Route::get('solutions', [HomeController::class, 'solutions'])->name('solutions');
Route::get('pricing', [HomeController::class, 'pricing'])->name('pricing');
Route::get('learn', [HomeController::class, 'learn'])->name('learn');
Route::get('lab-services', [HomeController::class, 'lab_services'])->name('lab-services');
Route::post('/contact-store', [HomeController::class, 'contact_store'])->name('contact.store');

Auth::routes();

// Route::get('/', function () {
//     return view('welcome');
// });

// مسار لوحة تحكم الأدمن
Route::prefix('admin')->middleware(['auth', 'isAdmin'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/contact', [DashboardController::class, 'contact'])->name('contact');


    Route::get('/plans', [PlanController::class, 'index'])->name('plans.index');
    Route::get('/plans/create', [PlanController::class, 'create'])->name('plans.create');
    Route::post('/plans', [PlanController::class, 'store'])->name('plans.store');
    Route::get('/plans/{id}/edit', [PlanController::class, 'edit'])->name('plans.edit');
    Route::put('/plans/{id}', [PlanController::class, 'update'])->name('plans.update');
    Route::delete('/plans/{id}', [PlanController::class, 'destroy'])->name('plans.destroy');

    Route::get('/features', [FeatureController::class, 'index'])->name('features.index');
    Route::get('/features/create', [FeatureController::class, 'create'])->name('features.create');
    Route::post('/features', [FeatureController::class, 'store'])->name('features.store');
    Route::get('/features/{id}/edit', [FeatureController::class, 'edit'])->name('features.edit');
    Route::put('/features/{id}', [FeatureController::class, 'update'])->name('features.update');
    Route::delete('/features/{id}', [FeatureController::class, 'destroy'])->name('features.destroy');

    Route::get('/products', [ProductController::class, 'index'])->name('products.index');
    Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
    Route::post('/products', [ProductController::class, 'store'])->name('products.store');
    Route::get('/products/{id}/edit', [ProductController::class, 'edit'])->name('products.edit');
    Route::put('/products/{id}', [ProductController::class, 'update'])->name('products.update');
    Route::delete('/products/{id}', [ProductController::class, 'destroy'])->name('products.destroy');


    Route::get('/faqs', [FaqController::class, 'index'])->name('faqs.index');
    Route::get('/faqs/create', [FaqController::class, 'create'])->name('faqs.create');
    Route::post('/faqs', [FaqController::class, 'store'])->name('faqs.store');
    Route::get('/faqs/{id}/edit', [FaqController::class, 'edit'])->name('faqs.edit');
    Route::put('/faqs/{id}', [FaqController::class, 'update'])->name('faqs.update');
    Route::delete('/faqs/{id}', [FaqController::class, 'destroy'])->name('faqs.destroy');

    Route::get('/scanning', [ScanningSolutionController::class, 'index'])->name('scanning.index');
    Route::get('/scanning/create', [ScanningSolutionController::class, 'create'])->name('scanning.create');
    Route::post('/scanning', [ScanningSolutionController::class, 'store'])->name('scanning.store');
    Route::get('/scanning/{id}/edit', [ScanningSolutionController::class, 'edit'])->name('scanning.edit');
    Route::put('/scanning/{id}', [ScanningSolutionController::class, 'update'])->name('scanning.update');
    Route::delete('/scanning/{id}', [ScanningSolutionController::class, 'destroy'])->name('scanning.destroy');

    Route::get('/articles', [ArticleController::class, 'index'])->name('articles.index');
    Route::get('/articles/create', [ArticleController::class, 'create'])->name('articles.create');
    Route::post('/articles', [ArticleController::class, 'store'])->name('articles.store');
    Route::get('/articles/{id}/edit', [ArticleController::class, 'edit'])->name('articles.edit');
    Route::put('/articles/{id}', [ArticleController::class, 'update'])->name('articles.update');
    Route::delete('/articles/{id}', [ArticleController::class, 'destroy'])->name('articles.destroy');

    Route::resource('blogs', BlogSectionController::class);

});


// الصفحة الرئيسية بعد تسجيل الدخول
Route::get('/home', [DashboardController::class, 'index_User'])->name('home');

// آخر شيء: أي صفحة مخصصة تروح لـ AdminController
