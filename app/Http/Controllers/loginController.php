<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Session;

class loginController extends Controller
{
    public function loginView(){
        return view('login');
    }

    public function doLogin(Request $req){
        $data = [
            "email" => $req->email,
            "password" => $req->pass,
        ];

        if(Auth::attempt($data)){
            switch (Auth::user()->role) {
                case 'admin':
                    return redirect('/admin/home');
                    break;
                
                case 'kasir':
                    return redirect('/kasir/home');
                    break;
            
                case 'owner':
                    return redirect('/owner/home');
                    break;
                
                default:
                    return redirect('/login');
                    break;
            }
        }else{
            Session::flash('error','Oops, username atau password salah !');
            return redirect('/login');
        }
    }
}
