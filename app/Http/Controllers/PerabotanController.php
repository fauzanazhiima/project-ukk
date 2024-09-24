<?php

namespace App\Http\Controllers;

use App\Models\Perabotan;
use Illuminate\Http\Request;

class PerabotanController extends Controller
{
    public function index()
    {
        $perabotans = Perabotan::all();
        return view('perabotan.index', compact('perabotans'));
    }
    public function dashboard()
{
    $perabotans = Perabotan::all(); // Ambil semua perabotan
    return view('dashboard', compact('perabotans'));
}


    public function create()
    {
        return view('perabotan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'harga' => 'required|numeric',
            'stok' => 'required|integer',
        ]);

        Perabotan::create($request->all());
        return redirect()->route('perabotan.index')->with('success', 'Perabotan berhasil ditambahkan');
    }

    public function edit(Perabotan $perabotan)
    {
        return view('perabotan.edit', compact('perabotan'));
    }

    public function show(Perabotan $perabotan)
{
    return view('perabotan.show', compact('perabotan'));
}


    public function update(Request $request, Perabotan $perabotan)
    {
        $request->validate([
            'nama' => 'required',
            'harga' => 'required|numeric',
            'stok' => 'required|integer',
        ]);

        $perabotan->update($request->all());
        return redirect()->route('perabotan.index')->with('success', 'Perabotan berhasil diperbarui');
    }

    public function destroy(Perabotan $perabotan)
    {
        $perabotan->delete();
        return redirect()->route('perabotan.index')->with('success', 'Perabotan berhasil dihapus');
    }
}
