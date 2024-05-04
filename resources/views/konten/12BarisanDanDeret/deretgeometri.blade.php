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
            Deret Geometri
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
                    <h2 class="text-center">DERET GEOMETRI</h2>
            <p>Deret geometri adalah penjumlahan berurutan dari suku-suku suatu barisan geometri.</p>
            <ol type="a">
                <li class="fw-bold">Rumus Suku ke-n Deret Geometri</li>
                <div class="shadow-lg bg-body p-2 mb-5 mt-3 rounded mx-auto " style="width: fit-content; font-size: 1.5rem;">\[U_n = ar^{n-1} \]</div>
                <b>Keterangan :</b><br> \(a= \) suku pertama <br> \(r= \) rasio
                <li class="fw-bold">Rumus Jumlah n Suku Pertama Deret Geometri</li>
                <div class="shadow-lg bg-body p-2 mb-5 mt-3 rounded mx-auto " style="width: fit-content; font-size: 1.5rem;">\[S_n = \frac{a(r^n - 1)}{r-1}\]</div>
                <b>Keterangan :</b> <br> \(S_n = \) jumlah n suku pertama deret geometri. <br> \(a = \) suku pertama <br> \(n = \) banyaknya suku <br> \(r = \) rasio
            </ol>
            <p>Pada deret geometri juga berlaku : <span style="font-size: 1.3rem;">\(U_n = S_n - S_{n-1} \)</span></p>
            <!-- ============================================================================== -->
            <div class="badge bg-danger text-wrap fs-6" style="width: 8rem"><b> CONTOH 01 </b></div>
            <div class="rounded-2 p-1" style="background-color: rgba(193, 193, 193, 0.933);">Hitunglah jumlah tujuh suku pertama pada deret geometri \(7+14+28+....! \)</div>
            <p class="rounded-2 p-1" style="background-color: #f89845;"><b>Penyelesaian :</b> <br>
            \(7+14+28+...\), deret geometri dengan suku pertama \(a=7\) dan rasio \(r=2\)
            \begin{align}
            S_n &= \frac{a(r^n - 1)}{r-1} \\
            S_7 &= \frac{7(2^7 - 1)}{2-1} \\
            &= \frac{7(128-1)}{1} \\
            &= 7(127) \\
            &= 889
            \end{align}
            Jadi, jumlah tujuh suku pertama deret geometri \(7+14+28+...\) sama dengan\(\boxed{889}\).
            </p>
            <!-- ============================================================================== -->
            <!-- ============================================================================== -->
            <div class="badge bg-danger text-wrap fs-6" style="width: 8rem"><b> CONTOH 02 </b></div>
            <div class="rounded-2 p-1" style="background-color: rgba(193, 193, 193, 0.933);">Diketahui suatu deret geometri memiliki suku kedua sama dengan 10 dan suku kelima sama dengan 80. Tentukan:
                <ol type="a">
                    <li>suku pertama dan rasio dari deret geometri tersebut</li>
                    <li>jumlah delapan suku pertama deret geometri tersebut</li>
                </ol>
            </div>
            <div class="rounded-2 p-1 mb-3" style="background-color: #f89845;"><b>Penyelesaian :</b> <br>
                <ol type="a">
                    <li>Untuk mencari nilai \(a\) atau \(r\) kita jabarkan terlebih dahulu \(U_2\) dan \(U_5\) dengan cara:
                \begin{align}
                U_2 &= 10 \\
                ar &= 10 \\
                a &= \frac{10}{r}
                \end{align}
                <p>substitusi nilai \(a\) ke:</p>
                \begin{align}
                U_5 &= 80 \\
                ar^4 &= 80 \\
                \left(\frac{10}{r}\right) \cdot r^4 &= 80 \\
                10r^3 &= 80 \\
                r^3 &= 8 \\
                r^3 &= 2^3 \\
                r &= 2
                \end{align}
                <p>nilai \(r\) telah dikethui selanjutnya cari nilai \(a\)</p>
                \begin{align}
                a &= \frac{10}{r} \\
                &= \frac{10}{2} \\
                &= 5
                \end{align}
                <p>Jadi, suku pertamanya adalah \(\boxed{5} \) dan rasionya adalah \(\boxed{2} \)</p> </li>
                <li>Jumlah delapan suku pertama adalah
                    \begin{align}
                        S_n &= \frac{a(r^n - 1)}{r-1} \\
                        S_8 &= \frac{5(2^8 -1)}{2-1} \\
                        &= \frac{5(256-1)}{2-1} \\
                        &= 5(255) \\
                        &=1.275
                    \end{align}
                    <p>Jadi, jumlah delapan suku pertama deret geometri tersebut adalah \(\boxed{1.275} \)</p>
                </li>
                \begin{align}\end{align}
                </ol>
            </div>
            <!-- ============================================================================== -->
            <!-- ============================================================================== -->
            <div class="badge bg-danger text-wrap fs-6" style="width: 8rem"><b> CONTOH 03 </b></div>
            <div class="rounded-2 p-1" style="background-color: rgba(193, 193, 193, 0.933);">Sebuah deret geometri dengan susunan \(k+1, k-1, k-5 \), maka nilai yang sesuai untuk \(k\) adalah . . .</div>
            <div class="rounded-2 p-1" style="background-color: #f89845;"><b>Penyelesaian :</b> <br>
                <p>Karena merupakan bentuk geometri maka nilai \(k\) dapat diperoleh dengan rumus rasio deret geometri</p>
            \begin{align}
            r &= \frac{U_n}{U_{n-1}} \\
            \frac{U_2}{U_1} &= \frac{U_3}{U_2} \\
            \frac{k-1}{k+1} &= \frac{k-5}{k-1} \\
            (k-1)^2 &= (k-5)(k+1) \\
            k^2 - 2k +1 &= k^2 -4k -5 \\
            2k &= -6 \\
            k &= -3
            \end{align}
            </div>
            <!-- ============================================================================== -->
                </div>
            <hr>
            <hr>

        <form name="input-form">
            <ol type="1" class="mt-2">
                 <h2>LATIHAN SOAL</h2>
                @include('konten.00semuamateri.identitas')

                <li>Jumlah 6 suku pertama deret geometri \(\displaystyle \frac{1}{2} + \frac{3}{2} +\frac{9}{2}+... \) adalah ....</li>
                    <input type="radio" name="soal1" value="A"/>
                    A. \(1.640 \)
                <br />
                    <input type="radio" name="soal1" value="B"/>
                    B. \(546,5 \)
                <br />
                    <input type="radio" name="soal1" value="C"/>
                    C. \(182 \)
                <br>
                    <input type="radio" name="soal1" value="D"/>
                    D. \(60,5 \)
                <br />
                    <input type="radio" name="soal1" value="E"/>
                    E. \(20 \)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal1" aria-expanded="false" aria-controls="collapsesoal1" disabled>
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal1">
                <div class="card card-body overflow-auto">
                    <p></p>
                <b class="text-end text-danger fw-bold"> <h3>JAWABAN : C</h3></b>
                </div>
                </div>
                <hr />

