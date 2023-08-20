<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        // $students = Student::orderBy('id','DESC')->paginate(2);
        $students = Student::all();
        return view('index',compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "firstname" => 'required',
            "lastname" => 'required',
            "dob" => 'required',
            "email" => 'required|unique:students,email|email',
            "course" => 'required',
            "major" => 'required',
            "phone" => 'required',
            "address" => 'required'
        ]);
        //
        $data = $request->all();
        Student::create($data);
        return redirect()->route('student.index')->withMessage('Student created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $students = Student::find($id);
        // dd($students);
        return view('show',compact('students'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $students = Student::find($id);
        // dd($students);
        return view('edit',compact('students'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $request->validate([
            "firstname" => 'required',
            "lastname" => 'required',
            "dob" => 'required',
            "email" => 'required|unique:students,email,'.$request->id.'|email',
            "course" => 'required',
            "major" => 'required',
            "phone" => 'required',
            "address" => 'required'
        ]);

        $data = $request->all();
        $students = Student::find($id);
        $students->update($data);
        return redirect()->route('student.index')->withMessage('Student details updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
