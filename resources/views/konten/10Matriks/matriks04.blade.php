@extends('konten.10Matriks.10.template')
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
            Matriks - Paket 04
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

                <li>Jika \(\begin{pmatrix}4^{x+2y}&0 \\ 2 & 3x-2 \end{pmatrix}=\begin{pmatrix}8&0 \\ 2&7 \end{pmatrix}\), maka \(x+y=...\)</li>
                <input type="radio" name="soal1" value="0" />
                \(-\frac{15}{4}\)
                <br />
                <input type="radio" name="soal1" value="0" />
                \(-\frac{9}{4}\)
                <br />
                <input type="radio" name="soal1" value="10" id="soal1" />
                \(\frac{9}{4}\)
                <br />
                <input type="radio" name="soal1" value="0" />
                \(\frac{15}{4}\)
                <br />
                <input type="radio" name="soal1" value="0" />
                \(\frac{21}{4}\)
                <hr />
                <!--========================= soal no 2 ===========================================================================-->
                <li>Diberikan matriks-matriks \(A=\begin{pmatrix}2&1\\3&4 \end{pmatrix}\), \(B=\begin{pmatrix}-1&2 \\ 5&6 \end{pmatrix}\), \(C=\begin{pmatrix}a&-1 \\ 2&3 \end{pmatrix}\). Jika determinan dari matriks \(2A-B+3C\) adalah \(10\), maka nilai \(a\) adalah . . .</li>
                <input type="radio" name="soal2" value="0" />
                -5
                <br />
                <input type="radio" name="soal2" value="0" />
                -3
                <br />
                <input type="radio" name="soal2" value="10" id="soal2" />
                -2
                <br />
                <input type="radio" name="soal2" value="0" />
                2
                <br />
                <input type="radio" name="soal2" value="0" />
                5
                <hr />
                <!--================================================== soal no 3 ======================================================-->
                <li>Jika matriks \(A=\begin{pmatrix}1&4 \\ 2&3 \end{pmatrix}\), maka nilai \(x\) yang memenuhi persamaan \(|A-xI=0|\) dengan \(I\) matriks satuan dan \(|A-xI|\) determinan dari \(A-xI\) adalah . . .</li>
                <input type="radio" name="soal3" value="0"  />
                1 dan -5
                <br />
                <input type="radio" name="soal3" value="10" id="soal3" />
                -1 dan 5
                <br />
                <input type="radio" name="soal3" value="0" />
                -1 dan -5
                <br />
                <input type="radio" name="soal3" value="0" />
                -5 dan 0
                <br />
                <input type="radio" name="soal3" value="0" />
                1 dan 0
                <hr />
                <!-- soal no no4 =================================================================================================-->
                <li>Hasil kali matriks \((BA)(B+A^{-1})B^{-1}=...\)</li>
                </li>
                <input type="radio" name="soal4" value="0" />
                \(AB+I\)
                <br />
                <input type="radio" name="soal4" value="10" id="soal4"/>
                \(BA+I\)
                <br />
                <input type="radio" name="soal4" value="0" />
                \(A+B^{-1}\)
                <br />
                <input type="radio" name="soal4" value="0"  />
                \(A^{-1}+B\)
                <br />
                <input type="radio" name="soal4" value="0" />
                \(AB+A\)
                <hr />
                <!-- soal no 5 ================================================================================================-->
                <li>Diketahui matriks: \(A=\begin{pmatrix}x&1 \\ -1&y \end{pmatrix}\), \(B=\begin{pmatrix}3&2 \\ 1&0 \end{pmatrix}\), dan \(C=\begin{pmatrix}1&0 \\ -1&-2 \end{pmatrix}\). Nilai \(x+y\) yang memenuhi persamaan \(AB-2B=C\) adalah . . . </li>
                <input type="radio" name="soal5" value="0" />
                0
                <br />
                <input type="radio" name="soal5" value="0" />
                2
                <br />
                <input type="radio" name="soal5" value="10"  id="soal5" />
                6
                <br />
                <input type="radio" name="soal5" value="0"/>
                8
                <br />
                <input type="radio" name="soal5" value="0" />
                10
                <hr />
                <!-- =====SOAL NO 6======================================================================= -->
                <li>Diketahui matriks \(A=\begin{pmatrix}U_1 & U_2 \\ U_3 & U_4 \end{pmatrix}\) dan \(u_n\) adalah suku ke-<i>n</i> barisan aritmatika. Jika \(u_6=18\) dan \(u_{10}=30\), maka determinan matriks \(A\) sama dengan ... </li>
                <input type="radio" name="soal6" value="10" id="soal6" />
                -18
                <br />
                <input type="radio" name="soal6" value="0" />
                -15
                <br />
                <input type="radio" name="soal6" value="0" />
                -12
                <br />
                <input type="radio" name="soal6" value="0" />
                12
                <br />
                <input type="radio" name="soal6" value="0" />
                18
                <hr />
                <!-- =====SOAL NO 7======================================================================= -->
                <li>Jika titik \(A\) merupakan titik perpotongan dua garis yang disajikan oleh persamaan matriks \(\begin{pmatrix}1&-2 \\ 3&2 \end{pmatrix}\begin{pmatrix}x \\ y \end{pmatrix}=\begin{pmatrix}4 \\ 8 \end{pmatrix}  \) dan garis \(l_1\) adalah garis yang melalui titik \(A\) dan titik asal \(0\), maka persamaan garis \(l_2\) yang melalui \(B(2,2)\) dan tegak lurus pada \(l_1\) adalah . . .</li>
                <input type="radio" name="soal7" value="0" />
                \(y=14-6x\)
                <br />
                <input type="radio" name="soal7" value="0" />
                \(y=12-5x\)
                <br />
                <input type="radio" name="soal7" value="10" id="soal7"/>
                \(y=2(3x-5)\)
                <br />
                <input type="radio" name="soal7" value="0"  />
                \(y=2(5-2x)\)
                <br />
                <input type="radio" name="soal7" value="0" />
                \(y=2(2x-3)\)
                <hr />
                <!-- =====SOAL NO 8======================================================================= -->
                <li>Matriks \(\begin{pmatrix}x\\y \end{pmatrix}\) yang memenuhi persamaan \(\begin{pmatrix}2&-5 \\ 1&-2 \end{pmatrix}\begin{pmatrix}x \\ y \end{pmatrix}=\begin{pmatrix}3 \\ 4 \end{pmatrix}  \) adalah . . . </li>
                <input type="radio" name="soal8" value="0" />
                \(\begin{pmatrix} 2&-5 \\ 1&-2 \end{pmatrix} \begin{pmatrix} 3\\4 \end{pmatrix}\)
                <br />
                <input type="radio" name="soal8" value="0" />
                \(\begin{pmatrix}2&-5 \\ -1&-2 \end{pmatrix} \begin{pmatrix}3\\4 \end{pmatrix} \)
                <br />
                <input type="radio" name="soal8" value="10" id="soal8" />
                \(\begin{pmatrix}-2&5 \\ -1&2 \end{pmatrix}\begin{pmatrix}3\\4 \end{pmatrix} \)
                <br />
                <input type="radio" name="soal8" value="0"  />
                \(\begin{pmatrix}-2&-5 \\ -1&-2 \end{pmatrix}\begin{pmatrix}3\\4 \end{pmatrix} \)
                <br />
                <input type="radio" name="soal8" value="0" />
                \(\begin{pmatrix}-2&-1 \\ 5&2 \end{pmatrix}\begin{pmatrix}3\\4 \end{pmatrix} \)
                <hr />
                <!-- =====SOAL NO 9======================================================================= -->
                <li>Transpose matriks \(A=\begin{pmatrix}a&b \\ c&d \end{pmatrix}\) adalah \(A^T =\begin{pmatrix}a&c \\ b&d \end{pmatrix}\). Jika \(A^T = A^{-1}\), maka \(ad-bc=...\)</li>
                <input type="radio" name="soal9" value="0" />
                \(-1\) atau \(- \sqrt{2}\)
                <br />
                <input type="radio" name="soal9" value="0" />
                \(1\) atau \(\sqrt{2}\)
                <br />
                <input type="radio" name="soal9" value="10"  />
                \(-\sqrt{2}\) atau \(\sqrt{2}\)
                <br />
                <input type="radio" name="soal9" value="10" id="soal9"/>
                \(-1\) atau \(1\)
                <br />
                <input type="radio" name="soal9" value="0" />
                \(1\) atau \(- \sqrt{2}\)
                <hr />
                <!-- =====SOAL NO 10======================================================================= -->
                <li>Jika matriks \(A=\begin{pmatrix}2x+1 & 3 \\ 6x-1 & 5 \end{pmatrix}\) tidak mempunyai invers, maka nilai \(x\) adalah . . .</li>
                <input type="radio" name="soal10" value="0" />
                -2
                <br />
                <input type="radio" name="soal10" value="0" />
                -1
                <br />
                <input type="radio" name="soal10" value="10" id="soal10" />
                0
                <br />
                <input type="radio" name="soal10" value="0" />
                1
                <br />
                <input type="radio" name="soal10" value="0" />
                2
                <hr />
                <!-- =====SOAL NO 11======================================================================= -->
                <li>Jika \(\begin{pmatrix}a&0 \\ 0&b \end{pmatrix}\begin{pmatrix}1\\2 \end{pmatrix}=\begin{pmatrix}b \\ 3-2a \end{pmatrix}\) maka \(a=...\)</li>
                <input type="radio" name="soal11" value="0" />
                1
                <br />
                <input type="radio" name="soal11" value="0" />
                2
                <br />
                <input type="radio" name="soal11" value="0" />
                \(\frac{3}{2}\)
                <br />
                <input type="radio" name="soal11" value="10" id="soal11" />
                \(\frac{3}{4}\)
                <br />
                <input type="radio" name="soal11" value="0" />
                \(\frac{4}{3}\)
                <hr />
                <!-- =====SOAL NO 12======================================================================= -->

                <li>Nilai \(a\) yang memenuhi
                  $$\begin{pmatrix}a&b \\ c&d \end{pmatrix}\begin{pmatrix}1&2 \\ 2&1 \end{pmatrix}-\begin{pmatrix}2&1 \\ 4&3 \end{pmatrix}=\begin{pmatrix}0&0 \\ 1&2 \end{pmatrix} $$ adalah . . .
                </li>
                <input type="radio" name="soal12" value="0" />
                -2
                <br />
                <input type="radio" name="soal12" value="0" />
                -1
                <br />
                <input type="radio" name="soal12" value="10" id="soal12" />
                0
                <br />
                <input type="radio" name="soal12" value="0" />
                1
                <br />
                <input type="radio" name="soal12" value="0" />
                2
                <hr />
                <!-- =====SOAL NO 13======================================================================= -->
                <li>matriks \(A=\begin{pmatrix}1&3 \\1&2 \end{pmatrix}\) dan \(B=\begin{pmatrix}5&13 \\ 4&10 \end{pmatrix} \) jika \(AP=B\) maka matriks \(P=...\) </li>
                <input type="radio" name="soal13" value="10" id="soal13" />
                \(\begin{pmatrix} 2&4 \\1&3 \end{pmatrix}\)
                <br />
                <input type="radio" name="soal13" value="0" />
                \(\begin{pmatrix} 2&1 \\ 3&4\end{pmatrix}\)
                <br />
                <input type="radio" name="soal13" value="0" />
                \(\begin{pmatrix} 1&3 \\ 2&4 \end{pmatrix}\)
                <br />
                <input type="radio" name="soal13" value="0" />
                \(\begin{pmatrix} -2&1 \\ 3&4 \end{pmatrix}\)
                <br />
                <input type="radio" name="soal13" value="0" />
                \(\begin{pmatrix} 1&-3 \\ 2&-4 \end{pmatrix}\)
                <hr />
                <!-- =====SOAL NO 14======================================================================= -->
                <li>Matriks \(X\) yang memenuhi persamaan \(\begin{pmatrix}4&-3 \\ 2&1 \end{pmatrix}X=\begin{pmatrix}-25&2 \\ 5&16 \end{pmatrix}\) adalah . . . </li>
                <input type="radio" name="soal14" value="0" />
                \(\begin{pmatrix} 1&15 \\ 7&6 \end{pmatrix}\)
                <br />
                <input type="radio" name="soal14" value="10" id="soal14" />
                \(\begin{pmatrix} 1&-5 \\ -7&6 \end{pmatrix}\)
                <br />
                <input type="radio" name="soal14" value="0" />
                \(\begin{pmatrix} -1&7 \\ 5&6 \end{pmatrix}\)
                <br />
                <input type="radio" name="soal14" value="0" />
                \(\begin{pmatrix} -1&6 \\ 7&5 \end{pmatrix}\)
                <br />
                <input type="radio" name="soal14" value="0" />
                \(\begin{pmatrix} -1&5 \\ 7&6 \end{pmatrix}\)
                <hr />
                <!-- =====SOAL NO 15======================================================================= -->
                <li>Jika \(A=\begin{pmatrix}1&2 \\ 1&3 \end{pmatrix}\), \(B=\begin{pmatrix}3&2 \\ 2&2 \end{pmatrix}\) maka \(A^{-1}B\) adalah . . . </li>
                <input type="radio" name="soal15" value="0" />
                \(\begin{pmatrix} 3&1 \\ 2&1 \end{pmatrix}\)
                <br />
                <input type="radio" name="soal15" value="10" id="soal15" />
                \(\begin{pmatrix} 5&2 \\-1&0 \end{pmatrix}\)
                <br />
                <input type="radio" name="soal15" value="0" />
                \(\begin{pmatrix} 1&2 \\ 0&-1 \end{pmatrix}\)
                <br />
                <input type="radio" name="soal15" value="0" />
                \(\begin{pmatrix} 1&2 \\ 0&1 \end{pmatrix}\)
                <br />
                <input type="radio" name="soal15" value="0" />
                \(\begin{pmatrix} 5&1 \\ 1&3 \end{pmatrix}\)
                <hr />

            </ol>

{{-- COPY DARI SINI SETIAP SOAL --}}
{{-- TOMBOL KIRIM --}}
<input type="hidden" id="materi" name="materi" value="Matriks-04">

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
    <a href="/creatematriks04" id="kirimsaja" class="btn btn-warning btn-bukti d-none" >SIMPAN JAWABAN</a>
</div>
</form>
{{-- COPY SAMPAI SINI --}}

<div id="disqus_thread"></div>

</div>
</div>
</div>
</section>
@endsection

