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
            Deret Aritmetika
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
                <div class="col">
                    <h2 class="text-center">DERET ARITMETIKA</h2>
            <p>Dari barisan aritmetika \(3, 6, 9, 12, 15,... \) dapat dibentuk suatu deret yang merupakan penjumlahan berurutan dari suku barisan tersebut, yaitu \(3+6+9+12+15,... \)</p>
            <p>Karena suku-suku yang dijumlahkan merupakan suku-suku dari barisan aritmetika, deret yang terbentuk disebut <b>derat aritmetika</b></p>
            <p><b>Definisi</b></p>
            <div class="p-2 rounded mx-auto" style="width: fit-content; background-color: #e4c7f4;">Jika diketahui \(U_1, U_2, U_3, ..., U_n \) merupakan suku-suku dari suatu barisan aritmetika, \(U_1 + U_2 + U_3 + ... + U_n \) disebut <b>DERET ARITMETIKA</b>, dengan \(U_n = a + (n-1)b \)</div>
            <p>Jika \(S_n\) merupakan jumlah \(n\) suku pertama dari suatu deret aritmetika, rumus umum untuk \(S_n\) dapat ditentukan dengan langkah-langkah sebagai berikut. </p>
            \[S_n = U_1 + U_2 + U_3 + ... + U_n \]
            <p>maka jumlahkan</p>
            <div class="overflow-auto">
            \begin{align}
                S_n &= a + (a+b) + (a+2b) + ... + (a+(n-1)b) \\
                S_n &= U_n + (U_n - b) + (U_n - 2b) + ...+ a \\ \hline
                2S_n &= \underset{\text{penjumlahan sebanyak }n \text{ suku}}{\underbrace{(a+U_n)+(a+U_n)+(a+U_n)+...+(a+U_n)}} \\
                2S_n &= n(a+U_n) \\
                S_n &= \frac{n}{2}(a+U_n) \\
                &= \frac{1}{2} n (a+(a+(n-1)b)) \\
                &= \frac{1}{2} n (2a + (n-1)b)
            \end{align}
            </div>
            <p>Jadi, rumus umum jumlah \(n\) suku pertama deret aritmetika adalah ...</p>
            <div class="shadow-lg p-2 mb-5 mt-3 rounded mx-auto " style="width: fit-content; font-size: 1.5rem;">\[S_n = \frac{1}{2}n (2a + (n-1)b)\]</div>
            <!-- ============================================================================== -->
            <div class="badge bg-danger text-wrap fs-6" style="width: 8rem"><b> CONTOH 01 </b></div>
            <div class="rounded-2 p-1" style="background-color: rgba(193, 193, 193, 0.933);">Tentukan jumlah 30 suku pertama dari deret \(3+7+11+15+... \)</div>
            <p class="rounded-2 p-1" style="background-color: #f89845;"><b>Penyelesaian :</b> <br>
                \(3+7+11+15+... \) <br>
                Dalam hal ini: \(a=3, b=7-3=4 \) dan \(n=30\) <br>
            \(\begin{align}
            S_n &= \frac{1}{2} n (2a + (n-1)b) \\
            S_{30} &= \frac{1}{2}(30) (2(3)+(30-1)4) \\
            &= 15 (6+116) \\
            &= 15(122) \\
            &= 1830
            \end{align}\) <br>
            Jadi, jumlah 30 suku pertama dari deret tersebut adalah \(\boxed{1830} \)
            </p>
            <!-- ============================================================================== -->
            <div class="badge bg-danger text-wrap fs-6" style="width: 8rem"><b> CONTOH 02 </b></div>
            <div class="rounded-2 p-1" style="background-color: rgba(193, 193, 193, 0.933);">Seorang petani mencatat hasil panennya selama satu minggu. Hasil panen hari pertama 18 kg dan setiap hari berikutnya bertambah 4 kg dari hasil panen hari sebelumnya. Jumlah hasil panen selama satu minggu adalah . . .</div>
            <p class="rounded-2 p-1" style="background-color: #f89845;"><b>Penyelesaian :</b> <br>
                Merupakan deret aritmetika dengan \(a=18, b =4, n=7\). Sehingga <br>
            \(\begin{align}
                S_n &= \frac{1}{2} n (2a+(n-1)b) \\
                S_7 &= \frac{1}{2} \cdot 7 (2(18)+(7-1)(4)) \\
                &= \frac{7}{2} (36+24) \\
                &= \frac{7}{2} 60 \\
                &= 210
            \end{align}\) <br>
            Jadi, humlah hasil panen selama satu minggu adalah \(\boxed{210} \) kg.
            </p>
            <!-- ============================================================================== -->
                </div>
            <hr>
            <hr>



        <form name="input-form">
            <ol type="1" class="mt-2">
                 <h2>LATIHAN SOAL</h2>
                @include('konten.00semuamateri.identitas')
                <!--=======================  soal1 ===================================-->
            <li>Jumlah \(50\) suku pertama deret aritmetika \(50+48+46+... \) adalah...</li>
            <input type="radio" name="soal1" value="A"/>
            A. \(98 \)
        <br />
            <input type="radio" name="soal1" value="B"/>
            B. \(50 \)
        <br />
            <input type="radio" name="soal1" value="C"/>
            C. \(0 \)
        <br>
            <input type="radio" name="soal1" value="D"/>
            D. \(-52 \)
        <br />
            <input type="radio" name="soal1" value="E"/>
            E. \(-106 \)
        <br>
        <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal1" aria-expanded="false" aria-controls="collapsesoal1" disabled>
        Alternatif Penyelesaian:
        </button>
        <div class="collapse" id="collapsesoal1">
        <div class="card card-body overflow-auto">
            <p></p>
        <b class="text-end text-danger fw-bold"> <h3>JAWABAN : B</h3></b>
        </div>
        </div>
        <hr />

