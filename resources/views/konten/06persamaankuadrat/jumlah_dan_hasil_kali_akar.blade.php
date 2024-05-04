@extends('konten.06persamaankuadrat.06.template')
@section('content')
<!-- START FORM KUIS -->
<div class="page-header d-print-none">
    <div class="container-xl">
      <div class="row g-2 align-items-center">
        <div class="col">
          <!-- Page pre-title -->
          <div class="page-pretitle" style="margin-top:50px">
            mathdosman.com
          </div>
          <h2 class="page-title">
            Jumlah dan Hasil Kali Akar
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
<section >
    <div class="container p-2">
        <div class="row justify-content-center">
            <div class="col-md-9 p-2">

            <p class="text-center fst-italic"> Math_Dosman</p>
            <p>Akar-akar persamaan kuadrat \(ax^2 +bx +c =0\) berhubungan erat dengan koefisien-koefisien \(a,b,\) dan c.</p>
            <p>Rumus akar-akar persamaan kuadrat:
                \[x= \frac{-b \pm \sqrt{b^2 -4ac}}{2a} \]
            </p>
            <p>Misalkan akar-akar persamaan tersebut adalah \(x_1\) dan \(x_2\), maka:
                \[x= \frac{-b + \sqrt{b^2 -4ac}}{2a} \]
                \[x= \frac{-b - \sqrt{b^2 -4ac}}{2a} \]
            </p>
            <p>Sehingga jumlah akar-akar:
                \[x_1 + x_2 = -\frac{b}{a} \]
            </p>
            <p>dan hasil kali akar-akar
                \[ x_1 x_2 = \frac{c}{a}\]
            </p>
            <!-- ============================================================================== -->
            <div class="badge bg-danger text-wrap fs-6" style="width: 8rem"><b> CONTOH 01 </b></div>
            <div class="rounded-2 p-1 shadow" style="background-color: rgba(74, 76, 197, 0.933);">Jika \(x_1\) dan \(x_2\) akar-akar persamaan kuadrat \(2x^2 -5x+6=0 \), tentukan nilai: <br>
            a. \(x_1^2 + x_2^2 \) <br>
            b. \((x_1 - x_2)^2 \) <br>
            c. \(\displaystyle \frac{1}{x_1} + \frac{1}{x_2} \) <br>
            d. \(\displaystyle \frac{x_1}{x_2} + \frac{x_2}{x_1} \) <br>
            e. \((x_1 - 1)^2 + (x_2-1)^2 \)
            </div>
            <div class="rounded-2 p-1 mt-2" style="background-color: #f39440;">
            <p ><b>Penyelesaian :</b> <br>
                <p>Dari persamaan \(2x^2 -5x +6 =0 \) diperoleh \(a=2\); \(b=-5\) dan \(c= 6\)</p>
                <p>Persamaan \(2x^2 -5x +6 = 0 \) tidak dapat diselesaikan dengan mengunakan metode penyelesaian persamaan kuadrat, karena diskriminannya \(D < 0\). </p>
                <div class="row">
                    <div class="col">
                        \(\begin{align}
                        x_1+x_2 &= -\frac{b}{a} \\
                        &= - \frac{-5}{2} \\
                        &= \frac{5}{2}
                        \end{align}\)
                    </div>
                    <div class="col">
                        \(\begin{align}
                        x_1 x_2 &= \frac{c}{a} \\
                        &= \frac{6}{2} \\
                        &= 3
                        \end{align}\) <br></p>
                    </div>
                </div>
            <p>Sehingga <br>
               \(\begin{align}
                \text{a. }\; \; \; x_1^2 + x_2^2 &= (x_1 +x_2)^2 -2x_1 x_2 \\
                &= \left( \frac{5}{2}\right)^2 - 2(3) \\
                &= \frac{25}{4} - 6 \\
                &= \frac{1}{4}
                \end{align}\) <br><br>

                \(\begin{align}
                \text{b. } \;\;\; (x_1-x_2)^2 &= x_1^2 +x_2^2 -2x_1 x_2 \\
                &= \frac{1}{4} -2(3) \\
                &= -\frac{23}{4}
                \end{align}\) <br><br>

                \(\begin{align}
                \text{c. } \;\;\; \frac{1}{x_1} + \frac{1}{x_2} &= \frac{x_2+x_1}{x_1 x_2} \\
                &= \frac{\frac{5}{2}}{3} \\
                &= \frac{5}{6}
                \end{align}\) <br><br>

                \(\begin{align}
                \text{d. } \;\;\; \frac{x_1}{x_2} + \frac{x_2}{x_1} &= \frac{x_1^2 + x_2^2}{x_1 x_2} \\
                &= \frac{\frac{1}{4}}{3} \\
                &= \frac{1}{12}
                \end{align}\) <br><br>

                \(\begin{align}
                \text{e. } \;\;\; (x_1 - 1)^2 + (x_2-1)^2 &= (x_1^2 -2x_1 +1) +(x_2^2-2x_2 + 1) \\
                &= x_1^2 + x_2^2 -2(x_1 + x_2) +2 \\
                &= \frac{1}{4} -2\left(\frac{5}{2} \right) +2 \\
                &= \frac{1}{4} -3 \\
                &= -\frac{11}{4}
                \end{align}\)
            </p>
        </div>

            <form name="input-form">
                @include('konten.00semuamateri.identitas')
            <ol type="1">
                <h2 class="text-center mt-3">Kode Soal : PK-02</h2>
