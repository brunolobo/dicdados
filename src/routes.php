<?php

Route::group(['namespace' => 'Dicionario', 'prefix' => 'dicionario'], function(){
	Route::get('/',['as' => 'dicionario.index', 'uses' => '\Brunolobo\Dicdados\Http\Controllers\DicdadosController@index']);
	Route::get('novo',['as' => 'dicionario.novo', 'uses' => '\Brunolobo\Dicdados\Http\Controllers\DicdadosController@new']);
	Route::post('criar',['as' => 'dicionario.criar', 'uses' => '\Brunolobo\Dicdados\Http\Controllers\DicdadosController@create']);
	Route::get('ver',['as' => 'dicionario.ver', 'uses' => '\Brunolobo\Dicdados\Http\Controllers\DicdadosController@show']);
	Route::get('editar',['as' => 'dicionario.editar', 'uses' => '\Brunolobo\Dicdados\Http\Controllers\DicdadosController@edit']);
	Route::post('alterar',['as' => 'dicionario.alterar', 'uses' => '\Brunolobo\Dicdados\Http\Controllers\DicdadosController@update']);
});

