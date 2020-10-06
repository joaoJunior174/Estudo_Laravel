<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::post('/salvar/certidao', 'api\CertidaoControllerApi@salvar');
Route::get('/buscar/certidao/{id}', 'api\CertidaoControllerApi@buscar');
Route::put('/atualizar/certidao/{id}', 'api\CertidaoControllerApi@atualizar');
Route::delete('/deletar/certidao/{id}', 'api\CertidaoControllerApi@deletar');

Route::post('/salvar/contrato', 'api\ContratoControllerApi@salvar');
Route::get('/buscar/contrato/{id}', 'api\ContratoControllerApi@buscar');
Route::put('/atualizar/contrato/{id}', 'api\ContratoControllerApi@atualizar');
Route::delete('/deletar/contrato/{id}', 'api\ContratoControllerApi@deletar');


Route::post('/salvar/tabeliao', 'api\TabeliaoControllerApi@salvar');
Route::get('/buscar/tabeliao/{id}', 'api\TabeliaoControllerApi@buscar');
Route::put('/atualizar/tabeliao/{id}', 'api\TabeliaoControllerApi@atualizar');
Route::delete('/deletar/tabeliao/{id}', 'api\TabeliaoControllerApi@deletar');