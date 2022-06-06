<?php
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TaskController;

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

Route::get('/', [UserController::class, 'regViewPage'])->name('regpage');
Route::post('user_registration', [UserController::class, 'userRegistration'])->name('user.registration');
Route::get('user_login', [UserController::class, 'loginViewPage'])->name('user.login.page');
Route::post('login', [UserController::class, 'login'])->name('user.login');
Route::get('log_out',[UserController::class,'logOut'])->name('user.logout');
Route::get('home',[HomeController::class, 'index'])->name('home');
Route::get('create',[HomeController::class,'create'])->name('create.task');
Route::post('add_task',[TaskController::class,'create'])->name('add.task');
Route::get('reset_pass', [UserController::class, 'forgotpass'])->name('pass.reset');
Route::delete('delete/{id}',[TaskController::class,'destroy'])->name('task.destroy');
Route::get('edit/{id}',[TaskController::class,'editData'])->name('edit');
Route::post('update',[TaskController::class,'update'])->name('task.update');