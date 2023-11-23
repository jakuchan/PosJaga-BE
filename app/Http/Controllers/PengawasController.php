<?php

namespace App\Http\Controllers;

use App\Models\Pengawas;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class PengawasController extends Controller
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
        $pengawas = Pengawas::orderBy('NIP', 'ASC')->paginate(20);
        return view('pengawas/index', compact('pengawas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pengawas/add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request -> validate(
        [
            'nip' => 'required|numeric|digits:8|unique:pengawas,nip',
            'nama' => 'required|max:40|unique:pengawas,nama',
            'status' => [
                'required',
                Rule::in(Pengawas::pluck('Status')->toArray()),
            ],
        ]);

        $data = [
            'NIP' => $request->nip,
            'Nama' => $request->nama,
            'Status' => $request->status,
        ];

        Pengawas::create($data);
        return redirect('/pengawas')->with('success', 'Data added');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pengawas $pengawas)
    {
        //
    }
    
    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $pengawas = Pengawas::where('NIP', $id)->first();
        if(!$pengawas)
            return redirect('/pengawas')->with('failed', "Data doesn't exist!");
        return view('pengawas/edit')->with('data', $pengawas);
    }

    // NOTE BACKUP
    // public function edit(Pengawas $pengawas)
    // {
        // $data = Pengawas::where('NIP', $pengawas->NIP)->first();
        // return view('pengawas/edit')->with('data', $data);
    // }

    /**
     * Update the specified resource in storage.
     */

    public function update(Request $request, $id)
    {
        $pengawas = Pengawas::where('NIP', $id)->first();
        if($pengawas) {
            $request -> validate(
            [
                'nama' => 'required|max:40|unique:pengawas,nama,' . $pengawas->NIP . ',NIP',
                'status' => [
                    'required',
                    Rule::in(Pengawas::pluck('Status')->toArray()),
                ],
            ]);
    
            $data = [
                'Nama' => $request->nama,
                'Status' => $request->status,
            ];

            $pengawas->update($data);
            return redirect('/pengawas')->with('success', 'Data edited');
        }
        return redirect('/pengawas')->with('failed', `Data doesn't exist!`);
    }
    
    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $pengawas = Pengawas::where('NIP', $id)->first();
        if($pengawas) {
            $pengawas->delete($pengawas->NIP);
            return redirect('/pengawas')->with('success', 'Data deleted');
        }
        return redirect('/pengawas')->with('failed', `Data doesn't exist!`);
    }

    // NOTE BACKUP
    // public function destroy(Pengawas $pengawas)
    // {
        // Pengawas::where('NIP', $pengawas->NIP)->delete($pengawas->NIP);
        // return redirect('/pengawas')->with('success', 'Data deleted');
    // }
}