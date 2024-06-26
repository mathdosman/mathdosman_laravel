@extends('konten.41KelasXI.41.template')
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
            KELAS XI
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
            <h2 class="text-center">PENILAIAN AKHIR SEMESTER 2022</h2>
                <h3 class="text-center text-danger fw-bold">MATEMATIKA PEMINATAN</h3>
            <p class="text-center fst-italic"> Math_Dosman</p>
            <hr />
           <h3> Selamat datang di MathDosMan.com!</h3>

            <p style="text-indent: 3em;">Di sini, kami menyediakan pembahasan soal penilaian akhir semester tahun 2022 untuk berbagai mata pelajaran matematika. </p>

             <p style="text-indent: 3em;"> Setelah melalui satu semester belajar matematika, penilaian akhir semester merupakan kesempatan untuk menguji pemahaman dan keterampilan siswa dalam berbagai konsep matematika. Kami memahami bahwa menghadapi ujian dapat menjadi momok yang menakutkan bagi sebagian siswa, karena itu kami ingin membantu Anda untuk mempersiapkan diri sebaik mungkin. </p>

             <p style="text-indent: 3em;"> Kami menyediakan pembahasan soal penilaian akhir semester tahun 2022 untuk berbagai jenjang pendidikan, mulai dari SD hingga SMA/SMK. Kami berharap dengan membaca pembahasan soal-soal tersebut, Anda dapat memperoleh pemahaman yang lebih baik tentang konsep-konsep matematika yang diujikan dan dapat mempersiapkan diri dengan lebih baik untuk menghadapi ujian. </p>

             <p style="text-indent: 3em;"> Jangan ragu untuk menjelajahi situs kami dan memanfaatkan semua sumber daya yang tersedia untuk membantu Anda belajar matematika dengan lebih baik. Jika Anda memiliki pertanyaan atau saran, jangan ragu untuk menghubungi kami melalui halaman kontak. Selamat belajar dan semoga sukses dalam penilaian akhir semester tahun 2022!</p>

            <p>Berikut merupakan soal Penilaian Akhir Semester tahun 2022 di SMA Negeri 1 Gianyar</p>
            <p>Kelas : XI MIPA</p>
            <p>Waktu : 60 Menit</p>
            <p>MATEMATIKA PEMINATAN</p>
            <hr>
            <ol type="1">
<!--=======================  soal1 ===================================-->
            <li>Nilai dari sin \(67,5^{\circ}\) adalah . . .</li>
                <ol type="A">
                    <li>\(\displaystyle \frac{1}{2} \sqrt{2+\sqrt{2}} \)</li>
                    <li>\(\displaystyle \sqrt{2+\sqrt{2}} \)</li>
                    <li>\(\displaystyle \frac{1}{2} \sqrt{2-\sqrt{2}} \)</li>
                    <li>\(\displaystyle \frac{1}{4}\sqrt{2+\sqrt{2}} \)</li>
                    <li>\(\displaystyle  \frac{1}{2}\sqrt{-2+\sqrt{2}} \)</li>
                </ol>
                <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal1" aria-expanded="false" aria-controls="collapsesoal1">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal1">
                  <div class="card card-body overflow-auto">
                    <p>Untuk mengetahui nilai dari \(\sin 67.5^{\circ}\), kita dapat menggunakan identitas sudut setengah trigonometri. Dalam hal ini, kita dapat menggunakan identitas sudut setengah untuk sudut \(135^{\circ}\) yang kemudian akan diubah menjadi \(67.5^{\circ}\).

                      Identitas sudut setengah \(\sin \theta = \sqrt{\frac{1-\cos 2\theta}{2}}\) dapat digunakan untuk mencari nilai \(\sin 67.5^{\circ}\) dengan menggantikan \(\theta\) dengan \(135^{\circ}\).

                      Maka,

                      \[
                      \begin{aligned}
                      \sin 67.5^{\circ} &= \sqrt{\frac{1-\cos 135^{\circ}}{2}} \\
                      &= \sqrt{\frac{1-\cos (180-45)^{\circ}}{2}} \\
                      &= \sqrt{\frac{1-\cos 45^{\circ}}{2}} \\
                      &= \sqrt{\frac{1-(-\frac{\sqrt{2}}{2})}{2}} \\
                      &= \sqrt{\frac{\frac{2+\sqrt{2}}{2}}{2}} \\
                      &= \sqrt{\frac{2+\sqrt{2}}{4}} \\
                      &= \frac{1}{2} \sqrt{2+\sqrt{2}}
                      \end{aligned}
                      \]

                      Jadi, nilai dari \(\sin 67.5^{\circ}\) adalah \(\boxed{\frac{1}{2} \sqrt{2+\sqrt{2}}}\).</p>
                   <b class="text-end text-danger fw-bold"> <h3>JAWABAN : A</h3></b>
                  </div>
                </div>
                <hr />
<!--=======================  soal2 ===================================-->
            <li>Nilai dari \(\sin 2Q \) apabila diketahui \(\displaystyle \sin Q=\frac{3}{5} \) dan berada diantara \(90^{\circ} \leq x \leq 180^{\circ} \) adalah . . .</li>
                <ol type="A">
                    <li>\(\displaystyle \frac{25}{24} \)</li>
                    <li>\(\displaystyle  \frac{24}{25}\)</li>
                    <li>\(\displaystyle -\frac{24}{25} \)</li>
                    <li>\(\displaystyle \frac{23}{25} \)</li>
                    <li>\(\displaystyle \frac{21}{25} \)</li>
                </ol>
                <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal2" aria-expanded="false" aria-controls="collapsesoal2">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal2">
                  <div class="card card-body overflow-auto">
                    <p>Kita dapat menggunakan rumus ganda sudut sin untuk mencari nilai dari \(\sin 2Q\) berdasarkan nilai yang diketahui dari \(\sin Q\). Rumus ganda sudut sin adalah:

                      \[\sin 2Q = 2 \sin Q \cos Q\]

                      Dalam hal ini, kita telah diketahui bahwa \(\displaystyle \sin Q = \frac{3}{5}\). Karena \(90^{\circ} \leq Q \leq 180^{\circ}\), berarti \(Q\) berada di kuadran II, di mana \(\cos Q\) negatif. Kita perlu menentukan nilai \(\cos Q\) berdasarkan \(\sin Q\). Dalam kuadran II, menggunakan identitas Pythagoras, kita dapat mencari nilai \(\cos Q\):

                      \[\cos Q = -\sqrt{1 - \sin^2 Q} = -\sqrt{1 - \left(\frac{3}{5}\right)^2} = -\frac{4}{5}\]

                      Selanjutnya, kita dapat menghitung nilai dari \(\sin 2Q\):

                      \[\sin 2Q = 2 \sin Q \cos Q = 2 \left(\frac{3}{5}\right) \left(-\frac{4}{5}\right) = -\frac{24}{25}\]

                      Jadi, nilai dari \(\sin 2Q\) adalah \(\boxed{\displaystyle -\frac{24}{25}}\).</p>
                   <b class="text-end text-danger fw-bold"> <h3>JAWABAN : C</h3></b>
                  </div>
                </div>
                <hr />
