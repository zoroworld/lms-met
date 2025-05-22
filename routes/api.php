<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\InstituteController;
use App\Http\Controllers\Api\AdminController;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\StudentController;
use App\Http\Controllers\Api\CourseController;
use App\Http\Controllers\Api\SubjectController;
use App\Http\Controllers\Api\MeetingController;
use App\Http\Controllers\Api\TeacherController;
use App\Http\Controllers\Api\TeacherRoleController;
use App\Http\Controllers\Api\AttendanceController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Public Routes
Route::post('/login', [UserController::class, 'login']);
Route::post('/register', [UserController::class, 'register']);

// Protected Routes (Requires authentication)
Route::middleware('auth:sanctum')->group(function () {

    // Institute Routes
    Route::apiResource('institutes', InstituteController::class);

    // Admin Routes
    Route::apiResource('admins', AdminController::class);

    // User Routes
    Route::apiResource('users', UserController::class);

    // Student Routes
    Route::apiResource('students', StudentController::class);

    // Course Routes
    Route::apiResource('courses', CourseController::class);

    // Subject Routes
    Route::apiResource('subjects', SubjectController::class);

    // Meeting Routes
    Route::apiResource('meetings', MeetingController::class);
    Route::post('/meetings/{meeting}/start', [MeetingController::class, 'start']);
    Route::post('/meetings/{meeting}/complete', [MeetingController::class, 'complete']);
    Route::post('/meetings/{meeting}/cancel', [MeetingController::class, 'cancel']);

    // Teacher Routes
    Route::apiResource('teachers', TeacherController::class);

    // Teacher Role Routes
    Route::apiResource('teacher-roles', TeacherRoleController::class);

    // Attendance Routes
    Route::apiResource('attendances', AttendanceController::class);
    Route::get('/attendances/meeting/{meetingId}', [AttendanceController::class, 'getByMeeting']);

    // Logout
    Route::post('/logout', [UserController::class, 'logout']);
});