<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
use App\Models\Department;
use App\Models\Employeerecord;
use App\Models\Employees;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $totalEmployees = Employees::count();

        $totalDepartments = Department::count();

        $totalAttendances = Attendance::count();

        $totalEmployeerecords = Employeerecord::count();

        $employeeCountsByDepartment = Employees::selectRaw('department, count(*) as count')
            ->groupBy('department')
            ->get()
            ->keyBy('department')
            ->map(fn($item) => $item->count);
        return view('home', compact('totalEmployees', 'totalDepartments', 'totalAttendances', 'totalEmployeerecords', 'employeeCountsByDepartment'));
    }
}
