<?php


use App\Http\Controllers\ClassManagerController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\BookmarkController;
use App\Http\Controllers\MatchingController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\TeacherController;
use Illuminate\Auth\Events\Login;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/teacher', [TeacherController::class, 'getListTeacher']);
Route::put('/update-status', [TeacherController::class, 'updateStatus']);
Route::post('/review', [ReviewController::class, 'addReview']) -> name('addReview');
Route::post('/matching', [MatchingController::class, 'matching']) -> name('matching');
Route::get('/comment/{id}', [TeacherController::class, 'getListComment']) -> name('comment');

Route::get('/teacher/search', [TeacherController::class, 'searchTeacher']);

Route::post('/create-class', [ClassManagerController::class, 'createClass']) -> name('createClass');
Route::post('/edit-class', [ClassManagerController::class, 'editClass']) -> name('editClass');
Route::get('/get-all-class', [ClassManagerController::class, 'getAllClass']) -> name('getAllClass');
Route::delete('/delete-class/{id}', [ClassManagerController::class, 'deleteClass']) -> name('deleteClass');
Route::post('/register-class', [ClassManagerController::class, 'registerClass']) -> name('registerClass');
Route::post('/get-member-class', [ClassManagerController::class, 'getStudentByStatus']) -> name('getStudentByStatus');
Route::delete('/delete-request/{id}', [ClassManagerController::class, 'deleteRequestMember']) -> name('deleteRequestMember');
Route::put('/check-request', [ClassManagerController::class, 'checkRequestMember']) -> name('checkRequestMember');
Route::put('/question', [MatchingController::class, 'question']) -> name('question');
Route::get('/get-teacher-by-question/{id}', [MatchingController::class, 'matchingByUserId']) -> name('matchingByUserId');

Route::post('/login', [LoginController::class, 'login']) -> name('login');
Route::get('/logout', [LoginController::class, 'logout']) -> name('logout');
Route::post('/register', [RegisterController::class, 'register']) -> name('register');
Route::post('/bookmark', [BookmarkController::class, 'bookmark']);
Route::put('/edit-info', [UserController::class, 'editInfo']);


