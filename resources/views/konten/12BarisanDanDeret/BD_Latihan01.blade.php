@extends('konten.12BarisanDanDeret.12.template')
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
            BArisan dan Deret - Latihan 01
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
             <ol type="1" class="mt-2">
                @include('konten.00semuamateri.identitas')
                <!--=======================  soal1 ===================================-->
            <li>Suku ketiga suatu deret aritmetika adalah 11. Jumlah suku keenam hingga suku ke-sembilan adalah 134. Suku pertama dan beda deret itu berturut-turut adalah...</li>
            <input type="radio" name="soal1" value="A"/>
            A. 1 dan 3
        <br />
            <input type="radio" name="soal1" value="B"/>
            B. 2 dan 4
        <br />
            <input type="radio" name="soal1" value="C"/>
            C. 1 dan 4
        <br>
            <input type="radio" name="soal1" value="D"/>
            D. 2 dan 5
        <br />
            <input type="radio" name="soal1" value="E"/>
            E. 1 dan 5
        <br>
        <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal1" aria-expanded="false" aria-controls="collapsesoal1" disabled>
        Alternatif Penyelesaian:
        </button>
        <div class="collapse" id="collapsesoal1">
        <div class="card card-body overflow-auto">
            <p></p>
        <b class="text-end text-danger fw-bold"> <h3>JAWABAN : </h3></b>
        </div>
        </div>
        <hr />

<!--=======================  soal2 ===================================-->
    <li>Diketahui \(2x, 4x + 1\), dan \(14\) merupakan tiga suku pertama suatu barisan aritmetika. Suku kesepuluh barisan itu adalah....</li>
            <input type="radio" name="soal2" value="A"/>
            A. \(45 \)
        <br />
            <input type="radio" name="soal2" value="B"/>
            B. \(47 \)
        <br />
            <input type="radio" name="soal2" value="C"/>
            C. \(49 \)
        <br>
            <input type="radio" name="soal2" value="D"/>
            D. \(53 \)
        <br />
            <input type="radio" name="soal2" value="E"/>
            E. \(56 \)
        <br>
        <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal2" aria-expanded="false" aria-controls="collapsesoal2" disabled>
        Alternatif Penyelesaian:
        </button>
        <div class="collapse" id="collapsesoal2">
        <div class="card card-body overflow-auto">
            <p></p>
        <b class="text-end text-danger fw-bold"> <h3>JAWABAN : </h3></b>
        </div>
        </div>
        <hr />

<!--=======================  soal3 ===================================-->
    <li>Diketahui \((x - 1), (x + 3)\), dan \((3x - 1)\) merupakan tiga suku pertama suatu barisan aritmetika. Nilai \(x\) adalah....</li>
            <input type="radio" name="soal3" value="A"/>
            A. \(4 \)
        <br />
            <input type="radio" name="soal3" value="B"/>
            B. \(6 \)
        <br />
            <input type="radio" name="soal3" value="C"/>
            C. \(8 \)
        <br>
            <input type="radio" name="soal3" value="D"/>
            D. \(10 \)
        <br />
            <input type="radio" name="soal3" value="E"/>
            E. \(12 \)
        <br>
        <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal3" aria-expanded="false" aria-controls="collapsesoal3" disabled>
        Alternatif Penyelesaian:
        </button>
        <div class="collapse" id="collapsesoal3">
        <div class="card card-body overflow-auto">
            <p></p>
        <b class="text-end text-danger fw-bold"> <h3>JAWABAN : </h3></b>
        </div>
        </div>
        <hr />

<!--=======================  soal4 ===================================-->
    <li>Jumlah \(n\) suku pertama deret aritmetika dinyatakan dengan \(S_n = n^2 + 2n\). Beda deret itu adalah...</li>
            <input type="radio" name="soal4" value="A"/>
            A. \(-3 \)
        <br />
            <input type="radio" name="soal4" value="B"/>
            B. \(-2 \)
        <br />
            <input type="radio" name="soal4" value="C"/>
            C. \(1 \)
        <br>
            <input type="radio" name="soal4" value="D"/>
            D. \(2 \)
        <br />
            <input type="radio" name="soal4" value="E"/>
            E. \(3 \)
        <br>
        <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal4" aria-expanded="false" aria-controls="collapsesoal4" disabled>
        Alternatif Penyelesaian:
        </button>
        <div class="collapse" id="collapsesoal4">
        <div class="card card-body overflow-auto">
            <p></p>
        <b class="text-end text-danger fw-bold"> <h3>JAWABAN : </h3></b>
        </div>
        </div>
        <hr />

