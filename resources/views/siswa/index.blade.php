@extends('layout.admin')

@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/css/lightbox.min.css">
<div class="row row-sm mt-3">
    <div class="col-lg-12">
        <div class="card custom-card overflow-hidden">
            <div class="card-body">
                <div>
                    <div>
                        <a href="/tambah_siswa" class="btn btn-primary">Tambah</a>
                        <p class="text- muted card-sub-title"></p>
                    </div>

                    <p class="text-muted card-sub-title"></p>
                </div>
                <div class="table-responsive">
                    <table class="table" id="example1">
                        <thead>
                            <tr>
                                <th class="wd-20p">No</th>
                                <th class="wd-20p">Id Siswa</th>
                                <th class="wd-20p">Nama Siswa</th>
                                <th class="wd-20p">Jenis Kelamin</th>
                                <th class="wd-20p">Asal Sekolah</th>
                                <th class="wd-20p">Aksi </th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                            $no = 1;
                            @endphp
                            @foreach ($data as $row)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $row->id_siswa }}</td>
                                <td>{{ $row->nama_siswa }}</td>
                                <td>{{ $row->jenis_kelamin }}</td>
                                <td>{{ $row->sekolah->nama_sekolah }}</td>
                                <td><a href="edit_siswa/{{$row->id}}" type="button" class="btn btn-info">Edit</a>
                                    <a href="delete_siswa/{{$row->id}}" type="button" class="btn btn-danger">Hapus</a>
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
