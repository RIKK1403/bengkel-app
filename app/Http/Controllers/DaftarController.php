<?php

namespace App\Http\Controllers;

use App\Models\Kendaraan;
use Illuminate\Http\Request;

class DaftarController extends Controller
{
    public function index()
    {
        return view('daftar', [
            'title' => 'Cahaya Motor',
        ]);
    }

    public function simpan(Request $request)
    {
        // $request->validate([
        //     'nama' => 'required',
        //     'nohp' => 'required|numeric',
        //     'plat_nomor' => 'required',
        //     'keluhan' => 'required',
        //     'tanggal' => 'required|date',
        //     'jam' => 'required|date_format:H:i',
        // ]);

        $kendaraan = new Kendaraan();
        $kendaraan->nama = $request->input('nama');
        $kendaraan->nohp = $request->input('nohp');
        $kendaraan->plat_nomor = $request->input('plat_nomor');
        $kendaraan->keluhan = $request->input('keluhan');
        $kendaraan->tanggal = $request->input('tanggal');
        $kendaraan->jam = $request->input('jam');
        $kendaraan->save();

        return redirect()->route('berhasil', ['id' => $kendaraan->id]);
    }

    public function berhasil($id)
    {
        // ambil data kendaraan untuk ditampilkan di halaman berhasil
        $kendaraan = Kendaraan::find($id);

        return view('berhasil', [
            'title' => 'Cahaya Motor',
            'kendaraan' => $kendaraan,
        ]);
    }
}
