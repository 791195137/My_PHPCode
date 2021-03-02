<?php

Route::group(['prefix'=>'admin'],function (){
Route::get('a',function (){return 'this is a';});
Route::get('b',function(){return 'hell world!';});
});

?>