<!--=======================  soal2 ===================================-->
    <li>Diketahui rumus suku ke-n barisan aritmetika adalah \(U_n = 4n-5 \). Jumlah 12 suku pertama barisan tersebut adalah . . .</li>
            <input type="radio" name="soal2" value="A"/>
            A. \(170 \)
        <br />
            <input type="radio" name="soal2" value="B"/>
            B. \(209 \)
        <br />
            <input type="radio" name="soal2" value="C"/>
            C. \(252 \)
        <br>
            <input type="radio" name="soal2" value="D"/>
            D. \(299 \)
        <br />
            <input type="radio" name="soal2" value="E"/>
            E. \(350 \)
        <br>
        <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal2" aria-expanded="false" aria-controls="collapsesoal2" disabled>
        Alternatif Penyelesaian:
        </button>
        <div class="collapse" id="collapsesoal2">
        <div class="card card-body overflow-auto">
            <p></p>
        <b class="text-end text-danger fw-bold"> <h3>JAWABAN : C</h3></b>
        </div>
        </div>
        <hr />

<!--=======================  soal3 ===================================-->
    <li>Jumlah n suku pertama suatu deret aritmetika ditentukan oleh rumus \(S_n = 4n^2 - n \). Suku kelima deret tersebut adalah . . . </li>
            <input type="radio" name="soal3" value="A"/>
            A. \(27 \)
        <br />
            <input type="radio" name="soal3" value="B"/>
            B. \(35 \)
        <br />
            <input type="radio" name="soal3" value="C"/>
            C. \(55 \)
        <br>
            <input type="radio" name="soal3" value="D"/>
            D. \( 95\)
        <br />
            <input type="radio" name="soal3" value="E"/>
            E. \(115 \)
        <br>
        <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal3" aria-expanded="false" aria-controls="collapsesoal3" disabled>
        Alternatif Penyelesaian:
        </button>
        <div class="collapse" id="collapsesoal3">
        <div class="card card-body overflow-auto">
            <p></p>
        <b class="text-end text-danger fw-bold"> <h3>JAWABAN : B</h3></b>
        </div>
        </div>
        <hr />