<!--=======================  soal1 ===================================-->
            <li>Akar-akar persamaan \(x^2 - px +25=0 \) adalah \(\alpha\) dan \(\beta\). Jika \(\alpha ^2 + \beta^2=0 \), nilai \(p=...\) </li>
                    <input type="radio" name="soal1" value="A"/>
                    A. \(5 \)  atau \(-5\)
                <br />
                    <input type="radio" name="soal1" value="B"/>
                    B. \(5\sqrt{2} \) atau \(-5 \sqrt{2}\)
                <br />
                    <input type="radio" name="soal1" value="C"/>
                    C. \(2 \sqrt{5}\) dan \(-2 \sqrt{5}\)
                <br>
                    <input type="radio" name="soal1" value="D"/>
                    D. \(50 \)
                <br />
                    <input type="radio" name="soal1" value="E"/>
                    E. \(0 \)
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
            <li>Akar-akar persamaan \(x^2 + (a-3)x +a =0 \) adalah \(p\) dan \(q\). Apabila \(\displaystyle \frac{1}{p} + \frac{1}{q} = 2 \), nilai \(a\) yang memenuhi adalah . . . </li>
                    <input type="radio" name="soal2" value="A"/>
                    A. \( -3\)
                <br />
                    <input type="radio" name="soal2" value="B"/>
                    B. \( -1\)
                <br />
                    <input type="radio" name="soal2" value="C"/>
                    C. \( 1\)
                <br>
                    <input type="radio" name="soal2" value="D"/>
                    D. \( 3\)
                <br />
                    <input type="radio" name="soal2" value="E"/>
                    E. \( 6\)
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
            <li>Persamaan kuadrat \(2x^2 +x +1=0 \) akar-akarnya \(\alpha\) dan \(\beta \). Nilai \(\displaystyle \frac{2}{3 \alpha -1}+ \frac{2}{3 \beta - 1} \) adalah . . . </li>
                    <input type="radio" name="soal3" value="A"/>
                    A. \(\displaystyle \frac{7}{5} \)
                <br />
                    <input type="radio" name="soal3" value="B"/>
                    B. \(1 \)
                <br />
                    <input type="radio" name="soal3" value="C"/>
                    C. \(\displaystyle -\frac{1}{5} \)
                <br>
                    <input type="radio" name="soal3" value="D"/>
                    D. \(\displaystyle -\frac{1}{4} \)
                <br />
                    <input type="radio" name="soal3" value="E"/>
                    E. \(-1 \)
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
            <li>Jumlah kebalikan akar-akar \(3x^2 - 9x +4=0 \) adalah . . .</li>
                    <input type="radio" name="soal4" value="A"/>
                    A. \(\displaystyle -\frac{9}{4} \)
                <br />
                    <input type="radio" name="soal4" value="B"/>
                    B. \(\displaystyle -\frac{3}{4} \)
                <br />
                    <input type="radio" name="soal4" value="C"/>
                    C. \(\displaystyle -\frac{4}{9} \)
                <br>
                    <input type="radio" name="soal4" value="D"/>
                    D. \(\displaystyle \frac{3}{4} \)
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
            <li>Jika nilai kedua akar persamaan \(x^2 + (2a-6)x -9 = 0\) saling berlawanan, maka milai \(a=... \) </li>
                    <input type="radio" name="soal5" value="A"/>
                    A. \(1 \)
                <br />
                    <input type="radio" name="soal5" value="B"/>
                    B. \(2 \)
                <br />
                    <input type="radio" name="soal5" value="C"/>
                    C. \(3 \)
                <br>
                    <input type="radio" name="soal5" value="D"/>
                    D. \(4 \)
                <br />
                    <input type="radio" name="soal5" value="E"/>
                    E. \(5 \)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal5" aria-expanded="false" aria-controls="collapsesoal5" disabled>
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal5">
                <div class="card card-body overflow-auto">
                    <p></p>
                <b class="text-end text-danger fw-bold"> <h3>JAWABAN : C</h3></b>
                </div>
                </div>
                <hr />

