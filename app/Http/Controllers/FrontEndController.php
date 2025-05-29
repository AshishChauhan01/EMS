<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FrontEndController extends Controller
{
    public function addDepartment(Request $request)
    {
        $department = DB::table('departments')->insert([
            'department_name' => $request->department,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        if ($department) {
            return redirect()->back()->with('success', 'Data Successfully inserted');
        } else {
            return redirect()->back()->with('error', 'fail to add data');
        }
    }
    public function manageDepartment()
    {
        $departments = DB::table('departments')->orderBy('department_name')->get();
        return view('admin.department.manage_department', ['departments' => $departments]);
    }
}