<!--=======================  soal4 ===================================-->
    <li>Suku ketiga dari deret aritmetika adalah 14. Jumlah suku kedua dan suku keenam adalah 34. Jumlah sepuluh suku pertama deret tersebut adalah . . .</li>
            <input type="radio" name="soal4" value="A"/>
            A. \(203 \)
        <br />
            <input type="radio" name="soal4" value="B"/>
            B. \( 209\)
        <br />
            <input type="radio" name="soal4" value="C"/>
            C. \( 213\)
        <br>
            <input type="radio" name="soal4" value="D"/>
            D. \(215 \)
        <br />
            <input type="radio" name="soal4" value="E"/>
            E. \( 218\)
        <br>
        <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal4" aria-expanded="false" aria-controls="collapsesoal4" disabled>
        Alternatif Penyelesaian:
        </button>
        <div class="collapse" id="collapsesoal4">
        <div class="card card-body overflow-auto">
            <p></p>
        <b class="text-end text-danger fw-bold"> <h3>JAWABAN : D</h3></b>
        </div>
        </div>
        <hr />

<!--=======================  soal5 ===================================-->
    <li>Jumlah lima suku pertama deret aritmetika adalah \(-5\) dan suku keenam adalah \(-10\). Jumlah \(17\) suku pertama deret tersebut adalah...</li>
            <input type="radio" name="soal5" value="A"/>
            A. \(-470 \)
        <br />
            <input type="radio" name="soal5" value="B"/>
            B. \(-418 \)
        <br />
            <input type="radio" name="soal5" value="C"/>
            C. \(-369 \)
        <br>
            <input type="radio" name="soal5" value="D"/>
            D. \(-323 \)
        <br />
            <input type="radio" name="soal5" value="E"/>
            E. \(-280 \)
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
    <li>Diketahui deret aritmetika dengan jumlah suku ke-n, yaitu \(S_n = 3n^2 + 4n \). Rumus suku ke-n adalah...</li>
            <input type="radio" name="soal6" value="A"/>
            A. \(6n+4 \)
        <br />
            <input type="radio" name="soal6" value="B"/>
            B. \(6n+3 \)
        <br />
            <input type="radio" name="soal6" value="C"/>
            C. \(6n+1 \)
        <br>
            <input type="radio" name="soal6" value="D"/>
            D. \(6n-1 \)
        <br />
            <input type="radio" name="soal6" value="E"/>
            E. \(6n-4 \)
        <br>
        <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal6" aria-expanded="false" aria-controls="collapsesoal6" disabled>
        Alternatif Penyelesaian:
        </button>
        <div class="collapse" id="collapsesoal6">
        <div class="card card-body overflow-auto">
            <p></p>
        <b class="text-end text-danger fw-bold"> <h3>JAWABAN : C</h3></b>
        </div>
        </div>
        <hr />

<!--=======================  soal7 ===================================-->
    <li>Suatu barisan aritmetika memiliki suku kelima dan suku kesembilan berturut-turut 2 dan 18. Jika suku terakhir barisan tersebut adalah 82, maka jumlah semua suku barisan tersebut adalah...</li>
            <input type="radio" name="soal7" value="A"/>
            A. \(936 \)
        <br />
            <input type="radio" name="soal7" value="B"/>
            B. \(850 \)
        <br />
            <input type="radio" name="soal7" value="C"/>
            C. \(768 \)
        <br>
            <input type="radio" name="soal7" value="D"/>
            D. \( 690\)
        <br />
            <input type="radio" name="soal7" value="E"/>
            E. \( 616\)
        <br>
        <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal7" aria-expanded="false" aria-controls="collapsesoal7" disabled>
        Alternatif Penyelesaian:
        </button>
        <div class="collapse" id="collapsesoal7">
        <div class="card card-body overflow-auto">
            <p></p>
        <b class="text-end text-danger fw-bold"> <h3>JAWABAN : B</h3></b>
        </div>
        </div>
        <hr />

