@extends('konten.25eksponen.25.template')
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
            EKSPONEN - LATIHAN 06
          </h2>
          <h3>Bentuk Akar</h3>
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
            <p>Sifat-sifat operasi bilangan bentuk Akar <br> Untuk \(a, b \in R \) dan \(a \leq 0, b \leq 0 \) serta \(m, n \in R\) berlaku :
                <ol>
                    <li>\(\displaystyle a^{\frac{m}{n}} = \sqrt[n]{a^m}=(\sqrt[n]{a})^m \)</li>
                    <li>\(\displaystyle p \sqrt[n]{a} \pm q \sqrt[n]{a} = (p\pm q)\sqrt[n]{a} \)</li>
                    <li>\(\displaystyle \sqrt[n]{\frac{a}{b}} = \frac{\sqrt[n]{a}}{\sqrt[n]{b}}\), dengan \(b \neq 0\)</li>
                    <li>\(\displaystyle \sqrt[n]{ab} = \sqrt[n]{a} \cdot \sqrt[n]{b} \)</li>
                    <li>\(\displaystyle \sqrt[m]{\sqrt[n]{a}} = \sqrt[mn]{a}  \)</li>
                </ol>
            </p>
            <p>Merasionalkan penyebut pecahan bentuk akar
                <ol>
                    <li>\(\displaystyle \sqrt{a} \cdot \sqrt{b} = \sqrt{ab} \)</li>
                    <li>\(\displaystyle p\sqrt{a} \cdot q \sqrt{b} = pq\sqrt{ab} \)</li>
                    <li>\(\displaystyle a\sqrt{c} \pm b \sqrt{c} = (a \pm b)\sqrt{c} \)</li>
                    <li>\(\displaystyle \sqrt{(a+b) \pm 2\sqrt{ab}} = \sqrt{a} \pm \sqrt{b} \), dengan \(a \gt b\)</li>
                    <li>\(\displaystyle \frac{a}{\sqrt{b}} = \frac{a}{\sqrt{b}} \times \frac{\sqrt{b}}{\sqrt{b}} = \frac{a\sqrt{b}}{b} \)</li>
                    <li>\((a-b) = (\sqrt{a}-\sqrt{b})(\sqrt{a}+\sqrt{b}) \) "bentuk sekawan"</li>
                </ol>
            </p>
            <!-- ============================================================================== -->
            <div class="badge bg-danger text-wrap fs-6" style="width: 8rem"><b> CONTOH 01 </b></div>
            <div class="rounded-2 p-1" style="background-color: rgba(193, 193, 193, 0.933);">Nilai dari \(125^{\frac{2}{3}} \) adalah . . .</div>
            <p class="rounded-2 p-1" style="background-color: #f89845;"><b>Penyelesaian :</b> <br>
            \(\begin{align}
            125^{\frac{2}{3}} &= (\sqrt[3]{125})^2 \\
            &= (5)^2 \\
            &= 25
            \end{align}\) <br>
            Jadi, nilainya adalah \(\boxed{25}\)
            </p>
            <!-- ============================================================================== -->
            <div class="badge bg-danger text-wrap fs-6" style="width: 8rem"><b> CONTOH 02 </b></div>
            <div class="rounded-2 p-1" style="background-color: rgba(193, 193, 193, 0.933);">Bentuk sederhana dari \((2\sqrt{5}+3\sqrt{2})(6\sqrt{5} - 2\sqrt{2})\) adalah . . .</div>
            <p class="rounded-2 p-1 overflow-auto" style="background-color: #f89845;"><b>Penyelesaian :</b> <br>
                \begin{align}
                &(2\sqrt{5}+3\sqrt{2})(6\sqrt{5} - 2\sqrt{2}) \\ &= 2 \sqrt{5} \cdot 6\sqrt{5} -2\sqrt{5} \cdot 2\sqrt{2} +3\sqrt{2} \cdot 6\sqrt{5} - 3\sqrt{2} \cdot 2\sqrt{2} \\
                &= 12 \cdot 5 -4\sqrt{10} +18\sqrt{10}-6 \cdot 2 \\
                &= 48+ 14\sqrt{10}
                \end{align}
                Jadi, bentuk sederhananya adalah \(\boxed{48+ 14\sqrt{10}}\)
            </p>
            <!-- ============================================================================== -->
            <div class="badge bg-danger text-wrap fs-6" style="width: 8rem"><b> CONTOH 03 </b></div>
            <div class="rounded-2 p-1" style="background-color: rgba(193, 193, 193, 0.933);">Bentuk sederhana dari \(\displaystyle \frac{2+\sqrt{5}}{2-\sqrt{5}} \) adalah . . .</div>
            <p class="rounded-2 p-1" style="background-color: #f89845;"><b>Penyelesaian :</b> <br>
            \(\begin{align}
            \frac{2+\sqrt{5}}{2-\sqrt{5}} &= \frac{2+\sqrt{5}}{2-\sqrt{5}} \times \frac{2+\sqrt{5}}{2+\sqrt{5}} \\
            &= \frac{4+4\sqrt{5}+5}{4-5} \\
            &= \frac{9+4\sqrt{5}}{-1} \\
            &= -9-4\sqrt{5}
            \end{align}\) <br>
            Jadi, bentuk sederhananya adalah \(\boxed{-9-4\sqrt{5}}\)
            </p>
            <!-- ============================================================================== -->
            <div class="badge bg-danger text-wrap fs-6" style="width: 8rem"><b> CONTOH 04 </b></div>
            <div class="rounded-2 p-1" style="background-color: rgba(193, 193, 193, 0.933);">Bentuk sederhana dari \(\displaystyle 2\sqrt{108} - 3\sqrt{80}-\sqrt{75}+3\sqrt{20} \) adalah . . .</div>
            <p class="rounded-2 p-1 overflow-auto" style="background-color: #f89845;"><b>Penyelesaian :</b> <br>
            \(\begin{align}
            &2\sqrt{108} - 3\sqrt{80}-\sqrt{75}+3\sqrt{20} \\
            &= 2\sqrt{36\times 3} - 3\sqrt{16 \times 5} -\sqrt{25 \times 3} +3 \sqrt{4 \times 5} \\
            &= 2 \sqrt{36}\sqrt{3}-3\sqrt{16}\sqrt{5}-\sqrt{25}\sqrt{3}+3\sqrt{4}\sqrt{5} \\
            &= 2 \cdot 6 \sqrt{3}-3\cdot 4 \sqrt{5}-5 \sqrt{3}+3\cdot 2\sqrt{5} \\
            &= 12 \sqrt{3}-12 \sqrt{5}-5 \sqrt{3}+6\sqrt{5} \\
            &= 12 \sqrt{3}-5 \sqrt{3}-12 \sqrt{5}+6\sqrt{5} \\
            &= (12-5)\sqrt{3}+(-12+6)\sqrt{5} \\
            &= 7\sqrt{3}-6\sqrt{5}
            \end{align}\) <br>
            Jadi, bentuk sederhananya adalah \(\boxed{7\sqrt{3}-6\sqrt{5}}\)
            </p>
            <!-- ============================================================================== -->
            <div class="badge bg-danger text-wrap fs-6" style="width: 8rem"><b> CONTOH 05 </b></div>
            <div class="rounded-2 p-1" style="background-color: rgba(193, 193, 193, 0.933);">
                Bentuk sederhana dari \(\displaystyle \sqrt{6+\sqrt{20}} \) adalah \(a+\sqrt{b} \) dengan \(a,b\) bilangan bulat positif nilai \(a+b = ...\)
            </div>
            <p class="rounded-2 p-1" style="background-color: #f89845;"><b>Penyelesaian :</b> <br>
                Gunakan sifat : \(\displaystyle \boxed{\sqrt{(a+b)+2\sqrt{ab}} = \sqrt{a}+\sqrt{b}} \) <br>
                Dengan demikian diperoleh
            \begin{align}
            \sqrt{6+\sqrt{20}} &= \sqrt{6+\sqrt{4 \times 5}}\\
            &= \sqrt{6 + 2\sqrt{5}} \\
            &= \sqrt{(5+1)+2\sqrt{5 \times 1}} \\
            &= \sqrt{5} + \sqrt{1} \\
            &= 1 + \sqrt{5}
            \end{align}
            Dari hasil tersebut dapat ditentukan nilai \(a=1\) dan \(b=5\) <br>
            Jadi, nilai dari \(a+b=1+5=\boxed{6}\)
            </p>


            <h1 class="text-center text-primary">SOAL LATIHAN</h1>
        <form name="input-form">
             @csrf
             <ol type="1" class="mt-2">
                @include('konten.00semuamateri.identitas')
                <li>Nilai dari \(64^{\frac{4}{6}}-27^{\frac{2}{3}} \) adalah . . .</li>
                    <input type="radio" name="soal1" value="A"/>
                    A. \(16 \)
                <br />
                    <input type="radio" name="soal1" value="B"/>
                    B. \(12 \)
                <br />
                    <input type="radio" name="soal1" value="C"/>
                    C. \(7 \)
                <br>
                    <input type="radio" name="soal1" value="D"/>
                    D. \(6 \)
                <br />
                    <input type="radio" name="soal1" value="E"/>
                    E. \(1 \)
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
            <li>Jika bilangan bulat \(a\) dan \(b\) memenuhi \(\displaystyle \frac{\sqrt{5}-\sqrt{6}}{\sqrt{5}+\sqrt{6}}=a+b\sqrt{30} \) maka \(ab=...\) </li>
                    <input type="radio" name="soal2" value="A"/>
                    A. \(-22 \)
                <br />
                    <input type="radio" name="soal2" value="B"/>
                    B. \( -11\)
                <br />
                    <input type="radio" name="soal2" value="C"/>
                    C. \(-9 \)
                <br>
                    <input type="radio" name="soal2" value="D"/>
                    D. \( 2\)
                <br />
                    <input type="radio" name="soal2" value="E"/>
                    E. \(13 \)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal2" aria-expanded="false" aria-controls="collapsesoal2" disabled>
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal2">
                <div class="card card-body overflow-auto">
                    <p></p>
                <b class="text-end text-danger fw-bold"> <h3>JAWABAN : A</h3></b>
                </div>
                </div>
                <hr />
