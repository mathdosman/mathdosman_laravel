<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class LimitController extends Controller
{
    public function materilimit(){
        return view('konten.13LimitALjabarFungsi.materilimit');
    }
    // xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
    public function limit01(){
        if(empty(Auth::guard('siswa')->user()->nisn)){
            return view('konten.13LimitALjabarFungsi.limit01');
        }
        elseif(!empty(Auth::guard('siswa')->user()->nisn))
        {
        $nisn = Auth::guard('siswa')->user()->nisn;
        $materi = "limit01";
        $progress = DB::table('progres')->where('nisn',$nisn)->where('materi',$materi)->count();
        return view('konten.13LimitALjabarFungsi.limit01', compact('progress'));
        }
    }
    public function createlimit01(){
        $nisn = Auth::guard('siswa')->user()->nisn;
        $kelas = Auth::guard('siswa')->user()->kelas;
        $materi = "limit01";
        $kategori = "Limit";
        $kode = $materi."-".$nisn;

        try {
            $data =[
                'nisn' => $nisn,
                'kelas' => $kelas,
                'materi' => $materi,
                'kategori' => $kategori,
                'kode_pengumpulan' =>$kode
            ];
            DB::table('progres')->insert($data);
                return Redirect::back()->with(['success'=>'Jawaban Berhasil Disimpan ' ]);
            } catch (\Exception $e) {
                return Redirect::back()->with(['error'=>'Jawaban Gagal Disimpan']);
         }
    }
    // xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
    public function limit02(){
        if(empty(Auth::guard('siswa')->user()->nisn)){
            return view('konten.13LimitALjabarFungsi.limit02');
        }
        elseif(!empty(Auth::guard('siswa')->user()->nisn))
        {
        $nisn = Auth::guard('siswa')->user()->nisn;
        $materi = "limit02";
        $progress = DB::table('progres')->where('nisn',$nisn)->where('materi',$materi)->count();
        return view('konten.13LimitALjabarFungsi.limit02', compact('progress'));
        }
    }
    public function createlimit02(){
        $nisn = Auth::guard('siswa')->user()->nisn;
        $kelas = Auth::guard('siswa')->user()->kelas;
        $materi = "limit02";
        $kategori = "Limit";
        $kode = $materi."-".$nisn;

        try {
            $data =[
                'nisn' => $nisn,
                'kelas' => $kelas,
                'materi' => $materi,
                'kategori' => $kategori,
                'kode_pengumpulan' =>$kode
            ];
            DB::table('progres')->insert($data);
                return Redirect::back()->with(['success'=>'Jawaban Berhasil Disimpan ' ]);
            } catch (\Exception $e) {
                return Redirect::back()->with(['error'=>'Jawaban Gagal Disimpan']);
         }
    }
}
