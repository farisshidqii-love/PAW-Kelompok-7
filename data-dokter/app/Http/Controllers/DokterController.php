<?php

namespace App\Http\Controllers;

use App\Models\Dokter;
use Illuminate\Http\Request;

class DokterController extends Controller
{
    public function index()
    {
        $dokter = Dokter::all();
        return view('dokter.index', compact('dokter'));
    }

    public function create()
    {
        return view('dokter.tambah');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'sip' => 'required|string|unique:data_dokter,sip',
            'nama' => 'required|string|max:100',
            'spesialis' => 'required|string|max:100',
            'kontak' => 'required|string|max:50',
        ]);

        Dokter::create($data);

        return redirect()->route('dokter.index')->with('success', 'Data dokter berhasil ditambahkan.');
    }

    public function edit(Dokter $dokter)
    {
        return view('dokter.edit', compact('dokter'));
    }

    public function update(Request $request, Dokter $dokter)
    {
        $data = $request->validate([
            'nama' => 'required|string|max:100',
            'spesialis' => 'required|string|max:100',
            'kontak' => 'required|string|max:50',
        ]);

        $dokter->update($data);

        return redirect()->route('dokter.index')->with('success', 'Data dokter berhasil diperbarui.');
    }

    public function destroy(Dokter $dokter)
    {
        $dokter->delete();

        return redirect()->route('dokter.index')->with('success', 'Data dokter berhasil dihapus.');
    }
}