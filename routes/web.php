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

Route::get('/admin/student/index', \App\Livewire\Admin\Student\Index::class)->name('admin.student.index');

Route::get('/admin/lesson/index', \App\Livewire\Admin\Lesson\Index::class)->name('admin.lesson.index');
Route::get('/admin/lesson/create', \App\Livewire\Admin\Lesson\Create::class)->name('admin.lesson.create');
Route::get('/admin/lesson/checker', \App\Livewire\Admin\Lesson\Checker::class)->name('admin.lesson.checker');
Route::get('/admin/lesson/edit/{lesson_id}', \App\Livewire\Admin\Lesson\Edit::class)->name('admin.lesson.edit');
Route::get('/admin/lesson/student/{lesson_id}', \App\Livewire\Admin\Lesson\Student::class)->name('admin.lesson.student');
Route::get('/admin/lesson/workout/{lesson_id}', \App\Livewire\Admin\Lesson\Workout::class)->name('admin.lesson.workout');

Route::get('/admin/workout/index', \App\Livewire\Admin\Workout\Index::class)->name('admin.workout.index');
Route::get('/admin/workout/create', \App\Livewire\Admin\Workout\Create::class)->name('admin.workout.create');
Route::get('/admin/workout/edit/{workout_id}', \App\Livewire\Admin\Workout\Edit::class)->name('admin.workout.edit');
Route::get('/admin/workout/student/{workout_id}', \App\Livewire\Admin\Workout\Student::class)->name('admin.workout.student');


Route::get('/student/lesson/index', \App\Livewire\Student\Lesson\Index::class)->name('student.lesson.index')->middleware(\App\Http\Middleware\StudentCheck::class);
Route::get('/student/workout/index', \App\Livewire\Student\Workout\Index::class)->name('student.workout.index')->middleware(\App\Http\Middleware\StudentCheck::class);