<!--=======================  soal3 ===================================-->
            <li>Bentuk lain dari \(2\sin7x \cos3x \) adalah . . .</li>
                <ol type="A">
                    <li>\(\displaystyle \sin6x+\cos4x \)</li>
                    <li>\(\displaystyle \sin10x-\cos4x \)</li>
                    <li>\(\displaystyle \sin10x+\cos4x \)</li>
                    <li>\(\displaystyle \sin6x+\cos2x \)</li>
                    <li>\(\displaystyle \sin6x-\cos4x \)</li>
                </ol>
                <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal3" aria-expanded="false" aria-controls="collapsesoal3">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal3">
                  <div class="card card-body overflow-auto">
                   <p>Kita dapat menggunakan rumus identitas trigonometri berikut untuk menyelesaikan masalah ini:
                    $$2\sin A \cos B = \sin(A+B) + \sin(A-B)$$

                    Dalam kasus ini, \(A=7x\) dan \(B=3x\), sehingga:
                    \begin{align*}
                    2\sin 7x \cos 3x &= \sin(7x+3x) + \sin(7x-3x) \\
                    &= \sin 10x + \sin 4x
                    \end{align*}

                    Opsi jawaban yang sesuai dengan bentuk yang ditemukan adalah C, yaitu \(\boxed{\sin 10x + \cos 4x}\).</p>
                   <b class="text-end text-danger fw-bold"> <h3>JAWABAN : C</h3></b>
                  </div>
                </div>
                <hr />
<!--=======================  soal4 ===================================-->
            <li>Nilai dari \(\cos 105^{\circ}\) adalah . . .</li>
                <ol type="A">
                    <li>\(\displaystyle \frac{\sqrt{2}-\sqrt{6}}{2} \)</li>
                    <li>\(\displaystyle  \frac{\sqrt{6}-\sqrt{2}}{4}\)</li>
                    <li>\(\displaystyle  \frac{\sqrt{2}+\sqrt{6}}{4}\)</li>
                    <li>\(\displaystyle  \frac{\sqrt{2}-\sqrt{6}}{4}\)</li>
                    <li>\(\displaystyle \frac{-\sqrt{2}-\sqrt{6}}{4} \)</li>
                </ol>
                <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal4" aria-expanded="false" aria-controls="collapsesoal4">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal4">
                  <div class="card card-body overflow-auto">
                    <p>Kita tidak dapat langsung menggunakan rumus sudut ganda untuk menghitung nilai \(\cos 105^\circ\), tetapi kita dapat menggunakan identitas sudut untuk mengubah sudut 105 derajat menjadi jumlah atau selisih dari sudut-sudut yang lebih mudah dihitung.

                      Misalnya, kita dapat menulis:
                      $$\cos 105^\circ = \cos (60^\circ + 45^\circ)$$
                      Kita dapat menggunakan rumus cosinus untuk sudut jumlah untuk menyelesaikan masalah ini:
                      \begin{align*}
                      \cos (60^\circ + 45^\circ) &= \cos 60^\circ \cos 45^\circ - \sin 60^\circ \sin 45^\circ \\
                      &= \frac{1}{2} \cdot \frac{\sqrt{2}}{2} - \frac{\sqrt{3}}{2} \cdot \frac{\sqrt{2}}{2} \\
                      &= \frac{\sqrt{2}-\sqrt{6}}{4}
                      \end{align*}

                      Sehingga jawaban yang benar adalah \(\boxed{\displaystyle \frac{\sqrt{2}-\sqrt{6}}{4}}\).</p>
                   <b class="text-end text-danger fw-bold"> <h3>JAWABAN : D</h3></b>
                  </div>
                </div>
                <hr />
<!--=======================  soal5 ===================================-->
            <li>Nilai dari \(12\sin22,5^{\circ} \cos 22,5^{\circ} =...\)</li>
                <ol type="A">
                    <li>\(\displaystyle 2\sqrt{3} \)</li>
                    <li>\(\displaystyle 2\sqrt{2} \)</li>
                    <li>\(\displaystyle 3\sqrt{3} \)</li>
                    <li>\(\displaystyle 4\sqrt{2} \)</li>
                    <li>\(\displaystyle 3\sqrt{2} \)</li>
                </ol>
                <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal5" aria-expanded="false" aria-controls="collapsesoal5">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal5">
                  <div class="card card-body overflow-auto">
                    <p>Kita dapat menggunakan rumus sudut ganda untuk sinus untuk menyelesaikan masalah ini:
                      $$\sin 2\theta = 2\sin\theta\cos\theta$$

                      Dalam kasus ini, $\theta=22.5^\circ$, sehingga:
                      \begin{align*}
                      12\sin 22.5^\circ \cos 22.5^\circ &= 6\cdot 2\cdot \sin 22.5^\circ \cdot \cos 22.5^\circ \\
                      &= 6 \cdot \sin 2(22.5^\circ) \\
                      &= 6 \cdot \sin 45^\circ \\
                      &= 6 \cdot \frac{1}{2} \sqrt{2} \\
                      &= 3 \sqrt{2}
                      \end{align*}

                      Sehingga, jawabannya adalah \(\boxed{3 \sqrt{2}} \).</p>
                   <b class="text-end text-danger fw-bold"> <h3>JAWABAN : E</h3></b>
                  </div>
                </div>
                <hr />
