<?php

namespace App\Http\Controllers;

use App\Models\Sekolah;
use Illuminate\Http\Request;

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
        return view('sekolah.edit',compact('data'));
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
