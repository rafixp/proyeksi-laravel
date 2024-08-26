<div class="container bg-white mx-auto p-3 rounded mt-2 shadow">
    <h4>Form Edit User</h4>
    <form action="/admin/user/tambahuser" method="POST">
        <div class="form-group mt-1">
            <label>ID Outlet</label>
            <select name="id_outlet" class="form-control">
                <option value="">1</option>
                <option value="">1</option>
                <option value="">1</option>
            </select>
        </div>
        <div class="form-group mt-1">
            <label>Nama Paket</label>
            <input type="text" name="nama" class="form-control form-sm">
        </div>
        <div class="form-group mt-1">
            <label>Jenis Paket</label>
            <select name="jk" class="form-control">
                <option value="Kiloan">Kiloan</option>
                <option value="Selimut">Selimut</option>
                <option value="Bed Cover">Bed Cover</option>
                <option value="Kaos">Kaos</option>
                <option value="Lainnya">Lainnya</option>
            </select>
        </div>
        <div class="form-group mt-1">
            <label>Harga</label>
            <input type="number" name="harga" class="form-control form-sm">
        </div>
        <div class="form-group mt-1">
            <button class="btn btn-sm btn-primary float-end"><i class="fas fa-save"></i> Simpan</button>
        </div>
    </form>
</div>