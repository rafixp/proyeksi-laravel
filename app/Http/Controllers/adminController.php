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

    public function paket(){
        return view('admin.paket.paket');
    }

    public function tambahMemberView(){
        return view('admin.pelanggan.tambahpelanggan');
    }
    
    public function editMemberView($id){
        $get = Member::findOrFail($id);
        return view('admin.pelanggan.editpelanggan',compact('get'));
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
            Session::flash('success','Data member gagal diedit !');
            return redirect('/admin/member');
        }
    }
}
