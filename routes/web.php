<?php

use App\Http\Controllers\CandidateController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PositionController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\VoteController;
use App\Models\PositionModel;

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
    return view('index'); 
});

Route::get('/vote', [VoteController::class, 'index']);
Route::post('/vote/confirm', [VoteController::class, 'confirm']);
Route::post('/vote/record', [VoteController::class, 'record']);
Route::get('/vote/{studentid}', [VoteController::class, 'vote']);

Route::get('/students', [StudentController::class, 'index'])->name('students.list');
Route::get('/students/add', [StudentController::class, 'addForm'])->name('students.add');
Route::get('/students/update/{studentid}', [StudentController::class, 'updateForm'])->name('students.update');
Route::get('/students/delete/{studentid}', [StudentController::class, 'delete'])->name('students.delete');

Route::post('/add/student', [StudentController::class, 'add']);
Route::post('/update/student', [StudentController::class, 'update']);

Route::get('/candidates', [CandidateController::class, 'index'])->name('candidates.list');
Route::get('/candidates/add', [CandidateController::class, 'addForm'])->name('candidates.add');
Route::post('/candidates/add', [CandidateController::class, 'addForm'])->name('candidates.add');
Route::get('/candidates/update/{candidateid}', [CandidateController::class, 'updateForm'])->name('candidates.update');
Route::get('/candidates/delete/{candidateid}', [CandidateController::class, 'delete'])->name('candidates.delete');

Route::post('/add/candidate', [CandidateController::class, 'add']);
Route::post('/update/candidate', [CandidateController::class, 'update']);

Route::get('/positions', [PositionController::class, 'index'])->name('positions.list');
Route::get('/positions/add', [PositionController::class, 'addForm'])->name('positions.add');
Route::get('/positions/update/{positionindex}', [PositionController::class, 'updateForm'])->name('positions.update');
Route::get('/positions/delete/{positionindex}', [PositionController::class, 'delete'])->name('positions.delete');

Route::post('/add/position', [PositionController::class, 'add']);
Route::post('/update/position', [PositionController::class, 'update']);
