@if (empty(Auth::guard('siswa')->user()->role))
<div class="mb-1 mt-4 mb-3 p-2 rounded text-center" style="background-color: #92f189; font-size:1.2rem">
</div>
@elseif (Auth::guard('siswa')->user()->role == 1)
<div class="mb-1 mt-4 mb-3 p-2 rounded" style="background-color: #92f189; font-size:1.2rem">
    <table class="table">
        <tr>
            <th>Nama</th>
            <th>:</th>
            <th>{{Auth::guard('siswa')->user()->nama_siswa}}</th>
        </tr>
        <tr>
            <td>Kelas</td>
            <td>:</td>
            <td>{{Auth::guard('siswa')->user()->kelas}}</td>
        </tr>
        <tr>
            <td>No Absen</td>
            <td>:</td>
            <td>{{Auth::guard('siswa')->user()->no_absen}}</td>
        </tr>
    </table>
</div>
@endif

