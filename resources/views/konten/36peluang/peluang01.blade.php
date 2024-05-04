@extends('konten.36peluang.36.template')
@section('content')

<div class="page-header d-print-none">
    <div class="container-xl">
      <div class="row g-2 align-items-center">
        <div class="col">
          <!-- Page pre-title -->
          <div class="page-pretitle" style="margin-top:50px">
            mathdosman.com
          </div>
          <h2 class="page-title">
            Peluang
          </h2>
        </div>
      </div>
    </div>
  </div>
  <div>
    @php
    $messagesuccess=Session::get('success');
    $messageerror=Session::get('error');
@endphp
@if(Session::get('success'))
    <div class="alert alert-success">
        {{$messagesuccess}}
    </div>
@endif
@if(Session::get('error'))
    <div class="alert alert-danger">
        {{$messageerror}}
    </div>
@endif
</div>

<!-- START FORM KUIS -->
<section >
    <div class="container p-2">
        <div class="row justify-content-center">
            <div class="col-md-9 p-2">

            <p class="text-center fst-italic"> Math_Dosman</p>
        <form name="input-form">
             @csrf
             <ol type="1" class="mt-2">
                @include('konten.00semuamateri.identitas')
<!--=======================  soal1 ===================================-->
            <li>Mia mempunyai 3 buah rok berwarna hitam, cokelat, dan biru. Mia juga mempunyai 4 buah baju berwarna putih, kuning, biru dan cokelat. Banyak pasangan rok dan baju yang dapat dipakai adalah . . .</li>
                    <input type="radio" name="soal1" value="0"/>
                    A. \(7 \)
                <br />
                    <input type="radio" name="soal1" value="0"/>
                    B. \(8 \)
                <br />
                    <input type="radio" name="soal1" value="0"/>
                    C. \(10 \)
                <br>
                    <input type="radio" name="soal1" value="10"/>
                    D. \(12 \)
                <br />
                    <input type="radio" name="soal1" value="0"/>
                    E. \(14 \)
                <br>
                <hr />

<!--=======================  soal2 ===================================-->
            <li>Dari angka 0, 2, 4, 6, 8 akan disusun suatu bilangan yang terdiri dari tiga angka. Banyak bilangan yang dapat disusun jika angka-angka itu boleh diulang adalah . . .bilangan</li>
                <input type="radio" name="soal2" value="0"/>
                A. \(120 \)
                <br />
                <input type="radio" name="soal2" value="10"/>
                B. \(100 \)
                <br />
                <input type="radio" name="soal2" value="0"/>
                C. \(80 \)
                <br>
                <input type="radio" name="soal2" value="0"/>
                D. \(60 \)
                <br />
                <input type="radio" name="soal2" value="0"/>
                E. \(40 \)
                <br>
                <hr />
<!--=======================  soal3 ===================================-->
            <li>Dari angka 2, 3, 4, 5, 6, 7, 8 akan disusun suatu bilangan yang terdiri dari tiga angka yang nilainya lebih dari 400. Banyak bilangan yang dapat disusun, jika tidak ada angka berulang adalah . . . bilangan</li>
                <input type="radio" name="soal3" value="0"/>
                A. \(180 \)
                <br />
                <input type="radio" name="soal3" value="0"/>
                B. \(160 \)
                <br />
                <input type="radio" name="soal3" value="10"/>
                C. \(150 \)
                <br>
                <input type="radio" name="soal3" value="0"/>
                D. \(120 \)
                <br />
                <input type="radio" name="soal3" value="0"/>
                E. \(100 \)
                <br>
                <hr />
<!--=======================  soal4 ===================================-->
            <li>Dari angka 1, 2, 3, 4, 5, 6, 7, 8, akan disusun suatu bilangan yang terdiri dari empat angka yang tidak boleh berulang. Banyaknya bilangan ganjil yang dapat dibentuk adalah...bilangan</li>
                <input type="radio" name="soal4" value="0"/>
                A. \(120 \)
                <br />
                <input type="radio" name="soal4" value="0"/>
                B. \(240 \)
                <br />
                <input type="radio" name="soal4" value="0"/>
                C. \(480 \)
                <br>
                <input type="radio" name="soal4" value="0"/>
                D. \(680 \)
                <br />
                <input type="radio" name="soal4" value="10"/>
                E. \(840 \)
                <br>
                <hr />
