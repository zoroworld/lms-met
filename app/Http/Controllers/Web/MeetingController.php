<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Meeting;
use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Subject;
use App\Models\Trainer as Teacher;

class MeetingController extends BaseAuthController
{
    public function index()
    {
        $meetings = Meeting::all();
       
        $meetings = Meeting::with(['course', 'subject', 'teacher'])->get();
        return view('admin.meetings.meeting', compact('meetings'));
    }

    public function create()
    {
        $subjects = Subject::all();
        $courses = Course::all();
        $teachers = Teacher::all();
        return view('admin.meetings.create', compact('subjects', 'courses', 'teachers'));
    }
    // store
    public function store(Request $request)
    {


        $request->validate([
            'meetingSubject' => 'required|string|max:255',
            'meetingDate' => 'required|date',
            'meetingTime' => 'required|date_format:H:i',
            'meetingLink' => 'nullable|url',
            'courseSelect' => 'required|exists:courses,id',
            'subjectSelect' => 'required|exists:subjects,id',
            'teacherSelect' => 'required|exists:teachers,id',
            'meetingStatus' => 'required|in:scheduled,ongoing,completed,canceled',
        ]);

        //get institute code from assign teacher
        $institute_code = Teacher::where('id', $request->teacherSelect)->first()->institute_code;


        Meeting::create([
            'meeting_subject' => $request->meetingSubject,
            'meeting_date' => $request->meetingDate,
            'meeting_time' => $request->meetingTime,
            'meeting_link' => $request->meetingLink,
            'course_id' => $request->courseSelect,
            'subject_id' => $request->subjectSelect,
            'teacher_id' => $request->teacherSelect,
            'status' => $request->meetingStatus,
            'institute_code' => $institute_code,
        ]);

        return redirect()->route('admin.meeting')->with('success', 'Meeting created successfully.');
    }
    public function edit($id)
    {
        $meeting = Meeting::findOrFail($id);
        $subjects = Subject::all();
        $courses = Course::all();
        $teachers = Teacher::all();
        return view('admin.meetings.edit', compact('meeting', 'subjects', 'courses', 'teachers'));
    }
    public function update(Request $request, $id)
    {

        $request->validate([
            'meetingSubject' => 'required|string|max:255',
            'meetingDate' => 'required|date',
            'meetingTime' => 'required|date_format:H:i',
            'meetingLink' => 'nullable|url',
            'courseSelect' => 'required|exists:courses,id',
            'subjectSelect' => 'required|exists:subjects,id',
            'teacherSelect' => 'required|exists:teachers,id',
            'meetingStatus' => 'required|in:scheduled,ongoing,complete,cancel',
        ]);

        $meeting = Meeting::findOrFail($id);

        $meeting->update([
            'meeting_subject' => $request->meetingSubject,
            'meeting_date' => $request->meetingDate,
            'meeting_time' => $request->meetingTime,
            'meeting_link' => $request->meetingLink,
            'course_id' => $request->courseSelect,
            'subject_id' => $request->subjectSelect,
            'teacher_id' => $request->teacherSelect,
            'status' => $request->meetingStatus,
            'institute_code' => $meeting->institute_code,
        ]);


        return redirect()->route('admin.meeting')->with('success', 'Meeting updated successfully.');
    }
    public function destroy($id)
    {
        $meeting = Meeting::findOrFail($id);
        $meeting->delete();

        return redirect()->route('admin.meeting')->with('success', 'Meeting deleted successfully.');
    }


    public function attendance()
    {
        return view('admin.meetings.attendance');
    }

    public function markAttendance()
    {
        return view('admin.meetings.mark');
    }

    public function reports()
    {
        return view('admin.meetings.report');
    }
}
