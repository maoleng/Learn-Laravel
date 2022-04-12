<?php

    use App\Http\Controllers\CourseController;
    use Illuminate\Support\Facades\Route;



Route::group(['prefix' => 'courses', 'as' => 'course.'], function () {
    Route::get('/', [CourseController::class, 'index'])->name('index');
    Route::get('/create', [CourseController::class, 'create'])->name('create');
    Route::post('/store', [CourseController::class, 'store'])->name('store');
    Route::get('/edit/{course}', [CourseController::class, 'edit'])->name('edit');
    Route::put('/update/{course}', [CourseController::class, 'update'])->name('update');
    Route::delete('/destroy/{course}', [CourseController::class, 'destroy'])->name('destroy');
});

Route::get('/test', function () {
    return view('layout/master');
});
