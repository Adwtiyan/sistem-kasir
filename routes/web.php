<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\NotaController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\SupplierController;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function(){
    return redirect(RouteServiceProvider::HOME);
});

Route::resource('nota', NotaController::class);
Route::resource('produk', ProdukController::class);

# Resource Admin
Route::prefix('admins')
    ->middleware(['auth'])
    ->group(function() {
        //dashboard admin
        Route::get('/dashboard', [AdminController::class, 'index'])->name('admins.dashboard');
            //User
        Route::get('/register-user', [RegisteredUserController::class, 'create'])->name('admins.create-user');
        Route::post('/register-user', [RegisteredUserController::class, 'store'])->name('admins.store_user');
        Route::get('/edit-user/{id}', [AdminController::class, 'edit'])->name('admins.edit');
        Route::put('/edit-user/{id}', [AdminController::class, 'update'])->name('admins.update');
        Route::delete('/delete-user/{id}', [AdminController::class, 'destroy'])->name('admins.destroy');
            //Produk
        Route::get('/produk', [ProdukController::class, 'index'])->name('admins.show-produk');
        Route::get('/produk-add', [ProdukController::class, 'create'])->name('admins.add-produk');
        Route::post('/produk-add', [ProdukController::class, 'store'])->name('admins.store-produk');
        Route::get('/produk-edit/{id}', [ProdukController::class, 'edit'])->name('admins.edit-produk');
        Route::put('/produk-edit/{id}', [ProdukController::class, 'update'])->name('admins.update-produk');
        Route::delete('produk-delete/{id}', [ProdukController::class, 'destroy'])->name('admins.delete-produk');
            //Pemesanan
        Route::get('/pemesanan', [OrderController::class, 'index'])->name('admins.pemesanan-produk');
        Route::get('/pemesanan-add', [OrderController::class, 'create'])->name('admins.add-pemesanan');
        Route::post('/pemesanan-add', [OrderController::class, 'store'])->name('admins.store-pemesanan');
            //Show Data User
        Route::get('/user-admin', [AdminController::class, 'show'])->name('admins.show-admin');
        Route::get('/user-supplier', [SupplierController::class, 'show'])->name('admins.show-supplier');
            //Kategori
        Route::get('/kategori', [KategoriController::class, 'index'])->name('admins.show-kategori');
        Route::get('/kategori-add', [KategoriController::class, 'create'])->name('admins.add-kategori');
        Route::post('/kategori-add', [KategoriController::class, 'store'])->name('admins.store-kategori');
        Route::get('/kategori-edit/{id}', [KategoriController::class, 'edit'])->name('admins.edit-kategori');
        Route::put('/kategori-edit/{id}', [KategoriController::class, 'update'])->name('admins.update-kategori');
        Route::delete('/kategori-delete/{id}', [KategoriController::class, 'destroy'])->name('admins.delete-kategori');
    });

    # Resource Supplier
Route::prefix('suppliers')
->middleware(['auth'])
->group(function() {
    Route::get('/dashboard', [SupplierController::class, 'index'])->name('suppliers.dashboard');
});
require __DIR__.'/auth.php';