<!--=======================  soal3 ===================================-->
            <li>Bentuk \(\displaystyle \frac{2+\sqrt{3}}{3-\sqrt{3}} \) dapat disederhakan menjadi . . .</li>
                    <input type="radio" name="soal3" value="A"/>
                    A. \(\displaystyle \frac{1}{6} (3+5\sqrt{3}) \)
                <br />
                    <input type="radio" name="soal3" value="B"/>
                    B. \(\displaystyle \frac{1}{6} (9+5\sqrt{3}) \)
                <br />
                    <input type="radio" name="soal3" value="C"/>
                    C. \(\displaystyle \frac{1}{6} (9+\sqrt{3}) \)
                <br>
                    <input type="radio" name="soal3" value="D"/>
                    D. \(\displaystyle \frac{1}{12} (9+\sqrt{3}) \)
                <br />
                    <input type="radio" name="soal3" value="E"/>
                    E. \(\displaystyle \frac{1}{12} (3+\sqrt{3}) \)
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
            <li>Bentuk sederhana dari \(\displaystyle \frac{4(2+\sqrt{3})(2-\sqrt{3})}{3+\sqrt{5}}\) adalah . . .</li>
                    <input type="radio" name="soal4" value="A"/>
                    A. \(-(3-\sqrt{5}) \)
                <br />
                    <input type="radio" name="soal4" value="B"/>
                    B. \(\displaystyle -\frac{1}{4} (3-\sqrt{5}) \)
                <br />
                    <input type="radio" name="soal4" value="C"/>
                    C. \(\displaystyle \frac{1}{4} (3-\sqrt{5}) \)
                <br>
                    <input type="radio" name="soal4" value="D"/>
                    D. \((3-\sqrt{5}) \)
                <br />
                    <input type="radio" name="soal4" value="E"/>
                    E. \((3 + \sqrt{5}) \)
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
            <li>Bentuk sederhana dari \(\sqrt{72} + \sqrt{50} \times \sqrt{288} - \sqrt{200} \) adalah...</li>
                    <input type="radio" name="soal5" value="A"/>
                    A. \(4\sqrt{2} + 40 \)
                <br />
                    <input type="radio" name="soal5" value="B"/>
                    B. \(4\sqrt{2}+60 \)
                <br />
                    <input type="radio" name="soal5" value="C"/>
                    C. \(4\sqrt{2} +120 \)
                <br>
                    <input type="radio" name="soal5" value="D"/>
                    D. \(-4\sqrt{2}+60 \)
                <br />
                    <input type="radio" name="soal5" value="E"/>
                    E. \(-4\sqrt{2}+120 \)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal5" aria-expanded="false" aria-controls="collapsesoal5" disabled>
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal5">
                <div class="card card-body overflow-auto">
                    <p></p>
                <b class="text-end text-danger fw-bold"> <h3>JAWABAN : E</h3></b>
                </div>
                </div>
                <hr />
