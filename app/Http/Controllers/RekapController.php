<?php

namespace App\Http\Controllers;

use App\Models\Rekap;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class RekapController extends Controller
{
    public function index()
    {
        $data = Rekap::all();
        return view('rekap.index', compact('data'));
    }

    public function insert(Request $request)
    {
         Rekap::create([
            'nama_sekolah' => $request->nama_sekolah,
        ]);
        return redirect('sekolah');
    }

    public function edit($id)
    {
        $data = Rekap::findorfail($id);
        return view('rekap.edit', compact('data'));
    }

    public function update($id, Request $request)
    {
        $data = Rekap::find($id);
        $data->update([
            'nama_siswa' => $data->nama_siswa,
            'jam_masuk' => $request->jam_masuk,
            'jam_istirahat' => $request->jam_istirahat,
            'jam_kembali' => $request->jam_kembali,
            'jam_pulang' => $request->jam_pulang,
        ]);
        Alert::success('Data Berhasil Dirubah');
        return redirect('rekap');
    }

    public function delete($id)
    {
        $data = Rekap::find($id);
        $data->delete();
        Alert::success('Data Berhasil Dihapus');
        return redirect('rekap');
    }
}
