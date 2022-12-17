<?php

namespace App\Http\Controllers;
use App\Models\motor;
use Illuminate\Http\Request;

class MotorController extends Controller
{
    public function index()
    {
        $motor = motor::all();
        return view('motor.index', [
            'motor' => $motor
        ]);
    }

        public function create()
    {
    //Menampilkan Form Tambah Bidang Studi
    return view('motor.create');
    }
    public function store(Request $request)
    {
    //Menyimpan Data Bidang Studi
    $request->validate([
    //  'motor' => 'required|unique:motor,motor'
    'Merk' => 'required',
    'Tipe' => 'required',
    'Jenis' => 'required',
    'Slinder' => 'required',
    'Tahun' => 'required',
    'Warna' => 'required',
    'Hrg_Cash' => 'required'
    ]);
    $array = $request->only([
    'Merk', 'Tipe','Jenis','Slinder', 'Tahun','Warna', 'Hrg_Cash'
    ]);
    $motor = motor::create($array);
    return redirect()->route('motor.index')
    ->with('success_message', 'Berhasil menambah bidang studi
    baru');
    } 

    public function edit($id)
    {
    //Menampilkan Form Edit
    $motor = motor::find($id);
    if (!$motor) return redirect()->route('motor.index') 
    ->with('error_message', 'Data motor dengan id = '.$id.' tidak
    ditemukan');
    return view('motor.edit', [
    'motor' => $motor
    ]);
    }
    public function update(Request $request, $id)
    {
    //Mengedit Data Bidang Studi
    $request->validate([
    'Merk' =>'required',
    'Tipe' => 'required',
    'Jenis' => 'required',
    'Slinder' => 'required',
    'Tahun' => 'required',
    'Warna' => 'required',
    'Hrg_Cash' => 'required'
    ]);
    $motor = motor::find($id);
    $motor->Merk = $request->Merk;
    $motor->Tipe = $request->Tipe;
    $motor->Jenis = $request->Jenis;
    $motor->Slinder = $request->Slinder;
    $motor->Tahun = $request->Tahun;
    $motor->Warna = $request->Warna;
    $motor->Hrg_Cash = $request->Hrg_Cash;
    $motor->save();
    return redirect()->route('motor.index')
    ->with('success_message', 'Berhasil mengubah bidang studi');
    } 

    public function destroy(Request $request, $id)
    {
    //Menghapus Bidang Studi
    $motor = motor::find($id);
    if ($motor) $motor->delete();
    return redirect()->route('motor.index')
    ->with('success_message', 'Berhasil menghapus Data motor');
    } 
}
