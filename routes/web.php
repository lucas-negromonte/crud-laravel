<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::group();
// Route::get('/',[ProductController::class,'index'])->name('web.index');

Route::name('web.')->group(function () {
    
    Route::resource('product',ProductController::class);

    // Route::controller(ProductController::class)->name('product.')->group(function () {
    //     Route::get('/', 'index')->name('index');
    //     // Route::get('/atualizar/{product_id}', 'edit')->name('edit');
    //     // Route::post('/novo/produto', 'update')->name('update');
    //     // Route::get('/novo/produto', 'create')->name('create');



    //     // Route::get('/', 'index')->name('index');
    //     // Route::post('/orders', 'store');
    // });

});

