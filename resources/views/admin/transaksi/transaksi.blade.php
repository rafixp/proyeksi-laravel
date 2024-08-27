@extends('admin.navbar')

@section('content')
<br><br>
<div class="container bg-white p-4 shadow rounded">
    <h4>Data Transaksi</h4>
    <a href="/admin/transaksi/tambah" class="btn btn-sm btn-primary mb-2">Transaksi Baru</a>
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>ID Pelanggan</th>
            <th>Tanggal</th>
            <th>Batas Waktu</th>
            <th>Biaya Tambahan</th>
            <th>Diskon</th>
            <th>Pajak</th>
            <th>Status</th>
            <th>Dibayar</th>
            <th>Aksi</th>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td>
                <a href="/admin/transaksi/selesai/" class="btn btn-sm btn-success m-1"><i class="far fa-check-square"></i></a>
                <a href="/admin/transaksi/invoice/" class="btn btn-sm btn-success m-1"><i class="fas fa-print"></i></a>
            </td>
        </tr>
    </table>
</div>
@endsection