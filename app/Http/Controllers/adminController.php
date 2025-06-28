<?php

namespace App\Http\Controllers;

use App\Models\Kendaraan;
use Illuminate\Http\Request;

class adminController extends Controller
{
    public function index()
    {
        $kendaraans = Kendaraan::latest()->get();
        return view('admin.dashboard', compact('kendaraans'));
    }

    public function edit($id)
    {
        $kendaraan = Kendaraan::findOrFail($id);
        return view('admin.edit', compact('kendaraan'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'nohp' => 'required|numeric',
            'plat_nomor' => 'required',
            'keluhan' => 'required',
            'tanggal' => 'required|date',
            'jam' => 'required'
        ]);

        Kendaraan::where('id', $id)->update($request->only([
            'nama', 'nohp', 'plat_nomor', 'keluhan', 'tanggal', 'jam'
        ]));

        return redirect()->route('admin.dashboard')->with('success', 'Data berhasil diperbarui.');
    }

    public function destroy($id)
    {
        Kendaraan::destroy($id);
        return redirect()->route('admin.dashboard')->with('success', 'Data berhasil dihapus.');
    }
}