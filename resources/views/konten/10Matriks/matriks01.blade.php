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
            Matriks - Paket 01
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
<!--=======================  soal1 ===================================-->
            <li>Diketahui matriks \(A=\begin{pmatrix}2c-3b&2a+1\\a&b+7 \end{pmatrix}\) dan \(B=\begin{pmatrix}9&2\\b&c \end{pmatrix}\).Jika \(A=B^T\), maka nilai \(c=...\)</li>
                    <input type="radio" name="soal1" value="0"/>
                    A. \(6 \)
                <br />
                    <input type="radio" name="soal1" value="0"/>
                    B. \(8 \)
                <br />
                    <input type="radio" name="soal1" value="0"/>
                    C. \(10 \)
                <br>
                    <input type="radio" name="soal1" value="10"/>
                    D. \(12 \)
                <br />
                    <input type="radio" name="soal1" value="0"/>
                    E. \(15 \)
                <br>
                <hr />
<!--=======================  soal2 ===================================-->
            <li>Jika matriks \(A=\begin{pmatrix}x&4\\6&y \end{pmatrix}\), \(B=\begin{pmatrix}1&2\\3&4 \end{pmatrix}\), dan \(I\) matriks identitas memenuhi persamaan \(A=2B+I\), maka nilai \(y-x=...\)</li>
                    <input type="radio" name="soal2" value="10"/>
                    A. \(6\)
                <br />
                    <input type="radio" name="soal2" value="0"/>
                    B. \(12 \)
                <br />
                    <input type="radio" name="soal2" value="0"/>
                    C. \(24 \)
                <br>
                    <input type="radio" name="soal2" value="0"/>
                    D. \(36 \)
                <br />
                    <input type="radio" name="soal2" value="0"/>
                    E. \(48 \)
                <br>
                <hr />
<!--=======================  soal3 ===================================-->
            <li>Diketahui matriks $$\begin{pmatrix}x&4\\2&y \end{pmatrix}+2\begin{pmatrix}x+5&2\\3&9-y \end{pmatrix}=\begin{pmatrix}13&8\\8&20 \end{pmatrix}$$ nilai dari \(x+y=...\)</li>
                    <input type="radio" name="soal3" value="0"/>
                    A. \(4 \)
                <br />
                    <input type="radio" name="soal3" value="0"/>
                    B. \(2 \)
                <br />
                    <input type="radio" name="soal3" value="0"/>
                    C. \(0 \)
                <br>
                    <input type="radio" name="soal3" value="10"/>
                    D. \(-1 \)
                <br />
                    <input type="radio" name="soal3" value="0"/>
                    E. \(-3 \)
                <br>
                <hr />
<!--=======================  soal4 ===================================-->
            <li>Diketahui matriks \(A=\begin{pmatrix}3&y\\5&-1 \end{pmatrix}\), \(B=\begin{pmatrix}x&5\\-3&6 \end{pmatrix}\) dan \(C=\begin{pmatrix}-3&-1\\y&9 \end{pmatrix}\). Jika \(A+B-C=\begin{pmatrix}8&5x\\-x&-4 \end{pmatrix}\),
                maka nilai \(x+2xy+y\) adalah . . .</li>
                    <input type="radio" name="soal4" value="0"/>
                    A. \(8 \)
                <br />
                    <input type="radio" name="soal4" value="0"/>
                    B. \(12 \)
                <br />
                    <input type="radio" name="soal4" value="0"/>
                    C. \(18 \)
                <br>
                    <input type="radio" name="soal4" value="0"/>
                    D. \(20 \)
                <br />
                    <input type="radio" name="soal4" value="10"/>
                    E. \(22 \)
                <br>
                <hr />
<!--=======================  soal5 ===================================-->
            <li>Jika \(p,q,r,s\) memenuhi persamaan $$\begin{pmatrix}p&q\\2r&s \end{pmatrix}-\begin{pmatrix}2s&r\\q&2p \end{pmatrix}=\begin{pmatrix}1&-1\\-1&1 \end{pmatrix}$$ maka nilai \(p+q+r+s=...\)</li>
                    <input type="radio" name="soal5" value="0"/>
                    A. \(0 \)
                <br />
                    <input type="radio" name="soal5" value="0"/>
                    B. \(-5 \)
                <br />
                    <input type="radio" name="soal5" value="10"/>
                    C. \(-7 \)
                <br>
                    <input type="radio" name="soal5" value="0"/>
                    D. \(12 \)
                <br />
                    <input type="radio" name="soal5" value="0"/>
                    E. \(20 \)
                <br>
                <hr />
