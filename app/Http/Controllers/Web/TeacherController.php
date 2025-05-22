<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Trainer;
use App\Models\Institute;
use App\Models\Subject;
use App\Models\Course;
use App\Models\TeacherAssign;
use Illuminate\Http\Request;

class TeacherController extends BaseAuthController
{
    public function index()
    {
        $teachers = Trainer::all();
        return view('admin.teachers.teacher', compact('teachers'));
    }

    public function addTeacher()
    {
        $institutes = Institute::all();
        return view('admin.teachers.add', compact('institutes'));
    }
    public function storeTeacher(Request $request)
    {

    
    
        $request->validate([
            'name' => 'required|string|max:255',
            'email_id' => 'required|email|unique:teachers,email_id',
            'mobile_no' => 'required|digits:10',
            'status' => 'required|string',
            'institute_code' => 'required|string'
        ]);

        $teacher = new Trainer();

        $teacher->name = $request->name;
        $teacher->email_id = $request->email_id;
        $teacher->mobile_no = $request->mobile_no;
        $teacher->status = $request->status;
        $teacher->institute_code = $request->institute_code;
        $teacher->save();
        return redirect()->route('admin.teachers')->with('success', 'Teacher added successfully.');

    }
  

    public function editTeacher($id)
    {
        $teacher = Trainer::findOrFail($id);
        $institutes = Institute::all();
        return view('admin.teachers.edit', compact('teacher', 'institutes'));
    }
    public function updateTeacher(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email_id' => 'required|email',
            'mobile_no' => 'required|digits:10',
            'status' => 'required|string',
            'institute_code' => 'required|string'
        ]);

        $teacher = Trainer::findOrFail($request->id);

        $teacher->name = $request->name;
        $teacher->email_id = $request->email_id;
        $teacher->mobile_no = $request->mobile_no;
        $teacher->status = $request->status;
        $teacher->institute_code = $request->institute_code;
        $teacher->save();
        return redirect()->route('admin.teachers')->with('success', 'Teacher updated successfully.');
    }
    public function deleteTeacher($id)
    {
        $teacher = Trainer::findOrFail($id);
        $teacher->delete();
        return redirect()->route('admin.teachers')->with('success', 'Teacher deleted successfully.');
    }

    public function addAssignSubjects()
    {
        $teachers = Trainer::all();
        $courses = Course::with(['subjects', 'institute'])->get();
        $teachers_assign = TeacherAssign::with(['teacher', 'course', 'subject', 'institute'])->get();
 
        return view('admin.teachers.assign', compact('teachers', 'courses', 'teachers_assign'));
    }

    public function storeAssignSubjects(Request $request)
    {
    // 1. Validate inputs
    $request->validate([
        'teacher_id' => 'required|exists:teachers,id',
        'subject_id' => 'required|exists:subjects,id',
        'course_id'  => 'required|exists:courses,id',
        'class'      => 'required|string|max:255',
        'date'       => 'required|date',
        'start_time' => 'required|date_format:H:i',
        'end_time'   => 'required|date_format:H:i',
    ]);

    // 2. Fetch the trainer and course
    $trainer = Trainer::findOrFail($request->teacher_id);
    $course  = Course::findOrFail($request->course_id);

    // 3. Ensure they belong to the same institute
    if ($trainer->institute_code !== $course->institute_code) {
        return redirect()->back()
            ->with('error', 'Teacher and course must belong to the same institute.');
    }

    $institute = Institute::where('institute_code', $trainer->institute_code)->firstOrFail();

    // 4. Create the assignment
    $assign = new TeacherAssign([
        'teacher_id'    => $trainer->id,
        'institute_id'=>  $institute->id,
        'subject_id'    => $request->subject_id,
        'course_id'     => $course->id,
        'batch'         => $request->class,
        'start_time'    => $request->start_time,
        'end_time'      => $request->end_time,
        'date'          => $request->date,
        'status'        => 'active',
    ]);
    $assign->save();

    // 5. Redirect with success
    return redirect()
        ->route('teachers.assignSubjects.create')
        ->with('success', 'Subject assigned to teacher successfully.');
    }
    
    public function deleteAssignSubjects()
    {
        return view('admin.teachers.delete_assign');
    }

    public function schedules()
    {
        $teachersAssign = TeacherAssign::with(['teacher', 'course', 'subject', 'institute'])->get();
        return view('admin.teachers.schedule', compact('teachersAssign'));
    }
    public function reports()
    {
        return view('admin.teachers.report');
    }
}
