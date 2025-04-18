<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
use App\Models\Student;
use Illuminate\Http\Request;

class AttendanceController extends Controller
{
    public function index() {
        $students = Student::all();
        return view('attendance.index', compact('students'));
    }

    public function store(Request $request) {
        foreach ($request->attendance as $student_id => $status) {
            Attendance::create([
                'student_id' => $student_id,
                'date' => now()->toDateString(),
                'status' => $status,
            ]);
        }
        return back()->with('success', 'Attendance submitted!');
    }
}
?>