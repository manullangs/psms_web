<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PlayerController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\EventController;


// Home
Route::get('/', [HomeController::class, 'home'])->name('homes.home');

// Products
Route::get('/products', [ProductController::class, 'index'])->name('product.index');
Route::post('/products', [ProductController::class, 'index'])->name('product.index');
// Players
Route::get('/players', [PlayerController::class, 'index'])->name('player.index');
Route::post('/players', [PlayerController::class, 'index'])->name('player.index');
// Events
Route::get('/events', [EventController::class, 'index'])->name('event.index');
Route::post('/events', [EventController::class, 'index'])->name('event.index');

//Auth
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'store'])->name('register.store');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::post('/login', [AuthController::class, 'authenticate'])->name('login.authenticate');
// Route::get("/login/google",[AuthController::class,"loginGoogle"])->name("login_google");
// Route::get("/login/google/callback",[AuthController::class,"loginGoogleCallback"])->name("callback_google");

// Dashboard Profil
Route::get('/dashboard', [DashboardController::class, 'profile'])->name('profiles.profile');

// Dashboard
Route::prefix('dashboard')->middleware('authentication')->group(function () {
    // Products
    Route::prefix('products')->middleware('role:superadmin|user')->group(function () {
        Route::get('/', [DashboardController::class, 'products'])->name('dashboard.products');
        Route::get('/add', [DashboardController::class, 'addProduct'])->name('dashboard.products.add');
        Route::post('/store', [DashboardController::class, 'storeProduct'])->name('dashboard.products.store');
        Route::get('/edit/{id}', [DashboardController::class, 'editProduct'])->name('dashboard.products.edit');
        Route::put('/update/{id}', [DashboardController::class, 'updateProduct'])->name('dashboard.products.update');
        Route::post('/delete/{id}', [DashboardController::class, 'deleteProduct'])->name('dashboard.products.delete');
        Route::get('/export', [DashboardController::class, 'exportProduct'])->name('dashboard.products.export');
    });
    //Players
    Route::prefix('players')->middleware('role:superadmin|user')->group(function () {
        Route::get('/', [DashboardController::class, 'players'])->name('dashboard.players');
        Route::get('/add', [DashboardController::class, 'addPlayer'])->name('dashboard.players.add');
        Route::post('/store', [DashboardController::class, 'storePlayer'])->name('dashboard.players.store');
        Route::get('/edit/{id}', [DashboardController::class, 'editPlayer'])->name('dashboard.players.edit');
        Route::put('/update/{id}', [DashboardController::class, 'updatePlayer'])->name('dashboard.players.update');
        Route::post('/delete/{id}', [DashboardController::class, 'deletePlayer'])->name('dashboard.players.delete');
        Route::get('/export', [DashboardController::class, 'exportPlayer'])->name('dashboard.players.export');
    });
    // Event
    Route::prefix('events')->middleware('role:superadmin|user')->group(function () {
        Route::get('/', [DashboardController::class, 'events'])->name('dashboard.events');
        Route::get('/add', [DashboardController::class, 'addEvent'])->name('dashboard.events.add');
        Route::post('/store', [DashboardController::class, 'storeEvent'])->name('dashboard.events.store');
        Route::get('/edit/{id}', [DashboardController::class, 'editEvent'])->name('dashboard.events.edit');
        Route::put('/update/{id}', [DashboardController::class, 'updateEvent'])->name('dashboard.events.update');
        Route::post('/delete/{id}', [DashboardController::class, 'deleteEvent'])->name('dashboard.events.delete');
        Route::get('/export', [DashboardController::class, 'exportEvent'])->name('dashboard.events.export');
    });
    // Users
    Route::prefix('users')->middleware('role:superadmin')->group(function () {
        Route::get('/', [DashboardController::class, 'users'])->name('dashboard.users');
        Route::get('/add', [DashboardController::class, 'addUser'])->name('dashboard.users.add');
        Route::post('/store', [DashboardController::class, 'storeUser'])->name('dashboard.users.store');
        Route::get('/edit/{id}', [DashboardController::class, 'editUser'])->name('dashboard.users.edit');
        Route::put('/update/{id}', [DashboardController::class, 'updateUser'])->name('dashboard.users.update');
        Route::post('/delete/{id}', [DashboardController::class, 'deleteUser'])->name('dashboard.users.delete');
    });
});