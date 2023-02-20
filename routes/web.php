<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComicController as ComicController;

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

Route::get('/', [ComicController::class, 'index'])->name('comics');
/* Route::get('/', function () {
    $comics = config('db');

    return view('index', compact('comics'));
})->name('comics'); */

Route::get('/comics/{param}', function ($param) {
    $comics = config('db');

    foreach($comics as $key => $value){
        if($key == $param)
            $single = $value;
    }

    return view('detail_comics', compact('single'));
})->name('detail-comics');