<!--=======================  soal6 ===================================-->
            <li>Bentuk sederhana dari \(2\sqrt{2} + \sqrt{8} + \sqrt{32}+2\sqrt{3}+\sqrt{12} \) adalah . . .</li>
                    <input type="radio" name="soal6" value="A"/>
                    A. \(2\sqrt{2} + 2\sqrt{3} \)
                <br />
                    <input type="radio" name="soal6" value="B"/>
                    B. \(4\sqrt{2} +2\sqrt{3} \)
                <br />
                    <input type="radio" name="soal6" value="C"/>
                    C. \(4\sqrt{2}+4\sqrt{3} \)
                <br>
                    <input type="radio" name="soal6" value="D"/>
                    D. \(8\sqrt{2} + 4\sqrt{3} \)
                <br />
                    <input type="radio" name="soal6" value="E"/>
                    E. \(8\sqrt{2} +8\sqrt{3} \)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal6" aria-expanded="false" aria-controls="collapsesoal6" disabled>
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal6">
                <div class="card card-body overflow-auto">
                    <p></p>
                <b class="text-end text-danger fw-bold"> <h3>JAWABAN : D</h3></b>
                </div>
                </div>
                <hr />
<!--=======================  soal7 ===================================-->
            <li>Jika \(\displaystyle \frac{\sqrt{2}-\sqrt{3}}{\sqrt{2}+\sqrt{3}}=a+b\sqrt{6} \) dengan \(a,b\) bilangan bulat, maka \(a+b=...\)</li>
                    <input type="radio" name="soal7" value="A"/>
                    A. \(-5 \)
                <br />
                    <input type="radio" name="soal7" value="B"/>
                    B. \(-3 \)
                <br />
                    <input type="radio" name="soal7" value="C"/>
                    C. \(-2 \)
                <br>
                    <input type="radio" name="soal7" value="D"/>
                    D. \(2 \)
                <br />
                    <input type="radio" name="soal7" value="E"/>
                    E. \(3 \)
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
            <li>Jika \(\displaystyle \sqrt{7+\sqrt{48}}=p+\sqrt{q} \) dengan \(p,q\) bilangan bulat positif, maka \(p-q=...\)</li>
                    <input type="radio" name="soal8" value="A"/>
                    A. \(-2 \)
                <br />
                    <input type="radio" name="soal8" value="B"/>
                    B. \(-1 \)
                <br />
                    <input type="radio" name="soal8" value="C"/>
                    C. \(0 \)
                <br>
                    <input type="radio" name="soal8" value="D"/>
                    D. \(1 \)
                <br />
                    <input type="radio" name="soal8" value="E"/>
                    E. \(2 \)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal8" aria-expanded="false" aria-controls="collapsesoal8" disabled>
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal8">
                <div class="card card-body overflow-auto">
                    <p></p>
                <b class="text-end text-danger fw-bold"> <h3>JAWABAN : B</h3></b>
                </div>
                </div>
                <hr />