<!--=======================  soal5 ===================================-->
    <li>Jumlah \(n\) suku pertama suatu deret aritmetika ditentukan oleh \(S_n = n^2 - 19n\). Suku ke-\(n\) barisan itu adalah...</li>
            <input type="radio" name="soal5" value="A"/>
            A. \(5n+20 \)
        <br />
            <input type="radio" name="soal5" value="B"/>
            B. \(5n-20 \)
        <br />
            <input type="radio" name="soal5" value="C"/>
            C. \(3n-10 \)
        <br>
            <input type="radio" name="soal5" value="D"/>
            D. \(2n+20 \)
        <br />
            <input type="radio" name="soal5" value="E"/>
            E. \(2n-20 \)
        <br>
        <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal5" aria-expanded="false" aria-controls="collapsesoal5" disabled>
        Alternatif Penyelesaian:
        </button>
        <div class="collapse" id="collapsesoal5">
        <div class="card card-body overflow-auto">
            <p></p>
        <b class="text-end text-danger fw-bold"> <h3>JAWABAN : </h3></b>
        </div>
        </div>
        <hr />

<!--=======================  soal6 ===================================-->
    <li>Jumlah \(n\) suku pertama suatu deret aritmetika ditentukan oleh \(S_n = n^2 + 5n\). Suku ketiga deret itu adalah ....</li>
            <input type="radio" name="soal6" value="A"/>
            A. \(8 \)
        <br />
            <input type="radio" name="soal6" value="B"/>
            B. \(9 \)
        <br />
            <input type="radio" name="soal6" value="C"/>
            C. \(10 \)
        <br>
            <input type="radio" name="soal6" value="D"/>
            D. \(11 \)
        <br />
            <input type="radio" name="soal6" value="E"/>
            E. \(12 \)
        <br>
        <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal6" aria-expanded="false" aria-controls="collapsesoal6" disabled>
        Alternatif Penyelesaian:
        </button>
        <div class="collapse" id="collapsesoal6">
        <div class="card card-body overflow-auto">
            <p></p>
        <b class="text-end text-danger fw-bold"> <h3>JAWABAN : </h3></b>
        </div>
        </div>
        <hr />

<!--=======================  soal7 ===================================-->
    <li>Diketahui jumlah n suku pertama suatu deret aritmetika ditentukan oleh \(S_n = 2n^2 +3n\). Nilai dari \(U_2+ U_4 + U_6+ \cdots + U_{2n} = ....\) </li>
            <input type="radio" name="soal7" value="A"/>
            A. \(4n^2 + n \)
        <br />
            <input type="radio" name="soal7" value="B"/>
            B. \(4n^2 + 5n \)
        <br />
            <input type="radio" name="soal7" value="C"/>
            C. \(5n^2 + 4n \)
        <br>
            <input type="radio" name="soal7" value="D"/>
            D. \( 8n^2 + 10n\)
        <br />
            <input type="radio" name="soal7" value="E"/>
            E. \(16n^2 + 10n \)
        <br>
        <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal7" aria-expanded="false" aria-controls="collapsesoal7" disabled>
        Alternatif Penyelesaian:
        </button>
        <div class="collapse" id="collapsesoal7">
        <div class="card card-body overflow-auto">
            <p></p>
        <b class="text-end text-danger fw-bold"> <h3>JAWABAN : </h3></b>
        </div>
        </div>
        <hr />

<!--=======================  soal8 ===================================-->
    <li>Suatu deret aritmetika mempunyai 25 suku. Suku kelima adalah 4 dan suku terakhir 14. Jumlah semua suku deret itu adalah ....</li>
            <input type="radio" name="soal8" value="A"/>
            A. \(190 \)
        <br />
            <input type="radio" name="soal8" value="B"/>
            B. \(200 \)
        <br />
            <input type="radio" name="soal8" value="C"/>
            C. \(215 \)
        <br>
            <input type="radio" name="soal8" value="D"/>
            D. \(225 \)
        <br />
            <input type="radio" name="soal8" value="E"/>
            E. \(240 \)
        <br>
        <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal8" aria-expanded="false" aria-controls="collapsesoal8" disabled>
        Alternatif Penyelesaian:
        </button>
        <div class="collapse" id="collapsesoal8">
        <div class="card card-body overflow-auto">
            <p></p>
        <b class="text-end text-danger fw-bold"> <h3>JAWABAN : </h3></b>
        </div>
        </div>
        <hr />

