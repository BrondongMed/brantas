<?php

namespace App\Http\Controllers;

use App\sungai;
use Illuminate\Http\Request;

class sungaiController extends Controller
{
    public function index()
    {
        $wakil_nama = sungai::all();

       return view('sungai.index', compact('wakil_nama'));
    }
}
