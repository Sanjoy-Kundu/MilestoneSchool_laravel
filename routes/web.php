<?php

use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Route;


Route::get('/', [FrontendController::class, "index"])->name("index");
Route::get("/contact", [FrontendController::class, "contact"])->name("contact");
Route::get('/about', [FrontendController::class, "about_us"])->name('about');