<!--=======================  soal9 ===================================-->
    <li>Jumlah 12 suku pertama suatu deret aritmetika adalah 168. Jika beda adalah 2 suku pertama deret itu adalah ....</li>
            <input type="radio" name="soal9" value="A"/>
            A. \(1 \)
        <br />
            <input type="radio" name="soal9" value="B"/>
            B. \(2 \)
        <br />
            <input type="radio" name="soal9" value="C"/>
            C. \(3 \)
        <br>
            <input type="radio" name="soal9" value="D"/>
            D. \(5 \)
        <br />
            <input type="radio" name="soal9" value="E"/>
            E. \(6 \)
        <br>
        <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal9" aria-expanded="false" aria-controls="collapsesoal9" disabled>
        Alternatif Penyelesaian:
        </button>
        <div class="collapse" id="collapsesoal9">
        <div class="card card-body overflow-auto">
            <p></p>
        <b class="text-end text-danger fw-bold"> <h3>JAWABAN : </h3></b>
        </div>
        </div>
        <hr />

<!--=======================  soal10 ===================================-->
    <li>Dalam suatu deret aritmetika, diketahui suku ketiga adalah 9, dan jumlah suku kelima dan suku ketujuh adalah 36. Suku kesepuluh deret itu adalah....</li>
            <input type="radio" name="soal10" value="A"/>
            A. \(30 \)
        <br />
            <input type="radio" name="soal10" value="B"/>
            B. \(32 \)
        <br />
            <input type="radio" name="soal10" value="C"/>
            C. \(36 \)
        <br>
            <input type="radio" name="soal10" value="D"/>
            D. \(40 \)
        <br />
            <input type="radio" name="soal10" value="E"/>
            E. \(42 \)
        <br>
        <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal10" aria-expanded="false" aria-controls="collapsesoal10" disabled>
        Alternatif Penyelesaian:
        </button>
        <div class="collapse" id="collapsesoal10">
        <div class="card card-body overflow-auto">
            <p></p>
        <b class="text-end text-danger fw-bold"> <h3>JAWABAN : </h3></b>
        </div>
        </div>
        <hr />

<!--=======================  soal11 ===================================-->
    <li>Suku pertama suatu deret aritmetika adalah 5 dan suku kesepuluh adalah dua kali suku keempat. Jumlah enam suku pertama deret itu adalah...</li>
            <input type="radio" name="soal11" value="A"/>
            A. \(55 \)
        <br />
            <input type="radio" name="soal11" value="B"/>
            B. \(58 \)
        <br />
            <input type="radio" name="soal11" value="C"/>
            C. \(61 \)
        <br>
            <input type="radio" name="soal11" value="D"/>
            D. \(64 \)
        <br />
            <input type="radio" name="soal11" value="E"/>
            E. \(67 \)
        <br>
        <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal11" aria-expanded="false" aria-controls="collapsesoal11" disabled>
        Alternatif Penyelesaian:
        </button>
        <div class="collapse" id="collapsesoal11">
        <div class="card card-body overflow-auto">
            <p></p>
        <b class="text-end text-danger fw-bold"> <h3>JAWABAN : </h3></b>
        </div>
        </div>
        <hr />

<!--=======================  soal12 ===================================-->
    <li>Jumlah 20 suku pertama suatu deret artmetika adalah 500 Jika suku pertama adalah 5, suku terakhir deret itu adalah...</li>
            <input type="radio" name="soal12" value="A"/>
            A. \(35 \)
        <br />
            <input type="radio" name="soal12" value="B"/>
            B. \(39 \)
        <br />
            <input type="radio" name="soal12" value="C"/>
            C. \(45 \)
        <br>
            <input type="radio" name="soal12" value="D"/>
            D. \(48 \)
        <br />
            <input type="radio" name="soal12" value="E"/>
            E. \(52 \)
        <br>
        <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal12" aria-expanded="false" aria-controls="collapsesoal12" disabled>
        Alternatif Penyelesaian:
        </button>
        <div class="collapse" id="collapsesoal12">
        <div class="card card-body overflow-auto">
            <p></p>
        <b class="text-end text-danger fw-bold"> <h3>JAWABAN : </h3></b>
        </div>
        </div>
        <hr />

