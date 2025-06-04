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
            return redirect()->back()->with('success', '<b>Well done!</b> Department name add successfully');
        } else {
            return redirect()->back()->with('error', 'fail to add data');
        }
    }
    public function manageDepartment()
    {
        $departments = DB::table('departments')->orderBy('department_name')->paginate(10, ['*'], 'departments'); //here in paginate argument first take no of record on a page second what data i want to show and third is url name
        return view('admin.department.manage_department', ['departments' => $departments]);
    }
    public function viewDepartment($id)
    {
        $department = DB::table('departments')->where('id', $id)->first();
        return view('admin.department.update_department', compact('department'));
    }

    public function updateDepartment(Request $req, $id)
    {
        $updatedDepart = DB::table('departments')->where('id', $id)->update([
            'department_name' => $req->department,
            'updated_at' => now(),
        ]);
        if ($updatedDepart) {
            return redirect()->route('manage-department')->with('success', '<b>Well done!</b> The department name has been updated successfully.');
        } else {
            return redirect()->back()->with('error', 'Data not Updated');
        }
    }
    public function deleteDepartment($id)
    {
        $deletedDepart = DB::table('departments')->where('id', $id)->delete();
        if ($deletedDepart) {
            return redirect()->back()->with('success', 'Department Deleteded Successfully');
        } else {
            return redirect()->back()->with('error', 'Department not deleted');
        }
    }

    public function addLeave()
    {
        return view('admin.leave.add_leave');
    }
    public function saveLeave(Request $req)
    {
        $add_leave = DB::table('leaves')->insert([
            'leave_type' => $req->leave_type,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        if ($add_leave) {
            return redirect()->back()->with('success', '<b>Well done!</b> Leave type added successfully');
        } else {
            return redirect()->back()->with('error', 'Leave type not added');
        }
    }
    public function manageLeave()
    {
        $leaves = DB::table('leaves')->paginate(10);
        return view('admin.leave.manage_leave', compact('leaves'));
    }

    public function editLeave($id)
    {
        $leave = DB::table('leaves')->where('id', $id)->first();
        return view('admin.leave.update_leave', compact('leave'));
    }

    public function updateLeave(Request $request, $id)
    {
        $updatedLeave = DB::table('leaves')->where('id', $id)->update([
            'leave_type' => $request->leave_type,
            'updated_at' => now(),
        ]);
        if ($updatedLeave) {
            return redirect()->route('manage-leave')->with('success', '<b>Well done!</b> The leave type has been updated successfully.');
        } else {
            return redirect()->back()->with('error', 'leave type not upadated');
        }
    }
    public function deleteLeave($id)
    {
        $deleteLeave = DB::table('leaves')->where('id', $id)->delete();
        if ($deleteLeave) {
            return redirect()->back()->with('success', 'Leave type successfully removed');
        } else {
            return redirect()->back()->with('error', 'Leave Type not remove');
        }
    }

    public function addEmployee()
    {
        $departments = DB::table('departments')->orderBy('department_name')->get();
        return view('admin.employee.add_employee', compact('departments'));
    }
}