<!--=======================  soal6 ===================================-->
            <li>Himpunan penyelesaian dari persamaan trigonometri \(2\sqrt{2}\cos x+2=0 \) untuk \(0^{\circ} \leq x \leq 360^{\circ} \) adalah . . .</li>
                <ol type="A">
                    <li>\(\displaystyle \begin{Bmatrix}135^{\circ},225^{\circ} \end{Bmatrix} \)</li>
                    <li>\(\displaystyle \begin{Bmatrix}150^{\circ},225^{\circ} \end{Bmatrix} \)</li>
                    <li>\(\displaystyle \begin{Bmatrix}135^{\circ},250^{\circ} \end{Bmatrix} \)</li>
                    <li>\(\displaystyle \begin{Bmatrix}120^{\circ},250^{\circ} \end{Bmatrix} \)</li>
                    <li>\(\displaystyle \begin{Bmatrix}60^{\circ},225^{\circ} \end{Bmatrix} \)</li>
                </ol>
                <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal6" aria-expanded="false" aria-controls="collapsesoal6">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal6">
                  <div class="card card-body overflow-auto">
                    <p>

                      Kita bisa menyelesaikan persamaan trigonometri tersebut dengan membagi kedua ruas dengan \(2√2\) dan kemudian mencari nilai cosinus yang cocok untuk nilai tersebut pada rentang \(0^{\circ}-360^{\circ}\).

                      \begin{aligned} 2\sqrt{2}\cos x + 2 &= 0 \\ \cos x &= -\frac{1}{\sqrt{2}} \\ &= -\frac{\sqrt{2}}{2} \end{aligned}

                      Dalam rentang \(0^{\circ}-360^{\circ}\), nilai cosinus negatif di kuadran \(II\) dan \(III\), sehingga kita perlu mencari dua sudut yang memiliki nilai cosinus \(\displaystyle -\frac{\sqrt{2}}{2}\) di kuadran tersebut.
                      <br>
                      sudut cos yang memiliki nilai \(\displaystyle \frac{\sqrt{2}}{2}\) positif adalah \(45^{\circ}\). <br> Sehingga sudut pada kuadran \(II\) adalah :
                      \[180^{\circ} - 45^{\circ} = 135^{\circ} \]
                      dan sudut pada kuadran \(III\) adalah :
                      \[180^{\circ} + 45^{\circ} = 225^{\circ} \]

                      Jadi, himpunan penyelesaian dari persamaan trigonometri tersebut untuk \(0^{\circ} \leq x \leq 360^{\circ}\) adalah \(\boxed{135^{\circ}, 225^{\circ}}\).</p>
                   <b class="text-end text-danger fw-bold"> <h3>JAWABAN : A</h3></b>
                  </div>
                </div>
                <hr />
<!--=======================  soal7 ===================================-->
            <li>Himpunan penyelesaian dari persamaan trigonometri \(\displaystyle \sin 2x + \frac{1}{2} =0 \) untuk \(0^{\circ} \leq x \leq 360^{\circ} \) adalah . . .</li>
                <ol type="A">
                    <li>\(\displaystyle \begin{Bmatrix} 105^{\circ}, 165^{\circ}, 285^{\circ}, 345^{\circ}  \end{Bmatrix} \)</li>
                    <li>\(\displaystyle \begin{Bmatrix} -15^{\circ}, 105^{\circ}, 165^{\circ}, 265^{\circ}, 345^{\circ} \end{Bmatrix} \)</li>
                    <li>\(\displaystyle \begin{Bmatrix} -15^{\circ}, 165^{\circ}, 285^{\circ}, 345^{\circ} \end{Bmatrix} \)</li>
                    <li>\(\displaystyle \begin{Bmatrix} 165^{\circ}, 285^{\circ}, 345^{\circ} \end{Bmatrix} \)</li>
                    <li>\(\displaystyle \begin{Bmatrix} -15^{\circ}, 105^{\circ}, 165^{\circ}, 285^{\circ} \end{Bmatrix} \)</li>
                </ol>
                <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal7" aria-expanded="false" aria-controls="collapsesoal7">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal7">
                  <div class="card card-body overflow-auto">
                    <p>Kita bisa memecahkan persamaan ini dengan memindahkan konstanta ke sisi kanan dan kemudian menghitungnya menggunakan aturan persamaan trigonometri:

                      \begin{align*}
                      \sin 2x + \frac{1}{2} &= 0 \\
                      \sin 2x &= -\frac{1}{2} \\
                      \sin 2x &= \sin (-30^{\circ}) \\\\
                      (\text{Langkah 1})&\\
                      2x &= -30^{\circ} + k \cdot 360^{\circ} \\
                      k = 1 &\\
                      2x &= -30^{\circ} + 1 \cdot 360^{\circ} \\
                      2x &= 330^{\circ} \\
                      x &= 165^{\circ} \\
                      k = 2 &\\
                      2x &= -30^{\circ} + 2 \cdot 360^{\circ} \\
                      2x &= -30^{\circ} + 720^{\circ} \\
                      2x &= 690^{\circ} \\
                      x &= 345^{\circ} \\\\

                      (\text{Langkah 2})&\\
                      2x &= (180^{\circ}+30^{\circ}) + k \cdot 360^{\circ} \\
                      k = 0 &\\
                      2x &= (180^{\circ}+30^{\circ}) + 0 \cdot 360^{\circ} \\
                      2x &= 210^{\circ} \\
                      x &= 105^{\circ} \\

                      k = 1 &\\
                      2x &= (180^{\circ}+30^{\circ}) + 1 \cdot 360^{\circ} \\
                      2x &= 210^{\circ} +  360^{\circ} \\
                      2x &= 570^{\circ}  \\
                      x &= 285^{\circ}  \\

                      \end{align*}
                      Jadi, himpunan penyelesaiannya untuk \(0^{\circ} \leq x \leq 360^{\circ} \) adalah \(\boxed{\displaystyle \begin{Bmatrix} 105^{\circ}, 165^{\circ}, 285^{\circ}, 345^{\circ}  \end{Bmatrix}} \)
                      </p>
                   <b class="text-end text-danger fw-bold"> <h3>JAWABAN : A</h3></b>
                  </div>
                </div>
                <hr />
