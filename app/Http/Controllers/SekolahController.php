<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Absen;
use App\Models\Rekap;
use App\Models\Siswa;
use App\Models\Sekolah;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class SekolahController extends Controller
{
    public function index()
    {
        $data = Sekolah::all();
        return view('sekolah.index', compact('data'));
    }

    public function tambah()
    {
        return view('sekolah.tambah');
    }

    public function insert(Request $request)
    {
        $data = Sekolah::create([
            'nama_sekolah' => $request->nama_sekolah,
        ]);
        return redirect('sekolah');
    }

    public function edit($id)
    {
        $data = Sekolah::findorfail($id);
        return view('sekolah.edit', compact('data'));
    }

    public function update($id, Request $request)
    {
        $data = Sekolah::find($id);
        $data->update([
            'nama_sekolah' => $request->nama_sekolah
        ]);

        return redirect('sekolah');
    }

    public function delete($id)
    {
        $data = Sekolah::find($id);
        $data->delete();
        return redirect('sekolah');
    }

   


}
