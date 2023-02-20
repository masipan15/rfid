<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use App\Models\Sekolah;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class SiswaController extends Controller
{
    public function index()
    {
        $data = Siswa::with('sekolah')->get();
        return view('siswa.index', compact('data'));
    }

    public function tambah()
    {
        $sekolah = Sekolah::all();
        return view('siswa.tambah', compact('sekolah'));
    }

    public function insert(Request $request)
    {
        $validation = $request->validate([
            'id_siswa' => 'unique:siswas'
        ],[
            'id_siswa.unique' => 'id Siswa Sudah Digunakan'
        ]);

        $data = Siswa::create([
            'id_siswa' => $request->id_siswa,
            'nama_siswa' => $request->nama_siswa,
            'jenis_kelamin' => $request->jenis_kelamin,
            'asal_sekolah' => $request->asal_sekolah,
            'status' => 'aktif',
        ]);
        Alert::success('Data Berhasil ditambahkan');
        return redirect('siswa');
    }

    public function edit($id)
    {
        $data = Siswa::findorfail($id);
        $sekolah = Sekolah::all();
        return view('siswa.edit', compact('data', 'sekolah'));
    }

    public function update($id, Request $request)
    {
        $data = Siswa::find($id);
        $data->update([
            'id_siswa' => $request->id_siswa,
            'nama_siswa' => $request->nama_siswa,
            'jenis_kelamin' => $request->jenis_kelamin,
            'asal_sekolah' => $request->asal_sekolah,
        ]);

        return redirect('siswa');
    }

    public function delete($id)
    {
        $data = Siswa::find($id);
        $data->delete();
        Alert::success('Data Berhasil Dihapus');
        return back();
    }
}
