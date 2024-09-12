<?php

use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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
    return redirect()->route('login');;
});

Auth::routes();

Route::middleware(['auth', 'role:admin'])->group(function(){
    Route::get('letter/index', [App\Http\Controllers\Admin\SuratController::class, 'index'])->name('letter.index');
    Route::get('letter/edit/{letter}', [App\Http\Controllers\Admin\SuratController::class, 'edit'])->name('letter.edit');
    Route::post('letter/update/{letter}', [App\Http\Controllers\Admin\SuratController::class, 'update'])->name('letter.update');
    Route::get('letter/destroy/{id}', [App\Http\Controllers\Admin\SuratController::class, 'destroy'])->name('letter.destroy');
    Route::post('letter/store', [App\Http\Controllers\Admin\SuratController::class, 'store'])->name('letter.store');
    Route::get('letter/create', [App\Http\Controllers\Admin\SuratController::class, 'create'])->name('letter.create');

    Route::get('user/index', [App\Http\Controllers\Admin\UserController::class, 'index'])->name('users.index');
    Route::get('user/edit/{user}', [App\Http\Controllers\Admin\UserController::class, 'edit'])->name('users.edit');
    Route::post('user/update/{user}', [App\Http\Controllers\Admin\UserController::class, 'update'])->name('users.update');
    Route::get('user/destroy/{id}', [App\Http\Controllers\Admin\UserController::class, 'destroy'])->name('users.destroy');
    Route::post('user/store', [App\Http\Controllers\Admin\UserController::class, 'store'])->name('users.store');
    Route::get('user/create', [App\Http\Controllers\Admin\UserController::class, 'create'])->name('users.create');

});
Route::middleware(['auth','role:uptd|bidang|admin|sekdin|kadis'])->group(function(){
    Route::get('/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('index');
    
   
    // Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
});


// Route::group(['namespace' => 'Admin','prefix' => 'admin','middleware' => ['auth']],function(){
//     Route::name('admin.')->group(function(){
//     Route::get('/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('index');
//     Route::get('user/index', [App\Http\Controllers\Admin\UserController::class, 'index'])->name('user.index');
//     Route::get('user/edit/{user}', [App\Http\Controllers\Admin\UserController::class, 'edit'])->name('user.edit');
//     Route::post('user/update/{user}', [App\Http\Controllers\Admin\UserController::class, 'update'])->name('user.update');
//     Route::get('user/destroy/{id}', [App\Http\Controllers\Admin\UserController::class, 'destroy'])->name('user.destroy');
//     Route::post('user/store', [App\Http\Controllers\Admin\UserController::class, 'store'])->name('user.store');
//     Route::get('user/create', [App\Http\Controllers\Admin\UserController::class, 'create'])->name('user.create');
// });
// });
