<?php

use Illuminate\Support\Facades\Route;
Use App\Http\Controllers\HomeController;
use App\Http\Controllers\ListBarangController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ListProdukController;

Route::get('/listproduk', [ListProdukController::class, 'show']);
Route::get('/products', [ProductController::class, 'index']);

Route::get('/dashboard', [DashboardController::class, 'index']);

//Route::get('/welcome', function () {
//return view('welcome');

//Route::get('/user/{id}', function ($id): string {
//    return 'User dengan ID ' .  $id;

//});
//});


//Route::get('/', [HomeController::class, 'index']);
//Route::get('/contact', [HomeController::class, 'contact']);

//Route::prefix('admin')->group(function () {
//   Route::get('/dashboard', function () {
//        return 'Admin Dashboard';
//    });


//Route::get('users', function (){
//    return 'Admin Users';
//   });
//});

//Route::get('/listbarang/{id}/{nama}', function ($id, $nama){
//    return view('list_barang', compact('id', 'nama'));
//    });

Route::get('/listbarang', [ListBarangController::class, 'tampilan']);

// Contact Us

//   Route::get('/', function () {
//     return view('pages.home');
// });

// Home

  Route::get('home', function () {
    return view('pages.home');
});
// Contact Us

  Route::get('contact', function () {
    return view('pages.contact');
});

 Route::get('tugas', function () {
    return view('pages.tugas');
});

Route::get('home', function () {
    return view('pages.home');
});

