<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KelasXController extends Controller
{
    public function patwajib2023(){
        return view('konten.40KelasX.PATwajib2023');
    }
    public function prediksi01(){
        return view('konten.40KelasX.10prediksi01');
    }
    public function prediksi02(){
        return view('konten.40KelasX.10prediksi02');
    }
}
