<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KelasXIIController extends Controller
{
    public function uswajib2019(){
        return view('konten.42KelasXII.USwajib2019');
    }
    public function pasminat2023(){
        return view('konten.42KelasXII.PASminat2023');
    }
    public function usminat2023(){
        return view('konten.42KelasXII.USminat2023');
    }
    public function uswajib2023(){
        return view('konten.42KelasXII.USwajib2023');
    }
}
