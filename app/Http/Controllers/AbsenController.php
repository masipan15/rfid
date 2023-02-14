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
        $siswa = Siswa::where('id_siswa','=',$request->id_kartu)->first();
        $a = Rekap::where('nama_siswa','=',$siswa->nama_siswa)->first();
        if ($a == null) {
            if ($jam >= '05:00' && $jam <= '08:00') {
                Rekap::UpdateOrCreate([
                    'nama_siswa' => $siswa->nama_siswa,
                    'jam_masuk' => $jam,
                    'created_at' => Carbon::now()
               ]);

        }
    }else{
        if ($a->jam_istirahat==null) {
            if ($jam >= '09:00' && $jam <= '10:20') {
              $a->update([
                    'nama_siswa' => $a->nama_siswa,
                    'jam_masuk' => $a->jam_masuk,
                    'jam_istirahat' => $jam,
                    'created_at' => Carbon::now()
               ]);
        }
        return back()->with('success','Berhasil Absen');
    }
        if ($a->jam_kembali==null) {
            if ($jam >= '10:25' && $jam <= '11:00') {
              $a->update([
                    'nama_siswa' => $a->nama_siswa,
                    'jam_masuk' => $a->jam_masuk,
                    'jam_istirahat' => $a->jam_istirahat,
                    'jam_kembali' => $jam,
                    'created_at' => Carbon::now()
               ]);
            }
            return back()->with('success','Berhasil Absen');
    }
        if ($a->jam_pulang==null) {
            if ($jam >= '12:00' && $jam <= '17:00') {
              $a->update([
                    'nama_siswa' => $a->nama_siswa,
                    'jam_masuk' => $a->jam_masuk,
                    'jam_istirahat' => $a->jam_istirahat,
                    'jam_kembali' => $a->jam_kembali,
                    'jam_pulang' => $jam,
                    'created_at' => Carbon::now()
               ]);
            }
            return back()->with('success','Berhasil Absen');
    }

}
        return back()->with('error','Anda Sudah Absen');
    }
}
