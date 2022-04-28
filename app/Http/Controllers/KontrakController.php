<?php

namespace App\Http\Controllers;

use App\kontrak;
use App\Pembangunan;
use App\sungai;
use Illuminate\Http\Request;

class KontrakController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $sungais = sungai::all();
        return view('admin.kontrak', compact('sungais'));
    }

    public function add(Request $request)
    {
        $sungai_id = $request->sungai_id;
        $sungai = sungai::where('id', $request->sungai_id)->first();

        return view('admin.kontrak.add', compact('sungai'));
    }

    public function save(Request $request)
    {
        $sim = new kontrak();
        $sim->nama_paket = $request->nama_paket;
        $sim->sumber_dana = $request->sd;
        $sim->jenis_kontrak = $request->jenis_kontak;
        $sim->nilai_kontrak = $request->nk;
        $sim->tahun_anggaran = $request->ta;
        $sim->sungai_id = $request->sungai_id;
        $sim->save();

        return redirect('kontrak/hasil');
    }

    public function show()
    {
        $kontraks = kontrak::orderBy('sungai_id')->get();

        return view('admin.kontrak.show', compact('kontraks'));
    }

    public function addUtils($id)
    {
        
        return view('admin.kontrak.addUtils', compact('id'));
    }

}
