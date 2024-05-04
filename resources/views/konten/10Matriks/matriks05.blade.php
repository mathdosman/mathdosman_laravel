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
            Matriks - Paket 05
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

                <li>Diketahui matriks \(A =\begin{pmatrix}3&-2&0 \\ -1&-4&3 \\4&2&1 \end{pmatrix}\) elemen pada baris kedua adalah . . .</li>
                <input type="radio" name="soal1" value="0" />
                \(3, -2, 0\)
                <br />
                <input type="radio" name="soal1" value="10" id="soal1"/>
                \(-1, -4, 3\)
                <br />
                <input type="radio" name="soal1" value="0"  />
                \(4, 2, 1\)
                <br />
                <input type="radio" name="soal1" value="0" />
                \(-2, -4, 2\)
                <br />
                <input type="radio" name="soal1" value="0" />
                \(3, 4, 1\)
                <hr />
                <!--========================= soal no 2 ===========================================================================-->
                <li>Diketahui kesamaan matriks \(\begin{pmatrix}3x&2\\-1&2y\end{pmatrix}+\begin{pmatrix}y&-8\\5&3\end{pmatrix}=\begin{pmatrix}11&-6\\4&13\end{pmatrix}\), maka nilai \(x+y= ...\)</li>
                <input type="radio" name="soal2" value="0" />
                \(5\)
                <br />
                <input type="radio" name="soal2" value="0" />
                \(6\)
                <br />
                <input type="radio" name="soal2" value="10" id="soal2" />
                \(7\)
                <br />
                <input type="radio" name="soal2" value="0" />
                \(8\)
                <br />
                <input type="radio" name="soal2" value="0" />
                \(9\)
                <hr />
                <!--================================================== soal no 3 ======================================================-->
                <li>Jika \(\begin{pmatrix}5&3x+2x\\x-3y&-8\end{pmatrix}=\begin{pmatrix}5&5\\9&-8\end{pmatrix}\), nilai \(2x+5y\) adalah . . .</li>
                <input type="radio" name="soal3" value="0"  />
                \(-11\)
                <br />
                <input type="radio" name="soal3" value="10" id="soal3" />
                \(-4\)
                <br />
                <input type="radio" name="soal3" value="0" />
                \(1\)
                <br />
                <input type="radio" name="soal3" value="0" />
                \(4\)
                <br />
                <input type="radio" name="soal3" value="0" />
                \(11\)
                <hr />
                <!-- soal no no4 =================================================================================================-->
                <li>Diketahui \(\begin{pmatrix}12&-7\\-6&20\end{pmatrix}+\begin{pmatrix}7&-2\\2x+3&x-y\end{pmatrix}=\begin{pmatrix}3y-5&-9\\x+y&23\end{pmatrix}\). Nilai \(4x-3y=...\)</li>
                </li>
                <input type="radio" name="soal4" value="0" />
                \(-5\)
                <br />
                <input type="radio" name="soal4" value="0" />
                \(-1\)
                <br />
                <input type="radio" name="soal4" value="0" />
                \(8\)
                <br />
                <input type="radio" name="soal4" value="0"  />
                \(11\)
                <br />
                <input type="radio" name="soal4" value="10" id="soal4"/>
                \(20\)
                <hr />
                <!-- soal no 5 ================================================================================================-->
                <li>Diketahui matriks \(A=\begin{pmatrix}3&2\\-1&4\end{pmatrix}\), \(B=\begin{pmatrix}1&3\\2&-1\end{pmatrix}\), dan \(C=\begin{pmatrix}7&4\\3&2\end{pmatrix}\). Matriks \(A-B+C=...\)</li>
                <input type="radio" name="soal5" value="10" id="soal5"/>
                \(\begin{pmatrix}9&3\\0&7\end{pmatrix}\)
                <br />
                <input type="radio" name="soal5" value="0" />
                \(\begin{pmatrix}-3&1\\-2&1\end{pmatrix}\)
                <br />
                <input type="radio" name="soal5" value="0"   />
                \(\begin{pmatrix}11&9\\4&5\end{pmatrix}\)
                <br />
                <input type="radio" name="soal5" value="0"/>
                \(\begin{pmatrix}3&9\\5&4\end{pmatrix}\)
                <br />
                <input type="radio" name="soal5" value="0" />
                \(\begin{pmatrix}-3&9\\4&5\end{pmatrix}\)
                <hr />
                <!-- =====SOAL NO 6======================================================================= -->
                <li>Diketahui matriks \(A=\begin{pmatrix}-1&2\\3&1\end{pmatrix}\), dan \(B=\begin{pmatrix}3&-2\\1&4\end{pmatrix}\). Nilai 3A+2B=</li>
                <input type="radio" name="soal6" value="0"  />
                \(\begin{pmatrix}-9&-10\\7&-5\end{pmatrix}\)
                <br />
                <input type="radio" name="soal6" value="0" />
                \(\begin{pmatrix}9&10\\-7&5\end{pmatrix}\)
                <br />
                <input type="radio" name="soal6" value="10" id="soal6"/>
                \(\begin{pmatrix}3&2\\11&11\end{pmatrix}\)
                <br />
                <input type="radio" name="soal6" value="0" />
                \(\begin{pmatrix}-3&-2\\-11&-11\end{pmatrix}\)
                <br />
                <input type="radio" name="soal6" value="0" />
                \(\begin{pmatrix}3&-2\\-11&11\end{pmatrix}\)
                <hr />
                <!-- =====SOAL NO 7======================================================================= -->
                <li>Diketahui \(A=\begin{pmatrix}1&a\\2&-1\end{pmatrix}\), \(B=\begin{pmatrix}3&b\\a+b&1\end{pmatrix}\), dan \(C=\begin{pmatrix}-1&3\\8&-3\end{pmatrix}\). Jika \(2A-B=C^T\) dengan \(C^T\) adalah transpose dari matriks \(C\), nilai \(a-b=...\)</li>
                <input type="radio" name="soal7" value="0" />
                \(1\)
                <br />
                <input type="radio" name="soal7" value="0" />
                \(2\)
                <br />
                <input type="radio" name="soal7" value="0" />
                \(3\)
                <br />
                <input type="radio" name="soal7" value="0"  />
                \(4\)
                <br />
                <input type="radio" name="soal7" value="10" id="soal7"/>
                \(5\)
                <hr />
        <!-- =====SOAL NO 8======================================================================= -->
                <li>Jika \(\begin{pmatrix}3&4y\\-6&15\end{pmatrix}=3\begin{pmatrix}1&-8\\-2&5\end{pmatrix}\), nilai \(y=...\)</li>
                <input type="radio" name="soal8" value="10" id="soal8"/>
                \(-6\)
                <br />
                <input type="radio" name="soal8" value="0" />
                \(-3\)
                <br />
                <input type="radio" name="soal8" value="0"  />
                \(2 \)
                <br />
                <input type="radio" name="soal8" value="0"  />
                \(4 \)
                <br />
                <input type="radio" name="soal8" value="0" />
                \(8\)
                <hr />
                <!-- =====SOAL NO 9======================================================================= -->
                <li>Diketahui matriks \(A=\begin{pmatrix}2&3\\4&-2\end{pmatrix}\) dan \(B=\begin{pmatrix}2&1\\-1&3\end{pmatrix}\). Maka matriks \(AB^T=...\)</li>
                <input type="radio" name="soal9" value="0" />
                \(\begin{pmatrix}6&-10\\7&7\end{pmatrix}\)
                <br />
                <input type="radio" name="soal9" value="0" />
                \(\begin{pmatrix}7&6\\-10&7\end{pmatrix}\)
                <br />
                <input type="radio" name="soal9" value="10"  />
                \(\begin{pmatrix}-10&7\\6&7\end{pmatrix}\)
                <br />
                <input type="radio" name="soal9" value="10" id="soal9"/>
                \(\begin{pmatrix}7&7\\6&-10\end{pmatrix}\)
                <br />
                <input type="radio" name="soal9" value="0" />
                \(\begin{pmatrix}7&-10\\6&7\end{pmatrix}\)
                <hr />
                <!-- =====SOAL NO 10======================================================================= -->
                <li>Diketahui matriks \(A=\begin{pmatrix}a&b\\0&1\end{pmatrix}\),\(B=\begin{pmatrix}6&1\\-8&7\end{pmatrix}\),\(C=\begin{pmatrix}2&-2\\1&c\end{pmatrix}\), \(D=\begin{pmatrix}1&-1\\0&2\end{pmatrix}\). Jika \(2A+B^T=CD\) dan \(B^T\)   adalah transpose \(B\), nilai \(a+b-c=...\)
                </li>
                <input type="radio" name="soal10" value="0" />
                \(-8\)
                <br />
                <input type="radio" name="soal10" value="10" id="soal10"/>
                \(-6\)
                <br />
                <input type="radio" name="soal10" value="0"  />
                \(-4\)
                <br />
                <input type="radio" name="soal10" value="0" />
                \(6\)
                <br />
                <input type="radio" name="soal10" value="0" />
                \(8\)
                <hr />
                <!-- =====SOAL NO 11======================================================================= -->
                <li>Jika \(A=\begin{pmatrix}2&-1\\3&5\end{pmatrix}\) dan \(B=\begin{pmatrix}3&2\\-1&4\end{pmatrix}\), nilai \((A-B)^2=...\)</li>
                <input type="radio" name="soal11" value="10" id="soal11"/>
                \(\begin{pmatrix}-11&0\\0&-11\end{pmatrix}\)
                <br />
                <input type="radio" name="soal11" value="0" />
                \(\begin{pmatrix}0&-11\\-11&0\end{pmatrix}\)
                <br />
                <input type="radio" name="soal11" value="0" />
                \(\begin{pmatrix}11&0\\0&11\end{pmatrix}\)
                <br />
                <input type="radio" name="soal11" value="0"  />
                \(\begin{pmatrix}0&11\\11&0\end{pmatrix}\)
                <br />
                <input type="radio" name="soal11" value="0" />
                \(\begin{pmatrix}-11&-11\\0&0\end{pmatrix}\)
                <hr />
                <!-- =====SOAL NO 12======================================================================= -->
                <li>Jika \(2\begin{pmatrix}a&2\\-3&1\end{pmatrix}+\begin{pmatrix}4&-1\\0&b\end{pmatrix}\)\(=\)\(\begin{pmatrix}3&2\\c&4\end{pmatrix}\begin{pmatrix}2&d\\1&3\end{pmatrix}\), nilai \(a+b+c+d=...\)
                </li>
                <input type="radio" name="soal12" value="10" id="soal12"/>
                \(11\)
                <br />
                <input type="radio" name="soal12" value="0" />
                \(13\)
                <br />
                <input type="radio" name="soal12" value="0"  />
                \(15\)
                <br />
                <input type="radio" name="soal12" value="0" />
                \(17\)
                <br />
                <input type="radio" name="soal12" value="0" />
                \(19\)
                <hr />
                <!-- =====SOAL NO 13======================================================================= -->
                <li>Diketahui matriks \(A=\begin{pmatrix}7&-2\\4&5\end{pmatrix}\) dan \(B=\begin{pmatrix}-2&5\\3&1\end{pmatrix}\).  Determinan matriks \(2A-3B\) adalah . . .</li>
                <input type="radio" name="soal13" value="0"  />
                \(159\)
                <br />
                <input type="radio" name="soal13" value="0" />
                \(151\)
                <br />
                <input type="radio" name="soal13" value="0" />
                \(142\)
                <br />
                <input type="radio" name="soal13" value="0" />
                \(137\)
                <br />
                <input type="radio" name="soal13" value="10" id="soal13" />
                \(121\)
                <hr />
                <!-- =====SOAL NO 14======================================================================= -->
                <li>Diketahui \(A=\begin{pmatrix}-1&-3\\1&4\end{pmatrix}\) dan \(B=\begin{pmatrix}2&0\\3&-6\end{pmatrix}\). Maka nilai \(\text{det}(AB)\) adalah . . .</li>
                <input type="radio" name="soal14" value="10" id="soal14"/>
                \(12\)
                <br />
                <input type="radio" name="soal14" value="0"  />
                \(14\)
                <br />
                <input type="radio" name="soal14" value="0" />
                \(16\)
                <br />
                <input type="radio" name="soal14" value="0" />
                \(18\)
                <br />
                <input type="radio" name="soal14" value="0" />
                \(20\)
                <hr />
                <!-- =====SOAL NO 15======================================================================= -->
                <li>Jika \(A=\begin{pmatrix}3&5&-1\\2&3&1\\-1&2&2\end{pmatrix}\), determinan \(A=...\)</li>
                <input type="radio" name="soal15" value="0" />
                \(30\)
                <br />
                <input type="radio" name="soal15" value="0"  />
                \(10\)
                <br />
                <input type="radio" name="soal15" value="10" id="soal15"/>
                \(-20\)
                <br />
                <input type="radio" name="soal15" value="0" />
                \(-30\)
                <br />
                <input type="radio" name="soal15" value="0" />
                \(-40\)
                <hr />
                <!-- =====SOAL NO 16======================================================================= -->
                <li>Diketahui matriks \(P^{-1}=\begin{pmatrix}3&2\\-1&1\end{pmatrix}\) dan matriks \(Q=\begin{pmatrix}1&4\\-2&-1\end{pmatrix}\). Hasil dari \((PQ^{-1} )^{-1}=...\)</li>
                <input type="radio" name="soal16" value="0" />
                \(\begin{pmatrix}-5&6\\-5&-1\end{pmatrix}\)
                <br />
                <input type="radio" name="soal16" value="0"  />
                \(\begin{pmatrix}1&6\\-5&-5\end{pmatrix}\)
                <br />
                <input type="radio" name="soal16" value="0" />
                \(\begin{pmatrix}1&6\\5&5\end{pmatrix}\)
                <br />
                <input type="radio" name="soal16" value="10" id="soal16"/>
                \(\begin{pmatrix}-1&6\\-5&-5\end{pmatrix}\)
                <br />
                <input type="radio" name="soal16" value="0" />
                \(\begin{pmatrix}-5&-6\\5&1\end{pmatrix}\)
                <hr />
                <!-- =====SOAL NO 17======================================================================= -->
                <li>Diketahui matriks \(A=\begin{pmatrix}1&-2\\-1&3\end{pmatrix}\) dan matriks \(B=\begin{pmatrix}2&1\\-1&-1\end{pmatrix}\). Invers dari matriks \(AB\) adalah . . . </li>
                <input type="radio" name="soal17" value="0" />
                \(\begin{pmatrix}4&-3\\5&-4\end{pmatrix}\)
                <br />
                <input type="radio" name="soal17" value="0" />
                \(\begin{pmatrix}-4&-3\\5&4\end{pmatrix}\)
                <br />
                <input type="radio" name="soal17" value="10" id="soal17" />
                \(\begin{pmatrix}4&3\\-5&-4\end{pmatrix}\)
                <br />
                <input type="radio" name="soal17" value="0" />
                \(\begin{pmatrix}-4&3\\-5&4\end{pmatrix}\)
                <br />
                <input type="radio" name="soal17" value="0" />
                \(\begin{pmatrix}4&3\\5&-4\end{pmatrix}\)
                <hr />
                <!-- =====SOAL NO 18======================================================================= -->
                <li>Matriks \(X\) yang memenuhi \(X\begin{pmatrix}2&-1\\1&3\end{pmatrix}=\begin{pmatrix}3&2\\5&1\end{pmatrix}\) adalah . . .</li>
                <input type="radio" name="soal18" value="0" />
                \(\begin{pmatrix}1&2\\1&1\end{pmatrix}\)
                <br />
                <input type="radio" name="soal18" value="0"  />
                \(\begin{pmatrix}1&1\\1&2\end{pmatrix}\)
                <br />
                <input type="radio" name="soal18" value="0" />
                \(\begin{pmatrix}-1&2\\1&1\end{pmatrix}\)
                <br />
                <input type="radio" name="soal18" value="0" />
                \(\begin{pmatrix}2&1\\-1&1\end{pmatrix}\)
                <br />
                <input type="radio" name="soal18" value="10" id="soal18" />
                \(\begin{pmatrix}1&1\\2&1\end{pmatrix}\)
                <hr />
                <!-- =====SOAL NO 19======================================================================= -->
                <li>Diketahui matriks \(A=\begin{pmatrix}1&2\\1&3\end{pmatrix}\) dan \(B=\begin{pmatrix}4&1\\1&3\end{pmatrix}\). Matriks \(C\) berordo \(2 \times 2\) memenuhi \(AC=B\). Determinan matriks \(C\) adalah . . .</li>
                <input type="radio" name="soal19" value="0" />
                \(12\)
                <br />
                <input type="radio" name="soal19" value="10"  id="soal19"/>
                \(11\)
                <br />
                <input type="radio" name="soal19" value="0" />
                \(9\)
                <br />
                <input type="radio" name="soal19" value="0" />
                \(6\)
                <br />
                <input type="radio" name="soal19" value="0" />
                \(1\)
                <hr />
                <!-- =====SOAL NO 20======================================================================= -->
                <li>Jumlah umur kakak dan dua kali umur adik adalah \(27\) tahun. Selisih umur kakak dan umur adik adalah \(3\) tahun. Jika umur kakak \(x\) tahun dan umur adik \(y\) tahun, persamaan matriks yang sesuai dengan permasalahan tersebut adalah . . .</li>
                <input type="radio" name="soal20" value="0" />
                \(\begin{pmatrix}x\\y\end{pmatrix}=\begin{pmatrix}2&1\\1&-1\end{pmatrix}\begin{pmatrix}9\\1\end{pmatrix}\)
                <br />
                <input type="radio" name="soal20" value="0"  />
                \(\begin{pmatrix}x\\y\end{pmatrix}=\begin{pmatrix}2&-1\\1&1\end{pmatrix}\begin{pmatrix}9\\1\end{pmatrix}\)
                <br />
                <input type="radio" name="soal20" value="0" />
                \(\begin{pmatrix}x\\y\end{pmatrix}=\begin{pmatrix}1&2\\1&-1\end{pmatrix}\begin{pmatrix}9\\1\end{pmatrix}\)
                <br />
                <input type="radio" name="soal20" value="0" />
                \(\begin{pmatrix}x\\y\end{pmatrix}=\begin{pmatrix}-1&2\\1&1\end{pmatrix}\begin{pmatrix}9\\1\end{pmatrix}\)
                <br />
                <input type="radio" name="soal20" value="10" id="soal20"/>
                \(\begin{pmatrix}x\\y\end{pmatrix}=\begin{pmatrix}1&-2\\1&-1\end{pmatrix}\begin{pmatrix}9\\1\end{pmatrix}\)
                <hr />

            </ol>

{{-- COPY DARI SINI SETIAP SOAL --}}
{{-- TOMBOL KIRIM --}}
<input type="hidden" id="materi" name="materi" value="Matriks-05">

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
    <a href="/creatematriks05" id="kirimsaja" class="btn btn-warning btn-bukti d-none" >SIMPAN JAWABAN</a>
</div>
</form>
{{-- COPY SAMPAI SINI --}}

<div id="disqus_thread"></div>

</div>
</div>
</div>
</section>
@endsection

