<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class BarisanDanDeretController extends Controller
{
    // xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
    public function barisanAritmetika(){
        if(empty(Auth::guard('siswa')->user()->nisn)){
            return view('konten.12BarisanDanDeret.barisanaritmetika');
        }
        elseif(!empty(Auth::guard('siswa')->user()->nisn))
        {
        $nisn = Auth::guard('siswa')->user()->nisn;
        $materi = "Bar_arit01";
        $progress = DB::table('progres')->where('nisn',$nisn)->where('materi',$materi)->count();
        return view('konten.12BarisanDanDeret.barisanaritmetika', compact('progress'));
        }
    }
    public function createbarisanAritmetika(){
        $nisn = Auth::guard('siswa')->user()->nisn;
        $kelas = Auth::guard('siswa')->user()->kelas;
        $materi = "Bar_arit01";
        $kategori = "Barisan dan Deret";
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
    public function deretAritmetika(){
        if(empty(Auth::guard('siswa')->user()->nisn)){
            return view('konten.12BarisanDanDeret.deretaritmetika');
        }
        elseif(!empty(Auth::guard('siswa')->user()->nisn))
        {
        $nisn = Auth::guard('siswa')->user()->nisn;
        $materi = "Deret_arit01";
        $progress = DB::table('progres')->where('nisn',$nisn)->where('materi',$materi)->count();
        return view('konten.12BarisanDanDeret.deretaritmetika', compact('progress'));
        }
    }
    public function createderetAritmetika(){
        $nisn = Auth::guard('siswa')->user()->nisn;
        $kelas = Auth::guard('siswa')->user()->kelas;
        $materi = "Deret_arit01";
        $kategori = "Barisan dan Deret";
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
    public function barisanGeometri(){
        if(empty(Auth::guard('siswa')->user()->nisn)){
            return view('konten.12BarisanDanDeret.barisangeometri');
        }
        elseif(!empty(Auth::guard('siswa')->user()->nisn))
        {
        $nisn = Auth::guard('siswa')->user()->nisn;
        $materi = "Bar_Geo01";
        $progress = DB::table('progres')->where('nisn',$nisn)->where('materi',$materi)->count();
        return view('konten.12BarisanDanDeret.barisangeometri', compact('progress'));
        }
    }
    public function createbarisanGeometri(){
        $nisn = Auth::guard('siswa')->user()->nisn;
        $kelas = Auth::guard('siswa')->user()->kelas;
        $materi = "Bar_Geo01";
        $kategori = "Barisan dan Deret";
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
    public function deretGeometri(){
        if(empty(Auth::guard('siswa')->user()->nisn)){
            return view('konten.12BarisanDanDeret.deretgeometri');
        }
        elseif(!empty(Auth::guard('siswa')->user()->nisn))
        {
        $nisn = Auth::guard('siswa')->user()->nisn;
        $materi = "Deret_Geo01";
        $progress = DB::table('progres')->where('nisn',$nisn)->where('materi',$materi)->count();
        return view('konten.12BarisanDanDeret.deretgeometri', compact('progress'));
        }
    }
    public function createderetGeometri(){
        $nisn = Auth::guard('siswa')->user()->nisn;
        $kelas = Auth::guard('siswa')->user()->kelas;
        $materi = "Deret_Geo01";
        $kategori = "Barisan dan Deret";
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
    public function takhingga01(){
        if(empty(Auth::guard('siswa')->user()->nisn)){
            return view('konten.12BarisanDanDeret.takhingga01');
        }
        elseif(!empty(Auth::guard('siswa')->user()->nisn))
        {
        $nisn = Auth::guard('siswa')->user()->nisn;
        $materi = "takhingga01";
        $progress = DB::table('progres')->where('nisn',$nisn)->where('materi',$materi)->count();
        return view('konten.12BarisanDanDeret.takhingga01', compact('progress'));
        }
    }
    public function createtakhingga01(){
        $nisn = Auth::guard('siswa')->user()->nisn;
        $kelas = Auth::guard('siswa')->user()->kelas;
        $materi = "takhingga01";
        $kategori = "Barisan dan Deret";
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
