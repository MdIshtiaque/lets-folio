<?php

use App\Http\Controllers\Admin\TemplateController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('admin/dashboard', [DashboardController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('admin/templates', [TemplateController::class, 'templateList'])->name('admin.templateList');
    Route::get('admin/templates/view/{path}', [TemplateController::class, 'templateView'])->name('admin.templateView');
});

require __DIR__ . '/auth.php';