<!--=======================  soal5 ===================================-->
            <li>Kota A dan B dihubungkan oleh 4 alternatif jalan. Sedangkan kota B dan kota C dihubungkan oleh 6 alternatif jalan. Pak Toni akan bepergian dari kota A ke kota C melewati kota B. Jumlah rute berbeda yang dapat ditempuh oleh Pak Toni adalah... cara</li>
                <input type="radio" name="soal5" value="10"/>
                A. \(24 \)
                <br />
                <input type="radio" name="soal5" value="0"/>
                B. \(26 \)
                <br />
                <input type="radio" name="soal5" value="0"/>
                C. \(28 \)
                <br>
                <input type="radio" name="soal5" value="0"/>
                D. \(30 \)
                <br />
                <input type="radio" name="soal5" value="0"/>
                E. \(32 \)
                <br>
                <hr />
<!--=======================  soal6 ===================================-->
            <li>Untuk melakukan perjalanan dari kota P ke kota Q ada dua jalur yang dapat ditempuh, yaitu menggunakan perahu dan jalur darat. Ada 5 jalur perahu ke kota Q dan ada 3 jalur darat dari kota Q. Jika Fitri akan pergi dari kota P ke kota Q, maka banyak cara yang dapat ditempuh adalah . . . cara</li>
                <input type="radio" name="soal6" value="0"/>
                A. \(6 \)
                <br />
                <input type="radio" name="soal6" value="10"/>
                B. \(8 \)
                <br />
                <input type="radio" name="soal6" value="0"/>
                C. \(10 \)
                <br>
                <input type="radio" name="soal6" value="0"/>
                D. \(12 \)
                <br />
                <input type="radio" name="soal6" value="0"/>
                E. \(15 \)
                <br>
                <hr />
<!--=======================  soal7 ===================================-->
            <li>Dari angka-angka: 1, 2, 3, 4, 5, 6, 7, akan dibuat bilangan berbeda yang lebih dari 3000. Banyak susunan bilangan yang dapat dibentuk adalah . . . </li>
                <input type="radio" name="soal7" value="10"/>
                A. \(600 \) bilangan
                <br />
                <input type="radio" name="soal7" value="0"/>
                B. \(300 \) bilangan
                <br />
                <input type="radio" name="soal7" value="0"/>
                C. \(500 \) bilangan
                <br>
                <input type="radio" name="soal7" value="0"/>
                D. \(200 \) bilangan
                <br />
                <input type="radio" name="soal7" value="0"/>
                E. \(400 \) bilangan
                <br>
                <hr />
<!--=======================  soal8 ===================================-->
            <li>Dari 10 orang siswa dengan nilai memuaskan akan dipilih 3 orang siswa sebagai juara I, II, dan III. Banyak cara pemilihan juara I, II, dan III adalah . . .</li>
                <input type="radio" name="soal8" value="0"/>
                A. \(960 \)
                <br />
                <input type="radio" name="soal8" value="0"/>
                B. \(560 \)
                <br />
                <input type="radio" name="soal8" value="0"/>
                C. \(840 \)
                <br>
                <input type="radio" name="soal8" value="0"/>
                D. \(480 \)
                <br />
                <input type="radio" name="soal8" value="10"/>
                E. \(720 \)
                <br>
                <hr />
<!--=======================  soal9 ===================================-->
            <li>Di suatu ruang tunggu klinik terdapat 7 kursi. Jika diruang tunggu terdapat 9 orang, maka banyak cara pengunjung klinik duduk bedampingan adalah . . .
            </li>
                <input type="radio" name="soal9" value="0"/>
                A. \(177.440 \)
                <br />
                <input type="radio" name="soal9" value="0"/>
                B. \(180.440 \)
                <br />
                <input type="radio" name="soal9" value="0"/>
                C. \(178.440 \)
                <br>
                <input type="radio" name="soal9" value="10"/>
                D. \(181.440 \)
                <br />
                <input type="radio" name="soal9" value="0"/>
                E. \(179.440 \)
                <br>
                <hr />
<!--=======================  soal10 ===================================-->
            <li>Banyaknya susunan huruf berbeda yang dapat dibentuk dari huruf penyusun kota "KANADA" adalah . . .</li>
                <input type="radio" name="soal10" value="0"/>
                A. \(320 \)
                <br />
                <input type="radio" name="soal10" value="10"/>
                B. \(420 \)
                <br />
                <input type="radio" name="soal10" value="0"/>
                C. \(360 \)
                <br>
                <input type="radio" name="soal10" value="0"/>
                D. \(480 \)
                <br />
                <input type="radio" name="soal10" value="0"/>
                E. \(400 \)
                <br>
                <hr />
