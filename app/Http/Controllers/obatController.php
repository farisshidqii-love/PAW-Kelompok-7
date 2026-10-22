<?php

namespace App\Http\Controllers;

use App\Models\Obat;
use Illuminate\Http\Request;

class ObatController extends Controller
{
    public function index()
    {
        $obat = Obat::all();
        return view('obat.index', compact('obat'));
    }

    public function create()
    {
        return view('obat.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'id_obat' => 'required|string|unique:obat,id_obat|max:50',
            'nama_obat' => 'required|string|max:255',
            'kategori_obat' => 'required|string|max:255',
            'stok_obat' => 'required|integer',
            'pabrik_pembuat' => 'required|string|max:255',
        ]);

        Obat::create($data);

        return redirect()->route('obat.index')->with('success', 'Obat berhasil ditambahkan.');
    }

    public function edit(Obat $obat)
    {
        return view('obat.edit', compact('obat'));
    }

    public function update(Request $request, Obat $obat)
    {
        $data = $request->validate([
            'id_obat' => 'required|string|max:50|unique:obat,id_obat,' . $obat->id,
            'nama_obat' => 'required|string|max:255',
            'kategori_obat' => 'required|string|max:255',
            'stok_obat' => 'required|integer',
            'pabrik_pembuat' => 'required|string|max:255',
        ]);

        $obat->update($data);

        return redirect()->route('obat.index')->with('success', 'Obat berhasil diperbarui.');
    }

    public function destroy(Obat $obat)
    {
        $obat->delete();

        return redirect()->route('obat.index')->with('success', 'Obat berhasil dihapus.');
    }
}