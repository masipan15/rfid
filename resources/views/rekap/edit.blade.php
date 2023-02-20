@extends('layout.admin')
@section('content')
<div class="row row-sm mt-3">
    <div class="col-lg-12 col-md-12">
        <div class="card custom-card">
            <div class="card-body">
                <div>
                    <h3 class="main-content-label">
                        Edit Siswa
                    </h3>
                </div>
                <form action="/update_rekap/{{$data->id}}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Jam Masuk</label>
                        <input type="text" class="form-control" value="{{$data->jam_masuk}}" name="jam_masuk">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Jam Istirahat</label>
                        <input type="text" class="form-control" value="{{$data->jam_istirahat}}" name="jam_istirahat">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Jam Kembali</label>
                        <input type="text" class="form-control" value="{{$data->jam_kembali}}" name="jam_kembali">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Jam Pulang</label>
                        <input type="text" class="form-control" value="{{$data->jam_pulang}}" name="jam_pulang">
                    </div>
                    <div class="button-group">
                        <button type="submit" class="btn btn-primary">
                            Edit
                        </button>
                </form>
                <a href="/rekap" type="button" class="btn btn-secondary">Kembali</a>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
