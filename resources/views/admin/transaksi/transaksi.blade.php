@extends('admin.navbar')

@section('content')
<br><br>
<div class="container bg-white p-4 shadow rounded">
    <h4>Data Transaksi</h4>
    <a href="/admin/transaksi/tambah" class="btn btn-sm btn-primary mb-2">Transaksi Baru</a>
    <table class="table table-bordered table-responsive">
        <tr>
            <th>No</th>
            <th>Kode Invoice</th>
            <th>Tanggal</th>
            <th>Batas Waktu</th>
            <th>Biaya Tambahan</th>
            <th>Diskon</th>
            <th>Pajak</th>
            <th>Status</th>
            <th>Dibayar</th>
            <th>Aksi</th>
        </tr>
        <?php $i=1; ?>
        @foreach ($get as $a)            
            <tr>
                <td><?= $i++?></td>
                <td>{{$a->kode_invoice}}</td>
                <td>{{$a->tgl}}</td>
                <td>{{$a->batas_waktu}}</td>
                <td>{{$a->biaya_tambahan}}</td>
                <td>{{$a->diskon}}</td>
                <td>{{$a->pajak}}</td>
                <td>{{$a->status}}</td>
                <td>{{$a->dibayar}}</td>
                <td>
                    <a href="/admin/transaksi/selesai/{{$a->id}}" class="btn btn-sm btn-success m-1"><i class="far fa-check-square"></i></a>
                    <a href="/admin/transaksi/invoice/{{$a->id}}" class="btn btn-sm btn-success m-1"><i class="fas fa-print"></i></a>
                </td>
            </tr>
        @endforeach
    </table>
</div>
@endsection