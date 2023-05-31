<?php

namespace App\Http\Controllers;

use App\Models\gelombang;
use Illuminate\Http\Request;

class GelombangController extends Controller
{
    public function index()
    {
        $gelombangs = Gelombang::all();
        return view('user.gelombang.index', compact('gelombangs'));
    }

    public function create()
    {
        return view('user.gelombang.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'tanggal' => 'required|date',
            'tinggi_gelombang' => 'required|integer',
        ]);

        Gelombang::create($validatedData);

        return redirect()->route('user.gelombang.index')->with('success', 'Gelombang berhasil ditambahkan');
    }

    public function edit(Gelombang $gelombang)
    {
        return view('user.gelombang.edit', compact('gelombang'));
    }

    public function update(Request $request, Gelombang $gelombang)
    {
        $validatedData = $request->validate([
            'tanggal' => 'required|date',
            'tinggi_gelombang' => 'required|integer',
        ]);

        $gelombang->update($validatedData);

        return redirect()->route('user.gelombang.index')->with('success', 'Gelombang berhasil diperbarui');
    }

    public function destroy(Gelombang $gelombang)
    {
        $gelombang->delete();

        return redirect()->route('user.gelombang.index')->with('success', 'Gelombang berhasil dihapus');
    }
}
