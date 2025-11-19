<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\GuardianController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\ClassroomController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\Admin\AdminStudentController;
use App\Http\Controllers\Admin\AdminTeacherController;
use App\Http\Controllers\Admin\AdminGuardianController;
use App\Http\Controllers\Admin\AdminSubjectController;
use App\Http\Controllers\Admin\AdminClassroomController;
use App\Http\Controllers\Admin\AdminProfileController;
use App\Http\Controllers\Admin\AdminContactController;
use App\Http\Controllers\Admin\AdminDashboardController;

Route::get('/', function () {
    return redirect()->route('admin.dashboard');
});
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('/profil', [ProfilController::class, 'index'])->name('profil');
    Route::get('/kontak', [ContactController::class, 'index'])->name('kontak');
    Route::get('/student', [StudentController::class, 'index'])->name('student');
    Route::get('/guardian', [GuardianController::class, 'index'])->name('guardian');
    Route::get('/classroom', [ClassroomController::class, 'index'])->name('classroom');
    Route::get('/teacher', [TeacherController::class, 'index'])->name('teacher');
    Route::get('/subject', [SubjectController::class, 'index'])->name('subject');


Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [HomeController::class, 'adminDashboard'])->name('dashboard');
    Route::get('/profil', [AdminProfileController::class, 'index'])->name('profil');
    Route::get('/kontak', [AdminContactController::class, 'index'])->name('contact.index');
    Route::get('/classroom', [AdminClassroomController::class, 'index'])->name('classroom.index');
    Route::get('/classroom/create', [AdminClassroomController::class, 'create'])->name('classroom.create');
    Route::post('/classroom', [AdminClassroomController::class, 'store'])->name('classroom.store');
    Route::get('/student', [AdminStudentController::class, 'index'])->name('student.index');
    Route::post('/student', [AdminStudentController::class, 'store'])->name('student.store');
    Route::put('/student/{student}', [AdminStudentController::class, 'update'])->name('student.update');
    Route::delete('/student/{student}', [AdminStudentController::class, 'destroy'])->name('student.destroy');
    Route::get('/teacher', [AdminTeacherController::class, 'index'])->name('teacher.index');
    Route::post('/teacher', [AdminTeacherController::class, 'store'])->name('teacher.store');
    Route::put('/teacher/{teacher}', [AdminTeacherController::class, 'update'])->name('teacher.update');
    Route::delete('/teacher/{teacher}', [AdminTeacherController::class, 'destroy'])->name('teacher.destroy');
    Route::get('/guardian', [AdminGuardianController::class, 'index'])->name('guardian.index');
    Route::post('/guardian', [AdminGuardianController::class, 'store'])->name('guardian.store');
    Route::put('/guardian/{guardian}', [AdminGuardianController::class, 'update'])->name('guardian.update');
    Route::delete('/guardian/{guardian}', [AdminGuardianController::class, 'destroy'])->name('guardian.destroy');
    Route::get('/subject', [AdminSubjectController::class, 'index'])->name('subject.index');
    Route::post('/subject', [AdminSubjectController::class, 'store'])->name('subject.store');
});
