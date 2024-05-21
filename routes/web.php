<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/admin/lesson/index', \App\Livewire\Admin\Lesson\Index::class)->name('admin.lesson.index');
Route::get('/admin/lesson/create', \App\Livewire\Admin\Lesson\Create::class)->name('admin.lesson.create');
Route::get('/admin/lesson/edit', \App\Livewire\Admin\Lesson\Edit::class)->name('admin.lesson.edit');
