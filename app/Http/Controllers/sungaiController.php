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
        $lingkungans = lingkungan_hidup::all();
        $users = User::all();

        return view('sungai.index', compact('wakil_nama', 'lingkungans', 'users'));
    }

    public function lh()
    {
        $sungais = sungai::all();
        $linkungans = lingkungan_hidup::all();

        return view('sungai.lh',compact('sungais', 'linkungans'));
    }

    public function lhadd(Request $request)
    {

        $validation = $request->validate([
            'file' => 'required|file|mimes:pdf'
        ]);
        
        $tempatUpload = 'file';
        $file = $request->file('file');
        $rename = date('YmdHis');
        $file->move($tempatUpload, $rename.'.pdf');

        $simpan = new lingkungan_hidup();
        $simpan->nomor_kontrak = $request->nomor;
        $simpan->sungai_id = $request->sungai_id;
        $simpan->tahun = $request->tahun;
        $simpan->file = $rename.'.pdf';
        $simpan->save();

        return back();
    }

    public function delSungai($id)
    {
        $sungai = sungai::where('id', $id)->delete();

        return back();
    }

    public function delLh($id)
    {
        $lh = lingkungan_hidup::where('id', $id)->first();
        $image_path = "file/".$lh->file; 

        if (file_exists($image_path)) {
            @unlink($image_path);
        }
        $lh->delete();

        return back();
    }

    public function edit($id)
    {
        $sungai = sungai::where('id', $id)->first();

        return  view('admin.edit', compact('sungai'));
    }

    public function update(Request $request)
    {
        $sungai = sungai::where('id', $request->sungai_id)->first();
        $sungai->nama_sungai = $request->sungai;
        $sungai->save();

        return redirect('/home');
    }
}