<!--=======================  soal8 ===================================-->
    <li>Jumlah suku ketiga dan suku ketujuh suatu deret aritmetika adalah 80 dan suku ke sepuluh adalah 85. Rumus jumlah n suku pertama deret tersebut adalah....</li>
            <input type="radio" name="soal8" value="A"/>
            A. \(\frac{9}{2} n^2 - \frac{1}{2}n \)
        <br />
            <input type="radio" name="soal8" value="B"/>
            B. \(\frac{9}{2} n^2 - n \)
        <br />
            <input type="radio" name="soal8" value="C"/>
            C. \(9 n^2 - \frac{1}{2}n \)
        <br>
            <input type="radio" name="soal8" value="D"/>
            D. \(9 n^2 + \frac{1}{2}n \)
        <br />
            <input type="radio" name="soal8" value="E"/>
            E. \(9n^2 + n \)
        <br>
        <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal8" aria-expanded="false" aria-controls="collapsesoal8" disabled>
        Alternatif Penyelesaian:
        </button>
        <div class="collapse" id="collapsesoal8">
        <div class="card card-body overflow-auto">
            <p></p>
        <b class="text-end text-danger fw-bold"> <h3>JAWABAN : A</h3></b>
        </div>
        </div>
        <hr />

<!--=======================  soal9 ===================================-->
    <li>Diketahui jumlah suku ke-3 dan suku ke-7 dari suatu deret aritmetika adalah 22, sedangkan hasil suku terakhir dikurangi tiga kali suku ke-2 adalah 4. Jika suku terakhir 19, jumlah semua suku barisan tersebut adalah...</li>
            <input type="radio" name="soal9" value="A"/>
            A. \(199 \)
        <br />
            <input type="radio" name="soal9" value="B"/>
            B. \(198 \)
        <br />
            <input type="radio" name="soal9" value="C"/>
            C. \(109 \)
        <br>
            <input type="radio" name="soal9" value="D"/>
            D. \(99 \)
        <br />
            <input type="radio" name="soal9" value="E"/>
            E. \(89 \)
        <br>
        <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal9" aria-expanded="false" aria-controls="collapsesoal9" disabled>
        Alternatif Penyelesaian:
        </button>
        <div class="collapse" id="collapsesoal9">
        <div class="card card-body overflow-auto">
            <p></p>
        <b class="text-end text-danger fw-bold"> <h3>JAWABAN : D</h3></b>
        </div>
        </div>
        <hr />

<!--=======================  soal10 ===================================-->
    <li>Jumlah bilangan diantara 15 dan 120 yang habis dibagi 7, tetapi tidak habis dibagi 4 adalah...</li>
            <input type="radio" name="soal10" value="A"/>
            A. \(495 \)
        <br />
            <input type="radio" name="soal10" value="B"/>
            B. \(515 \)
        <br />
            <input type="radio" name="soal10" value="C"/>
            C. \(560 \)
        <br>
            <input type="radio" name="soal10" value="D"/>
            D. \(610 \)
        <br />
            <input type="radio" name="soal10" value="E"/>
            E. \(770 \)
        <br>
        <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal10" aria-expanded="false" aria-controls="collapsesoal10" disabled>
        Alternatif Penyelesaian:
        </button>
        <div class="collapse" id="collapsesoal10">
        <div class="card card-body overflow-auto">
            <p></p>
        <b class="text-end text-danger fw-bold"> <h3>JAWABAN : E</h3></b>
        </div>
        </div>
        <hr />


            </ol>

{{-- COPY DARI SINI SETIAP SOAL --}}
<input type="hidden" id="materi" name="materi" value="Deret_Arit01">
{{-- TOMBOL KIRIM --}}

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
    <a href="/create_deret_aritmetika" id="kirimsaja" class="btn btn-warning btn-bukti d-none" >SIMPAN JAWABAN</a>
</div>
</form>
{{-- COPY SAMPAI SINI --}}

<div id="disqus_thread" class="mt-4"></div>

</div>
</div>
    </div>

</section>
@endsection

