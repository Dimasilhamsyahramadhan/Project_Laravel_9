@extends('template.dashboard')

@section('content')
        <form action="{{ route('sekolahhs.store') }}" method="POST">
            @csrf
           <div class="mb-3">
              <label class="form-label">Nama Sekolah</label>
              <input type="text"  name="nama_sekolah" class="form-control" placeholder="Nama Sekolah">
        </div>
        <div class="mb-3">
              <label class="form-label">Alamat</label>
              <input type="text"  name="alamat" class="form-control" placeholder="Alamat">
        </div>
        <div class="mb-3">
              <label class="form-label">Jurusan </label>
              <input type="text"  name="jurusan" class="form-control" placeholder="Jurusan">
        </div>
        <div class="mb-3">
              <label class="form-label">Jumlah Guru</label>
              <input type="text"  name="jumlah_guru" class="form-control" placeholder="Jumlah Guru">
        </div>

        <div class="mb-3">
            <input type="submit" value="Simpan" class="btn btn-primary">
        </div>
</form>
</div>
    
@endsection