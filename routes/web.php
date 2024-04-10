<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\TodoAppController;
use Illuminate\Support\Facades\Route;

Route::get('/', [TodoAppController::class, 'home'])->name("home.welcome");

Route::prefix('/todolist')->name('todoapp.')->controller(TodoAppController::class)->group(function()
{
    Route::get('/', 'todoapp')->name("welcome");
    Route::post('/', 'store')->name("store");
    Route::delete('//{task}', 'delete')->name("delete");
    Route::delete('//hidden/{task}', 'hide')->name("hide");
    Route::put('//{task}', 'update')->name("update");
    Route::put('//complete/{task}', 'complete')->name("complete");
});



Route::get('/blog', [TodoAppController::class, 'blog'])->name("blog.welcome");

Route::get('/kontakt', [TodoAppController::class, 'contact'])->name("contact.welcome");

Route::get('pages', [PageController::class, 'index']);
Route::post('pages', [PageController::class, 'store']);
Route::get('pages/create', [PageController::class, 'create']);
Route::get('pages/{slug}', [PageController::class, 'show']);