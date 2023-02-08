@extends('layout.admin')
@section('content')
<section style="background-color: #eee;">

<center>
      <div class="row">
        <div class="col-lg-12">
          <div class="card mb-12">
            <div class="card-body text-center">
              <img src="https://cdn.idntimes.com/content-images/community/2022/07/cat-virus-exe-funny-pics-192-62c3df49a0277-700-7ab038f296922c095203d7b12ad14adf-ff3c21c5c449b5c7f5bd7699f492b0bd.jpg" alt="avatar"
                class="rounded-circle img-fluid" style="width: 150px;">
              <h5 class="my-3">John fahril</h5>
              <p class="text-muted mb-1"> Admin</p>
              <p class="text-muted mb-4"></p>
              <div class="d-flex justify-content-center mb-2">
                <button onclick="window.location.href='maintenance'" type="button" class="btn btn-primary">Edit profile</button>
              </div>
            </div>
          </div>

        <div class="col-lg-13">
          <div class="card mb-4">
            <div class="card-body">
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">Nama lengkap</p>
                </div>
                <div class="col-sm-9">
                  <p class="text-muted mb-0">M. fahril pratama</p>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">Email</p>
                </div>
                <div class="col-sm-9">
                  <p class="text-muted mb-0">fahrilpratama921@gmail.com</p>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">Telepon</p>
                </div>
                <div class="col-sm-9">
                  <p class="text-muted mb-0">(097) 234-5678</p>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">Tanggal lahir</p>
                </div>
                <div class="col-sm-9">
                  <p class="text-muted mb-0">1 september 2005</p>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">Alamat</p>
                </div>
                <div class="col-sm-9">
                  <p class="text-muted mb-0">Sempu</p>
                </div>
              </div>
            </div>
          </div>
        </center>

    </section>
@endsection
