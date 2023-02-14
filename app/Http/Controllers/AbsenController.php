<?php

namespace App\Http\Controllers;

use App\Models\Absen;
use App\Models\Rekap;
use App\Models\Siswa;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AbsenController extends Controller
{

    public function absen(Request $request)
    {
        return view('absen', compact('request'));
    }

    public function proses_absen(Request $request)
    {
        $update = Rekap::get();
        $jam = now('Asia/Jakarta')->format('H:i');
        $absen = Absen::create([
            'id_kartu' => $request->id_kartu
        ]);
        $siswa = Siswa::get();
        foreach ($siswa as $key => $value) {
            if ($jam >= '18:00' && $jam <= '20:39') {
                $produk = array(
                    'nama_siswa' => $value->nama_siswa,
                    'jam_masuk' => $jam,
                    'created_at' => Carbon::now(),
                );
                $rekap = Rekap::insert($produk);
            }
        } kjinh
        if ($jam >= '20:40' && $jam <= '21:00') {
        $update->update([
            'nama_siswa' => 
        ]);
        }
        return back();
    }
}
