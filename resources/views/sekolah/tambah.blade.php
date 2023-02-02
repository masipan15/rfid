@extends('layout.admin')
@section('content')
    <div class="row row-sm mt-3">
        <div class="col-lg-12 col-md-12">
            <div class="card custom-card">
                <div class="card-body">
                    <div>
                        <h3 class="main-content-label">
                            Tambah Sekolah
                        </h3>
                    </div>
                    <form action="insert_sekolah" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Nama Sekolah</label>
                            <input type="text" class="form-control" name="nama_sekolah">
                        </div>
                        <div class="button-group">
                            <button type="submit" class="btn btn-primary">
                                Tambah
                            </button>
                    </form>
                    <a href="/sekolah" type="button" class="btn btn-secondary">Kembali</a>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
