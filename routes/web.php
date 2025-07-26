<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FacultyController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\CommuneController;
use App\Http\Controllers\NeighborhoodController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\ScoreController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/students', [StudentController::class, 'index'])->middleware(['auth', 'verified'])->name('students');

Route::get('/faculties', [FacultyController::class, 'SeeFaculties']);
Route::get('/departments', [DepartmentController::class, 'SeeDepartments']);
Route::get('/programs', [ProgramController::class, 'SeePrograms']);
Route::get('/communes', [CommuneController::class, 'SeeCommunes']);
Route::get('/neighborhoods', [NeighborhoodController::class, 'SeeNeighborhoods']);
Route::get('/teachers', [TeacherController::class, 'SeeTeachers']);
Route::get('/subjects', [SubjectController::class, 'SeeSubjects']);
Route::get('/scores', [ScoreController::class, 'SeeScores']);

require __DIR__.'/auth.php';