@extends('konten.13LimitALjabarFungsi.13.template')
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
            LIMIT FUNGSI ALJABAR
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
{{--  --}}
<p>Coba Anda perhatikan ketika seseorang sedang marah dan mengatakan "Saya sudah diambang batas kesabaran" atau "Sebuah gelas yang jatuh dan hampir pecah". Kata-kata seperti ambang atau hampir mengandung arti sesuatu yang dekat tetapi tidak mencapai. Dalam kehidupan sehari-hari, banyak sekali kalimat menggunakan kata-kata hampir, mendekati, harga batas, dan sebagainya. Kata-kata tersebut sering dianalogikan sebagai limit. Menurut Anda bagaimanakah limit ini? Bagaimana pula penerapannya dalam kehidupan nyata? <br>
    Agar Anda mengetahui dan memahami bagaimana limit, pelajari materi ini dengan semangat dan percaya diri.</p>
    <div>
        <h3><b>PENGERTIAN LIMIT</b></h3>
        <div class="row">
          <div class="col">
            <div class="container border rounded-3 shadow">
              <div class="badge bg-warning text-dark fs-6" style="width: 20rem">Aktivitas Siswa 1: Diskusi</div> <br>
              <p class="fst-italic">Perhatikan kalimat-kalimat berikut yang sering Anda temui dalam kehidupan sehari-hari.
              <ol type="a">
                <li >Nilai tugas matematika yang dikerjakan oleh Dani <strong>mendekati</strong> sempurna</li>
                <li>Mobil itu <strong>hampir</strong> saja menabrak pembatas jalan tol di KM 110</li>
                <li>Frank Lampard <strong>sedikit lagi</strong> bisa menyamai rekor pencetak gol terbanyak sepanjang masa Chelsea, Bobby Tambling</li>
              </ol>
              Dalam bidang matematika, kata-kata seperti <b>mendekati, hampir saja,</b> atau <b>sedikit lagi</b> dapat dianalogikan sebagai limit. Coba diskusikan bersama teman sebangku Anda mengenai pengertian limit berdasarkan kalimat-kaliamt diatas.
              </p>
            </div>
            <p class="mt-2">Misalkan \(x\)
              adalah variabel real dan \(a\) adalah konstanta real. Jika nilai \(x\) mendekati nilai \(a\) dan nilai fungsi \(f(x)\) mendekati batas \(L\), maka berlaku
            </p>
            $$\displaystyle \lim_{x\to a} f(x)=L $$
            Nilai pendekatan \(x\) ke \(a\) dapat dipandang dari dua arah, yaitu \(x\) mendekati \(a\) dari arah kiri atau ditulis \(x \to a^{-}\) dan \(x\) mendekati \(a\) dari arah kanan atau ditulis \(x \to a^{+}\)
    <!-- Contoh Soal 1.1 -->
            <div class="row justify-content-center">
              <div class="col-md-9 border">
                <div class="badge bg-primary text-wrap fs-6" style="width: 8rem">CONTOH 01</div>
                <i><p>Tentukan nilai dari \(\displaystyle \lim_{x\to 1} \frac{x^2 - 4}{x-2} \)</p></i>
                <p><b>JAWAB</b></p>
                Untuk menentukan nilai dari \(\displaystyle \lim_{x\to 1} \frac{x^2 - 4}{x-2} \), terlebih dahulu dibuat tabel nilai \(x\) yang mendekati 1 dari arah kiri dan kanan
                <table class="table table-bordered text-center5">
                  <thead>
                    <tr>
                      <th scope="col">\(x\)</th>
                      <th scope="col">0,8</th>
                      <th scope="col">0,9</th>
                      <th scope="col">0,99
                      </th>
                      <th scope="col"> . . .
                      </th>
                      <th scope="col">\(x \to 1^- \)
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">\(\displaystyle \lim_{x\to 1} \frac{x^2 - 4}{x-2} \)</th>
                      <td>2,8</td>
                      <td>2,9</td>
                      <td>2,99</td>
                      <td>. . .</td>
                      <td>\(\displaystyle \lim_{x\to 1} \frac{x^2 - 4}{x-2} \to 3\)</td>
                    </tr>
                  </tbody>
                </table>
                <p> Jika nilai \(x\) mendekati 1 dari arah kiri, maka diperoleh nilai \(f(x)\) mendekati 3 dan ditulis \(\displaystyle \lim_{x\to 1^-} \frac{x^2 - 4}{x-2}=3. \) </p>
                <table class="table table-bordered text-center">
                  <thead>
                    <tr>
                      <th scope="col">\(x\)</th>
                      <th scope="col">\(1^+ \leftarrow x\)</th>
                      <th scope="col">. . .</th>
                      <th scope="col">1,01
                      </th>
                      <th scope="col">1,1
                      </th>
                      <th scope="col">1,5
                      </th>
                      <th scope="col">1,8
                      </th>
                      <th scope="col">1,9
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">\(\displaystyle \lim_{x\to 1} \frac{x^2 - 4}{x-2} \)</th>
                      <td>\( 3 \leftarrow \displaystyle \lim_{x\to 1} \frac{x^2 - 4}{x-2} \)</td>
                      <td>. . .</td>
                      <td>3,01</td>
                      <td>3,1</td>
                      <td>3,5</td>
                      <td>3,8</td>
                      <td>3,9</td>
                    </tr>
                  </tbody>
                </table>
                Jika nilai \(x\) mendekati 1 dari arah kanan, maka diperoleh nilai \(f(x)\) mendekati 3 dan ditulis \(\displaystyle \lim_{x\to 1^+} \frac{x^2 - 4}{x-2} = 3 \) <br> <br>
                Jadi, \(\displaystyle \lim_{x\to 1^-} \frac{x^2 - 4}{x-2} = \displaystyle \lim_{x\to 1^+} \frac{x^2 - 4}{x-2}=3 \)
              </div>
            </div>
            <!-- end Contoh Soal 4.1 -->

            <div class="row justify-content-center pt-2">
              <div class="col-md-9 border">
                <div class="badge bg-primary text-wrap fs-6" style="width: 8rem">CONTOH 02</div>
                <p>
                  <i>Diketahui fungsi \(f(x)\) yang didefinisikan sebagai berikut </i>
                  $$f(x)=\left\{\begin{matrix}
                  x+2, \: \text{untuk } x < 4
                  \\
                  2x+1, \: \text{untuk } x \geq  4
                 \end{matrix}\right. $$
                 Tentukan nilai \(f(x)\), jika \(x\) mendekati 4
                </p>
                <p><b>JAWAB</b></p>
                <div class="overflow-auto">
                  Nilai-nilai fungsi \(f(x)\) di sekitar \(x=4\) dapat dilihat pada tabel berikut ini
                </div>
                <table class="table table-bordered text-center">
                  <thead>
                    <tr>
                      <th scope="col">\(x\)</th>
                      <th scope="col">3,8</th>
                      <th scope="col">3,9</th>
                      <th scope="col">3,99
                      </th>
                      <th scope="col">\(\rightarrow 4 \leftarrow\)
                      </th>
                      <th scope="col">4,01
                      </th>
                      <th scope="col">4,1
                      </th>
                      <th scope="col">4,2
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">\(\displaystyle f(x)=\left\{\begin{matrix}
                        x+2, x < 4
                        \\
                        2x+1,x \geq  4
                       \end{matrix}\right. \)</th>
                      <td>5,8</td>
                      <td>5,9</td>
                      <td>5,99</td>
                      <td>. . .</td>
                      <td>9,02</td>
                      <td>9,2</td>
                      <td>9,4</td>
                    </tr>
                  </tbody>
                </table>
                Dari tabel di atas diperoleh bahwa: <br>
                \(\displaystyle \lim_{x\to 4^-}f(x) = \lim_{x\to 4^-}(x+2)=6 \) <br>
                \(\displaystyle \lim_{x\to 4^+}f(x) = \lim_{x\to 4^+}(2x+1)=9 \) <br>
                Karena \(\displaystyle \lim_{x\to 4^-}f(x) \neq \lim_{x\to 4^+}f(x)\), maka \(\displaystyle \lim_{x\to 4}f(x)\) tidak ada.
              </div>
            </div>
            Berdasarkan beberapa contoh di atas, ada tidaknya nilai limit suatu fungsi dapat ditetapkan dengan rumusan sebagai berikut.
            $$ \lim_{x \to a} f(x)=L \text{ jika dan hanya jika } \lim_{x \to a^-} f(x) = \lim_{x \to a^+} f(x) = L $$
          </div>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-9 border">
          <div class="badge bg-danger text-wrap fs-6" style="width: 8rem">LATIHAN 01
          </div>
          <ol>
            <li>Hitunglah setiap limit fungsi berikut ini dengan menggunakan limit kiri dan limit kanan</li>
            <ol type="a">
              <li>\(\displaystyle \lim_{x \to 1}(3x-1) \) </li>
              <li>\(\displaystyle \lim_{x \to 4} \left ( \frac{2}{x}+1  \right ) \)</li>
              <li>\(\displaystyle \lim_{x \to 3} \frac{\sqrt{16+x^2}}{2x-1} \)</li>
              <li>\(\displaystyle \lim_{x \to 2} \frac{x^4-1}{x^2-1} \)</li>
              <li>\(\displaystyle \lim_{x \to 1} \frac{x^2+4x}{x^2-4x} \)</li>
            </ol>
            <li>Tentukan ada atau tidaknya limit pada fungsi berikut ini, jika ada tentukan nilainya.</li>
            <ol type="a">
              <li>\(\displaystyle \lim_{x \to 2} \frac{x^2+4}{x-2} \)</li>
              <li>\(\displaystyle \lim_{x \to 1} f(x), \: \text{ jika } f(x) = \left\{\begin{matrix} x-1, \: x < 1 \\ x^2+x-2,\: x \geq 1 \end{matrix}\right. \) </li>
              <li>\(\displaystyle \lim_{x \to 1} g(x), \: \text{ jika } g(x) = \left\{\begin{matrix} -8x+3, \: x \leq 1 \\ -5,\: x > 1 \end{matrix}\right. \) </li>
              <li>\(\displaystyle \lim_{x \to 1} h(x), \: \text{ jika } h(x) = \left\{\begin{matrix} x+3, \: x \leq 1 \\ -x+3,\: x > 1 \end{matrix}\right. \) </li>
            </ol>
            <li>Diketahui fungsi \(f\) ditentukan dengan: <br>
              \(\displaystyle f(x)=\left\{\begin{matrix} \frac{x^2-9}{x-3}, \: \text{ untuk } x \neq 3 \\ ax,\: \text{ untuk } x = 3 \end{matrix}\right. \) <br>
              Jika \(\displaystyle \lim_{x \to 3} f(x) \) ada, maka tentukan nilai \(a\).
            </li>
            <li>Misalkan fungsi \(g\) ditentukan oleh <br>
              \(\displaystyle g(x)=\left\{\begin{matrix} ax-1, \: \text{ untuk } x < 2 \\ 4x+3,\: \text{ untuk } x \geq 2 \end{matrix}\right. \) <br> Tentukan nilai \(a\) supaya \(\displaystyle \lim_{x \to 2}g(x) \) tidak ada.
            </li>
          </ol>
        </div>
        </div>
<br><br>
        <h3><b>
            MENENTUKAN NILAI LIMIT
            </b></h3>
            <ol>
            <b><li>Menentukan Nilai Limit Fungsi Aljabar Berbentuk \(\displaystyle \lim_{x \to a} f(x) \) </li></b>
            </ol>


            <div class="container border rounded-3 shadow">
                <div class="badge bg-warning text-dark fs-6" style="width: 20rem">Aktivitas Siswa 2: Diskusi</div> <br>
                Tentukanlah nilai limit berikut dengan menggunakan nilai limit kiri dan limit kanan.
                <ol type="a">
                <li>\(\displaystyle \lim_{x \to 2} (2x^2 -1) \)</li>
                <li>\(\displaystyle \lim_{x \to -1} \left ( \frac{x^2+1}{x-1}  \right ) \)</li>
                <li>\(\displaystyle \lim_{x \to 4} \sqrt{3x+4} \)</li>
                </ol>
                Setelah Anda menentukan nilai limit di atas, hitunglah nilai dari:
                <ol type="a">
                <li>\(f(x)=2x^2 -1, \: \text{ untuk } x=2 \) </li>
                <li>\(g(x)=\frac{x^2+1}{x-1}, \: \text{ untuk } x=-1 \) </li>
                <li>\(h(x)=\sqrt{3x+4}, \: \text{ untuk } x=4 \) </li>
                </ol>
                Berdasarkan jawaban Anda, coba diskusikan bersama teman sebangku pertanyaan-pertanyaan berikut ini!
                <ol>
                <li>Apakah hasil \(\displaystyle \lim_{x \to 2} (2x^2 -1) \) sama dengan hasil \(f(x)=2x^2 -1, \: \text{ untuk } x=2? \) Jelaskan!</li>
                <li>Apakah hasil \(\displaystyle \lim_{x \to -1} \left ( \frac{x^2+1}{x-1}  \right ) \) sama dengan hasil \(g(x)=\frac{x^2+1}{x-1}, \: \text{ untuk } x=-1 ?\) Jelaskan!</li>
                <li>Apakah hasil \(\displaystyle \lim_{x \to 4} \sqrt{3x+4} \) sama dengan hasil \(h(x)=\sqrt{3x+4}, \: \text{ untuk } x=4 ?\) Jelaskan!</li>
                </ol>
                </div>

                <div class="row justify-content-center pt-2">
                    <div class="col-md-9 border">
                    <div class="badge bg-primary text-wrap fs-6" style="width: 8rem">Contoh 03</div>
                    <p><i> Hitunglah nilai limit dari fungsi berikut ini.
                    <ol>
                    <li>\(\displaystyle \lim_{x \to 2} (x^2-x+4) \)</li>
                    <li>\(\displaystyle \lim_{x \to -3} \sqrt{10-2x} \)</li>
                    <li>\(\displaystyle \lim_{x \to -1} \left ( \frac{x-2}{x+2}  \right ) \)</li>
                    <li>\(\displaystyle \lim_{x \to 3} \left ( \frac{x^2-1}{x^2+1}  \right ) \)</li>
                    </ol> </i></p>
                    <p><b>JAWAB</b></p>
                    <div class="overflow-auto">
                    <ol>
                    <li>\(\displaystyle \lim_{x \to 2} (x^2-x+4)=(2)^2-(2)+4=4-2+4=6 \)</li>
                    <li>\(\displaystyle \lim_{x \to -3} \sqrt{10-2x}=\sqrt{10-2(-3)}=\sqrt{10+6}=\sqrt{16}=4 \)</li>
                    <li>\(\displaystyle \lim_{x \to -1} \left ( \frac{x-2}{x+2}  \right ) = \left ( \frac{(-1)-2}{(-1)+2}  \right )=\frac{-3}{1}=-3 \)</li>
                    <li>\(\displaystyle \lim_{x \to 3} \left ( \frac{x^2-1}{x^2+1}  \right ) =\left( \frac{(3)^2-1}{(3)^2+1}  \right )=\frac{8}{10}=\frac{4}{5} \)</li>
                    </ol>
                    </div>
                    </div>
                    </div>
                    <br><br>
                    <p>Nilai limit fungsi \(f(x)\) untuk \(x \to a\) atau ditulis \(\displaystyle \lim_{x\to a}f(x) \), dapat diperoleh dengan menyubstitusikan langsung nilai \(x=a\) ke dalam fungsi \(f(x)\), sehingga
                        $$\lim_{x \to a}f(x)=f(a) $$
                        Jika dengan cara substitusi \(\displaystyle \lim_{x\to a} \frac{f(x)}{g(x)} \) menghasilkan \(\displaystyle \frac{f(a)}{g(a)}=\frac{0}{0} \), maka hasil \(\displaystyle \frac{0}{0}\) disebut dengan bentuk tak tentu. Bentuk-bentuk tak tentu yang lain adalah \(\displaystyle \frac{\infty}{\infty}, \infty \pm \infty, \) dan \(0.\infty \). Agar hasilnya menjadi bentuk tentu, maka faktor pembuat tak tentu dapat dihilangkan dengan faktorisasi dan merasionalkan pembilang dab penyebut akar.</p>
                        <br>
                        <div class="row">
                            <div class="col">
                            <ol type="a" class="fst-italic fw-bold text-primary">
                            <h5><li>Faktorisasi</li></h5>
                            </ol>
                            <div class="container border rounded-3 shadow">
                            <div class="badge bg-warning text-dark fs-6" style="width: 20rem">Aktivitas Siswa 3: Diskusi</div> <br>
                            Tentukan nilai dari \(\displaystyle \lim_{x \to 2} \frac{x^2-4}{x-2} \) dengan menggunakan nilai limit kiri dan limit kanan.
                            <p><b><i>Penyelesaian:</i></b></p>
                            <table class="table table-bordered text-center">
                            <thead>
                            <tr>
                            <th scope="col">\(x\)</th>
                            <th scope="col">1,8</th>
                            <th scope="col">1,9</th>
                            <th scope="col">1,99</th>
                            <th scope="col">1,999</th>
                            <th scope="col">1,9999</th>
                            <th scope="col">. . .</th>
                            <th scope="col">\(x \to 2^-\) </th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                            <th scope="row">\(\displaystyle \frac{x^2-4}{x-2} \)</th>
                            <td>3,8</td>
                            <td>3,9</td>
                            <td>3,99</td>
                            <td>3,999</td>
                            <td>3,9999</td>
                            <td>. . .</td>
                            <td>\(\left ( \displaystyle \frac{x^2-4}{x-2} \right ) \to 4\)</td>
                            </tr>
                            </tbody>
                            </table>
                            Dari tabel di atas diperoleh bahwa \(\displaystyle \lim_{x \to 2^-} \frac{x^2-4}{x-2}=4 \).
                            <br><br>
                            <table class="table table-bordered text-center">
                            <thead>
                            <tr>
                            <th scope="col">\(x\)</th>
                            <th scope="col">\(2^+ \leftarrow x\)</th>
                            <th scope="col">. . .</th>
                            <th scope="col">2,0001</th>
                            <th scope="col">2,001</th>
                            <th scope="col">2,01</th>
                            <th scope="col">2,1</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                            <th scope="row">\(\displaystyle \frac{x^2-4}{x-2} \)</th>
                            <td>\(\displaystyle 4 \leftarrow \left ( \frac{x^2-4}{x-2} \right) \)</td>
                            <td>. . .</td>
                            <td>4,0001</td>
                            <td>4,001</td>
                            <td>4,01</td>
                            <td>4,1</td>
                            </tr>
                            </tbody>
                            </table>
                            Dari tabel di atas diperoleh bahwa \(\displaystyle \lim_{x \to 2^+} \frac{x^2-4}{x-2}=4 \) <br> <br>
                            Sehingga, \(\displaystyle \lim_{x \to 2^-} \frac{x^2-4}{x-2}=\lim_{x \to 2^+} \frac{x^2-4}{x-2}=4 \) <br>
                            Jadi, \(\displaystyle \lim_{x \to 2} \frac{x^2-4}{x-2} = 4 \) <br>
                            Berdasarkan soal diatas
                            <ol type="a">
                            <li>Tentukan nilai dari \(\displaystyle \lim_{x \to 2} \frac{x^2-4}{x-2}\) dengan substitusi langsung nilai \(x\).</li>
                            <li>Apakah Anda memperoleh bentuk tak tentu \( \displaystyle \frac{0}{0}?\) Jelaskan! </li>
                            <li>Sederhanakan bentuk \(\displaystyle \frac{x^2-4}{x-2}\), Kemudian tentukan nilai \(\displaystyle \lim_{x \to 2} \) dari bentuk yang telah Anda sederhanakan. Bagaimana hasilnya? </li>
                            <li>Apakah hasil \(\displaystyle \lim_{x \to 2} \frac{x^2-4}{x-2}\) sama dengan \(\displaystyle \lim_{x \to 2} \) dari bentuk yang telah Anda sederhanakan? Jelaskan.</li>
                            <li>Berdasarkan pertanyaan-pertanyaan di atas, simpulan apa yang dapat Anda peroleh?</li>
                            </ol>
                            </div>
                            <!-- contoh mulai -->
                            <div class="row justify-content-center pt-2">
                            <div class="col-md-9 border">
                            <div class="badge bg-primary text-wrap fs-6" style="width: 8rem">Contoh 04</div>
                            <p><i> Tentukan hasil dari:
                            <ol>
                            <li>\(\displaystyle \lim_{x \to 5} \frac{x^2-7x+10}{x^2-25} \)</li>
                            <li>\(\displaystyle \lim_{x \to 3} \frac{2x^3-5x^2+7x-30}{x^2+x-12} \)</li>

                            </ol> </i></p>
                            <p><b>JAWAB</b></p>
                            <div class="overflow-auto">
                            \(\displaystyle  \begin{align} 1. \lim_{x \to 5} \frac{x^2-7x+10}{x^2-25} &= \lim_{x \to 5}\frac{(x-5)(x-2)}{(x-5)(x+5)} \\ &= \lim_{x \to 5}\frac{x-2}{x+5} \\ &= \frac{5-2}{5+5} \\ &= \frac{3}{10} \end{align}\) <br> <br>

                            \(\displaystyle \begin{align} 2. \lim_{x \to 3} \frac{2x^3-5x^2+7x-30}{x^2+x-12} &= \lim_{x \to 3} \frac{(x-3)(2x^2 +x+10)}{(x-3)(x+4)} \\ &= \lim_{x \to 3} \frac{2x^2 +x+10}{x+4} \\ &= \frac{2(3)^2 + (3)+10}{(3)+4} \\ &= \frac{31}{7}\end{align}\)

                            </div>
                            </div>
                            </div>
                            <!-- contoh berakhir -->
                            <p>Jika fungsi polinom \(F(x)\) dan \(G(x)\) bernilai 0 untuk \(x \to a\), maka berlaku </p>
                            $$\lim_{x \to a}\frac{F(x)}{G(x)} = \lim_{x \to a} \frac{(x-a)f(x)}{(x-a)g(x)}=\lim_{x \to a} \frac{f(x)}{g(x)} =\frac{f(a)}{g(a)} $$
                            <br>
                            <ol type="a" start="2"  class="fst-italic fw-bold text-primary">
                            <h5><li>Merasionalkan Pembilang dan Penyebut Akar</li></h5>
                            </ol>
                            <div class="container border rounded-3 shadow">
                            <div class="badge bg-warning text-dark fs-6" style="width: 20rem">Aktivitas Siswa 4: Diskusi</div> <br>
                            Tentukan hasil dari \(\displaystyle \lim_{x \to 4} \frac{x-4}{\sqrt{x}-2} \)
                            <p><b><i>Penyelesaian:</i></b></p>
                            \(\displaystyle \begin{align} \lim_{x \to 4} \frac{x-4}{\sqrt{x}-2} &= \lim_{x \to 4} \frac{(\sqrt{x}-2)(\sqrt{x}+2)}{\sqrt{x}-2} \\ &= \lim_{x \to 4} (\sqrt{x}+2) \\ &= \sqrt{4}+2 \\ &= 4 \end{align}\)
                            <p>Berdasarkan soal diatas</p>
                            <ol type="a">
                            <li>Rasionalkan bentuk \(\displaystyle \frac{x-4}{\sqrt{x}-2}\), kemudian tentukan nilai \(\displaystyle \lim_{x \to 4} \) dari bentuk yang telah Anda rasionalkan. Bagaimanakah hasilnya?</li>
                            <li>Apakah hasil dari \(\displaystyle \lim_{x \to 4}\frac{x-4}{\sqrt{x}-2}\) sama dengan nilai \(\displaystyle \lim_{x \to 4} \) dari bentuk yang telah Anda rasionalkan? Jelaskan!</li>
                            <li>Berdasarkan jawaban pada bagian (a.) dan (b.) simpulan apa yang dapat Anda peroleh?</li>
                            </ol>
                            </div>
                            <!-- contoh mulai -->
                            <div class="row justify-content-center pt-2">
                            <div class="col-md-9 border">
                            <div class="badge bg-primary text-wrap fs-6" style="width: 8rem">Contoh 05</div>
                            <p><i> Tentukan hasil dari: \(\displaystyle \lim_{x \to 0} \frac{\sqrt{1+x+x^2}-1}{x} \)</i></p>
                            <p><b>JAWAB</b></p>
                            <div class="overflow-auto">
                            \(\displaystyle  \begin{align} 1. \lim_{x \to 0} \frac{\sqrt{1+x+x^2}-1}{x} &= \lim_{x \to 0}\frac{\sqrt{1+x+x^2}-1}{x} \frac{\sqrt{1+x+x^2}+1}{\sqrt{1+x+x^2}+1} \\ &= \lim_{x \to 0}\frac{(1+x+x^2)-1}{x(\sqrt{1+x+x^2}+1)} \\ &= \lim_{x \to 0}\frac{x+x^2}{x(\sqrt{1+x+x^2}+1)} \\ &= \lim_{x \to 0}\frac{x(1+x)}{x(\sqrt{1+x+x^2}+1)} \\ &= \lim_{x \to 0}\frac{1+x}{\sqrt{1+x+x^2}+1} \\ &= \frac{1}{1+1} \\ &= \frac{1}{2} \end{align}\)
                            </div>
                            </div>
                            </div>
                            <!-- contoh berakhir -->

                            </div>
                            </div>
                            <br><br>
                            <div class="row justify-content-center">
                                <div class="col-md-9 border">
                                <div class="badge bg-danger text-wrap fs-6" style="width: 8rem">LATIHAN 02
                                </div>
                                <p> Tentukan hasil dari:</p>
                                <div class="row">
                                <div class="col">
                                <ol type="a">
                                <li>\(\displaystyle \lim_{x \to 2} (3x+1) \) </li>
                                <li>\(\displaystyle \lim_{x \to 2} \left ( \frac{x+2}{2x+3}  \right ) \)</li>
                                <li>\(\displaystyle \lim_{x \to 0} \frac{4x^3-2x^2+x}{3x^2+2x} \)</li>
                                <li>\(\displaystyle \lim_{x \to 2} \frac{x^3-2x^2+5x-10}{x^2-4} \)</li>
                                <li>\(\displaystyle \lim_{x \to 3} \frac{x^3-27}{x-3} \)</li>
                                </ol></div>
                                <div class="col">
                                <ol type="a" start="6">
                                <li>\(\displaystyle \lim_{x \to 2} \frac{x^4-16}{x-2} \)</li>
                                <li>\(\displaystyle \lim_{x \to 3} \frac{\sqrt{2x-2}-\sqrt{3x-5}}{3-x} \)</li>
                                <li>\(\displaystyle \lim_{x \to 7} \frac{2-\sqrt{x-3}}{x^2-49} \)</li>
                                <li>\(\displaystyle \lim_{x \to 8} \frac{x-8}{\sqrt[3]{x}-2} \)</li>
                                <li>\(\displaystyle \lim_{x \to 0} \frac{\sqrt{x^2+p^2}-p}{\sqrt{x^2+q^2}-q} \)</li>
                                </ol>
                                </div>
                                </div>

                                </div>
                                </div>
                                <br><br>
                                <div class="row">
                                    <div class="col">
                                    <h3><b>
                                    SIFAT-SIFAT LIMIT
                                    </b></h3>
                                    <div class="container border rounded-3 shadow">
                                    <div class="badge bg-warning text-dark fs-6" style="width: 20rem">Aktivitas Siswa 5: Diskusi</div>
                                    <ol>
                                    <li>Lengkapilah tabel limit kiri dan limit kanan berikut ini</li>
                                    <div class="row">
                                    <div class="col">
                                    <table class="table table-bordered text-center">
                                      <thead>
                                        <tr>
                                          <th scope="col">\(x\)</th>
                                          <th scope="col">0,8</th>
                                          <th scope="col">0,9</th>
                                          <th scope="col">0,99</th>
                                          <th scope="col">0,999</th>
                                          <th scope="col">\(...\)</th>
                                          <th scope="col">\(x \to 1^-\)</th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                        <tr>
                                          <th scope="row">\(x\)</th>
                                          <td>\(...\)</td>
                                          <td>\(...\)</td>
                                          <td>\(...\)</td>
                                          <td>\(...\)</td>
                                          <td>\(...\)</td>
                                          <td>\(x \to ...\)</td>
                                        </tr>
                                      </tbody>
                                    </table>
                                    </div>
                                    <div class="col">
                                    <table class="table table-bordered text-center">
                                      <thead>
                                        <tr>
                                          <th scope="col">\(x\)</th>
                                          <th scope="col">\(1^+ \leftarrow x\)</th>
                                          <th scope="col">\(...\)</th>
                                          <th scope="col">1,001</th>
                                          <th scope="col">1,01</th>
                                          <th scope="col">1,1</th>
                                          <th scope="col">1,5</th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                        <tr>
                                          <th scope="row">\(x\)</th>
                                          <td>\(... \leftarrow x\)</td>
                                          <td>\(...\)</td>
                                          <td>\(...\)</td>
                                          <td>\(...\)</td>
                                          <td>\(...\)</td>
                                          <td>\(x \to ...\)</td>
                                        </tr>
                                      </tbody>
                                    </table>
                                    </div>
                                    </div>
                                    <li>Berdasarkan tabel pada bagian 1, berapakah nilai dari</li>
                                    <ol type="a">
                                    <li>\(\displaystyle \lim_{x \to 1^-} 2 \)</li>
                                    <li>\(\displaystyle \lim_{x \to 1^+} 2 \)</li>
                                    </ol>
                                    <li>Berdasarkan jawaban Anda pada bagian 2, apakah \(\displaystyle \lim_{x \to 1^-} 2 = \lim_{x \to 1^+} 2?\) Jelaskan jawaban Anda! </li>
                                    </ol>
                                    </div>
                                    </div>
                                    <p class="pt-2">Dengan menggunakan langkah-langkah yang sama seperti menentukan nilai dari \(\displaystyle \lim_{x \to 1} 2\), tentukanlah nilai dari \(\displaystyle \lim_{x \to 5} (-4)\). Berdasarkan kegiatan yang kalian lakukan, simpulan apa yang dapat diperoleh?</p>
                                    <p>Perhatikan contoh soal berikut</p>
                                    <!-- contoh mulai -->
                                    <div class="row justify-content-center pt-2">
                                    <div class="col-md-9 border">
                                    <div class="badge bg-primary text-wrap fs-6" style="width: 8rem">Contoh 06</div>
                                    <ol>
                                    <li>Diketahui \(f(x)=2x+3 \) dan \(g(x)= x^2+3x\) <br> Tentukan \(\displaystyle \lim_{x \to 2} \left(f(x)+g(x)\right) \)</li>
                                    <li>Diketahui \(h(x)=x^2-2x \) dan \(k(x)= 4x+3\) <br> Tentukan \(\displaystyle \lim_{x \to 1} \left(h(x)-k(x)\right) \)</li>
                                    </ol>

                                    <p><b>JAWAB</b></p>
                                    <div class="overflow-auto">
                                    \(\displaystyle  \begin{align} 1. \lim_{x \to 2} \left(f(x)+g(x)\right) &= \lim_{x \to 2} \left(2x+3+x^2+3x \right) \\ &= \lim_{x \to 2} (x^2+5x+3) \\ &= (2)^2+5(2)+3 \\ &= 4+10+3 \\ &= 17 \end{align}\)
                                    \(\displaystyle  \begin{align} 2. \lim_{x \to 1} \left(h(x)-k(x)\right) &= \lim_{x \to 1} \left(x^2-2x-(4x+3) \right) \\ &= \lim_{x \to 1} (x^2-2x-4x-3) \\ &= \lim_{x \to 1} (x^2-6x-3) \\ &= (1)^2 - 6(1)-3 \\ &= 1-6-3 \\&= -8 \end{align}\)
                                    </div>
                                    </div>
                                    </div>
                                    </div>

                                    <div class="container border rounded-3 shadow">
                                        <div class="badge bg-warning text-dark fs-6" style="width: 20rem">Aktivitas Siswa 6: Diskusi
                                        </div>
                                        <p>Berdasarkan soal pada <b>Contoh 06</b> coba kalian hitung!</p>
                                        <ol>
                                        <li>\(\displaystyle \lim_{x \to 2} f(x)+\lim_{x \to 2} g(x)\)</li>
                                        <li>\(\displaystyle \lim_{x \to 1} h(x)-\lim_{x \to 2} k(x)\)</li>
                                        </ol>
                                        <p>Berdasarkan jawaban di atas,</p>
                                        <ol type="a">
                                        <li>Apakah hasil \(\displaystyle \lim_{x \to 2} (f(x)+g(x)\) sama dengan hasil \(\displaystyle \lim_{x \to 2} f(x)+\lim_{x \to 2} g(x)?\) Jelaskan!</li>
                                        <li>Apakah hasil \(\displaystyle \lim_{x \to 1} (h(x)+k(x)\) sama dengan hasil \(\displaystyle \lim_{x \to 1} h(x)+\lim_{x \to 1} k(x)?\) Jelaskan!</li>
                                        <li>Dari jawaban pada bagian (a.) dan (b.), simpulan apa yang dapat diperoleh?</li>
                                        </ol>
                                        </div>

                                        <div class="container">
                                        <!-- contoh mulai -->
                                        <div class="row justify-content-center">
                                        <p>Perhatikan Contoh berikut</p>
                                        <div class="col-md-9 border">
                                        <div class="badge bg-primary text-wrap fs-6" style="width: 8rem">Contoh 07</div>
                                        <p>Misalkan \(f(x)=3x^2+4x \)</p>
                                        <ol>
                                        <li>\(\displaystyle \lim_{x \to 3} k(f(x)) \), jika \(k=5\)</li>
                                        <li>\(\displaystyle \lim_{x \to 1} k(f(x)) \), jika \(k=-3\)</li>
                                        </ol>
                                        <p><b>JAWAB</b></p>
                                        <div class="overflow-auto">
                                        \(\displaystyle  \begin{align} 1. \lim_{x \to 3} k(f(x)) &= \lim_{x \to 3} 5(3x^2+4x) \\&= \lim_{x \to 3}(15x^2+20x) \\&= 15(3)^2+20(3) \\&= 135+60 \\&= 195 \end{align}\) <br>
                                        \(\displaystyle  \begin{align} 2. \lim_{x \to 1} k(f(x)) &= \lim_{x \to 1} ((-3)(3x^2+4x)) \\&= \lim_{x \to 1}(-9x^2-12x) \\&= -9(1)^2 - 12(1) \\ &= -9-12 \\ &= -21\end{align}\)
                                        </div>
                                        </div>
                                        </div>
                                        </div>
                                        <!-- contoh berakhir -->
                                        <br>
                                        <div class="container border rounded-3 shadow">
                                        <div class="badge bg-warning text-dark fs-6" style="width: 20rem">Aktivitas Siswa 7: Diskusi
                                        </div>
                                        <p>Berdasarkan soal pada <b>Contoh 07</b> coba kalian hitung!</p>
                                        <ol>
                                        <li>\(\displaystyle k(\lim_{x \to 3} f(x))\), jika \(k=5\)</li>
                                        <li>\(\displaystyle k(\lim_{x \to 1} f(x))\), jika \(k=-3\)</li>
                                        </ol>
                                        <p>Berdasarkan jawaban di atas,</p>
                                        <ol type="a">
                                        <li>Apakah hasil \(\displaystyle \lim_{x \to 3} k(f(x))\) sama dengan hasil \(\displaystyle \lim_{x \to 2} k(\lim_{x \to 3} f(x))\) Jelaskan!</li>
                                        <li>Dari jawaban pada bagian (a.), simpulan apa yang dapat diperoleh?</li>
                                        </ol>
                                        </div>
                                        <br>
                                        <div class="container">
                                        <!-- contoh mulai -->
                                        <div class="row justify-content-center">
                                        <div class="col-md-9 border">
                                        <div class="badge bg-primary text-wrap fs-6" style="width: 8rem">Contoh 08</div>
                                        <p>Misalkan \(f(x)=x^3+3 \) dan \(g(x)=x^2-5x\). Tentukan \(\displaystyle \lim_{x \to -2}(f(x)g(x))\)</p>
                                        <p><b>JAWAB</b></p>
                                        <div class="overflow-auto">
                                        \(\displaystyle  \begin{align} \lim_{x \to -2} (f(x)g(x)) &= \lim_{x \to -2} ((x^3+3)(x^2-5x)) \\&= \lim_{x \to -2}(x^5-5x^4+3x^2-15x) \\&= (-2)^5-5(-2)^4+3(-2)^2-15(-2) \\&= -32-80+12+30 \\&= -70 \end{align}\)
                                        </div>
                                        </div>
                                        </div>
                                        </div>

                                        <br>
<div class="container border rounded-3 shadow">
<div class="badge bg-warning text-dark fs-6" style="width: 20rem">Aktivitas Siswa 8: Diskusi
</div>
<p>Berdasarkan soal pada <b>Contoh 08</b> coba kalian tentukan \(\displaystyle \lim_{x \to -2}f(x)\lim_{x \to -2}g(x) \)</p>
<ol type="a">
<li>Apakah hasil \(\displaystyle \lim_{x \to -2}(f(x)g(x))\) sama dengan hasil \(\displaystyle \lim_{x \to -2}f(x)\lim_{x \to -2}g(x)? \) Jelaskan!</li>
<li>Dari jawaban pada bagian (a.), simpulan apa yang dapat diperoleh?</li>
</ol>
</div>
<br>

<div class="container">
<!-- contoh mulai -->
<div class="row justify-content-center">
<div class="col-md-9 border">
<div class="badge bg-primary text-wrap fs-6" style="width: 8rem">Contoh 09</div>
<p>Misalkan \(f(x)=3x^2-2x+1 \) dan \(g(x)=x^2-4x-1\). Tentukan \(\displaystyle \lim_{x \to 1} \frac{f(x)}{g(x)} \)</p>
<p><b>JAWAB</b></p>
<div class="overflow-auto">
\(\displaystyle  \begin{align} \lim_{x \to 1} \frac{f(x)}{g(x)} &= \lim_{x \to 1} \frac{3x^2-2x+1}{x^2-4x-1} \\&= \frac{3(1)^2-2(1)+1}{(1)^2-4(1)-1} \\&= \frac{3-2+1}{1-4-1} \\&= \frac{2}{-4} \\&= -\frac{1}{2} \end{align}\)
</div>
</div>
</div>
</div>
<!-- contoh berakhir -->

<br>
<div class="container">
    <!-- contoh mulai -->
    <div class="container border rounded-3 shadow">

        <div class="badge bg-warning text-dark fs-6" style="width: 20rem">Aktivitas Siswa 9: Diskusi
        </div>
        <p>Berdasarkan soal pada <b>Contoh 09</b> coba kalian tentukan \(\displaystyle \frac{\lim_{x \to 1}f(x)}{\lim_{x \to 1}g(x)} \)</p>
        <ol type="a">
        <li>Apakah hasil \(\displaystyle \lim_{x \to 1} \frac{f(x)}{g(x)} \) sama dengan hasil \(\displaystyle \frac{\lim_{x \to 1}f(x)}{\lim_{x \to 1}g(x)}? \) Jelaskan!</li>
        <li>Dari jawaban pada bagian (a.), simpulan apa yang dapat diperoleh?</li>
        </ol>
    </div>
</div>

<br>
<div class="container">
    <!-- contoh mulai -->
    <div class="row justify-content-center">
    <div class="col-md-9 border">
    <div class="badge bg-primary text-wrap fs-6" style="width: 8rem">Contoh 10</div>
    <p>Misalkan \(f(x)=3x-2\) dan \(g(x)=2x+7\). Tentukan </p>
    <ol type="a">
    <li>\(\displaystyle \lim_{x \to 2}[f(x)]^n\) dengan \(n=3\) </li>
    <li>\(\displaystyle \lim_{x \to 1}[g(x)]^n\) dengan \(n=2\) </li>
    </ol>
    <p><b>JAWAB</b></p>
    <div class="overflow-auto">
    \(\displaystyle  \begin{align}a. \lim_{x \to 2} [f(x)]^n &= \lim_{x \to 2} [3x-2]^3 \\&= \lim_{x \to 2} (27x^3-54x^2+36x-8) \\&= 27(2)^3-54(2)^2+36(2)-8 \\&= 216-2-6+72-8 \\&= 64 \end{align}\)
    \(\displaystyle  \begin{align}b. \lim_{x \to 1} [g(x)]^n &= \lim_{x \to 1} [2x+7]^2 \\&= \lim_{x \to 1} (4x^2+28x+49) \\&= 4(1)^2+28(1)+49 \\&= 4+28+49 \\&= 81 \end{align}\)
    </div>
    </div>
    </div>
    </div>

<div class="container">
    <!-- contoh mulai -->
    <div class="container border rounded-3 shadow">
        <div class="badge bg-warning text-dark fs-6" style="width: 20rem">Aktivitas Siswa 10: Diskusi
        </div>
        <p>Perhatikan kembali soal pada <b>Contoh 10</b>. Berdasarkan soal tersebut, coba kalian tentukan</p>
        <ol>
        <li>\(\displaystyle [\lim_{x \to 2}f(x)]^n\) dengan \(n=3\) </li>
        <li>\(\displaystyle [\lim_{x \to 1}g(x)]^n\) dengan \(n=2\) </li>
        </ol>
        <p>Berdasarkan jawaban kalian diatas,</p>
        <ol type="a">
        <li>Apakah hasil \(\displaystyle \lim_{x \to 2} [f(x)]^n \) sama dengan hasil \(\displaystyle [\lim_{x \to 2} f(x)]^n \)? Jelaskan!</li>
        <li>Apakah hasil \(\displaystyle \lim_{x \to 1} [g(x)]^n \) sama dengan hasil \(\displaystyle [\lim_{x \to 1} g(x)]^n \)? Jelaskan!</li>
        <li>Dari jawaban pada bagian (a.), simpulan apa yang dapat diperoleh?</li>
        </ol>
    </div>
    </div>
    <br>

<div class="container">
<!-- contoh mulai -->
<div class="row justify-content-center">
<div class="col-md-9 border">
<div class="badge bg-primary text-wrap fs-6" style="width: 8rem">Contoh 11</div>
<p>Misalkan \(h(x)=x^4+3x+6\),  \(k(x)=x^4-2x^2\), dan \(f(x)=x^2+4x+3\)  Tentukan </p>
<ol type="a">
<li>\(\displaystyle \lim_{x \to -2} \sqrt{h(x)}\) </li>
<li>\(\displaystyle \lim_{x \to 2} \sqrt[4]{k(x)} \) </li>
<li>\(\displaystyle \lim_{x \to 0} \sqrt{f(x)} \) </li>
</ol>
<p><b>JAWAB</b></p>
<div class="overflow-auto">
\(\displaystyle  \begin{align}a. \lim_{x \to -2} \sqrt{h(x)} &= \lim_{x \to -2} \sqrt{x^4+3x+6} \\&= \sqrt{(-2)^4+3(-2)+6} \\&= \sqrt{16-6+6} \\&= \sqrt{16} \\&= 4 \end{align}\)
\(\displaystyle  \begin{align}b. \lim_{x \to 2} \sqrt[4]{k(x)} &= \lim_{x \to 2} \sqrt[4]{x^4-2x^2} \\&= \sqrt[4]{(2)^4-2(2)^2} \\&= \sqrt[4]{16-8} \\&= \sqrt[4]{8} \\&= 2^{\frac{3}{4}} \end{align}\)
\(\displaystyle  \begin{align}c. \lim_{x \to 0} \sqrt{f(x)} &= \lim_{x \to 0} \sqrt{x^2+4x+3} \\&= \sqrt{(0)^2+4(0)+3} \\&= \sqrt{0+0+3} \\&= \sqrt{3} \end{align}\)
</div>
</div>
</div>
</div>
<!-- contoh berakhir -->

<div class="container border rounded-3 shadow">
    <div class="badge bg-warning text-dark fs-6" style="width: 20rem">Aktivitas Siswa 11: Diskusi
    </div>
    <p>Perhatikan kembali soal pada <b>Contoh 11</b>. Berdasarkan soal tersebut, coba kalian tentukan</p>
    <ol>
    <li>\(\displaystyle \sqrt{\lim_{x \to -2}(x^4+3x+6)}\) </li>
    <li>\(\displaystyle \sqrt[4]{\lim_{x \to 2}(x^4-2x^2)}\)</li>
    <li>\(\displaystyle \sqrt{\lim_{x \to 0}(x^2+4x+3)}\) </li>
    </ol>
    <p>Berdasarkan jawaban kalian diatas,</p>
    <ol type="a">
    <li>Apakah hasil \(\displaystyle \lim_{x \to -2} \sqrt{x^4+3x+6} \) sama dengan hasil \(\displaystyle \sqrt{\lim_{x \to -2}(x^4+3x+6)} \)? Jelaskan!</li>
    <li>Apakah hasil \(\displaystyle \lim_{x \to 2} \sqrt[4]{x^4-2x^2} \) sama dengan hasil \(\displaystyle \sqrt[4]{\lim_{x \to 2}(x^4-2x^2)} \)? Jelaskan!</li>
    <li>Apakah hasil \(\displaystyle \lim_{x \to 0} \sqrt{x^2+4x+3} \) sama dengan hasil \(\displaystyle \sqrt{\lim_{x \to 0}(x^2+4x+3)} \)? Jelaskan!</li>
    <li>Dari jawaban pada bagian (a.), (b.) dan (c.) simpulan apa yang dapat diperoleh?</li>
    </ol>
    </div>

    <br>
<div class="container">
<div class="row">
<div class="col">
<p>Dari kegiatan-kegiatan tersebut dapat Kalian simpulkan bahwa sifat-sifat limit adalah sebagai berikut.</p>
<p>Untuk setiap \(k\) konstanta dan \(a\) bilangan real, jika \(f\) dan \(g\) merupakan fungsi-fungsi yang mempunyai limit untuk \(x\) mendekati \(a\), maka berlaku: </p>
<div class="border border-dark rounded-3">
<div class="row fw-bold text-primary">
<div class="col">
<ol>
<li>\(\displaystyle \lim_{x \to a} k = k \)</li>
<br>
<li>\(\displaystyle \lim_{x \to a} x = a \)</li>
<br>
<li>\(\displaystyle \lim_{x \to a} \frac{f(x)}{g(x)} = \frac{\lim_{x \to a}f(x)}{\lim_{x \to a}g(x)} \)</li>
<br>
<li>\(\displaystyle \lim_{x \to a} k.f(x) = k.\lim_{x \to a}f(x) \)</li>
</ol></div>
<div class="col">
<ol start="5">
<li>\(\displaystyle \lim_{x \to a} [f(x)]^n = [\lim_{x \to a} f(x)]^n \)</li> <br>
<li>\(\displaystyle \lim_{x \to a} [f(x) \pm g(x)] = \lim_{x \to a} f(x) \pm \lim_{x \to a} g(x) \)</li> <br>
<li>\(\displaystyle \lim_{x \to a} [f(x).g(x)] = (\lim_{x \to a} f(x)).(\lim_{x \to a} g(x)) \)</li> <br>
<li>\(\displaystyle \lim_{x \to a} \sqrt[n]{f(x)}= \sqrt[n]{\lim_{x \to a}f(x)} \), dengan \(\displaystyle \lim_{x \to a}f(x) \geq 0\) dan \(n\) bilangan genap</li>
</ol>
</div>
</div>
</div>
</div>
</div>
</div>
<br>
<div class="container">
<!-- contoh mulai -->
<div class="row justify-content-center">
<div class="col-md-9 border">
<div class="badge bg-primary text-wrap fs-6" style="width: 8rem">Contoh 12</div>
<p>Diketahui \(\displaystyle \lim_{x \to a} f(x)=4\) dan \(\displaystyle \lim_{x \to a} g(x)=5\).  Tentukan hasil dari \(\displaystyle \lim_{x \to a} [f(x).g(x)]\)</p>
<p><b>JAWAB</b></p>
<div class="overflow-auto">
\(\displaystyle  \begin{align} \lim_{x \to a} [f(x).g(x)] &= [\lim_{x \to a} f(x)].[\lim_{x \to a} g(x)] \\&= (4)(5) \\&= 20 \end{align}\)
</div>
</div>
</div>
</div>
<!-- contoh berakhir -->

<div class="container pt-2">
<!-- contoh mulai -->
<div class="row justify-content-center">
<div class="col-md-9 border">
<div class="badge bg-primary text-wrap fs-6" style="width: 8rem">Contoh 13</div>
<p>Tentukan hasil dari \(\displaystyle \lim_{x \to 2} \left(\frac{x^2-5x+6}{x^2-4}+\frac{x^2-3x+2}{x^2-5x+6} \right)\)</p>
<p><b>JAWAB</b></p>
<div class="overflow-auto">
\(\displaystyle \begin{align} \lim_{x \to 2} \left(\frac{x^2-5x+6}{x^2-4}+\frac{x^2-3x+2}{x^2-5x+6} \right) &= \lim_{x \to 2} \frac{x^2-5x+6}{x^2-4}+\lim_{x \to 2}\frac{x^2-3x+2}{x^2-5x+6} \\ &= \lim_{x \to 2} \frac{(x-2)(x-3)}{(x-2)(x+2)} + \lim_{x \to 2} \frac{(x-2)(x-1)}{(x-2)(x-3)} \\ &= \lim_{x \to 2} \frac{x-3}{x+2} + \lim_{x \to 2} \frac{x-1}{x-3} \\&= \frac{2-3}{2+2} + \frac{2-1}{2-3} \\&= \frac{-1}{4} + \frac{1}{-1} \\&= \frac{-5}{4} \end{align}  \)
</div>
</div>
</div>
</div>

<section class="pt-2" id="latihan03">
    <div class="row justify-content-center">
    <div class="badge bg-danger text-wrap fs-6" style="width: 8rem">LATIHAN 03
    </div>
    <ol>
    <li>Hitunglah setiap limit fungsi berikut ini dengan menggunakan sifat-sifat limit</li>
    <ol type="a">
    <li>\(\displaystyle \lim_{x \to 2}(2x+3)\)</li>
    <li>\(\displaystyle \lim_{x \to 3}x(x-2)\)</li>
    <li>\(\displaystyle \lim_{x \to 1}(x^2+3x)\)</li>
    <li>\(\displaystyle \lim_{x \to 5}\frac{x}{x-4} \)</li>
    </ol>
    <li>Misalkan \(\displaystyle \lim_{x \to 2}f(x)=2 \) dan \(\displaystyle \lim_{x \to 2}g(x)=1 \). Hitunglah setiap limit berikut ini</li>
    <ol type="a">
    <li>\(\displaystyle \lim_{x \to 2}[2f(x)+g(x)] \)</li>
    <li>\(\displaystyle \lim_{x \to 2}[f(x).g(x)+3] \)</li>
    <li>\(\displaystyle \lim_{x \to 2} \frac{f(x)+g(x)}{f(x)-g(x)} \)</li>
    <li>\(\displaystyle \lim_{x \to 2}[f(x)+g(x)] \)</li>
    </ol>
    <li>Hitunglah hasil dari:</li>
    <ol type="a">
    <li>\(\displaystyle \lim_{x \to 2} \left(\frac{x-2}{x^2-4}+2 \right) \)</li>
    <li>\(\displaystyle \lim_{x \to 2} \left(\frac{x^2-1}{x-1}+ \frac{x^2-3x+2}{x^2-4x+3} \right) \)</li>
    <li>\(\displaystyle \lim_{x \to 0} \left(\frac{x^2+x}{x^2-x}\right) \left(\frac{x^2+2x+3}{x^2-3x+1} \right) \)</li>
    </ol>
    </ol>
    {{--  --}}
    <div id="disqus_thread" class="mt-4"></div>

    </div>
    </div>
    </div>
    </section>

{{--  --}}
            <div id="disqus_thread" class="mt-4"></div>
            </div>
        </div>
    </div>
</section>
@endsection