<!--=======================  soal6 ===================================-->
            <li>Matriks \(A=\begin{pmatrix}5&a\\b&3c \end{pmatrix}\) dan \(B=\begin{pmatrix}2a+2&a+8\\a+4&3a-b \end{pmatrix}\). Jika \(2A=B^T\), maka nilai \(c=...\)</li>
                    <input type="radio" name="soal6" value="0"/>
                    A. \(-2 \)
                <br />
                    <input type="radio" name="soal6" value="0"/>
                    B. \(-1 \)
                <br />
                    <input type="radio" name="soal6" value="0"/>
                    C. \(0 \)
                <br>
                    <input type="radio" name="soal6" value="10"/>
                    D. \(1 \)
                <br />
                    <input type="radio" name="soal6" value="0"/>
                    E. \(2 \)
                <br>
                <hr />
<!--=======================  soal7 ===================================-->
            <li>Jika \(A=\begin{pmatrix}1&1\\-1&1 \end{pmatrix}\) dan \(B=\begin{pmatrix}0&1\\1&0 \end{pmatrix}\). Maka \((A+B)(A-B)-(A-B)(A+B)=...\)</li>
                    <input type="radio" name="soal7" value="10"/>
                    A. \(4\begin{pmatrix}-1&0\\0&1 \end{pmatrix}\)
                <br />
                    <input type="radio" name="soal7" value="0"/>
                    B. \(-4\begin{pmatrix}-1&0\\0&1 \end{pmatrix}\)
                <br />
                    <input type="radio" name="soal7" value="0"/>
                    C. \(4\begin{pmatrix}1&0\\0&1 \end{pmatrix}\)
                <br>
                    <input type="radio" name="soal7" value="0"/>
                    D. \(-4\begin{pmatrix}1&0\\0&1 \end{pmatrix}\)
                <br />
                    <input type="radio" name="soal7" value="0"/>
                    E. \(8\begin{pmatrix}1&0\\1&0 \end{pmatrix}\)
                <br>
                <hr />
<!--=======================  soal8 ===================================-->
            <li>Diketahui \(A\) dan \(B\) berordo \(2 \times 2\). Harga \((A+B)^2\) adalah . . .</li>
                    <input type="radio" name="soal8" value="0"/>
                    A. \(A^2+2AB+B^2 \)
                <br />
                    <input type="radio" name="soal8" value="0"/>
                    B. \(A^2+AB+AB+B^2 \)
                <br />
                    <input type="radio" name="soal8" value="0"/>
                    C. \(AA+2AB+BB \)
                <br>
                    <input type="radio" name="soal8" value="10"/>
                    D. \(A^2+AB+BA+B^2 \)
                <br />
                    <input type="radio" name="soal8" value="0"/>
                    E. \(A^2+2BA+B^2 \)
                <br>
                <hr />
<!--=======================  soal9 ===================================-->
            <li>Matriks \(A=\begin{pmatrix}a&4\\2b&3c \end{pmatrix}\) dan \(B=\begin{pmatrix}2c-3b&2a+1\\a&b+7 \end{pmatrix}\). Supaya dipenuhi \(A=2B^t\), dengan \(B^t\) menyatakan matriks transpose dari \(B\), maka nilai \(c=...\)</li>
                    <input type="radio" name="soal9" value="0"/>
                    A. \(2 \)
                <br />
                    <input type="radio" name="soal9" value="0"/>
                    B. \(3 \)
                <br />
                    <input type="radio" name="soal9" value="0"/>
                    C. \(5 \)
                <br>
                    <input type="radio" name="soal9" value="10"/>
                    D. \(6 \)
                <br />
                    <input type="radio" name="soal9" value="0"/>
                    E. \(10 \)
                <br>
                <hr />
<!--=======================  soal10 ===================================-->
            <li>Jika matriks \(A=\begin{pmatrix}2x&-2\\x&3y+2 \end{pmatrix}\), \(B=\begin{pmatrix}9&3x\\8&-4 \end{pmatrix}\) dan \(C=\begin{pmatrix}5&6\\-8&7 \end{pmatrix}\) memenuhi \(A+B=C^t\) dengan \(C^t\) tranpose matriks
                \(C\), maka \(2x+3y=...\)</li>
                    <input type="radio" name="soal10" value="0"/>
                    A. \(3 \)
                <br />
                    <input type="radio" name="soal10" value="0"/>
                    B. \(4 \)
                <br />
                    <input type="radio" name="soal10" value="10"/>
                    C. \(5 \)
                <br>
                    <input type="radio" name="soal10" value="0"/>
                    D. \(6 \)
                <br />
                    <input type="radio" name="soal10" value="0"/>
                    E. \(7 \)
                <br>
                <hr />

            </ol>

{{-- COPY DARI SINI SETIAP SOAL --}}
{{-- TOMBOL KIRIM --}}
<input type="hidden" id="materi" name="materi" value="Matriks-01">

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
    <a href="/creatematriks01" id="kirimsaja" class="btn btn-warning btn-bukti d-none" >SIMPAN JAWABAN</a>
</div>
</form>
{{-- COPY SAMPAI SINI --}}

<div id="disqus_thread"></div>

</div>
</div>
</div>
</section>
@endsection

