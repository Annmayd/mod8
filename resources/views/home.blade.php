@extends('layouts.app')

@section('content')

<div class="container-fluid ">
<div class="container pt-5 ">
<div class="row d-flex justify-content-center pt-5">
<div class="col-sm-6">
  <h1 class="my-4  ">Dashboard</h1>
  <p class="mb-4">Selamat Datang di Website Data Master Barang. Website ini dibuat untuk memenuhi tugas Ujian Tengah Semester (UTS) mata kuliah Pemograman Framework yaitu Data Master Barang. Pada website ini terdapat halaman profil dan list barang serta fiturnya ada CRUD. </p>
  <button class="btn btn-success mt-2"><a class="dropdown-item text-light" href="{{ route('barangs.index') }}">List Barang</a></button>
  </div>
  <div class="col-sm-6 d-flex justify-content-center">
</div>
</div>
</div>
</div>
</div>
</body>
@endsection

