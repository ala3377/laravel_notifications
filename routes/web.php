<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\NotificationController;

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
    return view('welcome');
});



Route::get('/send-sms', [NotificationController::class, 'sendSms']);



Route::get('/main_page', [AuthController::class, 'showMainPage']);
Route::get('/contact', [AuthController::class, 'showContactPage']);
Route::get('/features', [AuthController::class, 'showFeaturesPage']);

Route::get('/login_page', [AuthController::class, 'showLoginPage']);
Route::post('/login', [AuthController::class, 'login'])->name('login');

Route::get('/register_page', [AuthController::class, 'showRegister']);
// Handle the registration form submission
Route::post('/myRegisters', [AuthController::class, 'register'])->name('myRegisters');

