<!--=======================  soal8 ===================================-->
            <li>Diketahui \(\displaystyle \sin \alpha = -\frac{12}{13} \) berada pada kuadran III, dan \(\displaystyle \cos \beta =-\frac{4}{5} \) berada pada kuadran II. Maka nilai \(\tan(\alpha+\beta) \) adalah . . . </li>
                <ol type="A">
                    <li>\(\displaystyle \frac{72}{56} \)</li>
                    <li>\(\displaystyle \frac{33}{56} \)</li>
                    <li>\(\displaystyle \frac{13}{56} \)</li>
                    <li>\(\displaystyle -\frac{50}{56} \)</li>
                    <li>\(\displaystyle -\frac{56}{72} \)</li>
                </ol>
                <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal8" aria-expanded="false" aria-controls="collapsesoal8">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal8">
                  <div class="card card-body overflow-auto">
                    <p>

                      Kita dapat menggunakan rumus trigonometri untuk menjawab pertanyaan ini. Pertama, kita perlu menentukan nilai \(\tan \alpha\) dan \(\tan \beta\). Diketahui bahwa:

                      \[\sin \alpha = -\frac{12}{13}\]

                      Dengan menggunakan identitas Pythagoras, kita dapat mencari nilai \(\cos \alpha\):

                      \[\cos \alpha = \sqrt{1 - \sin^2 \alpha} = \sqrt{1 - \left(-\frac{12}{13}\right)^2} = -\frac{5}{13}\]

                      Karena \(\alpha\) berada di kuadran III, maka \(\tan \alpha\) bernilai positif:

                      \[\tan \alpha = \frac{\sin \alpha}{\cos \alpha} = \frac{-\frac{12}{13}}{-\frac{5}{13}} = \frac{12}{5}\]

                      Demikian juga, karena \(\beta\) berada di kuadran II, maka nilai \(\sin \beta\) bernilai positif:

                      \[\sin \beta = \sqrt{1 - \cos^2 \beta} = \sqrt{1 - \left(-\frac{4}{5}\right)^2} = \frac{3}{5}\]

                      Dengan menggunakan definisi tangen sebagai perbandingan antara sin dan cos, kita dapat mencari nilai \(\tan \beta\):

                      \[\tan \beta = \frac{\sin \beta}{\cos \beta} = \frac{\frac{3}{5}}{-\frac{4}{5}} = -\frac{3}{4}\]

                      Kemudian, kita dapat menggunakan rumus trigonometri untuk menjumlahkan dua sudut:

                      \[\tan(\alpha+\beta) = \frac{\tan \alpha + \tan \beta}{1 - \tan \alpha \tan \beta}\]

                      Substitusikan nilai \(\tan \alpha\) dan \(\tan \beta\) ke dalam rumus di atas, maka kita dapatkan:
                      \begin{align*}
                      \tan(\alpha+\beta) &= \frac{\frac{12}{5} - \frac{3}{4}}{1 - \frac{12}{5} \times \left(-\frac{3}{4}\right)} \\
                      \tan(\alpha+\beta) &= \frac{\frac{48-15}{20}}{\frac{20}{20} + \frac{36}{20}} \\
                      \tan(\alpha+\beta) &= \frac{48-15}{20+36} \\
                      &= \frac{33}{56}

                      \end{align*}

                      Jadi, nilai \(\tan(\alpha+\beta)\) adalah \(\boxed{\frac{33}{56}}\).</p>
                   <b class="text-end text-danger fw-bold"> <h3>JAWABAN : B</h3></b>
                  </div>
                </div>
                <hr />
<!--=======================  soal9 ===================================-->
            <li>\(2\sin 15^{\circ} \cos 15^{\circ} =...\)</li>
                <ol type="A">
                    <li>\(\displaystyle \frac{\sqrt{2}}{2} \)</li>
                    <li>\(\displaystyle \frac{1}{3} \)</li>
                    <li>\(\displaystyle \frac{\sqrt{3}}{2} \)</li>
                    <li>\(\displaystyle \frac{1}{2} \)</li>
                    <li>\(\displaystyle \frac{\sqrt{3}+1}{2} \)</li>
                </ol>
                <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal9" aria-expanded="false" aria-controls="collapsesoal9">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal9">
                  <div class="card card-body overflow-auto">
                  <p>Kita dapat menggunakan rumus sudut ganda untuk sin, yang menyatakan bahwa

                    $$\sin 2\theta = 2\sin\theta\cos\theta$$

                    Dengan menggunakan rumus ini dengan \(\theta = 15^{\circ}\), maka kita dapat menulis:

                    $$2\sin 15^{\circ}\cos 15^{\circ} = \sin 30^{\circ}$$

                    Kita dapat menyederhanakan lebih lanjut dengan menggunakan fakta bahwa \(\displaystyle \sin 30^{\circ} = \frac{1}{2}\), sehingga:

                    $$2\sin 15^{\circ}\cos 15^{\circ} = \boxed{\frac{1}{2}}$$</p>
                   <b class="text-end text-danger fw-bold"> <h3>JAWABAN : D</h3></b>
                  </div>
                </div>
                <hr />
<!--=======================  soal10 ===================================-->
            <li>\(4 \cos^2 225^{\circ} -2 =...\)</li>
                <ol type="A">
                    <li>\(\displaystyle \frac{\sqrt{2}}{2} \)</li>
                    <li>\(\displaystyle \sqrt{3} \)</li>
                    <li>\(\displaystyle 2\sqrt{2} \)</li>
                    <li>\(\displaystyle 7\sqrt{2} \)</li>
                    <li>\(\displaystyle 0 \)</li>
                </ol>
                <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal10" aria-expanded="false" aria-controls="collapsesoal10">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal10">
                  <div class="card card-body overflow-auto">
                    <p>

                      Untuk menyelesaikan masalah ini, kita perlu menggunakan identitas trigonometri yang berhubungan dengan sudut 225 derajat.
                      <br><br>
                      Kita tahu bahwa sudut 225 derajat merupakan sudut di kuadran ketiga, sehingga kita dapat menggunakan identitas trigonometri untuk sudut di kuadran ketiga, yaitu:

                      \[\cos(180^{\circ}+\theta)=-\cos\theta\]

                      Dalam hal ini, \(\theta = 45^{\circ}\) sehingga:

                      \[\cos 225^{\circ} = \cos(180^{\circ}+45^{\circ})=-\cos 45^{\circ}=-\frac{\sqrt{2}}{2}\]

                      Maka, kita dapat menghitung:

                      \begin{align*}
                      4\cos^2 225^{\circ} - 2 &= 4\left(-\frac{\sqrt{2}}{2}\right)^2 - 2 \\
                      &= 4 \cdot \frac{1}{2} - 2 \\
                      &= 2 - 2 \\
                      &= 0
                      \end{align*}

                      Sehingga hasil akhirnya adalah \(\boxed{0}\).</p>
                   <b class="text-end text-danger fw-bold"> <h3>JAWABAN : E</h3></b>
                  </div>
                </div>
                <hr />
