<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Attendance;
use App\Models\StudentAttendance;
use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Course;


class AttendanceController extends BaseAuthController
{
    // List all attendance records
    public function index()
    {
        $attendanceRecords = StudentAttendance::with('student', 'course')->get();
        //coutn total students
        $totalStudents = Student::count();
        //total student present today
        $presentToday = StudentAttendance::where('date', date('Y-m-d'))
            ->where('status', 'present')
            ->count();
        //total student absent today
        $absentToday = StudentAttendance::where('date', date('Y-m-d'))
            ->where('status', 'absent')
            ->count();
        $courses = Course::all();
        return view('admin.attendances.attendance', compact('attendanceRecords','courses','totalStudents','presentToday','absentToday'));
    }

    // Mark attendance
    public function create()
    {
        $courses = Course::with('students')->get();
        return view('admin.attendances.create', compact('courses'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'courseSelect'     => 'required|exists:courses,id',
            'date'             => 'required|date',
            'attendance'       => 'required|array',
            'attendance.*'     => 'required|in:present,absent',
        ]);

        foreach ($request->attendance as $studentId => $status) {
            StudentAttendance::create([
                'student_id' => $studentId,
                'course_id'  => $request->courseSelect,
                'date'       => $request->date,
                'status'     => $status,
            ]);
        }

        return redirect()->route('admin.attendance')->with('success', 'Attendance marked successfully.');
    }


    // Edit attendance record
    public function edit($id)
    {
        $attendance = Attendance::findOrFail($id);
        return view('admin.attendances.edit', compact('attendance'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'status' => 'required|in:present,absent'
        ]);

        $attendance = Attendance::findOrFail($id);
        $attendance->status = $request->status;
        $attendance->save();

        return redirect()->route('admin.attendances')->with('success', 'Attendance updated successfully.');
    }
    // Delete attendance record
    public function destroy($id)
    {
        $attendance = Attendance::findOrFail($id);
        $attendance->delete();

        return redirect()->route('admin.attendances')->with('success', 'Attendance deleted successfully.');
    }

    // Generate attendance reports
    public function reports()
    {
        $attendances = Attendance::all();
        return view('admin.attendances.report', compact('attendances'));
    }
}