<!--=======================  soal11 ===================================-->
            <li>Dari 9 orang siswa akan dibentuk suatu kelompok yang terdiri dari 5 orang secara acak. Banyak cara pemilihan anggota kelompok tersebut adalah...</li>
                <input type="radio" name="soal11" value="0"/>
                A. \(120 \)
                <br />
                <input type="radio" name="soal11" value="0"/>
                B. \(128 \)
                <br />
                <input type="radio" name="soal11" value="0"/>
                C. \(125 \)
                <br>
                <input type="radio" name="soal11" value="0"/>
                D. \(130 \)
                <br />
                <input type="radio" name="soal11" value="10"/>
                E. \(126 \)
                <br>
                <hr />
<!--=======================  soal12 ===================================-->
            <li>Dalam suatu kotak terdapat 2 kelereng merah, 1 kelereng hijau, dan 3 kelereng biru. Jika akan diambil 2 kelereng sekaligus, maka banyak cara pengambilannya adalah...</li>
                <input type="radio" name="soal12" value="10"/>
                A. \(15 \)
                <br />
                <input type="radio" name="soal12" value="0"/>
                B. \(19 \)
                <br />
                <input type="radio" name="soal12" value="0"/>
                C. \(16 \)
                <br>
                <input type="radio" name="soal12" value="0"/>
                D. \(20 \)
                <br />
                <input type="radio" name="soal12" value="0"/>
                E. \(18 \)
                <br>
                <hr />
<!--=======================  soal13 ===================================-->
            <li>Dalam suatu kajian dihadiri oleh 10 orang. Jika mereka akan berjabat tangan satu sama lain, maka banyak jabatan yang akan terjadi sebanyak...</li>
                <input type="radio" name="soal13" value="0"/>
                A. \(40 \) kali
                <br />
                <input type="radio" name="soal13" value="0"/>
                B. \(55 \) kali
                <br />
                <input type="radio" name="soal13" value="10"/>
                C. \(45 \) kali
                <br>
                <input type="radio" name="soal13" value="0"/>
                D. \(60 \) kali
                <br />
                <input type="radio" name="soal13" value="0"/>
                E. \(50 \) kali
                <br>
                <hr />
<!--=======================  soal14 ===================================-->
            <li>Soal ujian Matematika terdiri dari 10 soal dan setiap siswa wajib mengerjakan soal nomor 1 sampai 5. Jika Tina akan mengerjakan 8 soal yang tersedia, maka banyak cara Tina dapat mengerjakan soal adalah...</li>
                <input type="radio" name="soal14" value="0"/>
                A. \(15 \) cara
                <br />
                <input type="radio" name="soal14" value="10"/>
                B. \(10 \) cara
                <br />
                <input type="radio" name="soal14" value="0"/>
                C. \(12 \) cara
                <br>
                <input type="radio" name="soal14" value="0"/>
                D. \(9 \) cara
                <br />
                <input type="radio" name="soal14" value="0"/>
                E. \(11 \) cara
                <br>
                <hr />
<!--=======================  soal15 ===================================-->
            <li><strong>(UN 2013/2014)</strong> <br> Pada suatu penerimaan pegawai, seorang pe- lamar wajib mengerjakan 6 soal di antara 14 soal. Soal nomor 1 sampai 3 harus dikerjakan. Banyak pilihan soal yang dapat dilakukan adalah . . .</li>
                <input type="radio" name="soal15" value="0"/>
                A. \(2.002 \) soal
                <br />
                <input type="radio" name="soal15" value="0"/>
                B. \(990 \) soal
                <br />
                <input type="radio" name="soal15" value="0"/>
                C. \(336 \) soal
                <br>
                <input type="radio" name="soal15" value="10"/>
                D. \(165 \) soal
                <br />
                <input type="radio" name="soal15" value="0"/>
                E. \(120 \) soal
                <br>
                <hr />
<!--=======================  soal16 ===================================-->
            <li>Dua buah dadu dilambungkan bersama-sama Peluang muncul mata dadu berjumlah 6 adalah . . .
            </li>
                <input type="radio" name="soal16" value="0"/>
                A. \(4/36 \)
                <br />
                <input type="radio" name="soal16" value="10"/>
                B. \(5/36 \)
                <br />
                <input type="radio" name="soal16" value="0"/>
                C. \(7/36 \)
                <br>
                <input type="radio" name="soal16" value="0"/>
                D. \(8/36 \)
                <br />
                <input type="radio" name="soal16" value="0"/>
                E. \(1/6 \)
                <br>
                <hr />
