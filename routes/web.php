<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application.
| These routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'index']);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/redirect', [HomeController::class, 'redirect'])->name('redirect');

Route::get('/view_category', [AdminController::class, 'view_category'])->name('view_category');
Route::post('/add_category', [AdminController::class, 'add_category']);
Route::get('/delete_category/{id}', [AdminController::class, 'delete_category'])->name('delete_category');
Route::get('/edit_category/{id}', [AdminController::class, 'edit_category'])->name('edit_category');
Route::post('/update_category/{id}', [AdminController::class, 'update_category'])->name('update_category');

Route::get('/view_user', [AdminController::class, 'view_user'])->name('view_user');
Route::post('/add_user', [AdminController::class, 'add_user'])->name('admin.users.store');
Route::get('/edit_user/{id}', [AdminController::class, 'edit_user'])->name('edit_user');
Route::post('/update_user/{id}', [AdminController::class, 'update_user'])->name('update_user');
Route::get('/delete_user/{id}', [AdminController::class, 'delete_user'])->name('delete_user');

Route::get('/view_goatvest', [AdminController::class, 'view_goatvest'])->name('view_goatvest');
Route::post('/add_goatvest', [AdminController::class, 'add_goatvest'])->name('admin.goatvest.store');
Route::get('/edit_goatvest/{id}', [AdminController::class, 'edit_goatvest'])->name('edit_goatvest');
Route::post('/update_goatvest/{id}', [AdminController::class, 'update_goatvest'])->name('update_goatvest');
Route::delete('/delete_goatvest/{id}', [AdminController::class, 'delete_goatvest'])->name('admin.goatvest.delete');

Route::get('/view_mitra', [AdminController::class, 'view_mitra'])->name('admin.mitra.index');
Route::post('/add_mitra', [AdminController::class, 'add_mitra'])->name('admin.mitra.store');
Route::delete('/delete_mitra/{id}', [AdminController::class, 'delete_mitra'])->name('admin.mitra.delete');


Route::get('/view_mitra', [AdminController::class, 'view_mitra'])->name('admin.mitra.view');
Route::post('/add_mitra', [AdminController::class, 'add_mitra'])->name('admin.mitra.store');
Route::delete('/delete_mitra/{id}', [AdminController::class, 'delete_mitra'])->name('admin.mitra.delete');
Route::get('/edit_mitra/{id}', [AdminController::class, 'edit_mitra'])->name('admin.mitra.edit');
Route::put('/update_mitra/{id}', [AdminController::class, 'update_mitra'])->name('admin.mitra.update');

Route::get('/admin/kurir', [AdminController::class, 'view_kurir'])->name('admin.kurir.view');
Route::get('/admin/kurir/create', [AdminController::class, 'create_kurir'])->name('admin.kurir.create');
Route::post('/admin/kurir/store', [AdminController::class, 'store_kurir'])->name('admin.kurir.store');
Route::get('/admin/kurir/edit/{kurir}', [AdminController::class, 'edit_kurir'])->name('admin.kurir.edit');
Route::put('/admin/kurir/update/{kurir}', [AdminController::class, 'update_kurir'])->name('admin.kurir.update');
Route::delete('/admin/kurir/delete/{kurir}', [AdminController::class, 'delete_kurir'])->name('admin.kurir.delete');


Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/services', [HomeController::class, 'services'])->name('services');
Route::get('/article-1', [HomeController::class, 'article1'])->name('article-1');
Route::get('/article-2', [HomeController::class, 'article2'])->name('article-2');
Route::get('/article-3', [HomeController::class, 'article3'])->name('article-3');
Route::get('/user-faq', [HomeController::class, 'faq'])->name('user-faq');
Route::get('/admin_login', [HomeController::class, 'admin_login']);