<!--=======================  soal11 ===================================-->
            <li>Himpunan penyelesaian dari \(\tan x = \tan 35^{\circ} \) untuk \(0^{\circ} \leq x \leq 360^{\circ} \) adalah . . .</li>
                <ol type="A">
                    <li>\(\displaystyle \begin{Bmatrix} 35^{\circ}, 305^{\circ} \end{Bmatrix} \)</li>
                    <li>\(\displaystyle \begin{Bmatrix} 35^{\circ}, 215^{\circ} \end{Bmatrix} \)</li>
                    <li>\(\displaystyle \begin{Bmatrix}35^{\circ}, 205^{\circ} \end{Bmatrix} \)</li>
                    <li>\(\displaystyle \begin{Bmatrix}35^{\circ}, 145^{\circ} \end{Bmatrix} \)</li>
                    <li>\(\displaystyle \begin{Bmatrix}35^{\circ}, 125^{\circ} \end{Bmatrix} \)</li>
                </ol>
                <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal11" aria-expanded="false" aria-controls="collapsesoal11">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal11">
                  <div class="card card-body overflow-auto">
                    <p>
                      \(\tan x = \tan 35^{\circ} \) perlu dicari nilai tan yang sama dengan kuadran \(I\) yaitu di kuadran ke \(III\) karena nilai tan positif terletak di kuadran tersebut. <br>
                      \(35^{\circ}\) pada kuadran \(I\) akan sama nilainya dengan
                      \[180^{\circ} + 35^{\circ} = 215^{\circ}\]
                      Jadi, Himpunan penyelesaian untuk kasus ini adalah \(\displaystyle \boxed{ \begin{Bmatrix} 35^{\circ}, 215^{\circ} \end{Bmatrix}} \)
                      </p>
                   <b class="text-end text-danger fw-bold"> <h3>JAWABAN : B</h3></b>
                  </div>
                </div>
                <hr />
