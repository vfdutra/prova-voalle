<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PerguntasRespostasController;
use App\Http\Controllers\QuestionarioController;

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
    return view('home');
});

//Route::resource('perguntas-respostas', PerguntasRespostasController::class);

Route::get('/cadastrar', [PerguntasRespostasController::class, 'index']);
Route::post('/store', [PerguntasRespostasController::class, 'store']);
Route::get('/questionario', [QuestionarioController::class, 'index']);
Route::post('/questionario/salvar', [QuestionarioController::class, 'store']);
Route::get('/ranking', [PerguntasRespostasController::class, 'ranking']);