<!--=======================  soal13 ===================================-->
    <li>Dalam suatu barisan aritmetika, jumlah suku keempat dan keenam adalah 28. Jika suku kedua barisan itu adalah 5, suku kesembilan. adalah...</li>
            <input type="radio" name="soal13" value="A"/>
            A. \(19 \)
        <br />
            <input type="radio" name="soal13" value="B"/>
            B. \( 21\)
        <br />
            <input type="radio" name="soal13" value="C"/>
            C. \( 24\)
        <br>
            <input type="radio" name="soal13" value="D"/>
            D. \(26 \)
        <br />
            <input type="radio" name="soal13" value="E"/>
            E. \(28 \)
        <br>
        <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal13" aria-expanded="false" aria-controls="collapsesoal13" disabled>
        Alternatif Penyelesaian:
        </button>
        <div class="collapse" id="collapsesoal13">
        <div class="card card-body overflow-auto">
            <p></p>
        <b class="text-end text-danger fw-bold"> <h3>JAWABAN : </h3></b>
        </div>
        </div>
        <hr />

<!--=======================  soal14 ===================================-->
    <li>Jumlah semua bilangan ganjil antara 300 dan 750 yang <b><i>bukan</i></b> kelipatan 7 adalah...</li>
            <input type="radio" name="soal14" value="A"/>
            A. \(84.000 \)
        <br />
            <input type="radio" name="soal14" value="B"/>
            B. \(84.215 \)
        <br />
            <input type="radio" name="soal14" value="C"/>
            C. \(84.250 \)
        <br>
            <input type="radio" name="soal14" value="D"/>
            D. \(84.375 \)
        <br />
            <input type="radio" name="soal14" value="E"/>
            E. \(84.500 \)
        <br>
        <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal14" aria-expanded="false" aria-controls="collapsesoal14" disabled>
        Alternatif Penyelesaian:
        </button>
        <div class="collapse" id="collapsesoal14">
        <div class="card card-body overflow-auto">
            <p></p>
        <b class="text-end text-danger fw-bold"> <h3>JAWABAN : </h3></b>
        </div>
        </div>
        <hr />

<!--=======================  soal15 ===================================-->
    <li>Jumlah semua bilangan asli dari 10 sampai 99 yang habis dibagi 3 tetapi <i>tidak</i> habis dibagi 4 adalah...</li>
            <input type="radio" name="soal15" value="A"/>
            A. \(477 \)
        <br />
            <input type="radio" name="soal15" value="B"/>
            B. \(585 \)
        <br />
            <input type="radio" name="soal15" value="C"/>
            C. \(1.179 \)
        <br>
            <input type="radio" name="soal15" value="D"/>
            D. \(1.233 \)
        <br />
            <input type="radio" name="soal15" value="E"/>
            E. \(1.426 \)
        <br>
        <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal15" aria-expanded="false" aria-controls="collapsesoal15" disabled>
        Alternatif Penyelesaian:
        </button>
        <div class="collapse" id="collapsesoal15">
        <div class="card card-body overflow-auto">
            <p></p>
        <b class="text-end text-danger fw-bold"> <h3>JAWABAN : </h3></b>
        </div>
        </div>
        <hr />
<!--=======================  soal16 ===================================-->
    <li>Pada minggu pertama, sebatang pohon mempunyai tiga dahan. Pada minggu kedua setiap dahan itu bercabang menjadi dua dahan baru dan proses ini berulang untuk minggu-minggu berikutnya seperti ditunjukkan pada gambar berikut <br>
    <img src="/gambar/UH-Barisan-soal-no-16.png" alt=""> <br>
    Banyak dahan lebih dari 120 batang terjadi pada minggu ke- ....
    </li>
            <input type="radio" name="soal16" value="A"/>
            A. \( 4\)
        <br />
            <input type="radio" name="soal16" value="B"/>
            B. \(5 \)
        <br />
            <input type="radio" name="soal16" value="C"/>
            C. \(6 \)
        <br>
            <input type="radio" name="soal16" value="D"/>
            D. \( 7\)
        <br />
            <input type="radio" name="soal16" value="E"/>
            E. \( 8\)
        <br>
        <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal16" aria-expanded="false" aria-controls="collapsesoal16" disabled>
        Alternatif Penyelesaian:
        </button>
        <div class="collapse" id="collapsesoal16">
        <div class="card card-body overflow-auto">
            <p></p>
        <b class="text-end text-danger fw-bold"> <h3>JAWABAN : </h3></b>
        </div>
        </div>
        <hr />
