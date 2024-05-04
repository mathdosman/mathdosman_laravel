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
            Matriks - Paket 02
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

                    <li>Jika diketahui matriks \(A=\begin{pmatrix} 1&-1 \\ 2&-2 \end{pmatrix}\) dan \(B=\begin{pmatrix} 1&1 \\ 4&-2 \end{pmatrix}\) maka \((A+B)^2\) sama dengan . . .</li>
                    <input type="radio" name="soal1" value="0" />
                    \(\begin{pmatrix} 4&0 \\ 6&9 \end{pmatrix}\)
                    <br />
                    <input type="radio" name="soal1" value="10" id="soal1" />
                    \(\begin{pmatrix} 4&0 \\ -12&16 \end{pmatrix}\)
                    <br />
                    <input type="radio" name="soal1" value="0" />
                    \(\begin{pmatrix} -4&0 \\ 6&9 \end{pmatrix}\)
                    <br />
                    <input type="radio" name="soal1" value="0" />
                    \(\begin{pmatrix} 4&0 \\ 6&-9 \end{pmatrix}\)
                    <br />
                    <input type="radio" name="soal1" value="0" />
                    \(\begin{pmatrix} 4&0 \\ -6&-9 \end{pmatrix}\)
                    <hr />
                    <!--========================= soal no 2 ===========================================================================-->
                    <li>Jika \(A=\begin{pmatrix} 1&0 \\ 2&3 \end{pmatrix}\) dan \(I\) matriks satuan ordo dua, maka \(A^2 - 2A +I=...\)</li>
                    <input type="radio" name="soal2" value="0" />
                    \(\begin{pmatrix} 4&0 \\ 0&4 \end{pmatrix}\)
                    <br />
                    <input type="radio" name="soal2" value="0" />
                    \(\begin{pmatrix} 0&0 \\ 3&4 \end{pmatrix}\)
                    <br />
                    <input type="radio" name="soal2" value="0" />
                    \(\begin{pmatrix} 1&0 \\ 3&4 \end{pmatrix}\)
                    <br />
                    <input type="radio" name="soal2" value="10" id="soal2" />
                    \(\begin{pmatrix} 0&0 \\ 4&4 \end{pmatrix}\)
                    <br />
                    <input type="radio" name="soal2" value="0" />
                    \(\begin{pmatrix} 2&0 \\ 4&4 \end{pmatrix}\)
                    <hr />
                    <!--================================================== soal no 3 ======================================================-->
                    <li>Diketahui \(K=\begin{pmatrix} a&2&3 \\ 5&4&b \\ 8&3c&11 \end{pmatrix}\) dan \(L\begin{pmatrix} 6&2&3 \\5&4&2a \\8&4b&11 \end{pmatrix}\) Kalau \(K=L\), maka nilai \(c=...\)</li>
                    <input type="radio" name="soal3" value="10" id="soal3" />
                    16
                    <br />
                    <input type="radio" name="soal3" value="0" />
                    15
                    <br />
                    <input type="radio" name="soal3" value="0" />
                    14
                    <br />
                    <input type="radio" name="soal3" value="0" />
                    13
                    <br />
                    <input type="radio" name="soal3" value="0" />
                    12
                    <hr />
                    <!-- soal no no4 =================================================================================================-->
                    <li>
                      Matriks \(A=\begin{pmatrix} a&4 \\ 2b&3c \end{pmatrix}\) dan \(B=\begin{pmatrix} 2c-3b&2a+1 \\ a&b+7 \end{pmatrix}\). Supaya dipenuhi \(A=2B'\), dengan \(B'\) menyatakan matriks transpose dari \(B\), maka nilai
                      \(c=...\)
                    </li>
                    <input type="radio" name="soal4" value="0" />
                    2
                    <br />
                    <input type="radio" name="soal4" value="0" />
                    3
                    <br />
                    <input type="radio" name="soal4" value="0" />
                    5
                    <br />
                    <input type="radio" name="soal4" value="10" id="soal4" />
                    8
                    <br />
                    <input type="radio" name="soal4" value="0" />
                    10
                    <hr />

                    <!-- soal no 5 ================================================================================================-->
                    <li>
                      Bila diketahui
                      <div class="overflow-auto">$$\begin{pmatrix} 4&x-2 \\ 3&2 \end{pmatrix}+\begin{pmatrix} -6&8 \\ -11&-6 \end{pmatrix}=2\begin{pmatrix} 3&1 \\ -2&4 \end{pmatrix}\begin{pmatrix} 0&3 \\ -1&1 \end{pmatrix}$$</div>
                    </li>
                    <input type="radio" name="soal5" value="0" />
                    0
                    <br />
                    <input type="radio" name="soal5" value="0" />
                    10
                    <br />
                    <input type="radio" name="soal5" value="0" />
                    13
                    <br />
                    <input type="radio" name="soal5" value="10" id="soal5" />
                    14
                    <br />
                    <input type="radio" name="soal5" value="0" />
                    25
                    <hr />
                    <!-- =====SOAL NO 6======================================================================= -->
                    <li>Jika untuk matriks \(A=\begin{pmatrix} a&b \\ o&d \end{pmatrix}\) dan \(B=\begin{pmatrix} p&q \\o&s \end{pmatrix}\) berlaku \(AB=BA\), maka . . .</li>
                    <input type="radio" name="soal6" value="10" id="soal6" />
                    \((a-d)q=(p-s)b\)
                    <br />
                    <input type="radio" name="soal6" value="0" />
                    \((a+d)q=(p+s)b\)
                    <br />
                    <input type="radio" name="soal6" value="0" />
                    \((a-d)b=(p-s)q\)
                    <br />
                    <input type="radio" name="soal6" value="0" />
                    \((a+d)ab=(p+s)q\)
                    <br />
                    <input type="radio" name="soal6" value="0" />
                    \((a-d)q=(s-p)b\)
                    <hr />
                    <!-- =====SOAL NO 7======================================================================= -->
                    <li>Untuk nilai-niali \(x\) dan \(y\) yang memenuhi \(\begin{pmatrix} 4&-3 \\ 2&-5 \end{pmatrix}\begin{pmatrix} x \\ y \end{pmatrix}=\begin{pmatrix} -3 \\ 9 \end{pmatrix}\) berlaku \(x-y = ...\)</li>
                    <input type="radio" name="soal7" value="0" />
                    6
                    <br />
                    <input type="radio" name="soal7" value="0" />
                    3
                    <br />
                    <input type="radio" name="soal7" value="0" />
                    1
                    <br />
                    <input type="radio" name="soal7" value="10" id="soal7" />
                    0
                    <br />
                    <input type="radio" name="soal7" value="0" />
                    -3
                    <hr />
                    <!-- =====SOAL NO 8======================================================================= -->
                    <li>Jika \(M=\begin{pmatrix} 2&3 \\ -1&5 \end{pmatrix}\), maka \(|M|=...\)</li>
                    <input type="radio" name="soal8" value="0" />
                    -13
                    <br />
                    <input type="radio" name="soal8" value="0" />
                    -7
                    <br />
                    <input type="radio" name="soal8" value="0" />
                    7
                    <br />
                    <input type="radio" name="soal8" value="10" id="soal8" />
                    13
                    <br />
                    <input type="radio" name="soal8" value="0" />
                    semua salah
                    <hr />
                    <!-- =====SOAL NO 9======================================================================= -->
                    <li>Jika matriks \(A=\begin{pmatrix} x&5 \\ 1&x-2 \end{pmatrix}\) dan \(B=\begin{pmatrix} 2&3x-2 \\ 5&5 \end{pmatrix}\) mempunyai determinan yang sama, maka nilai \(x\) positif yang memenuhi adalah . . .</li>
                    <input type="radio" name="soal9" value="0" />
                    1,5
                    <br />
                    <input type="radio" name="soal9" value="0" />
                    2
                    <br />
                    <input type="radio" name="soal9" value="10" id="soal9" />
                    2,5
                    <br />
                    <input type="radio" name="soal9" value="0" />
                    4,5
                    <br />
                    <input type="radio" name="soal9" value="0" />
                    5
                    <hr />
                    <!-- =====SOAL NO 10======================================================================= -->
                    <li>Hasil kali akar-akar persamaan \(\begin{vmatrix} 3x-1&3 \\ x+1 & x+2 \end{vmatrix}=0\) adalah . . .</li>
                    <input type="radio" name="soal10" value="0" />
                    \(-\frac{2}{3} \)
                    <br />
                    <input type="radio" name="soal10" value="0" />
                    \(-\frac{4}{3} \)
                    <br />
                    <input type="radio" name="soal10" value="10" id="soal10" />
                    \(-\frac{5}{3} \)
                    <br />
                    <input type="radio" name="soal10" value="0" />
                    \(\frac{2}{3} \)
                    <br />
                    <input type="radio" name="soal10" value="0" />
                    \(\frac{4}{3} \)
                    <hr />
                    <!-- =====SOAL NO 11======================================================================= -->
                    <li>Diketahui matriks \(A=\begin{pmatrix}1&2 \\ 4&3 \end{pmatrix}\) dan \(I=\begin{pmatrix}1&0 \\ 0&1 \end{pmatrix}\). Tentukan nilai \(x\) supaya matriks \((A-xI)\) merupakan matriks singular.</li>
                    <input type="radio" name="soal11" value="0" />
                    -1 atau 0
                    <br />
                    <input type="radio" name="soal11" value="0" />
                    5 atau 0
                    <br />
                    <input type="radio" name="soal11" value="0" />
                    1 atau 5
                    <br />
                    <input type="radio" name="soal11" value="10" id="soal11" />
                    -1 atau 5
                    <br />
                    <input type="radio" name="soal11" value="0" />
                    1 atau -5
                    <hr />
                    <!-- =====SOAL NO 12======================================================================= -->
                    <li>Invers matriks \(\begin{pmatrix}2&-3 \\ -2&4 \end{pmatrix}\) adalah . . .</li>
                    <input type="radio" name="soal12" value="0" />
                    \(\begin{pmatrix}4&3 \\ 2&2 \end{pmatrix}\)
                    <br />
                    <input type="radio" name="soal12" value="0" />
                    \(\begin{pmatrix} 2&1 \\ \frac{1}{2}&1 \end{pmatrix}\)
                    <br />
                    <input type="radio" name="soal12" value="10" id="soal12" />
                    \(\frac{1}{2}\begin{pmatrix}4&3 \\ 2&2 \end{pmatrix} \)
                    <br />
                    <input type="radio" name="soal12" value="0" />
                    \(\frac{1}{3}\begin{pmatrix}4&3 \\ 2&2 \end{pmatrix} \)
                    <br />
                    <input type="radio" name="soal12" value="0" />
                    \(\frac{1}{4}\begin{pmatrix}4&3 \\ 2&2 \end{pmatrix} \)
                    <hr />
                    <!-- =====SOAL NO 13======================================================================= -->
                    <li>Jika invers dari matriks \(A\) adalah \(\begin{pmatrix}4&2 \\ 3&1 \end{pmatrix}\) maka matriks \(A\) adalah . . .</li>
                    <input type="radio" name="soal13" value="10" id="soal13" />
                    \(\begin{pmatrix} -\frac{1}{2}&1 \\ \frac{3}{2}&-2 \end{pmatrix}\)
                    <br />
                    <input type="radio" name="soal13" value="0" />
                    \(\begin{pmatrix} -\frac{1}{2}&2 \\ 3&-2 \end{pmatrix}\)
                    <br />
                    <input type="radio" name="soal13" value="0" />
                    \(\begin{pmatrix} 1&-1 \\ -3&4 \end{pmatrix}\)
                    <br />
                    <input type="radio" name="soal13" value="0" />
                    \(\begin{pmatrix} \frac{1}{2}&-1 \\ -\frac{1}{2}&2 \end{pmatrix}\)
                    <br />
                    <input type="radio" name="soal13" value="0" />
                    \(\begin{pmatrix} 1&-1 \\ -\frac{3}{2}&2 \end{pmatrix}\)
                    <hr />
                    <!-- =====SOAL NO 14======================================================================= -->
                    <li>JIka \(A=\begin{pmatrix} 1&2 \\ 1&3\end{pmatrix}\) dan \(B=\begin{pmatrix}3&2 \\ 2&2 \end{pmatrix}\) maka \((AB)^{-1}\) adalah . . .</li>
                    <input type="radio" name="soal14" value="0" />
                    \(\begin{pmatrix} 1&-1 \\ -1&\frac{3}{2} \end{pmatrix}\)
                    <br />
                    <input type="radio" name="soal14" value="10" id="soal14" />
                    \(\begin{pmatrix} 4&-3 \\ -\frac{9}{2}&\frac{7}{2} \end{pmatrix}\)
                    <br />
                    <input type="radio" name="soal14" value="0" />
                    \(\begin{pmatrix} 3&-2 \\ -1&1 \end{pmatrix}\)
                    <br />
                    <input type="radio" name="soal14" value="0" />
                    \(\begin{pmatrix} 5&-6 \\ -1&\frac{5}{4} \end{pmatrix}\)
                    <br />
                    <input type="radio" name="soal14" value="0" />
                    \(\begin{pmatrix} 1&\frac{3}{2} \\ -1&-1 \end{pmatrix}\)
                    <hr />
                    <!-- =====SOAL NO 15======================================================================= -->
                    <li>Jika \(MN=\begin{pmatrix}1&0 \\ 0&1 \end{pmatrix}\) dan \(N=\begin{pmatrix}2&4 \\ 1&6 \end{pmatrix}\), maka matriks \(M=...\)</li>
                    <input type="radio" name="soal15" value="0" />
                    \(\begin{pmatrix} \frac{1}{4}&\frac{-1}{2} \\ \frac{-1}{8}&\frac{3}{4} \end{pmatrix}\)
                    <br />
                    <input type="radio" name="soal15" value="10" id="soal15" />
                    \(\begin{pmatrix} \frac{3}{4}&\frac{-1}{2} \\ \frac{-1}{8}&\frac{1}{4} \end{pmatrix}\)
                    <br />
                    <input type="radio" name="soal15" value="0" />
                    \(\begin{pmatrix} \frac{-3}{4}&\frac{1}{2} \\ \frac{1}{8}&\frac{-1}{4} \end{pmatrix}\)
                    <br />
                    <input type="radio" name="soal15" value="0" />
                    \(\begin{pmatrix} \frac{1}{4}&\frac{1}{2} \\ \frac{-1}{8}&\frac{3}{4} \end{pmatrix}\)
                    <br />
                    <input type="radio" name="soal15" value="0" />
                    \(\begin{pmatrix} \frac{-1}{4}&1 \\ \frac{1}{8}&\frac{-3}{4} \end{pmatrix}\)
                    <hr />



            </ol>

{{-- COPY DARI SINI SETIAP SOAL --}}
{{-- TOMBOL KIRIM --}}
<input type="hidden" id="materi" name="materi" value="Matriks-02">

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
    <a href="/creatematriks02" id="kirimsaja" class="btn btn-warning btn-bukti d-none" >SIMPAN JAWABAN</a>
</div>
</form>
{{-- COPY SAMPAI SINI --}}

<div id="disqus_thread"></div>

</div>
</div>
</div>
</section>
@endsection

