<?php

Auth::routes();

// Admin Routes

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function(){

    Route::get('/dashboard', [
        'uses' => 'HomeController@index',
        'as' => 'home'
    ]);

    Route::resource('post','PostsController');

    Route::resource('category','CategoriesController');

    Route::resource('tags','TagsController');

});

// Frontend Routes

Route::get('/post/{slug}', [
    'uses' => 'FrontEndController@singlePost',
    'as' => 'post.single'
]);

Route::get('/category/{id}', [
    'uses' => 'FrontEndController@category',
    'as' => 'category.single'
]);

Route::get('/tag/{id}', [
    'uses' => 'FrontEndController@tag',
    'as' => 'tag.single'
]);

Route::get('/', [
    'uses' => 'FrontEndController@index',
    'as' => 'index'
]);


