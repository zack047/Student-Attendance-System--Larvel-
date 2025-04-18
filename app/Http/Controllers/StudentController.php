<?php

namespace App\Http\Controllers;
    use Illuminate\Http\Request;
    use App\Models\Student;

class StudentController extends Controller
{

    public function index() {
        $students = Student::all();
        return view('students.index', compact('students'));
    }
    
    public function create() {
        return view('students.create');
    }
    
    public function store(Request $request)
{
    $request->validate([
        'name' => 'required',
        'email' => 'required|email',
        'class' => 'required',
    ]);

    Student::create($request->only(['name', 'email', 'class']));

    return redirect()->route('students.index')->with('success', 'Student added successfully!');
}

}
