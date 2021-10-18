<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Movies;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/test', function () {
    
    $title=request('title');
    
    $movies=Movies::where('title',$title)->get();
      
    if (count($movies) !=0) {
        return response()->json($movies);
    }elseif($title==null){
        return json_encode(["empty2"]);
        
    }else { 
        return json_encode(["no data 0"]);
        
    }
    
}); 