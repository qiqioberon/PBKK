<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\mhs;

class MhsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mhs = Mhs::all();

        // Pass the data to a view named 'mhs.index'
        return view('mhs.index', compact('mhs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('mhs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Mhs::create($request->all());
        return redirect()->route('mhs.index')->with('success', 'Mahasiswa berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('mhs.show', compact('mhs'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $m = Mhs::findOrFail($id); 
        return view('mhs.edit', compact('m'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $m = Mhs::findOrFail($id);		
	    $m->nrp = $request->nrp;        
        $m->nama = $request->nama;        
        $m->alamat = $request->alamat;        
        $m->save();        

        return redirect()->route('mhs.index')->with('success', 'Data mahasiswa berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $m = Mhs::findOrFail($id);          
        $m->delete();
        return redirect()->route('mhs.index')->with('success', 'Data mahasiswa berhasil dihapus.');
    }
}
