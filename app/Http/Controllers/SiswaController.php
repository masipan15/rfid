<?php

namespace App\Http\Controllers;

use App\Models\Sekolah;
use App\Models\Siswa;
use Illuminate\Http\Request;

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
        $data = Siswa::create([
            'id_siswa' => $request->id_siswa,
            'nama_siswa' => $request->nama_siswa,
            'jenis_kelamin' => $request->jenis_kelamin,
            'asal_sekolah' => $request->asal_sekolah,
            'status' => 'aktif',
        ]);
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
        return redirect('siswa');
    }
}
