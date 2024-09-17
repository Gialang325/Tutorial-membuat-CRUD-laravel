<?php
// Tempatkan file kode ini di dalam folder projek-laravel\Routes
use App\Http\Controllers\projekcontroller;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

Route::get('/projek', [projekcontroller::class, 'index'])->name('projek.index');
Route::get('/projek/create', [projekcontroller::class, 'create'])->name('projek.create');
Route::post('/projek', [projekcontroller::class, 'store'])->name('projek.store');
Route::get('/projek/edit/{id}', [projekcontroller::class, 'edit'])->name('projek.edit');
Route::put('/projek/{id}', [projekcontroller::class, 'update'])->name('projek.update');
Route::delete('/projek/{id}', [projekcontroller::class, 'destroy'])->name('projek.destroy');

