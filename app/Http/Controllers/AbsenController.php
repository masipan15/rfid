<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Absen;
use App\Models\Rekap;
use App\Models\Siswa;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class AbsenController extends Controller
{

    public function absen(Request $request)
    {
        return view('absen');
    }

    public function proses_absen(Request $request)
    {
        $update = Absen::get();
        $jam = now('Asia/Jakarta')->format('H:i');
        // $absen = Absen::create([
        //     'id_kartu' => $request->id_kartu
        // ]);
        $siswa = Siswa::where('id_siswa', '=', $request->id_kartu)->first();
        if ($siswa == null) {
            Alert::error('Anda Belum Terdaftar', 'Silahkan Daftar terlebih dahulu ke Admin');
            return back();
        } else {

            $a = Rekap::where('nama_siswa', '=', $siswa->nama_siswa)->whereDate('created_at', Carbon::today())->first();

            if ($a == null) {
                if ($jam >= '05:00' && $jam <= '22:00') {
                    Rekap::UpdateOrCreate([
                        'nama_siswa' => $siswa->nama_siswa,
                        'jam_masuk' => $jam,
                        'created_at' => Carbon::now()
                    ]);
                }
            } else {

                if ($jam >= '09:00' && $jam <= '10:20') {
                    $a->update([
                        'nama_siswa' => $a->nama_siswa,
                        'jam_masuk' => $a->jam_masuk,
                        'jam_istirahat' => $jam,
                        'created_at' => Carbon::now()
                    ]);
                }

                if ($jam >= '10:25' && $jam <= '11:00') {
                    $a->update([
                        'nama_siswa' => $a->nama_siswa,
                        'jam_masuk' => $a->jam_masuk,
                        'jam_istirahat' => $a->jam_istirahat,
                        'jam_kembali' => $jam,
                        'created_at' => Carbon::now()
                    ]);
                }

                if ($jam >= '12:00' && $jam <= '22:00') {
                    $a->update([
                        'nama_siswa' => $a->nama_siswa,
                        'jam_masuk' => $a->jam_masuk,
                        'jam_istirahat' => $a->jam_istirahat,
                        'jam_kembali' => $a->jam_kembali,
                        'jam_pulang' => $jam,
                        'created_at' => Carbon::now()
                    ]);
                }
            }
        }
        Alert::success($siswa->nama_siswa, 'Berhasil Absen');
        return back();
    }



}
