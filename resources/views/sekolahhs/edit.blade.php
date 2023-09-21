@extends('template.dashboard')
@section('content')

@php
$title='Edit Data';
@endphp

<h1>Sekolah</h1>
<form action="{{route('sekolahhs.update', $sekolahhs->id)}}" class="" method="POST">
  @csrf
  @method('PUT')
<div class="mb-3">
            <label class="form-label">Nama Sekolah</label>
            <input type="text" name="nama_sekolah"class="form-control" name="nama_sekolah" placeholder="Tulis Nama Sekolah" value="{{$sekolahhs->nama_sekolah}}">
</div>

<div class="mb-3">
                              <label class="form-label">Alamat Sekolah</label>
                              <input type="text" name="alamat" class="form-control" name="alamat" placeholder="Tulis Alamat Sekolah"value="{{$sekolahhs->alamat}}">
                            </div>


                            <div class="mb-3">
                              <label class="form-label">Jurusan</label>
                              <input type="text" name="jurusan"class="form-control" name="jurusan" placeholder="Tulis Nama Jurusan"value="{{$sekolahhs->jurusan}}">
                            </div>


                            <div class="mb-3">
                              <label class="form-label">Jumlah Guru</label>
                              <input type="text" name="jumlah_guru"class="form-control" name="jumlah_guru" placeholder="Jumlah Guru"value="{{$sekolahhs->jumlah_guru}}">
                            </div>

                              <div class="mb-3">
                              <input type="submit" value="Simpan"class="btn btn-primary">
                              </div>
@endsection