<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Institute;
use App\Models\Student;
use App\Models\Course;
use App\Models\Meeting;


class AdminController extends BaseAuthController
{
    public function index()
    {
        // total institutions count
        $totalInstitutions = Institute::count();
        // total institutions with active status
        $totalInstitutionsActive = Institute::where('status', 'active')->count();
        // total institutions with inactive status
        $totalInstitutionsInactive = Institute::where('status', 'inactive')->count();

        // total student
        $totalStudents = Student::count();
        // total student with active status
        $totalStudentsActive = Student::where('status', 'active')->count();
        // total student with inactive status
        $totalStudentsInactive = Student::where('status', 'inactive')->count();


        // total courses
        $totalCourses = Course::count();
        // total courses with active status
        $totalCoursesActive = Course::where('status', 'active')->count();
        // total courses with inactive status
        $totalCoursesInactive = Course::where('status', 'inactive')->count();


        //total mee
        $totalMeetings = Meeting::count();
        // total meetings with active status
        $totalMeetingsActive = Meeting::where('status', 'active')->count();
        // total meetings with inactive status
        $totalMeetingsInactive = Meeting::where('status', 'inactive')->count();

        //total meetings schedule
        $totalMeetingsScheduled = Meeting::where('status', 'scheduled')->count();
        $totalMeetingsCancelled  = Meeting::where('status', 'cancel')->count();

        // recent meetings
        $recentMeetings = Meeting::All();


        return view('admin.index', compact(
            'totalInstitutions',
            'totalInstitutionsActive',
            'totalInstitutionsInactive',
            'totalStudents',
            'totalStudentsActive',
            'totalStudentsInactive',
            'totalCourses',
            'totalCoursesActive',
            'totalCoursesInactive',
            'totalMeetings',
            'totalMeetingsActive',
            'totalMeetingsInactive',
            'recentMeetings',
            'totalMeetingsScheduled',
            'totalMeetingsCancelled'
        ));
    }

    public function test()
    {
        return view('admin.test');
    }
}
