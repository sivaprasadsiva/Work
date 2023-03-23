<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\FormController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('Login');
});

// Route::get('/Register', function () {
//     return view('Register');
// });
Route::get('/regiter', [FormController::class,'register'])->name('register');

Route::post('/submit-form', [FormController::class,'submitForm'])->name('submit-form');

Route::post('/login', [FormController::class,'loginForm'])->name('login-form');

Route::get('/home',[FormController::class,'home'])->name('home');

Route::get('/admin-home',[FormController::class,'adminHome'])->name('admin-home');

Route::get('/user-home',[FormController::class,'userHome'])->name('user-home');