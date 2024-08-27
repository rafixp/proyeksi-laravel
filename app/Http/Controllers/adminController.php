<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\detailTransaksi;
use App\Models\Member;
use App\Models\Outlet;
use App\Models\Paket;
use App\Models\Transaksi;
use App\Models\User;
use Session;

class adminController extends Controller
{
    public function home(){
        return view('admin.home');
    }

    public function member(){
        $get = Member::latest()->get();
        return view('admin.pelanggan.pelanggan',compact('get'));
    }
    
    public function tambahMemberView(){
        return view('admin.pelanggan.tambahpelanggan');
    }
    
    public function editMemberView($id){
        $get = Member::findOrFail($id);
        return view('admin.pelanggan.editpelanggan',compact('get'));
    }

    public function paket(){
        $get = Paket::latest()->get();
        return view('admin.paket.paket',compact('get'));
    }

    public function user(){
        $get = User::latest()->get();
        return view('admin.user.user', compact('get'));
    }

    public function tambahUserView(){
        return view('admin.user.tambahuser');
    }

    public function editUserView($id){
        $get = User::findOrFail($id);
        return view('admin.user.edituser',compact('get'));
    }

    public function tambahPaketView(){
        $get = User::whereAll(['role'],'LIKE','%kasir%')->get();
        return view('admin.paket.tambahpaket', compact('get'));
    }

    public function editPaketView($id){
        $get = User::whereAll(['role'], 'LIKE', '%kasir%')->get();
        $paket = Paket::findOrFail($id);
        return view('admin.paket.editpaket', compact('paket','get'));
    }

    public function tambahUser(Request $req){
        $data = [
            'name' => $req->namauser,
            'email' => $req->email,
            'password' => $req->password,
            'role' => $req->role
        ];

        if(User::create($data)){
            Session::flash('success','Data user berhasil ditambahkan !');
            return redirect('/admin/user');
        }
        else{
            Session::flash('fail','Data user gagal ditambahkan !');
            return redirect('/admin/user');
        }
    }

    public function hapusUser($id){
        $get = User::findOrFail($id);
        if($get->delete()){
            Session::flash('success','Data user berhasil dihapus !');
            return redirect('/admin/user');
        }
        else{
            Session::flash('fail','Data user gagal dihapus !');
            return redirect('/admin/user');
        }
    }

    public function editUser(Request $req, $id){
        $data = [
            'name' => $req->namauser,
            'email' => $req->email,
            'password' => $req->password,
            'role' => $req->role
        ];

        $get = User::findOrFail($id);
        if($get->update($data)){
            Session::flash('success','Data user berhasil diedit !');
            return redirect('/admin/user');
        }
        else{
            Session::flash('fail','Data user gagal diedit !');
            return redirect('/admin/user');
        }
    }

    public function tambahMember(Request $req){
        $data = [
            'nama' => $req->nama,
            'tlp' => $req->tlp,
            'jenis_kelamin' => $req->jk,
            'alamat' => $req->alamat,
        ];

        if(Member::create($data)){
            Session::flash('success','Data member berhasil ditambahkan !');
            return redirect('/admin/member');
        }else{
            Session::flash('fail','Data member gagal ditambahkan !');
            return redirect('/admin/member');
        }
    }

    public function hapusMember($id){
        $hapus = Member::findOrFail($id);
        if($hapus->delete()){
            Session::flash('success','Data member berhasil dihapus !');
            return redirect('/admin/member');
        }else{
            Session::flash('fail','Data member gagal dihapus !');
            return redirect('/admin/member');
        }
    }

    public function editMember(Request $req, $id){
        $data = [
            'nama' => $req->nama,
            'tlp' => $req->tlp,
            'jenis_kelamin' => $req->jk,
            'alamat' => $req->alamat,
        ];
        
        $get = Member::findOrFail($id);
        if($get->update($data)){
            Session::flash('success','Data member berhasil diedit !');
            return redirect('/admin/member');
        }else{
            Session::flash('fail','Data member gagal diedit !');
            return redirect('/admin/member');
        }
    }

    public function tambahPaket(Request $req){
        $data = [
            "id_outlet" => $req->id_outlet,
            "jenis" => $req->jenis,
            "nama_paket" => $req->nama,
            "harga" => $req->harga
        ];

        if(Paket::create($data)){
            Session::flash('success','Data paket berhasil ditambahkan !');
            return redirect('/admin/paket');
        }else{
            Session::flash('fail','Data paket gagal ditambahkan !');
            return redirect('/admin/paket');
        }
    }

    public function editPaket(Request $req, $id){
        $data = [
            "id_outlet" => $req->id_outlet,
            "jenis" => $req->jenis,
            "nama_paket" => $req->nama,
            "harga" => $req->harga
        ];

        $paket = Paket::findOrFail($id);
        if($paket->update($data)){
            Session::flash('success','Data paket berhasil diedit !');
            return redirect('/admin/paket');
        }else{
            Session::flash('fail','Data paket gagal diedit !');
            return redirect('/admin/paket');
        }
    }

    public function transaksiView(){
        return view('admin.transaksi.transaksi');
    }

    public function tambahTransaksiView(){
        date_default_timezone_set('Asia/Jakarta');
        $get = User::whereAll(['role'], 'LIKE', '%kasir%')->get();
        $pelanggan = Member::latest()->get();
        $invoice = 'CLN'.date('Ymdhis');
        return view('admin.transaksi.tambahtransaksi',compact('get','pelanggan','invoice'));
    }

    public function transaksiBaru(Request $req){
        $data = [
            'id_outlet' => $req->id_outlet,
            'kode_invoice' => $req->kode_invoice,
            'id_member' => $req->id_member,
            'tgl' => $req->tgl_masuk,
            'batas_waktu' => $req->bts_waktu,
            'biaya_tambahan' => $req->by_tambahan,
            'diskon' => $req->diskon,
            'pajak' => $req->pajak,
            'status' => $req->status,
            'dibayar' => $req->dibayar
        ];

        if(Transaksi::create($data)){
            Session::flash('success','Data Transaksi berhasil ditambahkan !');
            return redirect('/admin/transaksi');
        }else{
            Session::flash('fail','Data Transaksi gagal ditambahkan !');
            return redirect('/admin/transaksi');
        }
    }
}
