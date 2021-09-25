<?php

namespace App\Http\Controllers;

use App\lingkungan_hidup;
use App\sungai;
use App\User;
use Illuminate\Http\Request;

class sungaiController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    
    public function index()
    {
        $wakil_nama = sungai::all();

       return view('sungai.index', compact('wakil_nama'));
    }

    public function add(Request $request)
    {
        /**
         * input INTO sungai value ('id', 'name') ('name' ,'id')
         * 
         */
        $simpan = new sungai();
        $simpan->nama_sungai = $request->sungai;
        $simpan->save();

        return back();
    }

    public function home()
    {
        $wakil_nama = sungai::all();
        return view('sungai.index', compact('wakil_nama'));
    }

    public function lh()
    {
        $sungais = sungai::all();
        $linkungans = lingkungan_hidup::all();

        return view('sungai.lh',compact('sungais', 'linkungans'));
    }

    public function lhadd(Request $request)
    {
        $simpan = new lingkungan_hidup();
        $simpan->nomor_kontrak = $request->nomor;
        $simpan->sungai_id = $request->sungai_id;
        $simpan->tahun = $request->tahun;
        $simpan->file = $request->file;
        $simpan->save();

        return back();
    }
}
