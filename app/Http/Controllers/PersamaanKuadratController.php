<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class PersamaanKuadratController extends Controller
{
    public function jumlahdanhasilkaliakar(){
        if(empty(Auth::guard('siswa')->user()->nisn)){
            return view('konten.06persamaankuadrat.jumlah_dan_hasil_kali_akar');
        }
        elseif(!empty(Auth::guard('siswa')->user()->nisn))
        {
        $nisn = Auth::guard('siswa')->user()->nisn;
        $materi = "PK-02";
        $progress = DB::table('progres')->where('nisn',$nisn)->where('materi',$materi)->count();
        return view('konten.06persamaankuadrat.jumlah_dan_hasil_kali_akar', compact('progress'));
        }
    }


    public function menyelesaikanpersamaankuadrat(){
        if(empty(Auth::guard('siswa')->user()->nisn)){
            return view('konten.06persamaankuadrat.menyelesaiakan_persamaan_kuadrat');
        }
        elseif(!empty(Auth::guard('siswa')->user()->nisn))
        {
        $nisn = Auth::guard('siswa')->user()->nisn;
        $materi = "PK-01";
        $progress = DB::table('progres')->where('nisn',$nisn)->where('materi',$materi)->count();
        return view('konten.06persamaankuadrat.menyelesaiakan_persamaan_kuadrat', compact('progress'));
        }
    }

    public function persamaanKuadrat01(){
        $nisn = Auth::guard('siswa')->user()->nisn;
        $kelas = Auth::guard('siswa')->user()->kelas;
        $materi = "PK-01";
        $kategori = "Persamaan Kuadrat";
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
    public function persamaanKuadrat02(){
        $nisn = Auth::guard('siswa')->user()->nisn;
        $kelas = Auth::guard('siswa')->user()->kelas;
        $materi = "PK-02";
        $kategori = "Persamaan Kuadrat";
        $kode = $materi."-".$nisn;

        try {
            $data =[
                'nisn' => $nisn,
                'kelas' => $kelas,
                'materi' => $materi,
                'kategori' => $kategori,
                'kode_pengumpulan' => $kode,
            ];
            DB::table('progres')->insert($data);
                return Redirect::back()->with(['success'=>'Jawaban Berhasil Disimpan ' ]);
            } catch (\Exception $e) {
                return Redirect::back()->with(['error'=>'Jawaban Gagal Disimpan']);
         }
    }
// SAMPAI DISINI


}
