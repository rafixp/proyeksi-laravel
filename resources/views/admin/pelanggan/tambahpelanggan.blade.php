@extends('admin.navbar')

@section('content')
<br><br>
<div class="container bg-white mx-auto p-3 rounded mt-2 shadow">
    <h4>Form Tambah Pelanggan</h4>
    <form action="/admin/member/tambah" method="POST">
        @csrf
        <div class="form-group mt-1">
            <label>Nama Lengkap</label>
            <input type="text" name="nama" class="form-control form-sm">
        </div>
        <div class="form-group mt-1">
            <label>Telepon</label>
            <input type="number" name="tlp" class="form-control form-sm">
        </div>
        <div class="form-group mt-1">
            <label>Jenis Kelamin</label>
            <select name="jk" class="form-control">
                <option value="L">Laki-Laki</option>
                <option value="P">Perempuan</option>
            </select>
        </div>
        <div class="form-group mt-1">
            <label>Alamat</label>
            <textarea name="alamat" class="form-control"></textarea>
        </div>
        <div class="form-group mt-1">
            <button class="btn btn-sm btn-primary float-end"><i class="fas fa-save"></i> Simpan</button>
        </div>
    </form>
</div>
@endsection