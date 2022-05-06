<?php

use App\Http\Controllers\AvatarController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\UserController;
use App\Models\Avatar;
use App\Models\Categorie;
use App\Models\User;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/avatars', function () {
    $allAvatars = Avatar::all();
    return view('layouts.avatars', compact('allAvatars'));
});

Route::get('/createAvatars', function () {
    $avatars = Avatar::all();
    return view('layouts.createAvatar', compact('avatars'));
});

Route::post('addava', [AvatarController::class, 'store']);

Route::delete('delav/{id}', [AvatarController::class, 'delete']);

Route::get('/users', function () {
    $users = User::all();
    return view('layouts.users', compact('users'));
});

Route::get('/images', function () {
    return view('layouts.images');
});

Route::post('addima', [ImageController::class, 'store']);

Route::get('/editUser/{id}/editUser', [UserController::class, 'edit']);
Route::put('/update/{id}/update', [UserController::class, 'update']);


Route::get('/categories', function () {
    $allCategorie = Categorie::all();
    return view('layouts.categories', compact('allCategorie'));
});

Route::get('createCategorie', [CategorieController::class, 'create']);
Route::post('addcat', [CategorieController::class, 'store']);
Route::get('/editCategorie/{id}/editCategorie', [CategorieController::class, 'edit']);
Route::put('/updateCategorie/{id}/updateCategorie', [CategorieController::class, 'update']);

require __DIR__.'/auth.php';
