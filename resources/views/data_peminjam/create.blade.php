@extends('layout.master')
@section('content')
<div class="container">
    <h4>Tambah Data Peminjam</h4>

    @if (count($errors) > 0)
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
    
    <form method="POST" action="{{ route('data_peminjam.store') }}" enctype="multipart/form-data">
        @csrf
    <div class="form-group">
        <label>Kode Peminjam</label>
        <input type="text" name="kode_peminjam" class="form-control">
    </div>
    <div class="form-group">
        <label>Nama Peminjam</label>
        <input type="text" name="nama_peminjam" class="form-control">
    </div>
    <div class="form-group">
        <label>Tanggal Lahir</label>
        <input type="date" name="tanggal_lahir" class="form-control">
    </div>
    <div class="form-group">
        <label>Alamat</label><br>
        <textarea name="alamat" id="" cols="148" rows="3"></textarea>
    </div>
    <div class="form-group">
        <label>Pekerjaan</label>
        <input type="text" name="pekerjaan" class="form-control">
    </div>
    <div class="form-group">
        <label>Telepon</label>
        <input class="form-control" type="text" name="telepon">
    </div>
    <div class="form-group">
        <label for="">Jenis kelamin</label>
        <select name="id_jenis_kelamin" class="form-control">
            <option value="">Pilih Jenis Kelamin</option>
                @foreach ($list_jenis_kelamin as $key => $value)
            <option value="{{ $key }}">
                {{ $value }}
            </option>
                @endforeach
        </select>
    </div>
    <div class="form-group">
        <label>Foto</label>
        <input type="file" name="foto" class="form-control">
    </div>
    <div>
        <button type="submit">Simpan</button>
    </div>
    </form>
</div>
@endsection