<!--=======================  soal6 ===================================-->
            <li>Jika selisih akar-akar persamaan kuadrat \(3x^2 +5x-m=0 \) adalah \(2\), maka nilai \(m = ...\) </li>
                    <input type="radio" name="soal6" value="A"/>
                    A. \(\displaystyle \frac{11}{12} \)
                <br />
                    <input type="radio" name="soal6" value="B"/>
                    B. \(\displaystyle \frac{11}{13} \)
                <br />
                    <input type="radio" name="soal6" value="C"/>
                    C. \(\displaystyle -\frac{11}{12} \)
                <br>
                    <input type="radio" name="soal6" value="D"/>
                    D. \(\displaystyle -\frac{11}{13} \)
                <br />
                    <input type="radio" name="soal6" value="E"/>
                    E. \(\displaystyle -\frac{13}{11} \)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal6" aria-expanded="false" aria-controls="collapsesoal6" disabled>
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal6">
                <div class="card card-body overflow-auto">
                    <p></p>
                <b class="text-end text-danger fw-bold"> <h3>JAWABAN : A</h3></b>
                </div>
                </div>
                <hr />

<!--=======================  soal7 ===================================-->
            <li>Akar-akar persamaan \(x^2 + px + 60 =0 \), mempunyai beda \(7\). Nilai \(p\) yang memenuhi adalah . . . </li>
                    <input type="radio" name="soal7" value="A"/>
                    A. \(-7 \)
                <br />
                    <input type="radio" name="soal7" value="B"/>
                    B. \(-3 \)
                <br />
                    <input type="radio" name="soal7" value="C"/>
                    C. \(0 \)
                <br>
                    <input type="radio" name="soal7" value="D"/>
                    D. \(3 \)
                <br />
                    <input type="radio" name="soal7" value="E"/>
                    E. \(7 \)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal7" aria-expanded="false" aria-controls="collapsesoal7" disabled>
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal7">
                <div class="card card-body overflow-auto">
                    <p></p>
                <b class="text-end text-danger fw-bold"> <h3>JAWABAN : E</h3></b>
                </div>
                </div>
                <hr />

<!--=======================  soal8 ===================================-->
            <li>Diketahui akar-akar persamaan \(2x^2 -3ax +a +6 = 0 \) adalah \(x_1\) dan \(x_2\). Jika \(\displaystyle x_1^2 + x_2^2 = \frac{45}{4} \), maka nilai \(a\) ayang memenuhi adalah . . . </li>
                    <input type="radio" name="soal8" value="A"/>
                    A. \(0 \)
                <br />
                    <input type="radio" name="soal8" value="B"/>
                    B. \(1 \)
                <br />
                    <input type="radio" name="soal8" value="C"/>
                    C. \(2 \)
                <br>
                    <input type="radio" name="soal8" value="D"/>
                    D. \(3 \)
                <br />
                    <input type="radio" name="soal8" value="E"/>
                    E. \(4 \)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal8" aria-expanded="false" aria-controls="collapsesoal8" disabled>
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal8">
                <div class="card card-body overflow-auto">
                    <p></p>
                <b class="text-end text-danger fw-bold"> <h3>JAWABAN : D</h3></b>
                </div>
                </div>
                <hr />

<!--=======================  soal9 ===================================-->
            <li>Diketahui persamaan \(4x^2 -3x-2=0 \), akar-akarny adalah \(p\) dan \(q\). maka nilai \(p^2 q + p q^2 =...\)</li>
                    <input type="radio" name="soal9" value="A"/>
                    A. \( \)
                <br />
                    <input type="radio" name="soal9" value="B"/>
                    B. \( \)
                <br />
                    <input type="radio" name="soal9" value="C"/>
                    C. \( \)
                <br>
                    <input type="radio" name="soal9" value="D"/>
                    D. \( \)
                <br />
                    <input type="radio" name="soal9" value="E"/>
                    E. \( \)
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
            <li>Akar-akar persamaan kuadrat \(2x^2 -2x \sqrt{3} +7=0 \) adalah \(\alpha\) dan \(\beta\). Nilai \(\displaystyle \sqrt{3 \alpha^2 +6 \alpha \beta + 3 \beta^2 } = ... \) </li>
                    <input type="radio" name="soal10" value="A"/>
                    A. \(3 \)
                <br />
                    <input type="radio" name="soal10" value="B"/>
                    B. \(4 \)
                <br />
                    <input type="radio" name="soal10" value="C"/>
                    C. \(5 \)
                <br>
                    <input type="radio" name="soal10" value="D"/>
                    D. \(6 \)
                <br />
                    <input type="radio" name="soal10" value="E"/>
                    E. \( 7\)
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
{{-- TOMBOL KIRIM --}}
<input type="hidden" id="materi" name="materi" value="PK-02">

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
        <a href="/persamaanKuadrat02" id="kirimsaja" class="btn btn-warning btn-bukti d-none" >SIMPAN JAWABAN</a>
        <div id="disqus_thread"></div>
    </div>
{{-- COPY SAMPAI SINI --}}
            </form>
    </div>

</section>
@endsection

