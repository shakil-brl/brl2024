<?php

use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;

Route::get('/',[IndexController::class,'index'])->name('index');
Route::post('/store-project-idea',[IndexController::class,'projectIdeaStore'])->name('project.idea');

