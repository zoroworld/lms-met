<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Subject;
use App\Models\Institute;
use Illuminate\Http\Request;

class SubjectController extends BaseAuthController
{
    // List all subjects
    public function index()
    {
        $subjects = Subject::all();
        return view('admin.subjects.subject', compact('subjects'));
    }

    // Show the form to add a new subject
    public function create()
    {
        return view('admin.subjects.create');
    }

    // Handle subject creation
    public function store(Request $request)
    {
        $request->validate([
            'subjectName' => 'required|string|max:255|unique:subjects,subject_name',
            'subjectCode' => 'required|string|max:255|unique:subjects,subject_code',
            'subjectDescription' => 'nullable|string',
            'status' => 'required|in:active,inactive',
        ]);

        Subject::create([
            'subject_name' => $request->subjectName,
            'subject_code' => $request->subjectCode,
            'subject_description' => $request->subjectDescription,
            'status' => $request->status,
        ]);

        return redirect()->route('admin.subjects')->with('success', 'Subject added successfully');
    }
    // Show the form to edit a subject
    public function edit($id)
    {
        $subject = Subject::findOrFail($id);
        return view('admin.subjects.edit', compact('subject'));
    }
    // Handle subject update
    public function update(Request $request, $id)
    {
        $request->validate([
            'subjectName' => 'required|string|max:255|unique:subjects,subject_name,' . $id,
            'subjectCode' => 'required|string|max:255|unique:subjects,subject_code,' . $id,
            'subjectDescription' => 'nullable|string',
            'status' => 'required|in:active,inactive',
        ]);

        $subject = Subject::findOrFail($id);
        $subject->update([
            'subject_name' => $request->subjectName,
            'subject_code' => $request->subjectCode,
            'subject_description' => $request->subjectDescription,
            'status' => $request->status,
        ]);

        return redirect()->route('admin.subjects')->with('success', 'Subject updated successfully');
    }
    // Handle subject deletion
    public function destroy($id)
    {
        $subject = Subject::findOrFail($id);
        $subject->delete();

        return redirect()->route('admin.subjects')->with('success', 'Subject deleted successfully');
    }


    // Show the subject assignment form
    public function assign()
    {
        $subjects = Subject::all();
        return view('admin.subjects.assign', compact('subjects'));
    }
}