<!--=======================  soal9 ===================================-->
            <li>Bentuk sederhana dari \(\displaystyle \sqrt{9-4\sqrt{5}} \) adalah . . .</li>
                    <input type="radio" name="soal9" value="A"/>
                    A. \(\sqrt{5}-4 \)
                <br />
                    <input type="radio" name="soal9" value="B"/>
                    B. \(\sqrt{5}-\sqrt{2} \)
                <br />
                    <input type="radio" name="soal9" value="C"/>
                    C. \(\sqrt{2}-4 \)
                <br>
                    <input type="radio" name="soal9" value="D"/>
                    D. \(\sqrt{5}-2 \)
                <br />
                    <input type="radio" name="soal9" value="E"/>
                    E. \(\sqrt{2}-\sqrt{5} \)
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
            <li>Bentuk sederhana dari \(\sqrt{3-\sqrt{5}} = \sqrt{a}-\sqrt{b}\) dengan \(a,b\) bilangan riil, maka \(a+b=...\)</li>
                    <input type="radio" name="soal10" value="A"/>
                    A. \( -1\)
                <br />
                    <input type="radio" name="soal10" value="B"/>
                    B. \( 0\)
                <br />
                    <input type="radio" name="soal10" value="C"/>
                    C. \( 1\)
                <br>
                    <input type="radio" name="soal10" value="D"/>
                    D. \( 2\)
                <br />
                    <input type="radio" name="soal10" value="E"/>
                    E. \( 3\)
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
<input type="hidden" id="materi" name="materi" value="eksponen06">
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
    <a href="/create_eksponen06" id="kirimsaja" class="btn btn-warning btn-bukti d-none" >SIMPAN JAWABAN</a>
</div>
</form>
{{-- COPY SAMPAI SINI --}}

<div id="disqus_thread" class="mt-4"></div>

</div>
</div>
</div>
</section>
@endsection

