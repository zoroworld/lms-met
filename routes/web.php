<?php



use App\Http\Controllers\Web\AdminController;
use App\Http\Controllers\Web\AttendanceController;
use App\Http\Controllers\Web\AuthController;
use App\Http\Controllers\Web\CourseController;
use App\Http\Controllers\Web\InstituteController;
use App\Http\Controllers\Web\MeetingController;
use App\Http\Controllers\Web\StudentController;
use App\Http\Controllers\Web\SubjectController;
use App\Http\Controllers\Web\SupportController;
use App\Http\Controllers\Web\TeacherController;
use App\Http\Controllers\Web\PageController;
use App\Http\Controllers\Web\TrainerRoleController;
use App\Http\Controllers\Web\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::get('/trainers', [PageController::class, 'trainers'])->name('home-trainers');
Route::get('/courses', [PageController::class, 'courses'])->name('home-courses');
Route::get('/events', [PageController::class, 'events'])->name('home-events');


// all login user  and  rgister , logout
Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


// Protected admin routes with prefix
Route::middleware(['auth'])->prefix('admin')->group(function () {
    Route::get('/test', [AdminController::class, 'test'])->name('admin.test');
    Route::get('/', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::get('/profile', function () {
        return view('admin/profile');
    })->name('admin.profile');

    Route::prefix('students')->group(function () {
        Route::get('/', [StudentController::class, 'index'])->name('admin.students');
        Route::get('/create', [StudentController::class, 'create'])->name('students.create');
        Route::post('/store', [StudentController::class, 'store'])->name('students.store');
        Route::get('/{id}/edit', [StudentController::class, 'edit'])->name('students.edit');
        Route::put('/{id}', [StudentController::class, 'update'])->name('students.update');
        Route::delete('/{id}', [StudentController::class, 'destroy'])->name('students.destroy');
        Route::get('/assignment',  [StudentController::class, 'assignment'])->name('students.assignment');
        Route::get('/report',  [StudentController::class, 'report'])->name('students.report');
        Route::get('/{id}/report', [StudentController::class, 'profile'])->name('students.profile');
        Route::get('/fee',  [StudentController::class, 'fee'])->name('students.fee');
    });

    Route::prefix('teachers')->group(function () {
        Route::get('/', [TeacherController::class, 'index'])->name('admin.teachers');
        Route::get('/add', [TeacherController::class, 'addTeacher'])->name('teachers.add');
        Route::post('/store', [TeacherController::class, 'storeTeacher'])->name('teachers.store');
        Route::get('/edit/{id}', [TeacherController::class, 'editTeacher'])->name('teachers.edit');
        Route::put('/update/{id}', [TeacherController::class, 'updateTeacher'])->name('teachers.update');
        Route::delete('/delete/{id}', [TeacherController::class, 'deleteTeacher'])->name('teachers.destroy');
        Route::get('/assign-subjects-add', [TeacherController::class, 'addAssignSubjects'])->name('teachers.assignSubjects.create');
        Route::post('/assign-subjects-store', [TeacherController::class, 'storeAssignSubjects'])->name('teachers.assignSubjects.store');
        Route::get('/assign-subjects-edit', [TeacherController::class, 'editAssignSubjects'])->name('teachers.assignSubjects.edit');
        Route::put('/assign-subjects-update/{id}', [TeacherController::class, 'updateAssignSubjects'])->name('teachers.assignSubjects.update');
        Route::delete('/assign-subjects-delete/{id}', [TeacherController::class, 'destroyAssignSubjects'])->name('teachers.assignSubjects.destroy');
        Route::get('/schedules', [TeacherController::class, 'schedules'])->name('teachers.schedules');
        Route::get('/reports', [TeacherController::class, 'reports'])->name('teachers.reports');
    });

    Route::prefix('institutes')->group(function () {
        Route::get('/', [InstituteController::class, 'index'])->name(name: 'admin.institutes');
        Route::get('/create', [InstituteController::class, 'create'])->name('create.institutes');
        Route::post('/store', [InstituteController::class, 'store'])->name('store.institutes');
        Route::get('/edit/{id}', [InstituteController::class, 'edit'])->name('edit.institutes');
        Route::put('/update/{id}', [InstituteController::class, 'update'])->name('update.institutes');
        Route::delete('/delete/{id}', [InstituteController::class, 'destroy'])->name('delete.institutes');
        Route::get('/reports', [InstituteController::class, 'report'])->name('reports.institutes');
    });

    // Route::get('/courses', [CourseController::class, 'index'])->name('admin.courses');
    // Route::get('/subjects', [SubjectController::class, 'index'])->name('admin.subjects');

    Route::prefix('courses')->group(function () {
        Route::get('/', [CourseController::class, 'index'])->name('admin.courses');
        Route::get('/create', [CourseController::class, 'create'])->name('create.courses');
        Route::post('/store', [CourseController::class, 'store'])->name('store.courses');
        Route::get('/edit/{id}', [CourseController::class, 'edit'])->name('edit.courses');
        Route::get('/{id}', [CourseController::class, 'show']);
        Route::put('/update/{id}', [CourseController::class, 'update'])->name('update.courses');
        Route::delete('/delete/{id}', [CourseController::class, 'destroy'])->name('delete.courses');
        Route::get('/reports', [CourseController::class, 'reports'])->name('reports.courses');
    });

  


    Route::prefix('subjects')->group(function () {
        Route::get('/', [SubjectController::class, 'index'])->name('admin.subjects');
        Route::get('/create', [SubjectController::class, 'create'])->name('create.subjects');
        Route::post('/store', [SubjectController::class, 'store'])->name('store.subjects');
        Route::get('/edit/{id}', [SubjectController::class, 'edit'])->name('edit.subjects');
        Route::put('/update/{id}', [SubjectController::class, 'update'])->name('update.subjects');
        Route::delete('/delete/{id}', [SubjectController::class, 'destroy'])->name('delete.subjects');
        Route::get('/assign', [SubjectController::class, 'assign'])->name('assign.subjects');
    });

    // Route::get('/attendance', [AttendanceController::class, 'index'])->name('admin.attendance');
    Route::prefix('attendance')->group(function () {
        Route::get('/', [AttendanceController::class, 'index'])->name('admin.attendance');
        Route::get('/create', [AttendanceController::class, 'create'])->name('create.attendance');
        Route::post('/store', [AttendanceController::class, 'store'])->name('store.attendance');
        Route::get('/edit/{id}', [AttendanceController::class, 'edit'])->name('edit.attendance');
        Route::put('/update/{id}', [AttendanceController::class, 'update'])->name('update.attendance');
        Route::delete('/delete/{id}', [AttendanceController::class, 'destroy'])->name('delete.attendance');
        Route::get('/reports', [AttendanceController::class, 'reports'])->name('reports.attendance');
    });


    // Route::get('/meetings', [MeetingController::class, 'index'])->name('admin.meetings');
    Route::prefix('meetings')->group(function () {
        Route::get('/', [MeetingController::class, 'index'])->name('admin.meeting');
        Route::get('/create', [MeetingController::class, 'create'])->name('create.meetings');
        Route::post('/store', [MeetingController::class, 'store'])->name('store.meetings');
        Route::get('/edit/{id}', [MeetingController::class, 'edit'])->name('edit.meetings');
        Route::put('/update/{id}', [MeetingController::class, 'update'])->name('update.meetings');
        Route::delete('/delete/{id}', [MeetingController::class, 'destroy'])->name('delete.meetings');
        Route::get('/meeting/attendance', [MeetingController::class, 'attendance'])->name('attendance.meetings');
        Route::get('/mark-attendance', [MeetingController::class, 'markAttendance'])->name('mark.meetings');
        Route::get('/reports', [MeetingController::class, 'reports'])->name('reports.meetings');
    });

    // Route::get('/users', [UserController::class, 'index'])->name('admin.users');
    Route::prefix('users')->group(function () {
        Route::get('/', [UserController::class, 'index'])->name('admin.users');
        Route::get('/{id}', [UserController::class, 'show'])->name('show.user');
        Route::get('/{id}/edit', [UserController::class, 'edit'])->name('edit.user');
        Route::put('/{id}', [UserController::class, 'update'])->name('update.user');
        Route::delete('/{id}', [UserController::class, 'destroy'])->name('destroy.user');
    });

    // Route::get('/trainerRoles', [TrainerRoleController::class, 'index'])->name('admin.trainerRoles');
    Route::prefix('trainerRoles')->group(function () {
        Route::get('/', [TrainerRoleController::class, 'index'])->name('admin.trainerRoles');
        Route::get('/create', [TrainerRoleController::class, 'create'])->name('create.trainerRoles');
        Route::post('/store', [TrainerRoleController::class, 'store'])->name('store.trainerRoles');
        Route::get('/{id}', [TrainerRoleController::class, 'show'])->name('show.trainerRoles');
        Route::get('/{id}/edit', [TrainerRoleController::class, 'edit'])->name('edit.trainerRoles');
        Route::put('/{id}', [TrainerRoleController::class, 'update'])->name('update.trainerRoles');
        Route::delete('/{id}', [TrainerRoleController::class, 'destroy'])->name('destroy.trainerRoles');
    });

    Route::prefix('support')->group(function () {
        Route::get('/', [SupportController::class, 'index'])->name('admin.support');
        Route::get('/create', [SupportController::class, 'create'])->name('create.support');
        Route::post('/store', [SupportController::class, 'store'])->name('store.support');
        Route::get('/{id}', [SupportController::class, 'show'])->name('show.support');
        Route::get('/{id}/edit', [SupportController::class, 'edit'])->name('edit.support');
        Route::put('/{id}', [SupportController::class, 'update'])->name('update.support');
        Route::delete('/{id}', [SupportController::class, 'destroy'])->name('destroy.support');
    });


});


Route::fallback(function () {
    return view('404');
});
