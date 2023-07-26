<?php

namespace App\Http\Controllers;

use App\Http\Requests\PegawaiRequest;
use App\Models\Pegawai;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $pegawais= Pegawai::all();
        if ($request->has('search')) {
            $pegawais = Pegawai::where('pegawai_nama', 'like', "%{$request->search}%")->get();
        }
        return view('pegawais.index', compact('pegawais'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pegawais.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PegawaiRequest $request)
    {
        Pegawai::create($request->validated());

        return redirect()->route('pegawais.index')->with('message', 'Pegawai Created Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pegawai $pegawai)
    {
        return view('pegawais.edit', compact('pegawai'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PegawaiRequest $request, Pegawai $pegawai)
    {
        $pegawai->update([
            'pegawai_nama' => $request->pegawai_nama,
            'pegawai_jabatan' => $request->pegawai_jabatan,
            'pegawai_umur' => $request->pegawai_umur,
            'pegawai_alamat' => $request->pegawai_alamat,
        ]);

        return redirect()->route('pegawais.index')->with('message', 'Pegawai Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pegawai $pegawai)
    {
        $pegawai->delete();

        return redirect()->route('pegawais.index')->with('message', 'Pegawai Deleted Successfully');
    }
}