<!--=======================  soal2 ===================================-->
            <li>Jumlah semua suku pada deret geometri \(\displaystyle \frac{4}{9} + \frac{4}{3} + 4 + ...+ 324 \) adalah...</li>
                    <input type="radio" name="soal2" value="A"/>
                    A. \(145 \frac{7}{9} \)
                <br />
                    <input type="radio" name="soal2" value="B"/>
                    B. \(161 \frac{7}{9} \)
                <br />
                    <input type="radio" name="soal2" value="C"/>
                    C. \(185 \frac{7}{9} \)
                <br>
                    <input type="radio" name="soal2" value="D"/>
                    D. \(240 \frac{7}{9} \)
                <br />
                    <input type="radio" name="soal2" value="E"/>
                    E. \(485 \frac{7}{9} \)
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
            <li>Jumlah 10 suku pertama deret geometri \(2-2\sqrt{2} + 4 -4\sqrt{2} + ... \) adalah ....</li>
                    <input type="radio" name="soal3" value="A"/>
                    A. \(62(1+\sqrt{2}) \)
                <br />
                    <input type="radio" name="soal3" value="B"/>
                    B. \(62(\sqrt{2}-1) \)
                <br />
                    <input type="radio" name="soal3" value="C"/>
                    C. \(62(1-\sqrt{2}) \)
                <br>
                    <input type="radio" name="soal3" value="D"/>
                    D. \(30(1-\sqrt{2}) \)
                <br />
                    <input type="radio" name="soal3" value="E"/>
                    E. \(30(\sqrt{2}-1) \)
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
            <li>Diketahui jumlah tiga suku pertama deret geometri dengan rasio bilangan bulat adalah 52. Jika hasil kali suku pertama dan suku ketiga adalah 144, jumlah tujuh suku pertama deret geometri adalah...</li>
                    <input type="radio" name="soal4" value="A"/>
                    A. \(4.732 \)
                <br />
                    <input type="radio" name="soal4" value="B"/>
                    B. \(4.722 \)
                <br />
                    <input type="radio" name="soal4" value="C"/>
                    C. \(4.372 \)
                <br>
                    <input type="radio" name="soal4" value="D"/>
                    D. \(4.322 \)
                <br />
                    <input type="radio" name="soal4" value="E"/>
                    E. \(4.272 \)
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
            <li>Diketahui deret geometri dengan rasio positif. Jumlah suku kedua dan suku keempat adalah 13, sedangkan hasil kali suku pertama dan suku ketiga adalah 81. Jumlah empat suku pertama deret tersebut adalah...</li>
                    <input type="radio" name="soal5" value="A"/>
                    A. \( 33\)
                <br />
                    <input type="radio" name="soal5" value="B"/>
                    B. \( 32,5\)
                <br />
                    <input type="radio" name="soal5" value="C"/>
                    C. \(32 \)
                <br>
                    <input type="radio" name="soal5" value="D"/>
                    D. \(31,5 \)
                <br />
                    <input type="radio" name="soal5" value="E"/>
                    E. \(31 \)
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
            <li>Diketahui rumus suku ke-n barisan geometri adalah \(U_n = 3^n \). Jumlah n suku pertama barisan tersebut adalah...</li>
                    <input type="radio" name="soal6" value="A"/>
                    A. \(\displaystyle \frac{1}{6} (3^n - 1) \)
                <br />
                    <input type="radio" name="soal6" value="B"/>
                    B. \(\displaystyle \frac{1}{2} (3^n -1) \)
                <br />
                    <input type="radio" name="soal6" value="C"/>
                    C. \(\displaystyle \frac{3}{2} (3^n -1) \)
                <br>
                    <input type="radio" name="soal6" value="D"/>
                    D. \(3(3^n -1) \)
                <br />
                    <input type="radio" name="soal6" value="E"/>
                    E. \(6 (3^n -1) \)
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
            <li>Diketahui suatu deret geometri dengan rasio positif terdiri atas sepuluh suku. jumlah empat suku pertama 45 dan jumlah empat suku terakhir 2.880. Suku ketujuh deret tersebut adalah....</li>
                    <input type="radio" name="soal7" value="A"/>
                    A. \(64 \)
                <br />
                    <input type="radio" name="soal7" value="B"/>
                    B. \(128 \)
                <br />
                    <input type="radio" name="soal7" value="C"/>
                    C. \(192 \)
                <br>
                    <input type="radio" name="soal7" value="D"/>
                    D. \(216 \)
                <br />
                    <input type="radio" name="soal7" value="E"/>
                    E. \(292 \)
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
            <li>Diketahui deret geometri \(216+72+24+... \). Jumlah suku ke-5 sampai suku ke-7 adalah ....</li>
                    <input type="radio" name="soal8" value="A"/>
                    A. \(\displaystyle \frac{104}{81} \)
                <br />
                    <input type="radio" name="soal8" value="B"/>
                    B. \(\displaystyle \frac{104}{27} \)
                <br />
                    <input type="radio" name="soal8" value="C"/>
                    C. \(\displaystyle \frac{104}{9} \)
                <br>
                    <input type="radio" name="soal8" value="D"/>
                    D. \(\displaystyle \frac{104}{3} \)
                <br />
                    <input type="radio" name="soal8" value="E"/>
                    E. \(104 \)
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
            <li>Suatu barisan geometri memiliki suku kedua dan suku keempat berturut-turut 2 dan 8. Jika suku terakhir adalah \(-64\), jumlah semua suku barisan tersebut adalah...</li>
                    <input type="radio" name="soal9" value="A"/>
                    A. \(-171 \)
                <br />
                    <input type="radio" name="soal9" value="B"/>
                    B. \(-43 \)
                <br />
                    <input type="radio" name="soal9" value="C"/>
                    C. \(-11 \)
                <br>
                    <input type="radio" name="soal9" value="D"/>
                    D. \(21 \)
                <br />
                    <input type="radio" name="soal9" value="E"/>
                    E. \(85 \)
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
            <li>Jika jumlah \(n\) suku pertama dan suatu deret geometri yang rasionya \(r\) adalah \(S_n\). Nilai \(\displaystyle \frac{S_{8n}}{S_{2n}} \) adalah ...</li>
                    <input type="radio" name="soal10" value="A"/>
                    A. \((r^{6n} +1)(r^{2n}+1) \)
                <br />
                    <input type="radio" name="soal10" value="B"/>
                    B. \((r^{6n} +1)(r^{2n}-1)  \)
                <br />
                    <input type="radio" name="soal10" value="C"/>
                    C. \((r^{4n} +1)(r^{2n}+1)  \)
                <br>
                    <input type="radio" name="soal10" value="D"/>
                    D. \((r^{4n} +1)(r^{2n} -1)  \)
                <br />
                    <input type="radio" name="soal10" value="E"/>
                    E. \((r^{4n} -1)(r^{2n}+1)  \)
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

            </ol>

{{-- COPY DARI SINI SETIAP SOAL --}}
<input type="hidden" id="materi" name="materi" value="Deret_Geo01">
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
    <a href="/create_deret_geometri" id="kirimsaja" class="btn btn-warning btn-bukti d-none" >SIMPAN JAWABAN</a>
</div>
</form>
{{-- COPY SAMPAI SINI --}}

<div id="disqus_thread" class="mt-4"></div>

</div>
</div>
    </div>

</section>
@endsection

