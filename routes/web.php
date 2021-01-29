
<?php

use Illuminate\Support\Facades\Route;
/*use App\Http\Controllers\SystemController;

|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
Route::get('/system1', [SystemController::class,'system1']);

Route::post('/system2', [SystemController::class,'insertData']);

Route::get('/about', [SystemController::class,'about']);
*/
Route::get('/home', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});


