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
            Matriks - Paket 03
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

                <!-- SOAL 1 -->

                    <li>Jika \(A=\begin{pmatrix}-1&1\\3&2 \end{pmatrix}, B=\begin{pmatrix}3&-1\\0&2 \end{pmatrix}\) dan \(C=\begin{pmatrix}2&-3\\2&3 \end{pmatrix}\) dan \(A+B-C^T = D^T\) maka \(D = ...\)</li>
                    <input type="radio" name="soal1" value="0" />
                    \(\begin{pmatrix}0&-2\\6&1 \end{pmatrix}\)
                    <br />
                    <input type="radio" name="soal1" value="10" id="soal1" />
                    \(\begin{pmatrix}0&6\\-2&1 \end{pmatrix}\)
                    <br />
                    <input type="radio" name="soal1" value="0" />
                    \(\begin{pmatrix}6&0\\-2&1 \end{pmatrix}\)<br />
                    <input type="radio" name="soal1" value="0" />
                    \(\begin{pmatrix}6&-2\\0&1 \end{pmatrix}\)<br />
                    <input type="radio" name="soal1" value="0" />
                    \(\begin{pmatrix}1&-2\\6&0 \end{pmatrix}\)<br />
                    <hr />
                    <!-- SOAL 2 -->
                    <li>
                      Diketahui matriks \(A=\begin{pmatrix}3&y\\5&-1 \end{pmatrix}\), \(B=\begin{pmatrix}x&5\\-3&6 \end{pmatrix}\) dan \(C=\begin{pmatrix}-3&-1\\y&9 \end{pmatrix}\). Jika \(A+B-C=\begin{pmatrix}8&5x\\-x&-4 \end{pmatrix}\),
                      maka nilai \(x^2+2xy+y^2\) adalah . . .
                    </li>
                    <input type="radio" name="soal2" value="10" id="soal2" />
                    6
                    <br />
                    <input type="radio" name="soal2" value="0" />
                    12
                    <br />
                    <input type="radio" name="soal2" value="0" />
                    24
                    <br />
                    <input type="radio" name="soal2" value="0" />
                    36
                    <br />
                    <input type="radio" name="soal2" value="0" />
                    48
                    <hr />
                    <!-- SOAL 3 -->
                    <li>Diketahui \(\begin{pmatrix}3&5\\1&2 \end{pmatrix}\)\(\begin{pmatrix}a&0\\a+b&c+2 \end{pmatrix}\)=\(\begin{pmatrix}1&-5\\0&-2 \end{pmatrix}\). Nilai dari \(a+b-c=...\)</li>
                    <input type="radio" name="soal3" value="0" />
                    -4
                    <br />
                    <input type="radio" name="soal3" value="0" />
                    -2
                    <br />
                    <input type="radio" name="soal3" value="0" />
                    0
                    <br />
                    <input type="radio" name="soal3" value="10" id="soal3" />
                    2
                    <br />
                    <input type="radio" name="soal3" value="0" />
                    8
                    <hr />
                    <!-- SOAL 4 -->
                    <li>Matriks \(A=\begin{pmatrix} a-b&a \\ a&a+b \end{pmatrix}\) tidak mempunyai invers bila . . .</li>
                    <input type="radio" name="soal4" value="0" />
                    \(a\) dan \(b\) sembarang
                    <br />
                    <input type="radio" name="soal4" value="0" />
                    \(a \ne 0\), \(b \ne 0\), dan \(a=b\)
                    <br />
                    <input type="radio" name="soal4" value="0" />
                    \(a \ne 0\), \(b \ne 0\), dan \(a=-b\)
                    <br />
                    <input type="radio" name="soal4" value="0" />
                    \(a=0\) dan \(b\) sembarang
                    <br />
                    <input type="radio" name="soal4" value="10" id="soal4" />
                    \(b=0\) dan \(a\) sembarang

                    <hr />
                    <!-- SOAL 5 -->
                    <li>Jika \(A=\begin{pmatrix}2&5 \\ 1&3 \end{pmatrix}\) dan \(B=\begin{pmatrix}5&4 \\ 1&1 \end{pmatrix}\), maka determinan \((AB)^{-1}=...\)</li>
                    <input type="radio" name="soal5" value="0" />
                    -2
                    <br />
                    <input type="radio" name="soal5" value="10" />
                    -1
                    <br />
                    <input type="radio" name="soal5" value="10" id="soal5" />
                    1
                    <br />
                    <input type="radio" name="soal5" value="0" />
                    2
                    <br />
                    <input type="radio" name="soal5" value="0" />
                    3

                    <hr />
                    <!-- SOAL 6 -->
                    <li>
                      \(A'\) adalah transpose dari \(A\). Jika \(C=\begin{pmatrix}\frac{4}{7}&-\frac{1}{7} \\ -\frac{1}{7}&\frac{2}{7} \end{pmatrix} \), \(B=\begin{pmatrix}4&2 \\ 2&8 \end{pmatrix} \), dan \(A=C^{-1} \), maka determinan dari
                      matriks \(A'B\) adalah . . .
                    </li>
                    <input type="radio" name="soal6" value="0" />
                    -196
                    <br />
                    <input type="radio" name="soal6" value="0" />
                    -188
                    <br />
                    <input type="radio" name="soal6" value="10" id="soal6" />
                    188
                    <br />
                    <input type="radio" name="soal6" value="10" />
                    196
                    <br />
                    <input type="radio" name="soal6" value="0" />
                    212

                    <hr />
                    <!-- SOAL 7 -->
                    <li>Matriks \(P\) yang memenuhi \(\begin{pmatrix}3&4 \\ 1&2 \end{pmatrix} P = \begin{pmatrix}2&1 \\ 4&3 \end{pmatrix}\) adalah . . .</li>
                    <input type="radio" name="soal7" value="0" />
                    \(\begin{pmatrix}-6&-5 \\ 5&-4 \end{pmatrix}\)
                    <br />
                    <input type="radio" name="soal7" value="0" />
                    \(\begin{pmatrix}-6&-5 \\ -5&4 \end{pmatrix}\)
                    <br />
                    <input type="radio" name="soal7" value="10" id="soal7" />
                    \(\begin{pmatrix}-6&-5 \\ 5&4 \end{pmatrix}\)
                    <br />
                    <input type="radio" name="soal7" value="0" />
                    \(\begin{pmatrix}-6&5 \\ 5&4 \end{pmatrix}\)
                    <br />
                    <input type="radio" name="soal7" value="0" />
                    \(\begin{pmatrix}-6&-5 \\ -5&-4 \end{pmatrix}\)

                    <hr />

                    <!-- SOAL 8 -->
                    <li>Jika \(B=\begin{pmatrix}1&2 \\ 3&5 \end{pmatrix}\) dan \(AB^{-1}=\begin{pmatrix}2&1 \\ 4&3 \end{pmatrix}\), maka \(A=...\)</li>
                    <input type="radio" name="soal8" value="10" id="soal8" />
                    \(\begin{pmatrix}5&9 \\ 12&23 \end{pmatrix}\)
                    <br />
                    <input type="radio" name="soal8" value="0" />
                    \(\begin{pmatrix}5&3 \\ 9&13 \end{pmatrix}\)
                    <br />
                    <input type="radio" name="soal8" value="0" />
                    \(\begin{pmatrix}3&5 \\ 9&23 \end{pmatrix}\)
                    <br />
                    <input type="radio" name="soal8" value="0" />
                    \(\begin{pmatrix}13&5 \\ 2&10 \end{pmatrix}\)
                    <br />
                    <input type="radio" name="soal8" value="0" />
                    \(\begin{pmatrix}9&5 \\ 12&3 \end{pmatrix}\)

                    <hr />
                    <!-- SOAL 9 -->
                    <li>Jika \(C\) adalah hasil perkalian matriks \(A\) dengan \(B\), yakni \(AB=C\) dengan \(C= \begin{pmatrix}6&7 \\ 19&18 \end{pmatrix}\) dan \(B=\begin{pmatrix}4&3 \\ 1&2 \end{pmatrix}\), maka \(A\) adalah . . .</li>
                    <input type="radio" name="soal9" value="0" />
                    \(\begin{pmatrix}1&4 \\ 2&3 \end{pmatrix}\)
                    <br />
                    <input type="radio" name="soal9" value="0" />
                    \(\begin{pmatrix}1&3 \\ 4&2 \end{pmatrix}\)
                    <br />
                    <input type="radio" name="soal9" value="0" />
                    \(\begin{pmatrix}1&-2 \\ -4&3 \end{pmatrix}\)
                    <br />
                    <input type="radio" name="soal9" value="10" id="soal9" />
                    \(\begin{pmatrix}1&2 \\ 4&3 \end{pmatrix}\)
                    <br />
                    <input type="radio" name="soal9" value="0" />
                    \(\begin{pmatrix}1&-3 \\ -4&2 \end{pmatrix}\)

                    <hr />
                    <!-- SOAL 10 -->
                    <li>Jika matriks \(B\) adalah invers dari matriks \(A\) dan \(AC=B\), maka \(C=...\)</li>
                    <input type="radio" name="soal10" value="0" />
                    \(\begin{pmatrix}1&0 \\ 0&1 \end{pmatrix}\)
                    <br />
                    <input type="radio" name="soal10" value="0" />
                    \(\begin{pmatrix}0&0 \\ 0&0 \end{pmatrix}\)
                    <br />
                    <input type="radio" name="soal10" value="0" />
                    \(A^2\)
                    <br />
                    <input type="radio" name="soal10" value="10" id="soal10" />
                    \(B^2\)
                    <br />
                    <input type="radio" name="soal10" value="0" />
                    \(AB\)
                    <hr />

                    <!-- SOAL 11 -->
                    <li>
                      Jika bilangan real \(a\), \(b\), dan \(c\) memenuhi persamaan \(a\begin{pmatrix}1 \\ 0 \\1 \end{pmatrix}-2b\begin{pmatrix}-1\\1\\0 \end{pmatrix}+c\begin{pmatrix}0\\-1\\1 \end{pmatrix}=\begin{pmatrix}1\\2\\1
                      \end{pmatrix}\), maka \(a+b+c=...\)
                    </li>
                    <input type="radio" name="soal11" value="0" />
                    \(\frac{1}{4}\)
                    <br />
                    <input type="radio" name="soal11" value="10" id="soal11" />
                    \(\frac{1}{2}\)
                    <br />
                    <input type="radio" name="soal11" value="0" />
                    \(0\)
                    <br />
                    <input type="radio" name="soal11" value="0" />
                    \(1\)
                    <br />
                    <input type="radio" name="soal11" value="0" />
                    \(2\)
                    <hr />

                    <!-- SOAL 12 -->
                    <li>Diketahui persamaan \(x\begin{pmatrix}2\\5\\-2 \end{pmatrix}+y\begin{pmatrix}-1\\-6\\5 \end{pmatrix}=\begin{pmatrix}-7\\-21\\2x-1 \end{pmatrix}\). Nilai \(z=...\)</li>
                    <input type="radio" name="soal12" value="0" />
                    \(-2\)
                    <br />
                    <input type="radio" name="soal12" value="0" />
                    \(3\)
                    <br />
                    <input type="radio" name="soal12" value="0" />
                    \(0\)
                    <br />
                    <input type="radio" name="soal12" value="10" id="soal12" />
                    \(6\)
                    <br />
                    <input type="radio" name="soal12" value="0" />
                    \(30\)
                    <hr />

                    <!-- SOAL 13 -->
                    <li>Nilai \(x\) yang memenuhi \(\begin{vmatrix}x&x \\ 2&x \end{vmatrix}=\begin{vmatrix}-2&-2 \\ 2&-2 \end{vmatrix}\) adalah . . .</li>
                    <input type="radio" name="soal13" value="0" />
                    \(0\)
                    <br />
                    <input type="radio" name="soal13" value="0" />
                    \(-2\)
                    <br />
                    <input type="radio" name="soal13" value="0" />
                    \(4\)
                    <br />
                    <input type="radio" name="soal13" value="10" id="soal13" />
                    \(-2\) atau \(4\)
                    <br />
                    <input type="radio" name="soal13" value="0" />
                    \(-4\) atau \(2\)
                    <hr />

                    <!-- SOAL 14============ -->
                    <li>Jika matriks \(A=\begin{pmatrix}1&4 \\ 2&3 \end{pmatrix}\) dan \(I=\begin{pmatrix}1&0 \\ 0&1 \end{pmatrix}\) memenuhi persamaan \(A^2 =pA+qI\), maka \(p-q=...\)</li>
                    <input type="radio" name="soal14" value="0" />
                    \(16\)
                    <br />
                    <input type="radio" name="soal14" value="0" />
                    \(9\)
                    <br />
                    <input type="radio" name="soal14" value="0" />
                    \(8\)
                    <br />
                    <input type="radio" name="soal14" value="0" />
                    \(1\)
                    <br />
                    <input type="radio" name="soal14" value="10" id="soal14" />
                    \(-1\)
                    <hr />

                    <!-- SOAL 15 -->
                    <li>Diketahui \(A=\begin{pmatrix}5+x & x \\ 5&3x \end{pmatrix}\) dan \(\begin{pmatrix}9&-x \\ 7&4 \end{pmatrix}\). Jika determinan \(A\) dan determinan \(B\) sama, maka harga \(x\) yang memenuhi adalah . . .</li>
                    <input type="radio" name="soal15" value="0" />
                    3 dan 4
                    <br />
                    <input type="radio" name="soal15" value="0" />
                    -3 atau 4
                    <br />
                    <input type="radio" name="soal15" value="10" id="soal15" />
                    3 atau -4
                    <br />
                    <input type="radio" name="soal15" value="0" />
                    -4 atau 5
                    <br />
                    <input type="radio" name="soal15" value="0" />
                    3 atau -5
                    <hr />

            </ol>

{{-- COPY DARI SINI SETIAP SOAL --}}
{{-- TOMBOL KIRIM --}}
<input type="hidden" id="materi" name="materi" value="Matriks-03">

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
    <a href="/creatematriks03" id="kirimsaja" class="btn btn-warning btn-bukti d-none" >SIMPAN JAWABAN</a>
</div>
</form>
{{-- COPY SAMPAI SINI --}}

<div id="disqus_thread"></div>

</div>
</div>
</div>
</section>
@endsection

