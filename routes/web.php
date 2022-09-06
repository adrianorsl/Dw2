<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HojeController;
use App\Http\Controllers\TabController;
use App\Http\Controllers\PiramiteController;
use App\Http\Controllers\ConeController;
use App\Http\Controllers\JogadoresController;

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

Route::get('/tabela/{meio?}/{ini?}/{fim?}', function($meio=2,$ini=0,$fim=10){
    for ($x = $ini; $x <= $fim; $x++){
        echo $meio." x ".$x." = ".($meio*$x)."<br>";
    };
})->where("ini","[0-9]+")->where("meio","[0-9]+")->where("fim","[0-9]+");


Route::get('/jogadores',function(){
    echo "1 - Neymar<br>";
    echo "2 - Pelé<br>";
    echo "3 - Zico<br>";
});

Route::redirect('players','jogadores');

Route::get('/hoje', [HojeController::class, 'teste']);
Route::get('/tab/{meio?}/{ini?}/{fim?}', [TabController::class, 'tab']);
Route::get('/piramite/{raio?}/{altura?}/{tipo?}', [PiramiteController::class, 'piramite']);
Route::get('/cone/{raio?}/{altura?}/{tipo?}', [ConeController::class, 'cone']);

Route::resource('/agenda', jogadoresController::class);