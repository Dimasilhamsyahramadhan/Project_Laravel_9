@extends('template.dashboard')

@php
    $title = 'Data Siswa';
    $pretitle = 'Semua Data';
@endphp

    @push('page-action')
    <a href="{{ route('sekolahhs.create') }}" class="btn btn-primary">Tambah Data</a>

    @endpush

@section('content')
<div class="card">
                  <div class="table-responsive">
                    <table class="table table-vcenter card-table">
                      <thead>
                        <tr>
                          <th>Nama Sekolah</th>
                          <th>Alamat</th>
                          <th>Jurusan</th>
                          <th>Jumlah Guru</th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach ($sekolahhs as $sekolahs)
                        <tr>
                          <td>{{$sekolahs -> nama_sekolah}}</td>
                          <td>{{$sekolahs -> alamat}}</td>
                          <td>{{$sekolahs -> jurusan}}</td>
                          <td>{{$sekolahs -> jumlah_guru}}</td>
                          <td>
                          
                            <a href="{{ route('sekolahhs.edit', $sekolahs->id) }}">Edit</a>
                            <form action="{{ route('sekolahhs.destroy',$sekolahs->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                           <input type="submit" value="Hapus" class="btn btn-danger btn-sm">
                       </form>
                        </td> 
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
      @endsection