<!--=======================  soal17 ===================================-->
    <li>Diketahui suku pertama dan suku kesembilan suatu barisan geometri berturut-turut adalah 3 dan 768 Suku katujuh barisan itu adalah...</li>
            <input type="radio" name="soal17" value="A"/>
            A. \(36 \)
        <br />
            <input type="radio" name="soal17" value="B"/>
            B. \(96 \)
        <br />
            <input type="radio" name="soal17" value="C"/>
            C. \(192 \)
        <br>
            <input type="radio" name="soal17" value="D"/>
            D. \(256 \)
        <br />
            <input type="radio" name="soal17" value="E"/>
            E. \(384 \)
        <br>
        <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal17" aria-expanded="false" aria-controls="collapsesoal17" disabled>
        Alternatif Penyelesaian:
        </button>
        <div class="collapse" id="collapsesoal17">
        <div class="card card-body overflow-auto">
            <p></p>
        <b class="text-end text-danger fw-bold"> <h3>JAWABAN : </h3></b>
        </div>
        </div>
        <hr />
<!--=======================  soal18 ===================================-->
    <li>Jumlah 3 suku pertama suatu deret geometri adalah 21 dan hasil kali 3 suku pertama deret itu adalah 64. Nilai suku ketiga dan suku pertama deret itu berturut-turut adalah...</li>
            <input type="radio" name="soal18" value="A"/>
            A. \( -4 \) dan \(8 \)
        <br />
            <input type="radio" name="soal18" value="B"/>
            B. \(-1 \) dan \(-15 \)
        <br />
            <input type="radio" name="soal18" value="C"/>
            C. \(-1 \) dan \(16 \)
        <br>
            <input type="radio" name="soal18" value="D"/>
            D. \(1 \) dan \(16 \)
        <br />
            <input type="radio" name="soal18" value="E"/>
            E. \(2 \) dan \(8 \)
        <br>
        <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal18" aria-expanded="false" aria-controls="collapsesoal18" disabled>
        Alternatif Penyelesaian:
        </button>
        <div class="collapse" id="collapsesoal18">
        <div class="card card-body overflow-auto">
            <p></p>
        <b class="text-end text-danger fw-bold"> <h3>JAWABAN : </h3></b>
        </div>
        </div>
        <hr />
<!--=======================  soal19 ===================================-->
    <li>Suku pertama dan suku ketujuh suatu barisan geometri berturut-turut \(\displaystyle \frac{4}{3^7} \) dan \(36\). Suku kelima dan barisan itu adalah...</li>
            <input type="radio" name="soal19" value="A"/>
            A. \(\displaystyle \frac{3}{8} \)
        <br />
            <input type="radio" name="soal19" value="B"/>
            B. \(\displaystyle \frac{4}{9} \)
        <br />
            <input type="radio" name="soal19" value="C"/>
            C. \(\displaystyle \frac{4}{7} \)
        <br>
            <input type="radio" name="soal19" value="D"/>
            D. \(\displaystyle \frac{8}{9} \)
        <br />
            <input type="radio" name="soal19" value="E"/>
            E. \(\displaystyle \frac{4}{3} \)
        <br>
        <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal19" aria-expanded="false" aria-controls="collapsesoal19" disabled>
        Alternatif Penyelesaian:
        </button>
        <div class="collapse" id="collapsesoal19">
        <div class="card card-body overflow-auto">
            <p></p>
        <b class="text-end text-danger fw-bold"> <h3>JAWABAN : </h3></b>
        </div>
        </div>
        <hr />
<!--=======================  soal20 ===================================-->
    <li>Suku kedua dan suku keempat suatu deret geometri tak hingga berturut-turut \(1\) dan \(\displaystyle \frac{1}{9}\). Jumlah semua suku deret itu adalah...</li>
            <input type="radio" name="soal20" value="A"/>
            A. \( \displaystyle \frac{1}{3}\)
        <br />
            <input type="radio" name="soal20" value="B"/>
            B. \(2 \)
        <br />
            <input type="radio" name="soal20" value="C"/>
            C. \(3 \)
        <br>
            <input type="radio" name="soal20" value="D"/>
            D. \(4 \)
        <br />
            <input type="radio" name="soal20" value="E"/>
            E. \( \displaystyle 4\frac{1}{2}\)
        <br>
        <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal20" aria-expanded="false" aria-controls="collapsesoal20" disabled>
        Alternatif Penyelesaian:
        </button>
        <div class="collapse" id="collapsesoal20">
        <div class="card card-body overflow-auto">
            <p></p>
        <b class="text-end text-danger fw-bold"> <h3>JAWABAN : </h3></b>
        </div>
        </div>
        <hr />
