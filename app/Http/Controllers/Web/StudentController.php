<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Student;
use App\Models\Course;
use App\Models\Institute;
use Illuminate\Http\Request;

class StudentController extends BaseAuthController
{
    public function index()
    {
        $students = Student::all();
        $totalFee = 0;
        $students = Student::with(['institute', 'courses'])->get();
        return view('admin.students.student', compact('students','totalFee'));
    }

    public function create()
    {
        $courses = Course::all();
        $institutes = Institute::all();
        return view('admin.students.create', compact('institutes','courses'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:students,email',
            'address' => 'required|string|max:255',
            'phone' => 'required|string|max:15',
            'status' => 'required|in:pending,active,suspend',
            'institute_code' => 'required|string|max:20',
            'course_ids' => 'required|array',
            'course_ids.*' => 'exists:courses,id',
        ]);

         // Create the student
        $student = Student::create($request->only([
            'name', 'email', 'address', 'phone', 'status', 'institute_code'
        ]));

        $student->courses()->attach($request->course_ids);

        return redirect()->route('admin.students')->with('success', 'Student created successfully');
    }

    public function edit($id)
    {
        $student = Student::findOrFail($id);
        return view('admin.students.edit', compact('student'));
    }

    public function update(Request $request, $id)
    {

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'address' => 'required|string',
            'phone' => 'required|string|max:15',
            'status' => 'required|string',
            'institute_code' => 'required|string',
        ]);

        $student = Student::findOrFail($id);
        $student->update($request->all());

        return redirect()->route('admin.students')->with('success', 'Student updated successfully');
    }

    public function destroy($id)
    {
        $student = Student::findOrFail($id);
        $student->delete();

        return redirect()->route('admin.students')->with('success', 'Student deleted successfully');
    }

    public function assignment()
    {
        return view('admin.students.assignment');
    }
    public function report()
    {
        $students = Student::all();
        return view('admin.students.report', compact('students'));
    }

    public function profile($id)
    {
        $student = Student::findOrFail($id);
        return view('admin.students.profile', compact('student'));
    }

    public function fee()
    {
        return view('admin.students.fee');
    }
}
