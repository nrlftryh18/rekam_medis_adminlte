<?php

namespace App\Http\Controllers;


use App\Models\Pasien;
use Illuminate\Http\Request;

class PasienController extends Controller
{
    public function index()
    {
        $pasien = Pasien::all();
        return view('pasien.index', [
            'pasien' => $pasien
        ]);
    }

    public function create()
    {
        return view('pasien.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'usia' => 'required',
            'no_hp' => 'required',
            'riwayat_medis' => 'required',
            'keluhan' => 'required',
        ]);

        $array = $request->only([
            'nama', 'alamat','usia', 'no_hp', 'riwayat_medis','keluhan'
        ]);

        $pasien = Pasien::create($array);
        return redirect()->route('Pasiens.index')
            ->with('success_message', 'Berhasil menambah pasien baru');
    }

    public function edit($id)
    {
        $pasien = Pasien::find($id);
        if (!$pasien) return redirect()->route('Pasiens.index')
            ->with('error_message', 'pasien dengan id'.$id.' tidak ditemukan');
        return view('pasien.edit', [
            'pasien' => $pasien
        ]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required'.$id,
            'alamat' => 'required,',
            'usia' => 'required',
            'no_hp' => 'required',
            'riwayat_medis' => 'required',
            'keluhan' => 'required',
        ]);
        $pasien = Pasien::find($id);
        $pasien->name = $request->name;
        $pasien->alamat = $request->alamat;
        $pasien->usia = $request->usia;
        $pasien->no_hp = $request->no_hp;
        $pasien->riwayat_medis = $request->riwayat_medis;
        $pasien->keluhan= $request->keluhan;
        $pasien->save();
        return redirect()->route('pasien.index')
            ->with('success_message', 'Berhasil mengubah user');
    }

    public function destroy(Request $request, $id)
    {
        $pasien = Pasien::find($id);
        $pasien->delete();
        return redirect()->route('Pasiens.index')
            ->with('success_message', 'Berhasil menghapus pasien');
    }

    public function show($id)
    {
        return view('Pasien.detail', [
    ]);
    }
}
