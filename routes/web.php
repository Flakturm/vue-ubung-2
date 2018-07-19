<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('statuses', 'StatusController@index');
