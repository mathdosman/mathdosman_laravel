<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KelasXIController extends Controller
{
    public function patwajib2021(){
        return view('konten.41KelasXI.patwajib2021');
    }
    public function paswajib2022(){
        return view('konten.41KelasXI.paswajib2022');
    }
    public function pasminat2022(){
        return view('konten.41KelasXI.pasminat2022');
    }
    public function patwajib2023(){
        return view('konten.41KelasXI.patwajib2023');
    }
    public function patminat2023(){
        return view('konten.41KelasXI.patminat2023');
    }
}
