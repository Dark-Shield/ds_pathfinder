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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dbtest', function () {
  $tables = DB::select('SHOW TABLES');
  return view('dbtest',compact('tables'));
});

Route::get('/dbdump/{table}', function ($tableName) {
  $table = DB::table($tableName)->get();
  return($table);
  //return view('dbdump',compact('table'));
});

Route::get('/structure', function () {
    return view('structure');
});