<!--=======================  soal21 ===================================-->
    <li>Suku pertama suatu deret geometri adalah 8 kali rasionya. Jika jumlah tak hingga deret itu adalah 8, suku terkecil yang kurang dari \(\displaystyle \frac{1}{10} \) adalah...</li>
            <input type="radio" name="soal21" value="A"/>
            A. \(7 \)
        <br />
            <input type="radio" name="soal21" value="B"/>
            B. \(8 \)
        <br />
            <input type="radio" name="soal21" value="C"/>
            C. \( 9\)
        <br>
            <input type="radio" name="soal21" value="D"/>
            D. \(10 \)
        <br />
            <input type="radio" name="soal21" value="E"/>
            E. \(11 \)
        <br>
        <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal21" aria-expanded="false" aria-controls="collapsesoal21" disabled>
        Alternatif Penyelesaian:
        </button>
        <div class="collapse" id="collapsesoal21">
        <div class="card card-body overflow-auto">
            <p></p>
        <b class="text-end text-danger fw-bold"> <h3>JAWABAN : </h3></b>
        </div>
        </div>
        <hr />
<!--=======================  soal22 ===================================-->
    <li>Diketahui \((2x-5), (x-4)\), dan \((-3x+ 10)\) merupakan tiga suku pertama barisan geometn Nilai \(x\) adalah...</li>
            <input type="radio" name="soal22" value="A"/>
            A. \( 3\)
        <br />
            <input type="radio" name="soal22" value="B"/>
            B. \(7\)
        <br />
            <input type="radio" name="soal22" value="C"/>
            C. \(9 \)
        <br>
            <input type="radio" name="soal22" value="D"/>
            D. \(10 \)
        <br />
            <input type="radio" name="soal22" value="E"/>
            E. \( 13\)
        <br>
        <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal22" aria-expanded="false" aria-controls="collapsesoal22" disabled>
        Alternatif Penyelesaian:
        </button>
        <div class="collapse" id="collapsesoal22">
        <div class="card card-body overflow-auto">
            <p></p>
        <b class="text-end text-danger fw-bold"> <h3>JAWABAN : </h3></b>
        </div>
        </div>
        <hr />
<!--=======================  soal23 ===================================-->
    <li>Diketahui \(x+3, x+8,\) dan \(x + 18\) masing-masing adalah suku ketiga, keempat, dan kelima suatu deret geometri. Jumlah suku keenam hingga suku kesembilan adalah....</li>
            <input type="radio" name="soal23" value="A"/>
            A. \(525 \)
        <br />
            <input type="radio" name="soal23" value="B"/>
            B. \(550 \)
        <br />
            <input type="radio" name="soal23" value="C"/>
            C. \(575 \)
        <br>
            <input type="radio" name="soal23" value="D"/>
            D. \(600 \)
        <br />
            <input type="radio" name="soal23" value="E"/>
            E. \(625 \)
        <br>
        <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal23" aria-expanded="false" aria-controls="collapsesoal23" disabled>
        Alternatif Penyelesaian:
        </button>
        <div class="collapse" id="collapsesoal23">
        <div class="card card-body overflow-auto">
            <p></p>
        <b class="text-end text-danger fw-bold"> <h3>JAWABAN : </h3></b>
        </div>
        </div>
        <hr />
<!--=======================  soal24 ===================================-->
    <li>Pada suatu deret geometri diketahui \(S_n = 150, S_{n+1}= 155\), dan \(\displaystyle S_{n+2}=157\frac{1}{2}\) Saku pertama deret geometri itu adalah...</li>
            <input type="radio" name="soal24" value="A"/>
            A. \(70 \)
        <br />
            <input type="radio" name="soal24" value="B"/>
            B. \(74 \)
        <br />
            <input type="radio" name="soal24" value="C"/>
            C. \(80 \)
        <br>
            <input type="radio" name="soal24" value="D"/>
            D. \(82 \)
        <br />
            <input type="radio" name="soal24" value="E"/>
            E. \(90 \)
        <br>
        <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal24" aria-expanded="false" aria-controls="collapsesoal24" disabled>
        Alternatif Penyelesaian:
        </button>
        <div class="collapse" id="collapsesoal24">
        <div class="card card-body overflow-auto">
            <p></p>
        <b class="text-end text-danger fw-bold"> <h3>JAWABAN : </h3></b>
        </div>
        </div>
        <hr />
