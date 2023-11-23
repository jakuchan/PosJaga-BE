<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

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
        $student = Student::orderBy('NIS', 'ASC')->paginate(20);
        return view('student/index', compact('student'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('student/add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request -> validate(
        [
            'nis' => 'required|numeric|digits:9|unique:students,nis',
            'nama' => 'required|max:40|unique:students,nama',
            'kelas' => [
                'required',
                Rule::in(Student::pluck('Kelas')->toArray()),
            ],
            'jurusan' => [
                'required',
                Rule::in(Student::pluck('Jurusan')->toArray()),
            ],
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
        return redirect('/siswa')->with('success', 'Data added');
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
    public function edit($id)
    {
        $student = Student::where('NIS', $id)->first();
        if(!$student)
            return redirect('/siswa')->with('failed', "Data doesn't exist!");
        return view('student/edit')->with('data', $student);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $student = Student::where('NIS', $id)->first();
        if($student) {
            $request->validate([
                'nama' => 'required|max:40|unique:students,nama,' . $student->NIS . ',NIS',
                'kelas' => [
                    'required',
                    Rule::in(Student::pluck('Kelas')->toArray()),
                ],
                'jurusan' => [
                    'required',
                    Rule::in(Student::pluck('Jurusan')->toArray()),
                ],
                'ta' => 'required',
            ]);
    
            $data = [
                'Nama' => $request->nama,
                'Kelas' => $request->kelas,
                'Jurusan' => $request->jurusan,
                'TA' => $request->ta,
            ];
    
            $student->update($data);
            return redirect('/siswa')->with('success', 'Data edited');
        }
        return redirect('/siswa')->with('failed', `Data doesn't exist!`);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $student = Student::where('NIS', $id)->first();
        if($student) {
            $student->delete($student->NIS);
            return redirect('/siswa')->with('success', 'Data deleted');
        }
        return redirect('/siswa')->with('failed', `Data doesn't`);
    }
}
