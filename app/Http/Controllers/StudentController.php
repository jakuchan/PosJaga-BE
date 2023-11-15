<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function __construct()
    {
        // Add middleware to all controller function
        $this->middleware('isLogin');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $student = Student::orderBy('NIS', 'ASC')->paginate(10);
        return view('student/index', compact('student'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('student/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request -> validate(
        [
            'nis' => 'required|numeric|unique:students,nis|min:9',
            'nama' => 'required|unique:students,nama',
            'kelas' => 'required',
            'jurusan' => 'required',
            'ta' => 'required',
        ]);
        $data = [
            'NIS' => $request->nis,
            'Nama' => $request->nama,
            'Kelas' => $request->kelas,
            'Jurusan' => $request->jurusan,
            'TA' => $request->ta,
        ];

        Student::create($data);
        return redirect('/student')->with('success', 'Data added');
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        $data = Student::where('NIS', $student->NIS)->first();
        return view('student/edit')->with('data', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Student $student)
    {
        $request -> validate(
        [
            'nama' => 'required|unique:students,nama',
            'kelas' => 'required',
            'jurusan' => 'required',
            'ta' => 'required',
        ]);
        $data = [
            'Nama' => $request->nama,
            'Kelas' => $request->kelas,
            'Jurusan' => $request->jurusan,
            'TA' => $request->ta,
        ];

        Student::where('NIS', $student->NIS)->update($data);
        return redirect('/student')->with('success', 'Data edited');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        Student::where('NIS', $student->NIS)->delete($student->NIS);
        return redirect('/student')->with('success', 'Data deleted');
    }
}
