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
            Ruang Sampel
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
            <li>Banyaknya titik sampel pada ruang sampel pelemparan 6 uang logam adalah...</li>
                    <input type="radio" name="soal1" value="0"/>
                    A. \(32 \)
                <br />
                    <input type="radio" name="soal1" value="0"/>
                    B. \(36 \)
                <br />
                    <input type="radio" name="soal1" value="0"/>
                    C. \(46 \)
                <br>
                    <input type="radio" name="soal1" value="10"/>
                    D. \(64 \)
                <br />
                    <input type="radio" name="soal1" value="0"/>
                    E. \(128 \)
                <br>
                <hr />
            <li>Banyaknya titik sampel dari ruang sampel pelemparan 3 uang logam dan 2 dadu adalah . . . </li>
                    <input type="radio" name="soal2" value="0"/>
                    A. \(128 \)
                <br />
                    <input type="radio" name="soal2" value="0"/>
                    B. \(144 \)
                <br />
                    <input type="radio" name="soal2" value="10"/>
                    C. \(288 \)
                <br>
                    <input type="radio" name="soal2" value="0"/>
                    D. \(306 \)
                <br />
                    <input type="radio" name="soal2" value="0"/>
                    E. \(360 \)
                <br>
                <hr />
            <li>Banyak titik sampel dari ruang sampel 2 koin dan 1 kartu bridge adalah . . .</li>
                    <input type="radio" name="soal3" value="10"/>
                    A. \(208 \)
                <br />
                    <input type="radio" name="soal3" value="0"/>
                    B. \(104 \)
                <br />
                    <input type="radio" name="soal3" value="0"/>
                    C. \(64 \)
                <br>
                    <input type="radio" name="soal3" value="0"/>
                    D. \(52 \)
                <br />
                    <input type="radio" name="soal3" value="0"/>
                    E. \(0 \)
                <br>
                <hr />
            <li>Dari kota A menuju kota B, terdapat 4 rute yang berbeda. Sedangkan dari kota B ke kota C, ada 2 rute jalan yang berbeda. Seseorang akan melakukan perjalanan dari A menuju C melalui B, dan kembali lagi ke A melalui B. Ada berapa rute berbeda yang dapat dilalui orang itu?</li>
                    <input type="radio" name="soal4" value="0"/>
                    A. \(128 \)
                <br />
                    <input type="radio" name="soal4" value="10"/>
                    B. \(64 \)
                <br />
                    <input type="radio" name="soal4" value="0"/>
                    C. \(56 \)
                <br>
                    <input type="radio" name="soal4" value="0"/>
                    D. \(32 \)
                <br />
                    <input type="radio" name="soal4" value="0"/>
                    E. \(24 \)
                <br>
                <hr />
            <li>Dari kota P menuju kota Q, ada 3 rute yang dapat dilewati. Dari kota Q ke kota R ada 5 rute yang dapat dilewati. Seseorang melakukan perjalanan dari kota P ke kota R melalui Q, dan kembali lagi menuju P juga melalui Q. Jika rute yang telah dilalui tidak boleh dilalui lagi, ada berapa rute berbeda yang dapat dilalui orang itu?</li>
                    <input type="radio" name="soal5" value="0"/>
                    A. \(20 \)
                <br />
                    <input type="radio" name="soal5" value="0"/>
                    B. \(40 \)
                <br />
                    <input type="radio" name="soal5" value="0"/>
                    C. \(80 \)
                <br>
                    <input type="radio" name="soal5" value="10"/>
                    D. \(120 \)
                <br />
                    <input type="radio" name="soal5" value="0"/>
                    E. \(160 \)
                <br>
                <hr />
            <li>Suatu gedung mempunyai 6 pintu. Seseorang yang masuk melalui pintu tertentu, tidak boleh keluar melalui pintu itu lagi. Jika seseorang masuk dan keluar gedung itu, ada berapa cara berbeda orang itu untuk masuk dan keluar gedung tersebut?</li>
                    <input type="radio" name="soal6" value="10"/>
                    A. \(30 \)
                <br />
                    <input type="radio" name="soal6" value="0"/>
                    B. \(25 \)
                <br />
                    <input type="radio" name="soal6" value="0"/>
                    C. \(20 \)
                <br>
                    <input type="radio" name="soal6" value="0"/>
                    D. \(15 \)
                <br />
                    <input type="radio" name="soal6" value="0"/>
                    E. \(10 \)
                <br>
                <hr />
            <li>Suatu pertemuan diikuti oleh 5 orang. Di awal pertemuan, mereka semua berjabat tangan satu dengan lainnya. Ada berapa cara mereka saling berjabat tangan?</li>
                    <input type="radio" name="soal7" value="0"/>
                    A. \(8 \)
                <br />
                    <input type="radio" name="soal7" value="0"/>
                    B. \(9 \)
                <br />
                    <input type="radio" name="soal7" value="10"/>
                    C. \(10 \)
                <br>
                    <input type="radio" name="soal7" value="0"/>
                    D. \(11 \)
                <br />
                    <input type="radio" name="soal7" value="0"/>
                    E. \(12 \)
                <br>
                <hr />
            <li>Terdapat 5 pemain putra dan 4 pemain putri yang semuanya dapat dipasangkan untuk bermain bulutangkis dalam satu tim. Jika akan dibuat satu tim campuran, maka banyak cara yang mungkin untuk melakukan pemilihan adalah ... .</li>
                    <input type="radio" name="soal8" value="0"/>
                    A. \(20 \)
                <br />
                    <input type="radio" name="soal8" value="0"/>
                    B. \(18 \)
                <br />
                    <input type="radio" name="soal8" value="0"/>
                    C. \(16 \)
                <br>
                    <input type="radio" name="soal8" value="0"/>
                    D. \(14 \)
                <br />
                    <input type="radio" name="soal8" value="0"/>
                    E. \(12 \)
                <br>
                <hr />
            <li>Seseorang memiliki 3 celana dan 4 baju. Banyak cara orang itu berpakaian adalah ...
            </li>
                    <input type="radio" name="soal9" value="0"/>
                    A. \(8 \)
                <br />
                    <input type="radio" name="soal9" value="0"/>
                    B. \(9 \)
                <br />
                    <input type="radio" name="soal9" value="0"/>
                    C. \(10 \)
                <br>
                    <input type="radio" name="soal9" value="0"/>
                    D. \(11 \)
                <br />
                    <input type="radio" name="soal9" value="10"/>
                    E. \(12 \)
                <br>
                <hr />
            <li>Dimas akan melakukan sebuah percobaan dengan mengambil sebuah bola dari kantong yang berisi 3 bola merah, 4 bola kuning dan 5 bola hijau. Banyaknya anggota ruang sampel dari percobaan di atas adalah ... .</li>
                    <input type="radio" name="soal10" value="0"/>
                    A. \(7 \)
                <br />
                    <input type="radio" name="soal10" value="10"/>
                    B. \(12 \)
                <br />
                    <input type="radio" name="soal10" value="0"/>
                    C. \(19 \)
                <br>
                    <input type="radio" name="soal10" value="0"/>
                    D. \(35 \)
                <br />
                    <input type="radio" name="soal10" value="0"/>
                    E. \(60 \)
                <br>
                <hr />

            </ol>

{{-- COPY DARI SINI SETIAP SOAL --}}
{{-- TOMBOL KIRIM --}}
<input type="hidden" id="materi" name="materi" value="ruang_sampel">

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
    <a href="/create_ruangsampel" id="kirimsaja" class="btn btn-warning btn-bukti d-none" >SIMPAN JAWABAN</a>
</div>
</form>
{{-- COPY SAMPAI SINI --}}

<div id="disqus_thread"></div>

</div>
</div>
</div>
</section>
@endsection