<!--=======================  soal25 ===================================-->
    <li>Sebuah bola dijatuhkan dari ketinggian 200 cm dari permukaan lantai. Tiap kali memantul naik, tingginya \(\displaystyle \frac{4}{5} \) kali dan tinggi sebelumnya, seperti ditunjukkan pada gambar berikut
        <br>
        <img src="/gambar/UH-Barisan-soal-no-25.jpg" alt="gambar">
        <br>
        Jumlah jarak yang dilalui bola itu sebelum berhenti adalah . . .cm
    </li>
            <input type="radio" name="soal25" value="A"/>
            A. \( 700\)
        <br />
            <input type="radio" name="soal25" value="B"/>
            B. \( 900\)
        <br />
            <input type="radio" name="soal25" value="C"/>
            C. \(1200 \)
        <br>
            <input type="radio" name="soal25" value="D"/>
            D. \( 1500\)
        <br />
            <input type="radio" name="soal25" value="E"/>
            E. \(1800 \)
        <br>
        <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal25" aria-expanded="false" aria-controls="collapsesoal25" disabled>
        Alternatif Penyelesaian:
        </button>
        <div class="collapse" id="collapsesoal25">
        <div class="card card-body overflow-auto">
            <p></p>
        <b class="text-end text-danger fw-bold"> <h3>JAWABAN : </h3></b>
        </div>
        </div>
        <hr />
<!--=======================  soal26 ===================================-->
    <li>Jumlah \(n\) suku pertama suatu deret geometri ditentukan oleh \(S_n = 2^{n+1} +2^n -3\). Rasio deret itu adalah...</li>
            <input type="radio" name="soal26" value="A"/>
            A. \( \displaystyle \frac{1}{3}\)
        <br />
            <input type="radio" name="soal26" value="B"/>
            B. \(\displaystyle \frac{1}{2} \)
        <br />
            <input type="radio" name="soal26" value="C"/>
            C. \(2 \)
        <br>
            <input type="radio" name="soal26" value="D"/>
            D. \(3 \)
        <br />
            <input type="radio" name="soal26" value="E"/>
            E. \( 4\)
        <br>
        <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal26" aria-expanded="false" aria-controls="collapsesoal26" disabled>
        Alternatif Penyelesaian:
        </button>
        <div class="collapse" id="collapsesoal26">
        <div class="card card-body overflow-auto">
            <p></p>
        <b class="text-end text-danger fw-bold"> <h3>JAWABAN : </h3></b>
        </div>
        </div>
        <hr />
<!--=======================  soal27 ===================================-->
    <li>Jumlah \(n\) suku suatu deret geometri ditentukan oleh \(S_n = 3^{n+1}-3\). Rasio deret itu adalah...</li>
            <input type="radio" name="soal27" value="A"/>
            A. \(-3 \)
        <br />
            <input type="radio" name="soal27" value="B"/>
            B. \(\displaystyle \frac{1}{3} \)
        <br />
            <input type="radio" name="soal27" value="C"/>
            C. \(\displaystyle \frac{1}{2} \)
        <br>
            <input type="radio" name="soal27" value="D"/>
            D. \(3 \)
        <br />
            <input type="radio" name="soal27" value="E"/>
            E. \(12 \)
        <br>
        <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal27" aria-expanded="false" aria-controls="collapsesoal27" disabled>
        Alternatif Penyelesaian:
        </button>
        <div class="collapse" id="collapsesoal27">
        <div class="card card-body overflow-auto">
            <p></p>
        <b class="text-end text-danger fw-bold"> <h3>JAWABAN : </h3></b>
        </div>
        </div>
        <hr />
<!--=======================  soal28 ===================================-->
    <li>Diketahui tiga buah bilangan membentuk barisan geometri dengan jumlah 52 Jika suku tengah ditambah 8, maka terbentuk barisan aritmetika. Selisih bilangan terkecil dan bilangan terbesar adalah....</li>
            <input type="radio" name="soal28" value="A"/>
            A. \(8 \)
        <br />
            <input type="radio" name="soal28" value="B"/>
            B. \(16 \)
        <br />
            <input type="radio" name="soal28" value="C"/>
            C. \(24 \)
        <br>
            <input type="radio" name="soal28" value="D"/>
            D. \(32 \)
        <br />
            <input type="radio" name="soal28" value="E"/>
            E. \(36 \)
        <br>
        <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal28" aria-expanded="false" aria-controls="collapsesoal28" disabled>
        Alternatif Penyelesaian:
        </button>
        <div class="collapse" id="collapsesoal28">
        <div class="card card-body overflow-auto">
            <p></p>
        <b class="text-end text-danger fw-bold"> <h3>JAWABAN : </h3></b>
        </div>
        </div>
        <hr />
