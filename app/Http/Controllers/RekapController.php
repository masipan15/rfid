<?php

namespace App\Http\Controllers;

use App\Models\Rekap;
use Illuminate\Http\Request;

class RekapController extends Controller
{
    public function index()
    {
        $data = Rekap::all();
        return view('rekap.index', compact('data'));
    }

    public function tambah()
    {
        return view('sekolah.tambah');
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
        return view('sekolah.edit', compact('data'));
    }

    public function update($id, Request $request)
    {
        $data = Rekap::find($id);
        $data->update([
            'nama_sekolah' => $request->nama_sekolah
        ]);

        return redirect('sekolah');
    }

    public function delete($id)
    {
        $data = Rekap::find($id);
        $data->delete();
        return redirect('sekolah');
    }
}
