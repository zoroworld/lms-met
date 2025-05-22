<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Subject;
use App\Models\Institute;
use Illuminate\Http\Request;

class CourseController extends BaseAuthController
{
    public function index()
    {
        // 1. Get all courses with their subjects and institute
        $courses = Course::with(['subjects', 'institute'])->get();
        //need active , pending , inactive count courses
        $activeCount = Course::where('status', 'active')->count();
        $inactiveCount = Course::where('status', 'inactive')->count();
        //total count of courses
        $totalCount = Course::count();
        // 2. Pass data to view
        return view('admin.courses.course', compact('courses', 'activeCount', 'inactiveCount', 'totalCount'));
    }

    public function create()
    {
        // 1. Get all subjects
        $subjects = Subject::all();
        // 2. Get all institutes
        $institutes = Institute::all();
        // 3. Pass data to view
        return view('admin.courses.add', compact('subjects', 'institutes'));
    }

    /**
     * Store a newly created course in the database.
     */
    public function store(Request $request)
    {
        // 1. Validate input
        $request->validate([
            'course_name'        => 'required|string|max:255|unique:courses,course_name',
            'course_code'        => 'required|string|max:255|unique:courses,course_code',
            'course_type'        => 'required|in:online,offline',
            'course_duration'    => 'required|integer|min:1',
            'course_fee'         => 'required|numeric|min:0',
            'course_start_date'  => 'required|date',
            'course_end_date'    => 'required|date|after_or_equal:course_start_date',
            'course_description' => 'nullable|string',
            'description'        => 'nullable|string',
            'status'             => 'required|in:active,inactive',
            'institute_code'     => 'required|string|max:255',      // fixed key
            'subject'            => 'required|array|min:1',
            'subject.*'          => 'exists:subjects,id',           // array of subject IDs

        ]);

        // 2. Create the course
        $course = Course::create($request->only([
            'course_name',
            'course_code',
            'course_type',
            'course_duration',
            'course_fee',
            'course_start_date',
            'course_end_date',
            'course_description',
            'description',
            'status',
            'institute_code',
        ]));

         // 2. Attach subjects
        $subjectIds = $request->input('subject'); // array of subject IDs
        $course->subjects()->sync($subjectIds);

        // 4. Redirect with success
        return redirect()
            ->route('admin.courses')
            ->with('success', 'Course added successfully!');
    }


    public function reports()
    {
        $courses = Course::withCount('students')->get();
        return view('admin.courses.report', compact('courses'));
    }

    public function show($id)
    {
        return Course::with(['subjects'])->findOrFail($id);
    }
}
