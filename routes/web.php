<?php

use App\Http\Controllers\Admin\HouseholdMemberController;
use App\Http\Controllers\Admin\HouseholdMemberStoreController;
use App\Http\Controllers\Admin\MembersController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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
    return Inertia::render('Welcome', []);
});

Route::middleware('auth')->prefix('members')->group(function () {
    Route::get('/', MembersController::class)->name('members.index');
    Route::get('/{user:identification}/add-household-member', HouseholdMemberController::class)->name('household.members.add');
    Route::post('/{user:identification}/add-household-member', HouseholdMemberStoreController::class)->name('household.members.store');

    Route::get('dashboard', DashboardController::class)->name('dashboard');

    // Profile
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
