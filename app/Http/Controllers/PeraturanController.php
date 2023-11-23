<?php

namespace App\Http\Controllers;

use App\Models\Peraturan;
use Illuminate\Http\Request;

class PeraturanController extends Controller
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
        $data = Peraturan::orderBy('Kode_Aturan', 'ASC')->paginate(20);
        return view('peraturan/index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('peraturan/add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'kode_aturan' => 'required|numeric|min:1|unique:peraturan,Kode_Aturan',
                'nama_aturan' => 'required|max:40|unique:peraturan,Nama_Aturan',
                'poin' => 'required|numeric|max:100',
            ],
            [
                'kode_aturan.required' => 'Kode aturan wajib diisi',
                'kode_aturan.numeric' => 'Kode aturan harus berupa angka',
                'kode_aturan.min' => 'Kode aturan tidak boleh di bawah :min',
                'kode_aturan.unique' => 'Kode aturan "' . $request->kode_aturan . '" telah terdaftar sebelumnya',
        
                'nama_aturan.required' => 'Peraturan wajib diisi',
                'nama_aturan.max' => 'Peraturan tidak boleh melebihi :max karakter',
                'nama_aturan.unique' => 'Peraturan "' . $request->nama_aturan . '" telah terdaftar sebelumnya',

                'poin.required' => 'Poin wajib di isi',
                'poin.numeric' => 'Poin harus berupa angka',
                'poin.max' => 'Poin tidak boleh melebihi :max',
            ]
        );
        $data = [
            'Kode_Aturan' => $request->kode_aturan,
            'Nama_Aturan' => $request->nama_aturan,
        ];

        Peraturan::create($data);
        return redirect('/peraturan')->with('success', 'Data added');
    }

    /**
     * Display the specified resource.
     */
    public function show(Peraturan $peraturan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $peraturan = Peraturan::where('Kode_Aturan', $id)->first();
        if(!$peraturan)
            return redirect('/peraturan')->with('failed', "Data doesn't exist!");
        return view('peraturan/edit')->with('data', $peraturan);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $peraturan = Peraturan::where('Kode_Aturan', $id)->first();
        if($peraturan) {
            $request->validate(
                [
                    'kode_aturan' => 'required|numeric|min:1|unique:peraturan,Kode_Aturan,' . $peraturan->Kode_Aturan . ',Kode_Aturan',
                    'nama_aturan' => 'required|max:30|unique:peraturan,Nama_Aturan,' . $peraturan->Nama_Aturan . ',Nama_Aturan',
                    'poin' => 'required|numeric|max:100',
                ],
                [
                    'kode_aturan.required' => 'Kode aturan wajib diisi',
                    'kode_aturan.numeric' => 'Kode aturan harus berupa angka',
                    'kode_aturan.min' => 'Kode aturan tidak boleh di bawah :min',
                    'kode_aturan.unique' => 'Kode aturan "' . $request->kode_aturan . '" telah terdaftar sebelumnya',

                    'nama_aturan.required' => 'Peraturan wajib di isi',
                    'nama_aturan.max' => 'Peraturan tidak boleh melebihi :max karakter',
                    'nama_aturan.unique' => 'Peraturan "' . $request->nama_aturan . '" telah terdaftar sebelumnya',

                    'poin.required' => 'Poin wajib di isi',
                    'poin.numeric' => 'Poin harus berupa angka',
                    'poin.max' => 'Poin tidak boleh melebihi :max',
                ],
            );

            $data = [
                'Kode_Aturan' => $request->kode_aturan,
                'Nama_Aturan' => $request->nama_aturan,
                'Poin' => $request->poin,
            ];
    
            $peraturan->update($data);
            return redirect('/peraturan')->with('success', 'Data edited');
        }
        return redirect('/peraturan')->with('failed', `Data doesn't exist!`);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $peraturan = Peraturan::where('Kode_Aturan', $id)->first();
        if($peraturan) {
            $peraturan->delete($peraturan->Kode_Aturan);
            return redirect('/peraturan')->with('success', 'Data deleted');
        }
        return redirect('/peraturan')->with('failed', `Data doesn't`);
    }
}
