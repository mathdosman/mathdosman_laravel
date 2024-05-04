<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class AuthController extends Controller
{
    public function proseslogin(Request $request)
    {
        $nisn = $request->nisn;
        if(Auth::guard('siswa')->attempt(['nisn'=>$request->nisn, 'password'=>$request->password])){
            $data =[
                'role' => 1,
            ];
            try {
                DB::table('siswa')->where('nisn', $nisn)->update($data);
                $nama_siswa = Auth::guard('siswa')->user()->nama_siswa;
                return redirect('/')->with(['success'=>'Berhasil Login '.$nama_siswa ]);
            } catch (\Exception $e) {
                return redirect('/login')->with(['error'=>'Gagal Login']);
            }
         } else {
             return redirect('/login')->with(['error'=>'NISN/Password Salah']);
         }
    }
    public function proseslogout(){
        $nisn = Auth::guard('siswa')->user()->nisn;
        if(Auth::guard('siswa')->check()){
            $data =[
                'role' => 0,
            ];
            try {
                DB::table('siswa')->where('nisn', $nisn)->update($data);
                return Redirect::back()->with(['success'=>'Berhasil Logout ']);
            } catch (\Exception $e) {
                return Redirect::back()->with(['error'=>'Gagal Logout']);
            }
            Auth::guard('siswa')->logout();
            return redirect('/');
        }
    }
}
