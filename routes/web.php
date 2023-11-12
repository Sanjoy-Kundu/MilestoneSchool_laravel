<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdmissionController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Route;


Route::get('/', [FrontendController::class, "index"])->name("index");
Route::get("/contact", [FrontendController::class, "contact"])->name("contact");
Route::get('/about', [FrontendController::class, "about_us"])->name('about');


//about option About Controller
Route::get('/awards', [AboutController::class, "awards"])->name("awards");
Route::get('/research', [AboutController::class, "research"])->name("research");


//admission controller
Route::get('/admission/form', [AdmissionController::class, "admission_form"])->name('admission.form');

//Course Controller 
Route::get("/courses", [CourseController::class, "courses"])->name("courses");
Route::get('/courseDetails', [CourseController::class, "course_details"])->name('courseDetails');

//event controller
Route::get('/events', [EventController::class, "events"])->name('events');
