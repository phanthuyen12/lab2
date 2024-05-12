<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/txn', function () {
    $query = DB::table('posts')
        ->select('id', 'title', 'content', 'views')
        ->orderBy('id', 'desc')
        ->limit(10);

    $data = $query->get();
    foreach ($data as $tin) echo "<p>{$tin->title}</p>";
});
Route::get('/tinmoi', function () {
    $query = DB::table('posts')
        ->select('id', 'title', 'content', 'views','created_at')
        ->orderBy('created_at', 'desc')
        ->limit(10);

    $data = $query->get();
    return view('tinmoi', ['data'=> $data]);
});
Route::get('/tintheoloai/{kind}', function ($kind) {
    $query = DB::table('posts')
        ->select('id', 'title', 'content', 'views', 'created_at')
        ->where('kind', $kind) 
        ->orderBy('created_at', 'desc')
        ->limit(10);

    $data = $query->get();
    return view('tintheoloai', ['data'=> $data]);
});
Route::get('/tin/{id}', function ($id) {
    $query = DB::table('posts')
    ->select('id', 'title', 'content', 'views', 'created_at')

    ->where('id', $id)->first();
    return view('chitiet', ['data'=> $query]);
});
