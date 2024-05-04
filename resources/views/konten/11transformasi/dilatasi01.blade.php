@extends('konten.11transformasi.11.template')
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
            Dilatasi - 01 + Pembahasan
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

                <li>Hasil dilatasi titik \(A(-1,3)\) dengan faktor skala \(-2\) terhadap titik pusat \((0,0)\) </li>
                <input type="radio" name="soal1" value="0" />
                \((-6,2) \)
                <br />
                <input type="radio" name="soal1" value="0" />
                \((6,-2) \)
                <br />
                <input type="radio" name="soal1" value="0"  />
                \((-2,6) \)
                <br />
                <input type="radio" name="soal1" value="10" />
                \((2,-6) \)
                <br />
                <input type="radio" name="soal1" value="0" />
                \((2,6) \)
                <br />
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal1" aria-expanded="false" aria-controls="collapsesoal1">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal1">
                  <div class="card card-body overflow-auto">
                    \(\begin{align}
                    \begin{pmatrix}x'\\y' \end{pmatrix} &= \begin{pmatrix} k&0\\0&k end{pmatrix}\begin{pmatrix}x\\y \end{pmatrix} \\

                    \end{align}\)
                    <br>
                    <b class="text-end"> JAWABAN : D</b>
                  </div>
                </div>
                <hr />
                <!--========================= soal no 2 ===========================================================================-->
                <li>SOAL 2</li>
                <input type="radio" name="soal2" value="10" id="soal2" />
                \(A\)
                <br />
                <input type="radio" name="soal2" value="0" />
                \(B \)
                <br />
                <input type="radio" name="soal2" value="0"  />
                \(C \)
                <br />
                <input type="radio" name="soal2" value="0" />
                \(D \)
                <br />
                <input type="radio" name="soal2" value="0" />
                \(E \)
                <hr />
                <!--================================================== soal no 3 ======================================================-->
                <li>SOAL 3 </li>
                <input type="radio" name="soal3" value="0"  />
                \(A \)
                <br />
                <input type="radio" name="soal3" value="0"  />
                \(B \)
                <br />
                <input type="radio" name="soal3" value="0" />
                \(C \)
                <br />
                <input type="radio" name="soal3" value="10" id="soal3"/>
                \(D \)
                <br />
                <input type="radio" name="soal3" value="0" />
                \(E \)
                <br />
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal3" aria-expanded="false" aria-controls="collapsesoal3">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal3">
                  <div class="card card-body overflow-auto">
                    garis x = 0 sama dengan garis sumbu-Y
                    \(\begin{align}
                    \begin{pmatrix}x'\\y' \end{pmatrix} &= \begin{pmatrix}k&0\\0&k \end{pmatrix} \begin{pmatrix}x-m\\y-n \end{pmatrix}+ \begin{pmatrix}m\\n \end{pmatrix} \\
                    &=\begin{pmatrix}-1&0\\0&-1 \end{pmatrix}\begin{pmatrix}-2-5\\3-4 \end{pmatrix}+\begin{pmatrix}5\\4 \end{pmatrix}\\
                    &=\begin{pmatrix}-1&0\\0&-1 \end{pmatrix} \begin{pmatrix}-7\\-1 \end{pmatrix}+\begin{pmatrix}5\\4 \end{pmatrix} \\
                    &= \begin{pmatrix}7\\1 \end{pmatrix} + \begin{pmatrix}5\\4 \end{pmatrix} \\
                    &= \begin{pmatrix}12\\5 \end{pmatrix}
                    \end{align}\)
                    <br>

                   <b class="text-end"> JAWABAN : E</b>
                  </div>
                </div>
                <hr />
                <!-- soal no no4 =================================================================================================-->
                <li>SOAL 4 </li>
                </li>
                <input type="radio" name="soal4" value="0" />
                \(A\)
                <br />
                <input type="radio" name="soal4" value="0" />
                \(B \)
                <br />
                <input type="radio" name="soal4" value="0" />
                \(C \)
                <br />
                <input type="radio" name="soal4" value="0"  />
                \(D \)
                <br />
                <input type="radio" name="soal4" value="10" id="soal4">
                \(E \)
                <hr />
                <!-- soal no 5 ================================================================================================-->
                <li>SOAL 5 </li>
                <input type="radio" name="soal5" value="10" id="soal5"/>
                \(A\)
                <br />
                <input type="radio" name="soal5" value="0" />
                \(B\)
                <br />
                <input type="radio" name="soal5" value="0"   />
                \(C\)
                <br />
                <input type="radio" name="soal5" value="0"/>
                \(D\)
                <br />
                <input type="radio" name="soal5" value="0" />
                \(E\)
                <hr />
                <!-- =====SOAL NO 6======================================================================= -->
                <li>SOAL 6</li>
                <input type="radio" name="soal6" value="10" id="soal6" />
                \(A \)
                <br />
                <input type="radio" name="soal6" value="0" />
                \(B \)
                <br />
                <input type="radio" name="soal6" value="0" />
                \(C \)
                <br />
                <input type="radio" name="soal6" value="0" />
                \(D \)
                <br />
                <input type="radio" name="soal6" value="0" />
                \(E \)
                <hr />
                <!-- =====SOAL NO 7======================================================================= -->
                <li>SOAL 7</li>
                <input type="radio" name="soal7" value="0" />
                \(A \)
                <br />
                <input type="radio" name="soal7" value="0" />
                \(B\)
                <br />
                <input type="radio" name="soal7" value="10" id="soal7"/>
                \(C\)
                <br />
                <input type="radio" name="soal7" value="0"  />
                \(D\)
                <br />
                <input type="radio" name="soal7" value="0" />
                \(E\)
                <hr />
                <!-- =====SOAL NO 8======================================================================= -->
                <li>SOAL 8 </li>
                <input type="radio" name="soal8" value="0" />
                \(A \)
                <br />
                <input type="radio" name="soal8" value="10" id="soal8"/>
                \(B \)
                <br />
                <input type="radio" name="soal8" value="0"  />
                \(C \)
                <br />
                <input type="radio" name="soal8" value="0"  />
                \(D \)
                <br />
                <input type="radio" name="soal8" value="0" />
                \(E \)
                <hr />
                <!-- =====SOAL NO 9======================================================================= -->
                <li>SOAL 9 </li>
                <input type="radio" name="soal9" value="0" />
                \(A\)
                <br />
                <input type="radio" name="soal9" value="0" />
                \(B\)
                <br />
                <input type="radio" name="soal9" value="10"  />
                \(C\)
                <br />
                <input type="radio" name="soal9" value="10" id="soal9"/>
                \(D\)       <br />
                <input type="radio" name="soal9" value="0" />
                \(E\)
                <hr />
                <!-- =====SOAL NO 10======================================================================= -->
                <li>SOAL 10 </li>
                <input type="radio" name="soal10" value="10" id="soal10" />
                \(A\)
                <br />
                <input type="radio" name="soal10" value="0" />
                \(B\)
                <br />
                <input type="radio" name="soal10" value="0" />
                \(C\)
                <br />
                <input type="radio" name="soal10" value="0" />
                \(D\)
                <br />
                <input type="radio" name="soal10" value="0" />
                \(E\)
                <hr />

                <li>SOAL 11</li>
                <input type="radio" name="soal11" value="10" id="soal11" />
                \(A \)
                <br />
                <input type="radio" name="soal11" value="0" />
                \(B \)
                <br />
                <input type="radio" name="soal11" value="0" />
                \(C \)
                <br />
                <input type="radio" name="soal11" value="0" />
                \(D \)
                <br />
                <input type="radio" name="soal11" value="0" />
                \(E \)
                <hr />

                <li>SOAL 12 </li>
                <input type="radio" name="soal12" value="0" />
                \(A \)
                <br />
                <input type="radio" name="soal12" value="0" />
                \(B \)
                <br />
                <input type="radio" name="soal12" value="10" id="soal12"  />
                \(C \)
                <br />
                <input type="radio" name="soal12" value="0" />
                \(D \)
                <br />
                <input type="radio" name="soal12" value="0" />
                \(E \)
                <hr />

                <li> SOAL 13 </li>
                <input type="radio" name="soal13" value="0"  />
                \(A \)
                <br />
                <input type="radio" name="soal13" value="0" />
                \(B \)
                <br />
                <input type="radio" name="soal13" value="10" id="soal13"/>
                \(C \)
                <br />
                <input type="radio" name="soal13" value="0" />
                \(D \)
                <br />
                <input type="radio" name="soal13" value="0" />
                \(E \)
                <hr />

                <li>SOAL 14</li>
                <input type="radio" name="soal14" value="0"  />
                \(A \)
                <br />
                <input type="radio" name="soal14" value="0" />
                \(B \)
                <br />
                <input type="radio" name="soal14" value="0" />
                \(C \)
                <br />
                <input type="radio" name="soal14" value="0" />
                \(D \)
                <br />
                <input type="radio" name="soal14" value="10" id="soal14"/>
                \(E \)
                <hr />

                <li>SOAL 15</li>
                <input type="radio" name="soal15" value="10" id="soal15" />
                \(A\)
                <br />
                <input type="radio" name="soal15" value="0" />
                \(B \)
                <br />
                <input type="radio" name="soal15" value="0" />
                \(C \)
                <br />
                <input type="radio" name="soal15" value="0" />
                \(D \)
                <br />
                <input type="radio" name="soal15" value="0" />
                \(E \)
                <hr />
            </ol>

{{-- COPY DARI SINI SETIAP SOAL --}}
<input type="hidden" id="materi" name="materi" value="dilatasi-01">
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
    <a href="/createdilatasi01" id="kirimsaja" class="btn btn-warning btn-bukti d-none" >SIMPAN JAWABAN</a>
</div>
</form>
{{-- COPY SAMPAI SINI --}}

<div id="disqus_thread"></div>

</div>
</div>
</div>
</section>
@endsection

