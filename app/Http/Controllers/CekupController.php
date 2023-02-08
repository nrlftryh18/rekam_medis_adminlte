<?php

namespace App\Http\Controllers;


use App\Models\Cekup;
use Illuminate\Http\Request;

class CekupController extends Controller
{
    public function index()
    {
        $Cekup = Cekup::all();
        return view('cekup.index', [
            'cekup' => $Cekup
        ]);
    }

    public function create()
    {
        return view('cekup.index');
    }

    public function store(Request $request)
    {
        $request->validate([
            'cervical' => 'required',
            'thoraxal' => 'required',
            'lumbar' => 'required',
            'sacral' => 'required',
            'pelvis' => 'required',
            'plintiran' => 'required',
            'kompresi' => 'required',
            'type_veterbra' => 'required',
            'type_thoraxal' => 'required',
            'visual' => 'required',
        ]);

        $array = $request->only([
            'cervical', 'thoraxal','lumbar', 'sacral', 'pelvis','plintiran', 'kompresi', 'type_veterbra', 'type_thoraxal', 'visuual'
        ]);

        $cekup = Cekup::create($array);
        return redirect()->route('cekup.index')
            ->with('success_message', 'Berhasil menambah pasien baru');
    }

    public function edit($id)
    {
        $Cekup = Cekup::find($id);
        if (!$Cekup) return redirect()->route('cekup.index')
            ->with('error_message', 'cekup dengan id'.$id.' tidak ditemukan');
        return view('cekup.edit', [
            'cekup' => $Cekup
        ]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'cervical' => 'required'.$id,
            'thoraxal' => 'required,',
            'lumbar' => 'required',
            'sarcal' => 'required',
            'pelvis' => 'required',
            'plintiran' => 'required',
            'kompresi' => 'required',
            'type_veterbra' => 'required',
            'type_thoraxal' => 'required',
            'visual' => 'required',
        ]);
        $Cekup = Cekup::find($id);
        $Cekup->cervical = $request->cervical;
        $Cekup->thoraxal= $request->thoraxal;
        $Cekup->lumbar = $request->lumbar;
        $Cekup->sarcal = $request->sarcal;
        $Cekup->pelvis = $request->pelvis;
        $Cekup->plintiran= $request->plintiran;
        $Cekup->kompresi= $request->kompresi;
        $Cekup->type_veterbra= $request->type_veterbra;
        $Cekup->type_thoraxal= $request->type_thoraxal;
        $Cekup->visual= $request->visual;
        $Cekup->save();
        return redirect()->route('cekup.index')
            ->with('success_message', 'Berhasil mengubah user');
    }

    public function destroy(Request $request, $id)
    {
        $Cekup = Cekup::find($id);
        $Cekup->delete();
        return redirect()->route('cekup.index')
            ->with('success_message', 'Berhasil menghapus cekup');
    }

    public function show($id)
    {
        return view('cekup.index', [
    ]);

    }
}

