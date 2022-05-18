<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Models\student;


Route :: get('student',[StudentController::class, 'index'] ) -> name('student.index');
Route :: get('student/{id}',[StudentController::class, 'show']) -> name('student.show');
Route :: get('student-create',[StudentController::class, 'add']) -> name('student.add');
Route :: get('student-edit/{id}',[StudentController::class, 'edit']) -> name('student.edit');
Route :: post('student-store',[StudentController::class, 'store']) -> name('student.store');

// Route :: get('student-single/{id}', function(){
//     return view('single');
// } );
// Route :: get('add', function(){
//     return view('create');
// } );
// Route :: get('edit', function(){
//     return view('edit');
// } );


//URL Route - Name Route - Action Route