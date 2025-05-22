<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Trainer;
use App\Models\Institute;

class InstituteController extends BaseAuthController
{
    public function index()
    {
        $institutes = Institute::all();
        return view('admin.institutes.institute', compact('institutes'));
    }
    public function create()
    {
        return view('admin.institutes.create');
    }
    public function delete()
    {
        return view('admin.institutes.delete');
    }
    public function report()
    {
        return view('admin.institutes.report');
    }
    public function store(Request $request)
    {

        $request->validate([
            'instituteName' => 'required|string',
            'instituteCode' => 'required|string',
            'instituteStatus' => 'required|string',
            'instituteAddress' => 'required|string',
        ]);

        // Create a new institute
        $institute = new Institute();
        $institute->institute_name = $request->input('instituteName');
        $institute->institute_code = $request->input('instituteCode');
        $institute->institute_address = $request->input('instituteAddress');
        $institute->status = $request->input('instituteStatus');
        $institute->save();

        return redirect()->route('admin.institutes')->with('success', 'Institute created successfully.');
    }
    public function edit($id)
    {
        $institute = Institute::findOrFail($id);
        return view('admin.institutes.edit', compact('institute'));
    }


    public function update(Request $request, $id)
    {

        // return $request;
//         {
// "_token": "vK3Svf8u1tgsFFzvmQszSIZKz0O7hHINiU34t7lH",
// "_method": "PUT",
// "instituteCode": "INS2001",
// "instituteName": "INDRA COLLEGE",
// "instituteAddress": "NEAR NOIDA DELHI",
// "instituteStatus": "active"
// }
        $request->validate([
            'instituteName' => 'required|string',
            'instituteCode' => 'required|string',
            'instituteStatus' => 'required|string',
            'instituteAddress' => 'required|string',
        ]);
        // Find the institute by ID
        $institute = Institute::findOrFail($id);
        $institute->institute_name = $request->input('instituteName');
        $institute->institute_code = $request->input('instituteCode');
        $institute->institute_address = $request->input('instituteAddress');
        $institute->status = $request->input('instituteStatus');
        // Save the changes
        $institute->save();
        return redirect()->route('admin.institutes')->with('success', 'Institute updated successfully.');
    }
    
    public function destroy($id)
    {
        $institute = Institute::findOrFail($id);
        $institute->delete();
        return redirect()->route('admin.institutes')->with('success', 'Institute deleted successfully.');
    }
}