<!--=======================  soal29 ===================================-->
    <li>Diketahui deret geometri \(P\) dan deret geometri \(Q\) mempunyai jumlah tak hingga yang sama. Rasio deret geometri \(Q\) adalah \(\displaystyle \frac{4}{5} \). Jika deret \(P\) adalah \(\displaystyle \frac{2}{3} + \frac{2}{9} + \frac{2}{27}+ \cdots  \), suku pertama deret \(Q\) adalah . . .</li>
            <input type="radio" name="soal29" value="A"/>
            A. \(\displaystyle \frac{1}{5} \)
        <br />
            <input type="radio" name="soal29" value="B"/>
            B. \(\displaystyle \frac{1}{3} \)
        <br />
            <input type="radio" name="soal29" value="C"/>
            C. \(\displaystyle \frac{2}{5} \)
        <br>
            <input type="radio" name="soal29" value="D"/>
            D. \(\displaystyle \frac{2}{3} \)
        <br />
            <input type="radio" name="soal29" value="E"/>
            E. \(1 \)
        <br>
        <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal29" aria-expanded="false" aria-controls="collapsesoal29" disabled>
        Alternatif Penyelesaian:
        </button>
        <div class="collapse" id="collapsesoal29">
        <div class="card card-body overflow-auto">
            <p></p>
        <b class="text-end text-danger fw-bold"> <h3>JAWABAN : </h3></b>
        </div>
        </div>
        <hr />
<!--=======================  soal30 ===================================-->
    <li>Penyusutan harga sebuah mesin setiap tahunnya \(\displaystyle 12 \frac{1}{3}\)% dari harga tahun sebelumnya. Pada tahun keberapa mesin tersebut kurang dari setengah dari harga pada saat mesin tersebut dibeli?</li>
            <input type="radio" name="soal30" value="A"/>
            A. Tahun ke-\( 4\)
        <br />
            <input type="radio" name="soal30" value="B"/>
            B. Tahun ke-\(5 \)
        <br />
            <input type="radio" name="soal30" value="C"/>
            C. Tahun ke-\( 6\)
        <br>
            <input type="radio" name="soal30" value="D"/>
            D. Tahun ke-\( 7\)
        <br />
            <input type="radio" name="soal30" value="E"/>
            E. Tahun ke-\( 8\)
        <br>
        <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal30" aria-expanded="false" aria-controls="collapsesoal30" disabled>
        Alternatif Penyelesaian:
        </button>
        <div class="collapse" id="collapsesoal30">
        <div class="card card-body overflow-auto">
            <p></p>
        <b class="text-end text-danger fw-bold"> <h3>JAWABAN : </h3></b>
        </div>
        </div>
        <hr />

            </ol>

{{-- COPY DARI SINI SETIAP SOAL --}}
{{-- TOMBOL KIRIM --}}
<input type="hidden" id="materi" name="materi" value="bd_latihan01">

@if(empty(Auth::guard('siswa')->user()->role))
<h2 class="text-red text-center">Silahkan Login Untuk mengirim jawaban, Terimakasih</h2>
@elseif(Auth::guard('siswa')->user()->role == 1)
            @if($progress == 0)
            <input type="hidden" id="nama" name="nama" value="{{Auth::guard('siswa')->user()->nama_siswa}}">
            <input type="hidden" id="kelas" name="kelas" value="{{Auth::guard('siswa')->user()->kelas}}">
            <input type="hidden" id="absen" name="absen" value="{{Auth::guard('siswa')->user()->no_absen}}">

            <div class="alert alert-success alert-dismissible fade show d-none my-alert text-center" role="alert" style="font-size: 1.5rem">
                <strong>Terima kasih, Lanjutkan dengan menyimpan Jawaban.</strong>
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
    <a href="/createbd_latihan01" id="kirimsaja" class="btn btn-warning btn-bukti d-none" >SIMPAN JAWABAN</a>
</div>
</form>
{{-- COPY SAMPAI SINI --}}

<div id="disqus_thread"></div>

</div>
</div>
</div>
</section>
@endsection

