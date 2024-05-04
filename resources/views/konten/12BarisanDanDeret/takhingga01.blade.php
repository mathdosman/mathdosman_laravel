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
            Barisan dan Deret Tak Hingga
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
                    <h2 class="text-center">BARISAN DAN DERET <br> TAK HINGGA </h2>
            <p>Jumlah \(n\) suku pertama suatu deret geometri ditentukan oleh \(\displaystyle S_n=\frac{a(1-r^n)}{1-r}\). Jika banyak suku penjumlahan deret geomtri itu bertambah terus mendekati tak hingga, deret geometri itu disebut deret geometri tak hingga. Deret geometri tak hingga dapat dituliskan sebagai berikut</p>
            <div class="overflow-auto">
                \begin{align}
                    u_1 + u_2 + u_3+ \cdots &= a + ar +ar^2 + \cdots \\
                    &\text{atau} \\
                    u_1 + u_2 + u_3 + \cdots + u_n + \cdots &= a + ar + ar^2 + \cdots + ar^{n-1} + \cdots
                \end{align}
            </div>
            <p>Jumlah dari deret geometri tak hingga dilambangkan dengan \(S\) dan diperoleh dari \(S_n\) dengan proses limit n mendekati tak hingga. Jadi, nilai \(\displaystyle S = \lim_{n \rightarrow \infty} S_n \).</p>
            <p><b>Sifat Deret Geometri Tak Hingga</b></p>
            <p>Deret geometri tak hingga \(a + ar + ar^2 + \cdots + ar^{n-1} + \cdots  \) dikatakan:</p>
            <ol type="1">
                <li>mempunyai limit jumlah atau <b><i>konvergen</i></b> jika dan hanya jika \(|r| \lt 1\) </li>
                limit jumlah itu ditentukan oleh:
                <div class="shadow-lg bg-body p-2 mb-5 mt-3 rounded mx-auto " style="width: fit-content; font-size: 1.5rem;">\[S = \frac{a}{1-r}\]</div>
                <li>tidak mempunyai limit jumlah atau <b><i>divergen</i></b> jika dan hanya jika \(|r| \gt 1 \)</li>
            </ol>
            <!-- ============================================================================== -->
            <div class="badge bg-danger text-wrap fs-6" style="width: 8rem"><b> CONTOH 01 </b></div>
            <div class="rounded-2 p-1" style="background-color: rgba(193, 193, 193, 0.933);">Hitunglah jumlah tak hingga deret geometri \(\displaystyle 90+30+10+ \frac{10}{3}+ \cdots ! \)</div>
            <div class="rounded-2 p-1 mb-3" style="background-color: #f89845;"><b>Penyelesaian :</b> <br>
                <p>suku pertama \(a=90\) dan rasio \(\displaystyle r=\frac{1}{3}\)</p>
            \(\begin{align}
            S_{\infty} &= \frac{a}{1-r} \\
            &= \frac{90}{1-\frac{1}{3}} \\
            &= \frac{90}{\frac{2}{3}} \\
            &= 90 \times \frac{3}{2} \\
            &= \boxed{135}
            \end{align}\) <br>
            </div>
            <!-- ============================================================================== -->
            <div class="badge bg-danger text-wrap fs-6" style="width: 8rem"><b> CONTOH 02 </b></div>
            <div class="rounded-2 p-1" style="background-color: rgba(193, 193, 193, 0.933);">Diketahui deret geometri dengan suku ketiga 24 dan suku keenam 3. Tentukan: <br>a. suku pertama dan rasionya <br> b. jumlah semua sukunya </div>
            <div class="rounded-2 p-1 mb-3" style="background-color: #f89845;"><b>Penyelesaian :</b> <br>
                <ol type="a">
                    <li>Diketahui : </li>
                    \(U_3 = 24 \Leftrightarrow ar^2 = 24 \Leftrightarrow \displaystyle a = \frac{24}{r^2} \) <br>
                    \(U_6 = 3 \Leftrightarrow ar^5 = 3 \) <br> substitusi \(U_3 \) dan \(U_6\)<br>
                    \begin{align}
                    ar^5 &= 3 \\
                    \frac{24}{r^2} \cdot r^5 &= 3 \\
                    24.r^3 &= 3 \\
                    r^3 &= \frac{3}{24} \\
                    r^3 &= \frac{1}{8} \\
                    r &= \frac{1}{2}
                    \end{align} <br>
                    Sehingga nilai \(a\)
                    \begin{align}
                    a &= \frac{24}{r^2} \\
                    &= \frac{24}{(\frac{1}{2})^2} \\
                    &= 24 \times 4 \\
                    &= 96
                    \end{align}
                    Jadi, suku pertama \((a)\) adalah \(\boxed{96}\) dan rasionya \((r)\) adalah \(\displaystyle \boxed{\frac{1}{2}}\)
                    <li>Deret geometri : \(96+48+24+ \cdots \)</li>
                    \begin{align}
                    S_{\infty} &= \frac{a}{1-r} \\
                    &= \frac{96}{1-\frac{1}{2}} \\
                    &= \frac{96}{\frac{1}{2}} \\
                    &= 96 \times 2 \\
                    &= 192
                    \end{align}
                    Jadi, jumlah semua sukunya adalah \(\boxed{192}\).
                </ol>
            </div>
            <!-- ============================================================================== -->
                </div>
            <hr>
            <hr>

        <form name="input-form">
            <ol type="1" class="mt-2">
                 <h2>LATIHAN SOAL</h2>
                @include('konten.00semuamateri.identitas')

                <!--=======================  soal1 ===================================-->
            <li>Hasil jumlah dari \(4+2+1+ \cdots \) adalah ...</li>
            <input type="radio" name="soal1" value="A"/>
            A. \(5 \)
        <br />
            <input type="radio" name="soal1" value="B"/>
            B. \(6 \)
        <br />
            <input type="radio" name="soal1" value="C"/>
            C. \(8 \)
        <br>
            <input type="radio" name="soal1" value="D"/>
            D. \(12 \)
        <br />
            <input type="radio" name="soal1" value="E"/>
            E. \(14 \)
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
    <li>Jumlah tak hingga dari deret geometri \(18+12+8+ \cdots \) adalah ...</li>
            <input type="radio" name="soal2" value="A"/>
            A. \(42 \)
        <br />
            <input type="radio" name="soal2" value="B"/>
            B. \(48 \)
        <br />
            <input type="radio" name="soal2" value="C"/>
            C. \(54 \)
        <br>
            <input type="radio" name="soal2" value="D"/>
            D. \(76 \)
        <br />
            <input type="radio" name="soal2" value="E"/>
            E. \(84 \)
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
    <li>Jumlah sampai tak hingga dari deret geometri \(\displaystyle 1 - \frac{3}{4} + \frac{9}{16} - \frac{27}{64} + \cdots \) adalah ...</li>
            <input type="radio" name="soal3" value="A"/>
            A. \(\displaystyle \frac{3}{7} \)
        <br />
            <input type="radio" name="soal3" value="B"/>
            B. \(\displaystyle \frac{4}{7} \)
        <br />
            <input type="radio" name="soal3" value="C"/>
            C. \(\displaystyle \frac{5}{7} \)
        <br>
            <input type="radio" name="soal3" value="D"/>
            D. \(\displaystyle \frac{6}{7} \)
        <br />
            <input type="radio" name="soal3" value="E"/>
            E. \(\displaystyle \frac{8}{7} \)
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
    <li>Jumlah deret geometri tak hingga \(\displaystyle 27 - 9 + 3 - \frac{1}{3} + \cdots \) adalah ...</li>
            <input type="radio" name="soal4" value="A"/>
            A. \(\displaystyle \frac{81}{2} \)
        <br />
            <input type="radio" name="soal4" value="B"/>
            B. \(\displaystyle \frac{81}{4} \)
        <br />
            <input type="radio" name="soal4" value="C"/>
            C. \(\displaystyle \frac{27}{2} \)
        <br>
            <input type="radio" name="soal4" value="D"/>
            D. \(\displaystyle \frac{27}{4} \)
        <br />
            <input type="radio" name="soal4" value="E"/>
            E. \(\displaystyle \frac{9}{4} \)
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
    <li>Diketahui jumlah deret geometri tak hingga adalah \(\displaystyle \frac{125}{8} \) dan suku kedua adalah \(\displaystyle \frac{5}{2} \). Rasio deret tersebut adalah...</li>
            <input type="radio" name="soal5" value="A"/>
            A. \(\displaystyle \frac{24}{25} \)
        <br />
            <input type="radio" name="soal5" value="B"/>
            B. \(\displaystyle \frac{18}{25} \)
        <br />
            <input type="radio" name="soal5" value="C"/>
            C. \(\displaystyle \frac{3}{5} \)
        <br>
            <input type="radio" name="soal5" value="D"/>
            D. \(\displaystyle \frac{2}{5} \)
        <br />
            <input type="radio" name="soal5" value="E"/>
            E. \(\displaystyle \frac{1}{5} \)
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
    <li>Diketahui jumlah suatu deret geometri tak hingga adalah \(\displaystyle \frac{9}{2}\). Jika rasio adalah bilangan kebalikan dari suku pertamanya, suku kelima dari deret tersebut adalah ...  </li>
            <input type="radio" name="soal6" value="A"/>
            A. \(\displaystyle \frac{1}{27} \text{ atau } \frac{6}{27} \)
        <br />
            <input type="radio" name="soal6" value="B"/>
            B. \(\displaystyle \frac{1}{27} \text{ atau } \frac{8}{27} \)
        <br />
            <input type="radio" name="soal6" value="C"/>
            C. \(\displaystyle \frac{5}{27} \text{ atau } \frac{6}{27} \)
        <br>
            <input type="radio" name="soal6" value="D"/>
            D. \(\displaystyle \frac{1}{9} \text{ atau } \frac{8}{27} \)
        <br />
            <input type="radio" name="soal6" value="E"/>
            E. \(\displaystyle \frac{1}{9} \text{ atau } 9 \)
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
    <li>Diketahui suku kedua suatu deret geometri tak hingga adalah \(\displaystyle \frac{8}{3}\). Jika jumlah tak hingga deret tersebut adalah \(12\), suku pertama deret tersebut adalah ... </li>
            <input type="radio" name="soal7" value="A"/>
            A. \( 9\text{ atau } 8\)
        <br />
            <input type="radio" name="soal7" value="B"/>
            B. \(9 \text{ atau } 6\)
        <br />
            <input type="radio" name="soal7" value="C"/>
            C. \(9 \text{ atau } 4\)
        <br>
            <input type="radio" name="soal7" value="D"/>
            D. \(8 \text{ atau } 6\)
        <br />
            <input type="radio" name="soal7" value="E"/>
            E. \(8 \text{ atau } 4\)
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
    <li>Jika suku pertama deret geometri tak hingga adalah \(a\) dan jumlah tak hingga deret tersebut adalah \(16\). Nilai \(a\) yang memenuhi adalah ... </li>
            <input type="radio" name="soal8" value="A"/>
            A. \(0 \lt a \lt 32 \)
        <br />
            <input type="radio" name="soal8" value="B"/>
            B. \(0 \lt a \lt 24 \)
        <br />
            <input type="radio" name="soal8" value="C"/>
            C. \(0 \lt a \lt 20 \)
        <br>
            <input type="radio" name="soal8" value="D"/>
            D. \(0 \lt a \lt 16 \)
        <br />
            <input type="radio" name="soal8" value="E"/>
            E. \(0 \lt a \lt 12 \)
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
    <li>Sebuah bola dijatuhkan dari krtinggian \(15\) m dan memantul kembali dengan ketinggian \(\displaystyle \frac{4}{5}\) kali tinggi semula, seterusnya hingga bola berhenti. Panjang lintasan bola adalah ...</li>
            <input type="radio" name="soal9" value="A"/>
            A. \(165 \) m
        <br />
            <input type="radio" name="soal9" value="B"/>
            B. \(150 \) m
        <br />
            <input type="radio" name="soal9" value="C"/>
            C. \(135 \) m
        <br>
            <input type="radio" name="soal9" value="D"/>
            D. \(120 \) m
        <br />
            <input type="radio" name="soal9" value="E"/>
            E. \(100 \) m
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
    <li>Diketahui segitiga siku-siku sama kaki pertama dengan panjang sisi siku-siku \(2\) cm. Dibuat segitiga siku-siku sama kaki kedua dengan panjang sisi siku-siku segitiga pertama sama dengan panjang sisi miring segitiga kedua. Segitiga siku-siku sama kaki ketiga, keempat, dan seterusnya masing-masing dibuat dengan panjang sisi miring sama dengan panjang sisi siku-siku segitiga sebelumnya. Panjang keliling seluruh segitiga tersebut adalah ...</li>
            <input type="radio" name="soal10" value="A"/>
            A. \((6+4\sqrt{2}) \) cm
        <br />
            <input type="radio" name="soal10" value="B"/>
            B. \((6+8\sqrt{2}) \) cm
        <br />
            <input type="radio" name="soal10" value="C"/>
            C. \(12 + 2\sqrt{2} \) cm
        <br>
            <input type="radio" name="soal10" value="D"/>
            D. \(12 + 4 \sqrt{2} \) cm
        <br />
            <input type="radio" name="soal10" value="E"/>
            E. \(12 + 8 \sqrt{2} \)
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
<input type="hidden" id="materi" name="materi" value="takhingga01">
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
    <a href="/createtakhingga01" id="kirimsaja" class="btn btn-warning btn-bukti d-none" >SIMPAN JAWABAN</a>
</div>
</form>
{{-- COPY SAMPAI SINI --}}

<div id="disqus_thread" class="mt-4"></div>

</div>
</div>
    </div>

</section>
@endsection

