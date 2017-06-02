<?php

Route::get('/database-test', function () {
  if (DB::connection()->getDatabaseName()) {
      echo 'Connected successfully to database '.DB::connection()->getDatabaseName();
  } else {
      echo 'Connection failed';
  }
});

Route::get('/names', 'NamesController@index');
Route::post('/names/edit', 'NamesController@edit');