<?php








Route::get('/de','FrontendController@index');
Route::get('/frontend','FrontendController@front');
Route::get('register',function(){
return view('Frontend.register');
});

Route::get('register1',function(){
return view('Frontend.register1');
});

Route::post('action','FrontendController@store');