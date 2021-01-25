
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ElementsController;
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



Route::get('/home',[ElementsController::class,'main']);


Route::get('/generic',[ElementsController::class,'generic']);


Route::get('/index',[ElementsController::class,'index']);



/*Route::get('/', function () {
    return view('main');
});


Route::get('/home',[ElementsController::class,'mastertheme']);

*/