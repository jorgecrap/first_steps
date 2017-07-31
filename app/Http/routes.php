<?php

use App\Note;

Route::get('/', function () {
    return view('welcome');
});

Route::get('notes', 'NotesController@index');

Route::post('notes', 'NotesController@store');
Route::get('notes/create', 'NotesController@create');


Route::get('notes/{id}/{slug?}', 'NotesController@show')->where('id','\d+');
