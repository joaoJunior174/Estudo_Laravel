<?php

use Illuminate\Support\Facades\Route;
use App\Tabeliao;
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
    
    return redirect()->route('listaTabeliao');
});

Route::get('/addtabeliao', function () {
    return view ('tabeliaoadd');
});
Route::get('/addcontrato', function () {

    $tabeliao = Tabeliao::all();

    return view ('contratoadd',compact('tabeliao'));
});

Route::get('/addcertidao', function () {

    $tabeliao = Tabeliao::all();

    return view ('certidaoadd',compact('tabeliao'));
});

// tabeliao
Route::get('/tabeliao','TabeliaoController@index')->name('listaTabeliao');
Route::get('/excluirtab/{id}','TabeliaoController@excluir')->name('excluirtab');
Route::post('/editartab/{id}','TabeliaoController@editar')->name('editartab');
Route::post('/salvartab','TabeliaoController@salvar');
Route::get('/editartab/{id}','TabeliaoController@buscaEditar');

// contrato
Route::get('/contrato','ContratoController@index')->name('listaContrato');
Route::get('/excluircon/{id}','ContratoController@excluir')->name('excluircon');
Route::post('/editarcon/{id}','ContratoController@editar')->name('editarcon');
Route::post('/salvarcon','ContratoController@salvar');
Route::get('/editarcon/{id}','ContratoController@buscaEditar');


//certidao
Route::get('/certidao','CertidaoController@index')->name('listaCertidao');
Route::get('/excluircer/{id}','CertidaoController@excluir')->name('excluircer');
Route::post('/editarcer/{id}','CertidaoController@editar')->name('editarcer');
Route::post('/salvarcer','CertidaoController@salvar');
Route::get('/editarcer/{id}','CertidaoController@buscaEditar');