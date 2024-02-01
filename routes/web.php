<?php

use App\Http\Controllers\BrandController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', fn () => redirect()->route('dashboard'));

Route::group(['middleware' => 'auth'], function () {
    /* Dashboard */
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    /* Usuários */
    Route::get('/users', [UserController::class, 'index'])->name('users.index')->can('list-users')->can('list-users');

    /* Permissões */
    Route::get('/permissions', [PermissionController::class, 'index'])->name('permissions.index')->can('list-permissions');
    Route::put('/permissions/{userId}/{permissionId}', [PermissionController::class, 'update'])->name('permissions.update')->can('update-permissions');

    /* Produtos */
    Route::get('/products', [ProductController::class, 'index'])->name('products.index')->can('list-products');
    /* Categorias */
    Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index')->can('list-categories');
    /* Marcas */
    Route::get('/brands', [BrandController::class, 'index'])->name('brands.index')->can('list-brands');

    /* Perfil */
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
