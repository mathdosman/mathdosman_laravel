<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class TransformasiController extends Controller
{
    public function transgeomat(){
        if(empty(Auth::guard('siswa')->user()->nisn)){
            return view('konten.11transformasi.materiTransformasi');
        }
        elseif(!empty(Auth::guard('siswa')->user()->nisn))
        {
        $nisn = Auth::guard('siswa')->user()->nisn;
        $materi = "transgeomat";
        $progress = DB::table('progres')->where('nisn',$nisn)->where('materi',$materi)->count();
        return view('konten.11transformasi.materiTransformasi', compact('progress'));
        }
    }
    // xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
    public function translasi01(){
        if(empty(Auth::guard('siswa')->user()->nisn)){
            return view('konten.11transformasi.translasi01');
        }
        elseif(!empty(Auth::guard('siswa')->user()->nisn))
        {
        $nisn = Auth::guard('siswa')->user()->nisn;
        $materi = "translasi01";
        $progress = DB::table('progres')->where('nisn',$nisn)->where('materi',$materi)->count();
        return view('konten.11transformasi.translasi01', compact('progress'));
        }
    }
    public function createtranslasi01(){
        $nisn = Auth::guard('siswa')->user()->nisn;
        $kelas = Auth::guard('siswa')->user()->kelas;
        $materi = "translasi01";
        $kategori = "Transformasi";
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
    public function refleksi01(){
        if(empty(Auth::guard('siswa')->user()->nisn)){
            return view('konten.11transformasi.refleksi01');
        }
        elseif(!empty(Auth::guard('siswa')->user()->nisn))
        {
        $nisn = Auth::guard('siswa')->user()->nisn;
        $materi = "refleksi01";
        $progress = DB::table('progres')->where('nisn',$nisn)->where('materi',$materi)->count();
        return view('konten.11transformasi.refleksi01', compact('progress'));
        }
    }
    public function createrefleksi01(){
        $nisn = Auth::guard('siswa')->user()->nisn;
        $kelas = Auth::guard('siswa')->user()->kelas;
        $materi = "refleksi01";
        $kategori = "Transformasi";
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
    public function rotasi01(){
        if(empty(Auth::guard('siswa')->user()->nisn)){
            return view('konten.11transformasi.rotasi01');
        }
        elseif(!empty(Auth::guard('siswa')->user()->nisn))
        {
        $nisn = Auth::guard('siswa')->user()->nisn;
        $materi = "rotasi01";
        $progress = DB::table('progres')->where('nisn',$nisn)->where('materi',$materi)->count();
        return view('konten.11transformasi.rotasi01', compact('progress'));
        }
    }
    public function createrotasi01(){
        $nisn = Auth::guard('siswa')->user()->nisn;
        $kelas = Auth::guard('siswa')->user()->kelas;
        $materi = "rotasi01";
        $kategori = "Transformasi";
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
    public function dilatasi01(){
        if(empty(Auth::guard('siswa')->user()->nisn)){
            return view('konten.11transformasi.dilatasi01');
        }
        elseif(!empty(Auth::guard('siswa')->user()->nisn))
        {
        $nisn = Auth::guard('siswa')->user()->nisn;
        $materi = "dilatasi01";
        $progress = DB::table('progres')->where('nisn',$nisn)->where('materi',$materi)->count();
        return view('konten.11transformasi.dilatasi01', compact('progress'));
        }
    }
    public function createdilatasi01(){
        $nisn = Auth::guard('siswa')->user()->nisn;
        $kelas = Auth::guard('siswa')->user()->kelas;
        $materi = "dilatasi01";
        $kategori = "Transformasi";
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
    public function transgeo01(){
        if(empty(Auth::guard('siswa')->user()->nisn)){
            return view('konten.11transformasi.transgeo01');
        }
        elseif(!empty(Auth::guard('siswa')->user()->nisn))
        {
        $nisn = Auth::guard('siswa')->user()->nisn;
        $materi = "transgeo01";
        $progress = DB::table('progres')->where('nisn',$nisn)->where('materi',$materi)->count();
        return view('konten.11transformasi.transgeo01', compact('progress'));
        }
    }
    public function createtransgeo01(){
        $nisn = Auth::guard('siswa')->user()->nisn;
        $kelas = Auth::guard('siswa')->user()->kelas;
        $materi = "transgeo01";
        $kategori = "Transformasi";
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
    public function transgeo02(){
        if(empty(Auth::guard('siswa')->user()->nisn)){
            return view('konten.11transformasi.transgeo02');
        }
        elseif(!empty(Auth::guard('siswa')->user()->nisn))
        {
        $nisn = Auth::guard('siswa')->user()->nisn;
        $materi = "transgeo02";
        $progress = DB::table('progres')->where('nisn',$nisn)->where('materi',$materi)->count();
        return view('konten.11transformasi.transgeo02', compact('progress'));
        }
    }
    public function createtransgeo02(){
        $nisn = Auth::guard('siswa')->user()->nisn;
        $kelas = Auth::guard('siswa')->user()->kelas;
        $materi = "transgeo02";
        $kategori = "Transformasi";
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