<!--=======================  soal12 ===================================-->
            <li>Himpunan penyelesaian dari \(\displaystyle \sin \left(2x-\frac{\pi}{3} \right) = \frac{1}{2} \) pada interval \(0 \leq x \leq 2\pi \) adalah . . .</li>
                <ol type="A">
                    <li>\(\displaystyle \begin{Bmatrix}\frac{1}{4}\pi,\frac{5}{12}\pi, \frac{19}{12}\pi, \frac{7}{4}\pi \end{Bmatrix} \)</li>
                    <li>\(\displaystyle \begin{Bmatrix}\frac{1}{4}\pi,\frac{7}{12}\pi, \frac{19}{12}\pi, \frac{7}{4}\pi \end{Bmatrix} \)</li>
                    <li>\(\displaystyle \begin{Bmatrix}\frac{1}{4}\pi,\frac{7}{12}\pi, \frac{3}{4}\pi, \frac{19}{12}\pi \end{Bmatrix} \)</li>
                    <li>\(\displaystyle \begin{Bmatrix}\frac{1}{4}\pi,\frac{5}{12}\pi, \frac{5}{4}\pi, \frac{17}{12}\pi \end{Bmatrix} \)</li>
                    <li>\(\displaystyle \begin{Bmatrix}\frac{1}{4}\pi,\frac{7}{12}\pi, \frac{5}{4}\pi, \frac{19}{12}\pi \end{Bmatrix} \)</li>
                </ol>
                <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal12" aria-expanded="false" aria-controls="collapsesoal12">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal12">
                  <div class="card card-body overflow-auto">
                    <p>Untuk meyelesaiakan masalah ini kita akan gunakan rumus persamaan trigonometri
                      \[\sin x = \sin \alpha, \Rightarrow \text{ maka } \left\{\begin{matrix} x_1 = \alpha + k \times 2\pi \\ x_2 = (\pi - \alpha) + k \times 2\pi \end{matrix}\right.\]
                      Sehingga dapat kita buat,
                      \begin{align*}
                      \sin \sin \left(2x-\frac{\pi}{3} \right) &= \frac{1}{2} \\
                      \sin \sin \left(2x-\frac{\pi}{3} \right) &= \sin \frac{\pi}{6} \\
                      \end{align*}

                      Selanjutnya kita kerjakan untuk masing masing rumus dengan mengganti nilai \(k\) yang sesuai
                      \begin{align*}
                      \left(2x-\frac{\pi}{3} \right) &= \frac{\pi}{6} + (k) \times 2\pi\\
                      2x &= \frac{\pi}{3} + \frac{\pi}{6} + (k) \times 2\pi\\
                      2x &= \frac{2\pi}{6} + \frac{\pi}{6} + (k) \times 2\pi\\
                      2x &= \frac{3\pi}{6} + (k) \times 2\pi\\
                      x &= \frac{3\pi}{12} + (k) \times \pi\\
                      x &= \frac{\pi}{4} + (k) \times \pi\\\\
                      k=0 &\Rightarrow \\
                      x &= \frac{\pi}{4} + (0) \times \pi\\
                      x &= \boxed{\frac{\pi}{4}}\\
                      k=1 &\Rightarrow \\
                      x &= \frac{\pi}{4} + (1) \times \pi\\
                      x &= \frac{\pi}{4} + \pi\\
                      x &= \boxed{\frac{5\pi}{4}}
                      \end{align*}
                      <br>
                      \begin{align*}
                      \left(2x-\frac{\pi}{3} \right) &= (\pi-\frac{\pi}{6}) + (k) \times 2\pi\\
                      \left(2x-\frac{\pi}{3} \right) &= \frac{5\pi}{6} + (k) \times 2\pi\\
                      2x &= \frac{\pi}{3} + \frac{5\pi}{6} + (k) \times 2\pi\\
                      2x &= \frac{2\pi}{6} + \frac{5\pi}{6} + (k) \times 2\pi\\
                      2x &= \frac{7\pi}{6} + (k) \times 2\pi\\
                      x &= \frac{7\pi}{12} + (k) \times \pi\\\\
                      k=0 &\Rightarrow \\
                      x &= \frac{7\pi}{12} + (0) \times \pi\\
                      x &= \boxed{\frac{7\pi}{12}}\\
                      k=1 &\Rightarrow \\
                      x &= \frac{7\pi}{12} + (1) \times \pi\\
                      x &= \frac{7\pi}{12} + \pi\\
                      x &= \boxed{\frac{19\pi}{12}}
                      \end{align*}
                      Jadi, himpunan penyelesaian untuk \(\displaystyle \sin \left(2x-\frac{\pi}{3} \right) = \frac{1}{2} \) adalah \( \boxed{\displaystyle \begin{Bmatrix}\frac{1}{4}\pi,\frac{7}{12}\pi, \frac{5}{4}\pi, \frac{19}{12}\pi \end{Bmatrix}} \)
                    </p>
                   <b class="text-end text-danger fw-bold"> <h3>JAWABAN : E</h3></b>
                  </div>
                </div>
                <hr />
<!--=======================  soal13 ===================================-->
            <li>Perhatikan gambar berikut!</li>
            <img src="{{asset('asets/PAT/13_2022.png')}}" alt="PAT2022" class="img-fluid">
            <p>Nilai dari \(\tan(A-B)\) adalah . . .</p>
                <ol type="A">
                    <li>\(\displaystyle \frac{119}{120} \)</li>
                    <li>\(\displaystyle \frac{144}{120} \)</li>
                    <li>\(\displaystyle \frac{93}{120} \)</li>
                    <li>\(\displaystyle \frac{35}{120} \)</li>
                    <li>\(\displaystyle \frac{-85}{120} \)</li>
                </ol>
                <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal13" aria-expanded="false" aria-controls="collapsesoal13">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal13">
                  <div class="card card-body overflow-auto">
                    <p>Pertama kita cari nilai tan untuk masing-masing sudut yaitu \(\displaystyle \tan A = \frac{12}{5} \) dan \(\displaystyle \tan B = \frac{5}{12} \)
                      \begin{align*}
                      \tan (A-B) &= \frac{\tan A - \tan B}{1+\tan A \tan B} \\
                      &= \frac{\frac{12}{5} - \frac{5}{12}}{1+\frac{12}{5} \frac{5}{12}} \\
                      &= \frac{\frac{144-25}{60}}{1+1} \\
                      &= \boxed{\frac{119}{120}}
                      \end{align*}
                    </p>
                   <b class="text-end text-danger fw-bold"> <h3>JAWABAN : A</h3></b>
                  </div>
                </div>
                <hr />
<!--=======================  soal14 ===================================-->
            <li>Diketahui \(\displaystyle \sin A = \frac{1}{2}\sqrt{2} \) dan \(\cos B = \frac{1}{2}\sqrt{3} \) dengan sudut \(A\) di kuadran ke II dan sudut \(B\) lancip. Nilai dari \(\cos(A-B)\) adalah . . .</li>
                <ol type="A">
                    <li>\(\displaystyle \frac{1}{2}(\sqrt{2}-\sqrt{6}) \)</li>
                    <li>\(\displaystyle \frac{1}{2}(\sqrt{2}+\sqrt{6}) \)</li>
                    <li>\(\displaystyle \frac{1}{2}(-\sqrt{2}+\sqrt{6}) \)</li>
                    <li>\(\displaystyle \frac{1}{4}(\sqrt{2}-\sqrt{6}) \)</li>
                    <li>\(\displaystyle \frac{1}{4}(\sqrt{2}+\sqrt{6}) \)</li>
                </ol>
                <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal14" aria-expanded="false" aria-controls="collapsesoal14">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal14">
                  <div class="card card-body overflow-auto">
                   <p>

                    Kita bisa menggunakan rumus cosinus dari selisih dua sudut, yaitu:
                    \[\cos(A-B) = \cos A \cos B + \sin A \sin B\]

                    Namun sebelumnya kita perlu menentukan nilai \(\sin B\) dan \(\cos A\). Karena sudut \(B\) lancip, maka kita dapat menggunakan identitas Pythagoras:
                    \[\sin^2 B + \cos^2 B = 1\]
                    \[ \sin B = \sqrt{1 - \cos^2 B} = \sqrt{1 - \frac{1}{4} \cdot 3} = \sqrt{\frac{1}{4} }=\frac{1}{2}\]

                    Sedangkan untuk sudut \(A\) di kuadran ke II, kita tahu bahwa sin dari sudut tersebut positif. Karena \(\sin A = \frac{1}{2} \sqrt{2}\) maka kita bisa menggunakan identitas Pythagoras di kuadran ke II untuk menentukan nilai \(\cos A\):
                    \[\sin^2 A + \cos^2 A = 1\]
                    \[\cos A = - \sqrt{1 - \sin^2 A} = - \sqrt{1 - \frac{1}{4} \cdot 2} = -\sqrt{\frac{2}{4}}=- \frac{1}{2} \sqrt{2} \]

                    Sekarang kita bisa menghitung nilai dari \(\cos(A-B)\) dengan mengganti nilai \(\sin A\), \(\sin B\), \(\cos A\) dan \(\cos B\) ke dalam rumus cosinus selisih sudut yang telah disebutkan sebelumnya:
                    \begin{align*}
                    \cos(A-B) &= \cos A \cos B + \sin A \sin B  \\
                    &= -\frac{1}{2}\sqrt{2} \frac{1}{2}\sqrt{3} + \frac{1}{2}\sqrt{2} \frac{1}{2} \\
                    &= -\frac{1}{4}\sqrt{6} + \frac{1}{4}\sqrt{2} \\
                    &= \frac{1}{4} (\sqrt{2}-\sqrt{6})
                    \end{align*}


                    Jadi, nilai dari \(\cos(A-B)\) adalah \(\boxed{\frac{1}{4} (\sqrt{2}-\sqrt{6})}\).</p>
                   <b class="text-end text-danger fw-bold"> <h3>JAWABAN : D</h3></b>
                  </div>
                </div>
                <hr />
<!--=======================  soal15 ===================================-->
            <li>Nilai dari \(2 \sin 75^{\circ} \cos 75^{\circ} \) adalah . . .</li>
                <ol type="A">
                    <li>\(\displaystyle \frac{1}{2} \sqrt{3} \)</li>
                    <li>\(\displaystyle \frac{1}{2} \)</li>
                    <li>\(\displaystyle 0 \)</li>
                    <li>\(\displaystyle -\frac{1}{2} \)</li>
                    <li>\(\displaystyle -\frac{1}{2}\sqrt{3} \)</li>
                </ol>
                <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal15" aria-expanded="false" aria-controls="collapsesoal15">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal15">
                  <div class="card card-body overflow-auto">
                    <p>

                      Kita dapat menggunakan rumus untuk menghitung nilai dari \(2\sin75^\circ\cos75^\circ\), yaitu:

                      $$
                      2\sin75^\circ\cos75^\circ=\sin150^\circ=\sin(180^\circ-30^\circ)
                      $$

                      Kita dapat mengaplikasikan rumus sudut ganda \(\sin(\alpha-\beta)=\sin\alpha\cos\beta-\cos\alpha\sin\beta\) untuk mendapatkan:

                      $$
                      \begin{aligned}
                      \sin(180^\circ-30^\circ)&=\sin180^\circ\cos30^\circ-\cos180^\circ\sin30^\circ\\
                      &=0\cdot\frac{\sqrt{3}}{2}-(-1)\cdot\frac{1}{2}\\
                      &=\frac{1}{2}
                      \end{aligned}
                      $$

                      Jadi, nilai dari \(2\sin75^\circ\cos75^\circ\) adalah \(\boxed{\frac{1}{2}}\).</p>
                   <b class="text-end text-danger fw-bold"> <h3>JAWABAN : </h3></b>
                  </div>
                </div>
                <hr />
<!--=======================  soal16 ===================================-->
            <li>Nilai dari \(\cos 255^{\circ} \) adalah . . .</li>
                <ol type="A">
                    <li>\(\displaystyle -\frac{1}{4}(\sqrt{2}+\sqrt{3}) \)</li>
                    <li>\(\displaystyle -\frac{1}{4}(\sqrt{2}+\sqrt{6}) \)</li>
                    <li>\(\displaystyle \frac{1}{4}(\sqrt{2}+\sqrt{3}) \)</li>
                    <li>\(\displaystyle \frac{1}{4}(\sqrt{2}-\sqrt{6}) \)</li>
                    <li>\(\displaystyle \frac{1}{4}(\sqrt{2}+\sqrt{6}) \)</li>
                </ol>
                <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal16" aria-expanded="false" aria-controls="collapsesoal16">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal16">
                  <div class="card card-body overflow-auto">
                    <p>

                      Untuk mengetahui nilai dari \(\cos 255^{\circ}\), kita dapat menggunakan rumus trigonometri:

                      $$\cos \theta = \cos(360^{\circ}-\theta)$$

                      Dalam hal ini, \(\theta=255^{\circ}\), sehingga:

                      \begin{aligned}\cos 255^{\circ} &= \cos(360^{\circ}-255^{\circ})\\ &=\cos 105^{\circ}\end{aligned}

                      Sekarang, kita dapat menggunakan nilai yang telah diketahui dari fungsi trigonometri untuk sudut $105^{\circ}$, yaitu:

                      $$\cos 105^{\circ} = -\cos (180^{\circ}-105^{\circ})=-\cos 75^{\circ}$$

                      Kita tahu bahwa nilai dari \(\cos 75^{\circ}\) adalah:

                      $$\cos 75^{\circ} = \frac{\sqrt{6}+\sqrt{2}}{4}$$

                      Jadi, nilai dari \(\cos 255^{\circ}\) adalah:

                      \begin{align*} \cos 255^{\circ} &= -\cos 75^{\circ} \\
                      &= -\frac{\sqrt{6}+\sqrt{2}}{4} \\
                      &= \boxed{\frac{1}{4} (\sqrt{2}-\sqrt{6})}
                      \end{align*}</p>
                   <b class="text-end text-danger fw-bold"> <h3>JAWABAN : D</h3></b>
                  </div>
                </div>
                <hr />
<!--=======================  soal17 ===================================-->
            <li>Diketahui \(\displaystyle \tan x = \frac{3}{4} \), maka \(\displaystyle \cos \frac{1}{2}x \) adalah . . .</li>
                <ol type="A">
                    <li>\(\displaystyle \frac{3}{10} \sqrt{10} \)</li>
                    <li>\(\displaystyle \frac{1}{5}\sqrt{10} \)</li>
                    <li>\(\displaystyle \frac{1}{10} \sqrt{10} \)</li>
                    <li>\(\displaystyle \frac{2}{5} \)</li>
                    <li>\(\displaystyle \frac{1}{5} \)</li>
                </ol>
                <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal17" aria-expanded="false" aria-controls="collapsesoal17">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal17">
                  <div class="card card-body overflow-auto">
                    <p>

                      Kita dapat menggunakan rumus dasar trigonometri untuk mencari nilai dari \(\cos\left(\frac{1}{2}x\right)\) dalam hal \(\tan x\).

                      Pertama-tama, kita perlu menentukan nilai \(\sin x\) dan \(\cos x\) dari nilai \(\tan x\). Kita dapat menggunakan identitas \(\tan x = \frac{\sin x}{\cos x}\), sehingga:

                      $$\tan x = \frac{\sin x}{\cos x} = \frac{3}{4}$$

                      Dari sini, kita dapat menggunakan sifat-sifat segitiga siku-siku untuk menentukan nilai \(\sin x\) dan \(\cos x\). Karena \(\tan x\) positif dan \(\frac{3}{4}\) merupakan pecahan yang tidak lebih besar dari 1, maka kita dapat menggambar sebuah segitiga siku-siku dengan sudut-sudut sebagai berikut:

                      \[\cos x = \frac{4}{5} \text{ dan } \sin x = \frac{3}{5} \]

                      Selanjutnya, kita dapat menggunakan rumus \(\cos\left(\frac{1}{2}x\right) = \pm \sqrt{\frac{1+\cos x}{2}}\) untuk mencari nilai dari \(\cos\left(\frac{1}{2}x\right)\). Kita harus memilih tanda yang benar untuk \(\cos\left(\frac{1}{2}x\right)\) berdasarkan kuadran sudut \(\frac{1}{2}x\).
                      <br>
                      Karena \(0^{\circ} \le x \le 90^{\circ}\), maka \(0^{\circ} \le \frac{1}{2}x \le 45^{\circ}\). Sudut \(\frac{1}{2}x\) berada di kuadran I atau IV, sehingga \(\cos\left(\frac{1}{2}x\right)\) harus positif.
                      <br>
                      Dengan menggunakan rumus tersebut dan nilai \(\cos x\) yang telah diketahui, kita dapat menghitung nilai dari \(\cos\left(\frac{1}{2}x\right)\):
                      <br>
                      \begin{aligned}\cos\left(\frac{1}{2}x\right) &= \sqrt{\frac{1+\cos x}{2}} \\ &= \sqrt{\frac{1+\frac{4}{5}}{2}} \\ &= \sqrt{\frac{9}{10}} \\ &= \frac{3\sqrt{10}}{10}\end{aligned}

                      Jadi, nilai dari \(\displaystyle \cos\frac{1}{2}x\) adalah \(\boxed{\displaystyle \frac{3\sqrt{10}}{10}}\).</p>
                   <b class="text-end text-danger fw-bold"> <h3>JAWABAN : A</h3></b>
                  </div>
                </div>
                <hr />
<!--=======================  soal18 ===================================-->
            <li>Bentuk sederhana dari \(\displaystyle \frac{\sin 2x + \sin 6x}{\cos 2x + \cos 6x} \) adalah . . .</li>
                <ol type="A">
                    <li>\(\tan 4x  \)</li>
                    <li>\(\cot 4x  \)</li>
                    <li>\(\tan 2x  \)</li>
                    <li>\(\cot 6x  \)</li>
                    <li>\(\tan 6x  \)</li>
                </ol>
                <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal18" aria-expanded="false" aria-controls="collapsesoal18">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal18">
                  <div class="card card-body overflow-auto">
                    <p>

                      Kita dapat menggunakan identitas trigonometri \(\sin a + \sin b = 2 \sin \frac{a+b}{2} \cos \frac{a-b}{2}\) dan \(\cos a + \cos b = 2 \cos \frac{a+b}{2} \cos \frac{a-b}{2}\) untuk menyederhanakan pecahan tersebut. Mari kita terapkan identitas ini pada pecahan di atas:

                      \begin{aligned}\frac{\sin 2x + \sin 6x}{\cos 2x + \cos 6x} &= \frac{2 \sin 4x \cos 2x}{2 \cos 4x \cos 2x} \\ &= \frac{\sin 4x}{\cos 4x} \\ &= \tan 4x \end{aligned}

                      Sehingga, jawaban yang benar adalah pilihan (A), yaitu \(\boxed{\tan 4x}\).</p>
                   <b class="text-end text-danger fw-bold"> <h3>JAWABAN : A</h3></b>
                  </div>
                </div>
                <hr />
<!--=======================  soal19 ===================================-->
            <li>Diketahui \(\displaystyle \sin \alpha = \frac{1}{5} \sqrt{13} \), \(\alpha\) sudut lancip. Nilai \(\cos 2\alpha\) adalah . . . </li>
                <ol type="A">
                    <li>\(\displaystyle -\frac{1}{25} \)</li>
                    <li>\(\displaystyle -\frac{25}{26} \)</li>
                    <li>\(\displaystyle \frac{51}{25} \)</li>
                    <li>\(\displaystyle \frac{26}{25} \)</li>
                    <li>\(\displaystyle -\frac{13}{25} \)</li>
                </ol>
                <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal19" aria-expanded="false" aria-controls="collapsesoal19">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal19">
                  <div class="card card-body overflow-auto">
                    <p>

                      Kita dapat menggunakan identitas trigonometri \(\cos 2\alpha = 2\cos^2 \alpha - 1\) untuk mencari nilai \(\cos 2\alpha\) berdasarkan nilai \(\sin \alpha\) yang telah diketahui. Pertama-tama, kita perlu mencari nilai \(\cos \alpha\) dengan menggunakan identitas Pythagoras:

                      \begin{aligned}\cos \alpha &= \sqrt{1 - \sin^2 \alpha} \\ &= \sqrt{1 - \frac{13}{25}} \\ &= \frac{2}{5} \sqrt{3} \end{aligned}

                      Selanjutnya, kita dapat menggunakan identitas \(\cos 2\alpha = 2\cos^2 \alpha - 1\):

                      \begin{aligned}\cos 2\alpha &= 2\cos^2 \alpha - 1 \\ &= 2\left(\frac{2}{5} \sqrt{3}\right)^2 - 1 \\ &= \frac{8}{25} \cdot 3 - 1 \\ &= \frac{24}{25} - \frac{25}{25} \\ &= -\frac{1}{25}\end{aligned}

                      Sehingga, jawaban yang benar adalah pilihan (A), yaitu \(\boxed{-\frac{1}{25}}\).</p>
                   <b class="text-end text-danger fw-bold"> <h3>JAWABAN : A</h3></b>
                  </div>
                </div>
                <hr />
<!--=======================  soal20 ===================================-->
            <li>Bentuk sederhana dari \(\cos 100^{\circ} + \cos 20^{\circ}\) adalah . . .</li>
                <ol type="A">
                    <li>\(\cos 40^{\circ}  \)</li>
                    <li>\(-\cos 40^{\circ}  \)</li>
                    <li>\(\cos 10^{\circ}  \)</li>
                    <li>\(\sin 40^{\circ}  \)</li>
                    <li>\(-\sin 10^{\circ}  \)</li>
                </ol>
                <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal20" aria-expanded="false" aria-controls="collapsesoal20">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal20">
                  <div class="card card-body overflow-auto">
                    <p>

                      Kita akan menggunakan rumus cosinus untuk menjumlahkan dua buah kosinus, yaitu \(\cos a + \cos b = 2 \cos \frac{a+b}{2} \cos \frac{a-b}{2}\).

                      Maka,

                      \begin{aligned}\cos 100^\circ + \cos 20^\circ &= 2\cos \frac{100^\circ + 20^\circ}{2} \cos \frac{100^\circ - 20^\circ}{2} \\ &= 2\cos 60^\circ \cos 40^\circ \\ &= \cos 40^\circ\end{aligned}

                      Sehingga, jawaban yang benar adalah pilihan (A), yaitu \(\boxed{\cos 40^\circ}\).</p>
                   <b class="text-end text-danger fw-bold"> <h3>JAWABAN : A</h3></b>
                  </div>
                </div>
                <hr />
<!-- SOAL end -->
</ol>
<!-- ------------------------------------------------------------------------------------------------------------------- -->
<!-- Batas no SOAL -->

<!-- ======================================PESAN DISQUS============================================= -->
            <div class="row">
                <div class="col">
                    <div id="disqus_thread"></div>
                </div>
            </div>
<!-- ======================================PESAN DISQUS============================================= -->
        </div>
        </div>
</section>

@endsection

