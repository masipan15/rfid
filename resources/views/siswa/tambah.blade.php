@extends('layout.admin')
@section('content')
    <div class="row row-sm mt-3">
        <div class="col-lg-12 col-md-12">
            <div class="card custom-card">
                <div class="card-body">
                    <div>
                        <h3 class="main-content-label">
                            Tambah Siswa
                        </h3>
                    </div>
                    <form action="/insert_siswa" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Id Siswa</label>
                            <input type="number" autofocus class="form-control" name="id_siswa">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Nama Siswa</label>
                            <input type="text" required class="form-control" name="nama_siswa">
                        </div>
                        <label class="form-label"> Jenis Kelamin</label>
                        <div class="form-check">
                            <input class="form-check-input" value="Laki-Laki" type="radio" name="jenis_kelamin"
                                id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Laki-Laki
                            </label>
                        </div>
                        <div class="form-check mb-3">
                            <input class="form-check-input" type="radio" value="Perempuan" name="jenis_kelamin"
                                id="flexRadioDefault2">
                            <label class="form-check-label" for="flexRadioDefault2">
                                Perempuan
                            </label>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Asal Sekolah</label>
                            <select name="asal_sekolah" required class="form-control">
                                <option disabled selected>Pilih Sekolah</option>
                                @foreach ($sekolah as $data)
                                    <option value="{{ $data->id }}">{{ $data->nama_sekolah }}</option>
                                @endforeach

                            </select>
                        </div>
                        <div class="button-group">
                            <button type="submit" class="btn btn-primary">
                                Tambah
                            </button>
                    </form>
                    <a href="/siswa" type="button" class="btn btn-secondary">Kembali</a>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
