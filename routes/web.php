<?php


use App\Http\Controllers\AuthorController;
use Illuminate\Http\Request;
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

Route::get('/', function (){
    return view('backend.layout.master');
});


Route::prefix("authors")->group(function (){
    Route::get('/',[AuthorController::class,'index'])->name('authors.index');
    Route::get('/create',[AuthorController::class,'showFormCreate'])->name('authors.showFormCreate');
    Route::post('/create',[AuthorController::class,'create'])->name('authors.create');
    Route::get('/{id}/detail',[AuthorController::class,'show'])->name('authors.show');
    Route::get('/{id}',[AuthorController::class,'destroy'])->name('authors.destroy');
});


