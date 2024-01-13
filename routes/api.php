<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Mail\SendMail;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::post('login', [Controllers\UserController::class, 'login']);
Route::post('register', [Controllers\UserController::class, 'register']);
Route::get('a',  function () {
return "not authenticated";
})->name("a");
Route::resource('classes', Controllers\ClassController::class);
Route::resource('ed_programs', Controllers\EdProgramController::class);
Route::get('getcourse/{id}', [Controllers\CourseController::class, 'getcourse']);
Route::get('getcourseUser/{id}', [Controllers\CourseController::class, 'getcourseUser']);

Route::resource('course', Controllers\CourseController::class);
Route::resource('courseProfessor', Controllers\CourseProfessorController::class);
Route::post("send-mail", [Controllers\MaliController::class, 'send']);

Route::resource('courseTracker', Controllers\CourseTakerController::class);
Route::resource('scorm', Controllers\ScormDataController::class);
Route::post('set-value', [Controllers\ScormDataController::class, 'setValue']);
Route::get('get-value/{course_id}', [Controllers\ScormDataController::class, 'getValue']);
Route::get('gethomeworkUpload/{id}/{myid}', [Controllers\HomeworkUploadController::class, 'gethomeworkUpload']);
Route::post('upload-scorm-course', [Controllers\ScormDataController::class, 'uploadCourse']);

Route::resource('lesson', Controllers\LessonController::class);
Route::resource('Material', Controllers\MaterialController::class);
Route::get('getMaterial/{id}', [Controllers\MaterialController::class, "getMaterial"]); 
Route::get('getlesson/{id}', [Controllers\LessonController::class, 'getLessonByCourse']);
Route::get('getclass/{id}', [Controllers\ClassController::class, 'getClass']);
Route::get('download/{name}', [Controllers\MaterialController::class, 'Download']);
Route::get('search/{name}', [Controllers\CourseController::class, 'search']);


Route::resource('homework', Controllers\HomeworkController::class);
Route::get('gethomework/{id}', [Controllers\HomeworkController::class, 'gethomework']);
Route::get('gethomeworkUpload/{id}/{myid}', [Controllers\HomeworkUploadController::class, 'gethomeworkUpload']);



Route::group(['middleware' => 'auth:api'], function () {
    Route::get('details', [Controllers\UserController::class, 'details'])->name("details");
});
