<?php

use Inertia\Inertia;
use App\Models\Video;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Application;
use App\Http\Controllers\VideosController;
use App\Http\Controllers\ProfileController;

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
    return Inertia::render('Welcome', [
        'videos' => Video::inRandomOrder()->get()
    ]);
})->name('home');

Route::get('/add-video', function () {
    return Inertia::render('AddVideo');
})->name('addVideo');
Route::get('/delete-video', function () {
    return Inertia::render('DeleteVideo', ['videos' => Video::all()]);
})->name('deleteVideo');

Route::get('/videos/{id}', [VideosController::class, 'show'])->name('videos.show');
Route::post('/videos', [VideosController::class, 'store'])->name('videos.store');
Route::delete('/videos/{id}', [VideosController::class, 'destory'])->name('videos.destory');

require __DIR__ . '/auth.php';
