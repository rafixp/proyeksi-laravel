@extends('admin.navbar')

@section('content')
<br><br>
<div class="container card bg-white">
    <div class="card-header">
        <a href="/admin/member/tambah" class="btn btn-sm btn-primary float-end">Tambah Pelanggan</a>
    </div>
    <div class="card-body">
        <table class="table table-sm table-bordered">
            <tr>
                <th>NO</th>
                <th>Nama Pelanggan</th>
                <th>Telepon</th>
                <th>Jenis Kelamin</th>
                <th>Alamat</th>
                <th>Aksi</th>
            </tr>
            <?php $i=1; ?>
            @foreach ($get as $a)
                <tr>
                    <td><?= $i++ ?></td>
                    <td>{{ $a->nama }}</td>
                    <td>{{ $a->tlp }}</td>
                    <td>{{ $a->jenis_kelamin }}</td>
                    <td>{{ $a->alamat }}</td>
                    <td>
                        <a href="/admin/member/edit/{{ $a->id   }}" class="btn btn-sm btn-success"><i class="fas fa-pencil-alt"></i></a>
                        <a href="/admin/member/hapus/{{ $a->id }}" class="btn btn-sm btn-danger" onclick="return confirm('Hapus data pelanggan ini ? ')"><i class="fas fa-trash"></i></a>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
</div>
@endsection