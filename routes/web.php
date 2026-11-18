<?php
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.beranda');
});

Route::get('/about', function () {
    return view('pages.about', [
        'nama'=> 'Felicia Chelsyneira',
        'kelas'=> 'D4SM-48-01',
        'nim' => '0123456789', // Sesuaikan jika perlu
    ]);
});

Route::view('/contact', 'pages.contact');

// Routing Produk
Route::get('/product', [ProductController::class, 'index']);
Route::get('/product/addProduct', [ProductController::class, 'addProduct']); // Wajib di atas /product/{id}
Route::post('/product', [ProductController::class, 'store']);
Route::get('/product/{id}', [ProductController::class, 'show']);
Route::get('/product/{id}/edit', [ProductController::class, 'edit']);
Route::put('/product/{id}', [ProductController::class, 'update']);
Route::delete('/product/{id}', [ProductController::class, 'destroy']);

// Resource Controller untuk Kategori Produk
Route::resource('/category', CategoryController::class);