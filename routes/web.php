<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Moviecontroller;
use App\Models\Movies;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/front', function () {
    return view('front');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');




Route::get('/test', function () {
    
    $title=request('title');
    
    $movies=Movies::where('title',$title)->get();
      
    if (count($movies)!=0) {
    return response()->json($movies);
    }else {
        return response()->json(["no data"]);
    }
    
});
