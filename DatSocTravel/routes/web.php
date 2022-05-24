<?php

use App\Http\Controllers\HomeAdminController;
use App\Http\Controllers\TourController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;




Route::get('/', function () {
    return view('welcome');
})->name('home');
//admin
Route::prefix('admin')->group(function () {
    //home
    Route::get('/', [HomeAdminController::class, 'index'])->name('admin.home');
    //user-manager
    Route::get('/users-manager', [HomeAdminController::class, 'users'])->name('admin.users');
    //tour-manager
    Route::get('/tour-manager', [HomeAdminController::class, 'tours'])->name('admin.tours');
    Route::get('/tour-manager/create', [TourController::class, 'createIndex'])->name('admin.tours.create');
    Route::post('/tour-manager/create', [TourController::class, 'create'])->name('admin.tours.auth');
    Route::get('/tour-manager/edit/{id}', [TourController::class, 'editIndex'])->name('admin.tours.edit');
    Route::post('/tour-manager/edit/{id}', [TourController::class, 'create'])->name('admin.tours.edit.auth');
    Route::get('/tour-manager/delete/{id}', [TourController::class, 'destroy'])->name('admin.tours.delete');

    //TA-manager
    Route::get('/tourist-attractions-manager', [HomeAdminController::class, 'users'])->name('admin.tourist_attractions');
    Route::get('/tourist-attractions-manager/create', [TourController::class, 'createIndex'])->name('admin.tourist_attractions.create');
    Route::post('/tourist-attractions-manager/create', [TourController::class, 'create'])->name('admin.tourist_attractions.auth');
    Route::get('/tourist-attractions-manager/edit/{id}', [TourController::class, 'editIndex'])->name('admin.tourist_attractions.edit');
    Route::post('/tourist-attractions-manager/edit/{id}', [TourController::class, 'edit'])->name('admin.tourist_attractions.edit.auth');
    Route::get('/tourist-attractions-manager/delete/{id}', [TourController::class, 'delete'])->name('admin.tourist_attractions.delete');
    // Route::get('/tourist-attractions-manager/create', [HomeAdminController::class, 'create'])->name('admin.tourist_attractions.create');
});
//user
Route::prefix('user')->group(function () {
    //login
    Route::get("/login", [UserController::class, 'loginIndex'])->name("user.login");
    Route::post('/login', [UserController::class, 'userLogin'])->name('user.login.auth');
    //register
    Route::get("/register", [UserController::class, 'regIndex'])->name("user.register");
    Route::post('/register', [UserController::class, 'createUser'])->name('user.register.auth');
    //action
    Route::get('/logout', [UserController::class, 'userLogout'])->name('logout');
    Route::get('/info/{id}', [UserController::class, 'infoUser'])->name('info');
    Route::get('/edit/{id}', [UserController::class, 'editUser'])->name('edit');
    Route::post('/edit/{id}', [UserController::class, 'updateUser'])->name('edit.auth');
});
