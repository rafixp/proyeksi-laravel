@extends('admin.navbar')    

@section('content')
<br><br>
<div class="container bg-white mx-auto p-3 rounded mt-2 shadow">
    <h4>Transaksi Baru</h4>
    <form action="/admin/transaksi/tambah" method="POST">
        @csrf
        <div class="form-group mt-1">
            <label>Kode Invoice</label>
            <input type="text" name="kode_invoice" class="form-control form-sm" value="{{$invoice}}" readonly>
        </div>
        <div class="form-group mt-1">
            <label>ID Outlet</label>
            <select name="id_outlet" class="form-control form-control">
                @foreach ($get as $a)
                    <option value="{{$a->id}}">{{$a->id}} - {{$a->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group mt-1">
            <label>ID Member</label>
            <select name="id_member" class="form-control form-control">
                @foreach ($pelanggan as $b)
                    <option value="{{$b->id}}">{{$b->nama}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group mt-1">
            <label>Tanggal Masuk</label>
            <input type="date" name="tgl_masuk" class="form-control form-sm">
        </div>
        <div class="form-group mt-1">
            <label>Batas Waktu</label>
            <input type="date" name="bts_waktu" class="form-control form-sm">
        </div>
        <div class="form-group mt-1">
            <label>Biaya Tambahan</label>
            <input type="number" name="by_tambahan" class="form-control form-sm">
        </div>
        <div class="form-group mt-1">
            <label>Diskon</label>
            <input type="number" name="diskon" class="form-control form-sm">
        </div>
        <div class="form-group mt-1">
            <label>Pajak</label>
            <input type="number" name="pajak" class="form-control form-sm">
        </div>
        <div class="form-group mt-1">
            <label>Status</label>
            <select name="status" class="form-control form-control">
                <option value="Baru">Baru</option>
                <option value="Proses">Proses</option>
                <option value="Selesai">Selesai</option>
                <option value="Diambil">Diambil</option>
            </select>
        </div>
        <div class="form-group mt-1">
            <label>Dibayar</label>
            <select name="dibayar" class="form-control form-control">
                <option value="Dibayar">Dibayar</option>
                <option value="Belum Dibayar">Belum Dibayar</option>
            </select>
        </div>
        <div class="form-group mt-1">
            <button class="btn btn-sm btn-primary float-end"><i class="fas fa-save"></i> Simpan</button>
        </div>
    </form>
</div>
<br><br><br>
@endsection