<?php
use App\Http\Controllers\JogosController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

//  Route::view('jogos/', 'jogos');

// Route::get('/jogos', function(){
// return "curso do youtube laravel";
// }
// );

// Route::view('/jogos', 'jogos',['name'=>'GTA']);

// Route::get('/jogos/{id?}/{name?}', function($id = null, $name = null){
// return view('jogos', ['idJogo'=>$id, 'nomeJogo'=>$name]);


// })->where(['id', '[0-9]+', 'name'=>'[A-Za-z]+']);   

// Route::get('/jogos', function(){
//     return view('jogos/Index');
// })->name('home-index');

Route::get('/jogos', [JogosController::class, 'index'])->name('home-index');
 