<!--=======================  soal17 ===================================-->
            <li>Sebuah kotak terdapat 4 kelereng hitam dan 2 kelereng hijau. Jika diambil 2 kelereng sekaligus, maka peluang terambil satu kelereng hitam dan satu kelereng hijau adalah ...</li>
                <input type="radio" name="soal17" value="10"/>
                A. \(8/15 \)
                <br />
                <input type="radio" name="soal17" value="0"/>
                B. \(5/15 \)
                <br />
                <input type="radio" name="soal17" value="0"/>
                C. \(7/15 \)
                <br>
                <input type="radio" name="soal17" value="0"/>
                D. \(4/15 \)
                <br />
                <input type="radio" name="soal17" value="0"/>
                E. \(6/15 \)
                <br>
                <hr />
<!--=======================  soal18 ===================================-->
            <li><strong>(UN 2013/2014)</strong> <br> Dua dadu dilempar undi bersama satu kali Peluang munculnya jumlah kedua mata dadu 4 atau 7 adalah . . .</li>
                <input type="radio" name="soal18" value="10"/>
                A. \(5/36 \)
                <br />
                <input type="radio" name="soal18" value="0"/>
                B. \(8/36 \)
                <br />
                <input type="radio" name="soal18" value="0"/>
                C. \(6/36 \)
                <br>
                <input type="radio" name="soal18" value="10"/>
                D. \(9/36 \)
                <br />
                <input type="radio" name="soal18" value="0"/>
                E. \(7/36 \)
                <br>
                <hr />
<!--=======================  soal19 ===================================-->
            <li>Tiga keping uang logan dilempar bersama sama sebanyak 104 kali. Frekuensi harapan muncul dua gambar adalah . . .</li>
                <input type="radio" name="soal19" value="0"/>
                A. \(35 \)
                <br />
                <input type="radio" name="soal19" value="0"/>
                B. \(38 \)
                <br />
                <input type="radio" name="soal19" value="0"/>
                C. \(36 \)
                <br>
                <input type="radio" name="soal19" value="10"/>
                D. \(39 \)
                <br />
                <input type="radio" name="soal19" value="0"/>
                E. \(37 \)
                <br>
                <hr />
<!--=======================  soal20 ===================================-->
            <li>Dua buah dadu dilempar bersama-sama sebanyak 108 kali. Frekuensi harapan muncul mata dadu berjumlah bilangan prima adalah . . .</li>
                <input type="radio" name="soal20" value="0"/>
                A. \(40 \)
                <br />
                <input type="radio" name="soal20" value="0"/>
                B. \(50 \)
                <br />
                <input type="radio" name="soal20" value="10"/>
                C. \(45 \)
                <br>
                <input type="radio" name="soal20" value="0"/>
                D. \(52 \)
                <br />
                <input type="radio" name="soal20" value="0"/>
                E. \(48 \)
                <br>
                <hr />

            </ol>

{{-- COPY DARI SINI SETIAP SOAL --}}
{{-- TOMBOL KIRIM --}}
<input type="hidden" id="materi" name="materi" value="Peluang-01">

@if(empty(Auth::guard('siswa')->user()->role))
<h2 class="text-red text-center">Silahkan Login Untuk mengirim jawaban, Terimakasih</h2>
@elseif(Auth::guard('siswa')->user()->role == 1)
            @if($progress == 0)
            <input type="hidden" id="nama" name="nama" value="{{Auth::guard('siswa')->user()->nama_siswa}}">
            <input type="hidden" id="kelas" name="kelas" value="{{Auth::guard('siswa')->user()->kelas}}">
            <input type="hidden" id="absen" name="absen" value="{{Auth::guard('siswa')->user()->no_absen}}">

            <div class="alert alert-success alert-dismissible fade show d-none my-alert text-center" role="alert" style="font-size: 1.5rem">
                <strong>Terima kasih</strong> Lanjutkan dengan menyimpan Jawaban.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <div class="row justify-content-center text-center">
                <div class="col">
                    <button type="submit" class="btn btn-primary btn-kirim m-4" onclick="kirim()">REQUEST TOKEN</button>
                    <button class="btn btn-primary btn-loading d-none" type="button" disabled>
                        <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                        Loading...
                    </button>
                </div>
            </div>
            @elseif ($progress == 1)
            <div class="row"><p class="text-center text-danger" style="font-size: 1.5rem">Anda Sudah Mengumpulkan Jawaban</p></div>
            @endif
@endif
{{-- END TOMBOL KIRIM --}}
<div class="row text-center">
    <a href="/createpeluang01" id="kirimsaja" class="btn btn-warning btn-bukti d-none" >SIMPAN JAWABAN</a>
</div>
</form>
{{-- COPY SAMPAI SINI --}}

<div id="disqus_thread"></div>

</div>
</div>
</div>
</section>
@endsection

