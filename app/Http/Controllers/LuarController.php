<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LuarController extends Controller
{
    public function kumpulanmateri(){
        return view('materi.index');
    }
    public function privacy(){
        return view('pendukung.privacy');
    }
    public function disclaimer(){
        return view('pendukung.disclaimer');
    }
    public function ads(){
        return view('pendukung.text');
    }
}
