@extends('layout.admin')

@section('content')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/css/lightbox.min.css">
    <div class="row row-sm mt-3">
        <div class="col-lg-12">
            <div class="card custom-card overflow-hidden">
                <div class="card-body">
                    <div>
                        <div>
                            <a href="/tambah_sekolah" class="btn btn-primary">Tambah</a>
                            <p class="text-muted card-sub-title"></p>
                        </div>

                        <p class="text-muted card-sub-title"></p>
                    </div>
                    <div class="table-responsive">
                        <table class="table" id="example1">
                            <thead>
                                <tr>
                                    <th class="wd-20p">No</th>
                                    <th class="wd-20p">Tanggal</th>
                                    <th class="wd-20p">Nama Siswa</th>
                                    <th class="wd-20p">Jam Masuk</th>
                                    <th class="wd-20p">Jam Istirahat</th>
                                    <th class="wd-20p">Jam Kembali</th>
                                    <th class="wd-20p">Jam Pulang</th>
                                    <th class="wd-20p">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $jam = now('Asia/Jakarta')->format('H:i');
                                    $no = 1;
                                @endphp
                                @foreach ($data as $row)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $row->created_at->translatedFormat('l/d/F/Y') }}</td>
                                        <td>{{ $row->nama_siswa }}</td>
                                        @if ($jam >= '06:00' && $jam <= '0')
                                            <td><span class="badge badge-pill badge-success "
                                                    title="Tepat Waktu">{{ $row->jam_masuk }}</span></td>
                                        @else
                                            <td><span class="badge badge-pill badge-danger "
                                                    title="Terlambat">{{ $row->jam_masuk }}</span></td>
                                        @endif
                                        @if ($jam >= '09:30' && $jam <= '10:20')
                                            <td><span class="badge badge-pill badge-success "
                                                    title="Tepat Waktu">{{ $row->jam_istirahat }}</span></td>
                                        @else
                                            <td><span class="badge badge-pill badge-danger "
                                                    title="Terlambat">{{ $row->jam_istirahat }}</span></td>
                                        @endif
                                        @if ($jam >= '09:50' && $jam <= '10:25')
                                            <td><span class="badge badge-pill badge-success "
                                                    title="Tepat Waktu">{{ $row->jam_kembali }}</span></td>
                                        @else
                                            <td><span class="badge badge-pill badge-danger "
                                                    title="Terlambat">{{ $row->jam_kembali }}</span></td>
                                        @endif
                                        @if ($jam >= '18:00' && $jam <= '20:00')
                                            <td><span class="badge badge-pill badge-success "
                                                    title="Tepat Waktu">{{ $row->jam_pulang }}</span></td>
                                        @else
                                            <td><span class="badge badge-pill badge-danger "
                                                    title="Terlambat">{{ $row->jam_pulang }}</span></td>
                                        @endif
                                        <td><a href="edit_sekolah/{{ $row->id }}" type="button"
                                                class="btn btn-info">Edit</a>
                                            <a href="delete_sekolah/{{ $row->id }}" type="button"
                                                class="btn btn-danger">Hapus</a>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
