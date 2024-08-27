@extends('admin.navbar')

@section('content')
<br>
<div class="container bg-white mx-auto p-3 rounded mt-2 shadow">
    <h4>Form Edit Paket</h4>
    <form action="/admin/paket/edit/{{$paket->id}}" method="POST">
        @csrf
        <div class="form-group mt-1">
            <label>ID Outlet</label>
            <select name="id_outlet" class="form-control">
            @foreach ($get as $outlet)
                <option value="{{$outlet->id}}">{{$outlet->id}} - {{ $outlet->name }}</option>
            @endforeach
            </select>
        </div>
        <div class="form-group mt-1">
            <label>Nama Paket</label>
            <input type="text" name="nama" class="form-control form-sm" value="{{ $paket->nama_paket }}">
        </div>
        <div class="form-group mt-1">
            <label>Jenis Paket</label>
            <select name="jenis" class="form-control">
                <option value="Kiloan">Kiloan</option>
                <option value="Selimut">Selimut</option>
                <option value="Bed Cover">Bed Cover</option>
                <option value="Kaos">Kaos</option>
                <option value="Lainnya">Lainnya</option>
            </select>
        </div>
        <div class="form-group mt-1">
            <label>Harga</label>
            <input type="number" name="harga" class="form-control form-sm" value="{{ $paket->harga}}">
        </div>
        <div class="form-group mt-1">
            <button class="btn btn-sm btn-primary float-end"><i class="fas fa-save"></i> Simpan</button>
        </div>
    </form>
</div>
@endsection