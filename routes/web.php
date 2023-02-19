<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Shop\MainController;

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
//     return view('home');
// });

Route::get('/', [MainController::class, 'index'])->name('homepage');

Route::get('produit{id}', [MainController::class, 'produit'])->name('voir_produit');

Route::get('categorie{id}', [MainController::class, 'viewByCategory'])->name('voir_produit_par_categorie');

Route::get('tag{id}', [MainController::class, 'viewByTag'])->name('voir_produit_par_tag');
