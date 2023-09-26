<?php

use Illuminate\Support\Facades\Route;

Route::group(['prefix'=>'api'],function(){
    Route::post('/login', 'UserController@login');
    Route::apiResource('/users', 'UserController');
    Route::apiResource('/marcas', 'MarcaController');
    Route::apiResource('/medidas', 'MedidaController');
    Route::apiResource('/categorias', 'CategoriaController');
    Route::apiResource('/documentos', 'DocumentoController');
    Route::apiResource('/articulos', 'ArticuloController');
    Route::apiResource('/inventarios', 'InventarioController');
    Route::apiResource('/ventas', 'VentaController');
    Route::get('/inventarios/kardex/{articulo}', 'InventarioController@kardex');
});


Route::get('/', function () {
    return view('welcome');
});
