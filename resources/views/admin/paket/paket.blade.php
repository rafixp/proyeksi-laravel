@extends('admin.navbar')

@section('content')
<br><br>
<div class="container card bg-white">
    <div class="card-header">
        <a href="/admin/paket/tambah" class="btn btn-sm btn-primary float-end">Tambah Paket</a>
    </div>
    <div class="card-body">
        <table class="table table-sm table-bordered">
            <tr>
                <th>No</th>
                <th>ID Outlet</th>
                <th>Nama Paket</th>
                <th>Jenis Paket</th>
                <th>Harga</th>
                <th>Aksi</th>
            </tr>
            <?php $i=1; ?>
            @foreach ($get as $a)
            <tr>
                <td><?= $i++?></td>
                <td>{{$a->id_outlet}}</td>
                <td>{{$a->nama_paket}}</td>
                <td>{{$a->jenis}}</td>
                <td>{{$a->harga}}</td>
                <td>
                    <a href="/admin/paket/edit/{{$a->id}}" class="btn btn-sm btn-success"><i class="fas fa-pencil-alt"></i></a>
                    <a href="/admin/paket/hapus/{{$a->id}}" class="btn btn-sm btn-danger" onclick="return confirm('Hapus data paket ini ? ')"><i class="fas fa-trash"></i></a>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</div>
@endsection