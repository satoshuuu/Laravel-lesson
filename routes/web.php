<?php

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

Route::get('/', 'RecipesController@index');

Route::resource('recipes', 'RecipesController');

// //レシピの詳細表示
// Route::get('recipes/{id}', 'RecipesController@show');
// //レシピの作成の処理
// Route::post('recipes', 'RecipesController@store');
// //レシピの更新の処理
// Route::put('recipes/{id}', 'RecipesController@update');
// //レシピの削除の処理
// Route::delete('recipes/{id}', 'RecipesController@destroy');
// //レシピの一覧を表示
// Route::get('recipes/{id}', 'RecipesController@show')->name('recipes.index');
// //レシピ追加のフォームページの表示(storeの補助)
// Route::get('recipes/create', 'RecipesController@create')->name('recipes.create');
// //レシピ更新のフォームページの表示(updateの補助)
// Route::get('recipes/{id}/edit', 'MessagesController@edit')->name('recipes.edit');