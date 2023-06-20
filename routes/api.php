<?php

use App\Http\Controllers\MatchingController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\TeacherController;
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
Route::post('/review', [ReviewController::class, 'addReview']) -> name('addReview');
Route::post('/matching', [MatchingController::class, 'matching']) -> name('matching');
Route::get('/comment/{id}', [TeacherController::class, 'getListComment']) -> name('comment');

