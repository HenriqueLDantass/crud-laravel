<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get("/post/create", [PostController::class, "create"]);
Route::get("/post/read/{id}", [PostController::class, "read"]);
Route::get("/post/read_all", [PostController::class, "realAll"]);
Route::get("/post/update_{id}", [PostController::class, "update"]);
Route::get("/delete/{id}", [PostController::class, "delete"]);
Route::get('/', function () {
    return view('welcome');
});
