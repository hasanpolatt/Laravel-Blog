<?php



Route::get('/','HomeGetController@get_index');
Route::get('/index','HomeGetController@get_index_yonlendir');
Route::get('/home','HomeGetController@get_index_yonlendir');
Route::get('/anasayfa','HomeGetController@get_index_yonlendir');
Route::get('/iletisim','HomeGetController@get_iletisim');
Route::get('/hakkimizda','HomeGetController@get_hakkimizda');
Route::get('/blog','HomeGetController@get_blog');
Route::get('/blog/blog-detay','HomeGetController@get_blog_detay');

Route::group(['prefix'=>'admin'],function(){
    Route::get('/','AdminController@get_index');
    Route::get('/ayarlar','AdminGetController@get_ayarlar');
    Route::post('/ayarlar','AdminPostController@post_ayarlar');
    Route::get('/hakkimizda','AdminGetController@get_hakkimizda');
    Route::post('/hakkimizda','AdminPostController@post_hakkimizda');
    Route::get('/blog','AdminGetController@get_blog');
    Route::post('/blog','AdminPostController@post_blog_ekle');


});



