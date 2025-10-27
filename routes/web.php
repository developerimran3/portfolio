<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\BackendController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\PortfolioCatController;
use App\Http\Controllers\Backend\PortfolioController;
use App\Http\Controllers\Backend\PostController;
use App\Http\Controllers\Backend\ServiceController;
use App\Http\Controllers\Backend\TagController;
use App\Http\Controllers\Backend\TeamController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;

//Backend All Route
Route::get("dashboard", [BackendController::class, "index"])->name("dashboard.index");
Route::resource("dashboard/post", PostController::class);



Route::resource("dashboard/tag", TagController::class);

Route::resource("dashboard/category", CategoryController::class);
// Route::resource("dashboard/portfolio-category", PortfolioCatController::class);



// Route::resource("dashboard/portfolio", PortfolioController::class);
Route::resource("dashboard/service", ServiceController::class);
Route::resource("dashboard/team", TeamController::class);


/**
 * Student Route
 */
Route::get("/student-login", [StudentController::class, "studentLogin"])->name("student.login");
Route::post("/student-login", [StudentController::class, "login"])->name("student.login");

Route::get("/student-register", [StudentController::class, "studentRegister"])->name("student.register");
Route::post("/student-register", [StudentController::class, "register"])->name("student.register");

Route::get("/student-profile", [StudentController::class, "studentProfile"])->name("student.profile");
Route::get("/student-show", [StudentController::class, "allStudent"])->name("student.all");

Route::get("/student-logout", [StudentController::class, "studentLogout"])->name("student.logout");

/**
 * Teacher Route
 */
Route::get("/teacher-login", [TeacherController::class, "teacherLogin"])->name("teacher.login");
Route::post("/teacher-login", [TeacherController::class, "login"])->name("teacher.login");

Route::get("/teacher-register", [TeacherController::class, "teacherRegister"])->name("teacher.register");
Route::post("/teacher-register", [TeacherController::class, "register"])->name("teacher.register");

Route::get("/teacher-profile", [TeacherController::class, "teacherProfile"])->name("teacher.profile");
// Route::get("/teacher-show", [TeacherController::class, "showteacher"])->name("teacher.show");

Route::get("/teacher-logout", [TeacherController::class, "teacherLogout"])->name("teacher.logout");


/**
 * Staff Route
 */
// Route::get("/student-login", [StudentController::class, "studentLogin"])->name("student.login");
// Route::post("/student-login", [StudentController::class, "login"])->name("student.login");

// Route::get("/student-register", [StudentController::class, "studentRegister"])->name("student.register");
// Route::post("/student-register", [StudentController::class, "register"])->name("student.register");

// Route::get("/student-profile", [StudentController::class, "studentProfile"])->name("student.profile");
// Route::get("/student-show", [StudentController::class, "allStudent"])->name("student.all");

// Route::get("/student-logout", [StudentController::class, "studentLogout"])->name("student.logout");
