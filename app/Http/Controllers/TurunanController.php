<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class TurunanController extends Controller
{
    // xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
    public function turunan01(){
        if(empty(Auth::guard('siswa')->user()->nisn)){
            return view('konten.14Turunan.turunan01');
        }
        elseif(!empty(Auth::guard('siswa')->user()->nisn))
        {
        $nisn = Auth::guard('siswa')->user()->nisn;
        $materi = "turunan01";
        $progress = DB::table('progres')->where('nisn',$nisn)->where('materi',$materi)->count();
        return view('konten.14Turunan.turunan01', compact('progress'));
        }
    }
    public function createturunan01(){
        $nisn = Auth::guard('siswa')->user()->nisn;
        $kelas = Auth::guard('siswa')->user()->kelas;
        $materi = "turunan01";
        $kategori = "Turunan";
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
    public function turunan02(){
        if(empty(Auth::guard('siswa')->user()->nisn)){
            return view('konten.14Turunan.turunan02');
        }
        elseif(!empty(Auth::guard('siswa')->user()->nisn))
        {
        $nisn = Auth::guard('siswa')->user()->nisn;
        $materi = "turunan02";
        $progress = DB::table('progres')->where('nisn',$nisn)->where('materi',$materi)->count();
        return view('konten.14Turunan.turunan02', compact('progress'));
        }
    }
    public function createturunan02(){
        $nisn = Auth::guard('siswa')->user()->nisn;
        $kelas = Auth::guard('siswa')->user()->kelas;
        $materi = "turunan02";
        $kategori = "Turunan";
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
