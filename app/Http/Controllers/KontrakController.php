<?php

namespace App\Http\Controllers;

use App\data_kontrak;
use App\data_lelang;
use App\data_pelaksanaan;
use App\data_pembayaran;
use App\data_penyedia;
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

    public function addPenyedia($id)
    {
        $sungai = kontrak::find($id);
        $cek = data_penyedia::where("kontrak_id", $id)->count();
        if ($cek >= 1) {
            $data = data_penyedia::where("kontrak_id", $id)->first();
            return view('admin.kontrak.editPenyedia', compact("data"));
        }
        return view('admin.kontrak.addpenyedia', compact('sungai'));
    }

    public function updatePenyedia(Request $request)
    {
        data_penyedia::where("kontrak_id", $request->kontrak_id)->update([
            "vendor" => $request->nama_pt,
            "wakil_penyedia" => $request->wakil_penyedia,
            "alamat" => $request->alamat,
            "koresponden" => $request->koresponden,
            "npwp" => $request->npwp,
            "Bank" => $request->nama_bank,
            "rekening" => $request->rekening,
            "kontrak_id" => $request->kontrak_id,
        ]);


        return redirect()->route('kontrak.hasil');
    }

    public function savePenyedia(Request $request)
    {

        $this->validate($request, [
            "nama_pt" => "required",
            "kontrak_id" => "required",
            "wakil_penyedia" => "required",
            "alamat" => "required",
            "koresponden" => "required",
            "npwp" => "required",
            "nama_bank" => "required",
            "rekening" => "required",
        ]);

        $sim = data_penyedia::create([
            "vendor" => $request->nama_pt,
            "wakil_penyedia" => $request->wakil_penyedia,
            "alamat" => $request->alamat,
            "koresponden" => $request->koresponden,
            "npwp" => $request->npwp,
            "Bank" => $request->nama_bank,
            "rekening" => $request->rekening,
            "kontrak_id" => $request->kontrak_id,
        ]);

        return redirect()->route('kontrak.hasil');
    }

    public function addLelang($id)
    {
        $sungai = kontrak::find($id);
        $cek = data_lelang::where("kontrak_id", $id)->count();
        if ($cek >= 1) {
            $data = data_lelang::where("kontrak_id", $id)->first();
            return view('admin.kontrak.editLelang', compact("data"));
        }
        return view('admin.kontrak.addLelang', compact('sungai'));
    }

    public function saveLelang(Request $request)
    {

        $ekstensi1 = $request->f_kak->getClientOriginalExtension();
        $ekstensi2 = $request->f_surat_penetapan_ppk->getClientOriginalExtension();
        $ekstensi3 = $request->f_dok_Perencanaan->getClientOriginalExtension();
        $ekstensi4 = $request->f_dok_persiapan->getClientOriginalExtension();
        $ekstensi5 = $request->f_rup_siprup->getClientOriginalExtension();
        $ekstensi6 = $request->f_sk_pokjaa->getClientOriginalExtension();
        $ekstensi7 = $request->f_hps->getClientOriginalExtension();
        $ekstensi8 = $request->f_dok_pemilihan->getClientOriginalExtension();
        $ekstensi9 = $request->f_baph->getClientOriginalExtension();
        $rename1 = 'brantas' . rand(11111, 99999) . '.' . $ekstensi1;
        $rename2 = 'brantas' . rand(11111, 99999) . '.' . $ekstensi2;
        $rename3 = 'brantas' . rand(11111, 99999) . '.' . $ekstensi3;
        $rename4 = 'brantas' . rand(11111, 99999) . '.' . $ekstensi4;
        $rename5 = 'brantas' . rand(11111, 99999) . '.' . $ekstensi5;
        $rename6 = 'brantas' . rand(11111, 99999) . '.' . $ekstensi6;
        $rename7 = 'brantas' . rand(11111, 99999) . '.' . $ekstensi7;
        $rename8 = 'brantas' . rand(11111, 99999) . '.' . $ekstensi8;
        $rename9 = 'brantas' . rand(11111, 99999) . '.' . $ekstensi9;

        $tempatUpload = 'upload';
        $file = $request->file('f_kak');
        $file->move($tempatUpload, $rename1);

        $tempatUpload = 'upload';
        $file = $request->file('f_surat_penetapan_ppk');
        $file->move($tempatUpload, $rename2);

        $tempatUpload = 'upload';
        $file = $request->file('f_dok_persiapan');
        $file->move($tempatUpload, $rename4);

        $tempatUpload = 'upload';
        $file = $request->file('f_rup_siprup');
        $file->move($tempatUpload, $rename5);

        $tempatUpload = 'upload';
        $file = $request->file('f_sk_pokjaa');
        $file->move($tempatUpload, $rename6);

        $tempatUpload = 'upload';
        $file = $request->file('f_hps');
        $file->move($tempatUpload, $rename7);

        $tempatUpload = 'upload';
        $file = $request->file('f_dok_pemilihan');
        $file->move($tempatUpload, $rename8);

        $tempatUpload = 'upload';
        $file = $request->file('f_baph');
        $file->move($tempatUpload, $rename9);

        $tempatUpload = 'upload';
        $file = $request->file('f_dok_Perencanaan');
        $file->move($tempatUpload, $rename3);

        $sim = data_lelang::create([
            "kak" => $request->kak,
            "no_surat" => $request->nomor_surat_ppk,
            "tanggal_surat" => $request->tanggal_surat_ppk,
            "perencanaan" => $request->dok_Perencanaan,
            "dok_persiapan" => $request->dok_persiapan,
            "rup" => $request->rup_siprup,
            "no_pokja" => $request->sk_pokja,
            "tanggal_pokja" => $request->sk_pokja1,
            "hps" => $request->hps,
            "pemilihan" => $request->dok_pemilihan,
            "bahp" => $request->baph,
            "kontrak_id" => $request->kontrak_id,
            "f_kak" => $rename1,
            "f_surat_penetapan_ppk" => $rename2,
            "f_dok_Perencanaan" => $rename3,
            "f_dok_persiapan" => $rename4,
            "f_rup_siprup" => $rename5,
            "f_sk_pokja" => $rename6,
            "f_hps" => $rename7,
            "f_baph" => $rename8,
            "f_dok_pemilihan" => $rename8,
        ]);

        return redirect()->route('kontrak.hasil');
    }

    public function delLelang($id)
    {
        $lelang = data_lelang::find($id)->delete();

        return redirect()->route('kontrak.hasil');
    }

    public function addDataKontrak($id)
    {
        $cek = data_kontrak::where('kontrak_id', $id)->count();
        if ($cek) {
            $data = data_kontrak::where('kontrak_id', $id)->first();
            return view('admin.kontrak.editDataKontrak', compact('data'));
        } else {
            $data = kontrak::where('id', $id)->first();
            return view('admin.kontrak.addDataKontrak', compact('data'));
        }
    }

    public function saveDataKontrak(Request $request)
    {

        if ($request->f_ba_penunjukan) {
            $ekstensi1 = $request->f_ba_penunjukan->getClientOriginalExtension();
            $rename1 = 'brantas' . rand(11111, 99999) . '.' . $ekstensi1;
            $tempatUpload = 'upload';
            $file = $request->file('f_ba_penunjukan');
            $file->move($tempatUpload, $rename1);
        }
        if ($request->f_SPPBJ) {
            $ekstensi2 = $request->f_SPPBJ->getClientOriginalExtension();
            $rename2 = 'brantas' . rand(11111, 99999) . '.' . $ekstensi2;
            $tempatUpload = 'upload';
            $file = $request->file('f_SPPBJ');
            $file->move($tempatUpload, $rename2);
        }
        if ($request->f_ba_persiapan) {
            $ekstensi3 = $request->f_ba_persiapan->getClientOriginalExtension();
            $rename3 = 'brantas' . rand(11111, 99999) . '.' . $ekstensi3;
            $tempatUpload = 'upload';
            $file = $request->file('f_ba_persiapan');
            $file->move($tempatUpload, $rename3);
        }
        if ($request->f_ba_rapat_persiapanba_rapat_persiapan_kontrak) {
            $ekstensi4 = $request->f_ba_rapat_persiapanba_rapat_persiapan_kontrak->getClientOriginalExtension();
            $rename4 = 'brantas' . rand(11111, 99999) . '.' . $ekstensi4;
            $tempatUpload = 'upload';
            $file = $request->file('f_ba_rapat_persiapanba_rapat_persiapan_kontrak');
            $file->move($tempatUpload, $rename4);
        }
        if ($request->f_daftar_personil) {
            $ekstensi5 = $request->f_daftar_personil->getClientOriginalExtension();
            $rename5 = 'brantas' . rand(11111, 99999) . '.' . $ekstensi5;
            $tempatUpload = 'upload';
            $file = $request->file('f_daftar_personil');
            $file->move($tempatUpload, $rename5);
        }
        if ($request->fjaminan_pelaksanaan) {
            $ekstensi6 = $request->fjaminan_pelaksanaan->getClientOriginalExtension();
            $rename6 = 'brantas' . rand(11111, 99999) . '.' . $ekstensi6;
            $tempatUpload = 'upload';
            $file = $request->file('fjaminan_pelaksanaan');
            $file->move($tempatUpload, $rename6);
        }
        if ($request->f_no_kontrak) {
            $ekstensi7 = $request->f_no_kontrak->getClientOriginalExtension();
            $rename7 = 'brantas' . rand(11111, 99999) . '.' . $ekstensi7;
            $tempatUpload = 'upload';
            $file = $request->file('f_no_kontrak');
            $file->move($tempatUpload, $rename7);
        }
        if ($request->f_ba_penyerahan) {
            $ekstensi8 = $request->f_ba_penyerahan->getClientOriginalExtension();
            $rename8 = 'brantas' . rand(11111, 99999) . '.' . $ekstensi8;
            $tempatUpload = 'upload';
            $file = $request->file('f_ba_penyerahan');
            $file->move($tempatUpload, $rename8);
        }
        if ($request->f_bapcm) {
            $ekstensi9 = $request->f_bapcm->getClientOriginalExtension();
            $rename9 = 'brantas' . rand(11111, 99999) . '.' . $ekstensi9;
            $tempatUpload = 'upload';
            $file = $request->file('f_bapcm');
            $file->move($tempatUpload, $rename9);
        }
        if ($request->f_jadwal_pelaksanaan) {
            $ekstensi10 = $request->f_jadwal_pelaksanaan->getClientOriginalExtension();
            $rename10 = 'brantas' . rand(11111, 99999) . '.' . $ekstensi10;
            $tempatUpload = 'upload';
            $file = $request->file('f_jadwal_pelaksanaan');
            $file->move($tempatUpload, $rename10);
        }
        if ($request->f_spmk) {
            $ekstensi11 = $request->f_spmk->getClientOriginalExtension();
            $rename11 = 'brantas' . rand(11111, 99999) . '.' . $ekstensi11;
            $tempatUpload = 'upload';
            $file = $request->file('f_spmk');
            $file->move($tempatUpload, $rename11);
        }
        if ($request->f_rmpk) {
            $ekstensi12 = $request->f_rmpk->getClientOriginalExtension();
            $rename12 = 'brantas' . rand(11111, 99999) . '.' . $ekstensi12;
            $tempatUpload = 'upload';
            $file = $request->file('f_rmpk');
            $file->move($tempatUpload, $rename12);
        }
        if ($request->f_rkk) {
            $ekstensi13 = $request->f_rkk->getClientOriginalExtension();
            $rename13 = 'brantas' . rand(11111, 99999) . '.' . $ekstensi13;
            $tempatUpload = 'upload';
            $file = $request->file('f_rkk');
            $file->move($tempatUpload, $rename13);
        }
        if ($request->f_addendum) {
            $ekstensi15 = $request->f_addendum->getClientOriginalExtension();
            $rename15 = 'brantas' . rand(11111, 99999) . '.' . $ekstensi15;
            $tempatUpload = 'upload';
            $file = $request->file('f_addendum');
            $file->move($tempatUpload, $rename15);
        }
        if ($request->f_bast) {
            $ekstensi16 = $request->f_bast->getClientOriginalExtension();
            $rename16 = 'brantas' . rand(11111, 99999) . '.' . $ekstensi16;
            $tempatUpload = 'upload';
            $file = $request->file('f_bast');
            $file->move($tempatUpload, $rename16);
        }
        if ($request->f_laporan_bmn) {
            $ekstensi17 = $request->f_laporan_bmn->getClientOriginalExtension();
            $rename17 = 'brantas' . rand(11111, 99999) . '.' . $ekstensi17;
            $tempatUpload = 'upload';
            $file = $request->file('f_laporan_bmn');
            $file->move($tempatUpload, $rename17);
        }
        if ($request->f_ba_pphp) {
            $ekstensi18 = $request->f_ba_pphp->getClientOriginalExtension();
            $rename18 = 'brantas' . rand(11111, 99999) . '.' . $ekstensi18;
            $tempatUpload = 'upload';
            $file = $request->file('f_ba_pphp');
            $file->move($tempatUpload, $rename18);
        }
        if ($request->f_bast2) {
            $ekstensi19 = $request->f_bast2->getClientOriginalExtension();
            $rename19 = 'brantas' . rand(11111, 99999) . '.' . $ekstensi19;
            $tempatUpload = 'upload';
            $file = $request->file('f_bast2');
            $file->move($tempatUpload, $rename19);
        }
        data_kontrak::create([
            "f_ba_penunjukan" => $rename1,
            "f_SPPBJ" => $rename2,
            "f_ba_rapat_persiapan" => $rename3,
            "f_ba_rapat_persiapan_kontrak" => $rename4,
            "f_daftar_personil" => $rename5,
            "f_jaminan_pelaksanaan" => $rename6,
            "f_no_kontrak" => $rename7,
            "f_ba_penyerahan" => $rename8,
            "f_bapcm" => $rename9,
            "f_jadwal_pelaksanaan" => $rename10,
            "f_SPMK" => $rename11,
            "f_RMPK" => $rename12,
            "f_rkk" => $rename13,
            "f_addendum" => $rename15,
            "f_BAST" => $rename16,
            "f_laporan_bmn" => $rename17,
            "f_ba_pphp" => $rename18,
            "f_BAST_II" => $rename19,
            "ba_no_persiapan" => $request->ba_no_surat,
            "ba_tgl_persiapan" => $request->ba_tanggal,
            "no_sppbj" => $request->no_sppbj,
            "tgl_sppbj" => $request->tgl_sppbj,
            "ba_no_rapat_persiapan" => $request->ba_no_persiapan,
            "ba_tgl_rapat_persiapan" => $request->ba_tgl_persiapan,
            "no_persiapan_kontrak" => $request->ba_no_rapat_persiapan_kontrak,
            "tgl_persiapan_kontrak" => $request->ba_tgl_rapat_persiapan_kontrak1,
            "daftar_personil" => $request->daftar_personil,
            "no_jaminan_pelaksanaan" => $request->no_jaminan_pelaksanaan,
            "tgl_jaminan_pelaksanaan" => $request->tgl_jaminan_pelaksanaan1,
            "no_kontrak1" => $request->no_kontrak,
            "tgl_kontrak1" => $request->tgl_kontrak,
            "no_penyerahan" => $request->ba_no_penyerahan,
            "tgl_penyerahan" => $request->ba_tgl_penyerahan,
            "no_spmk" => $request->ba_no_spmk,
            "tgl_spmk" => $request->ba_tgl_spmk,
            "jadwal_pelaksanaan" => $request->jadwal_pelaksanaan,
            "no_pcm" => $request->ba_no_pcm,
            "tgl_pcm" => $request->ba_tgl_pcm,
            "no_rpmk" => $request->no_rmpk,
            "tgl_rmpk" => $request->tgl_rmpk,
            "no_rkk" => $request->no_rkk,
            "tgl_rkk" => $request->tgl_rkk,
            "no_addendum" => $request->no_adendum,
            "tgl_addendum" => $request->tgl_addendum,
            "no_bast1" => $request->no_bast,
            "tgl_bast1" => $request->tgl_bast,
            "laporan_bmn" => $request->laporan_bmn,
            "no_pphp" => $request->ba_no_pphp,
            "tgl_pphp" => $request->ba_tgl_pphp,
            "no_bast2" => $request->no_bast2,
            "tgl_bast2" => $request->tgl_bast2,
            "kontrak_id" => $request->kontrak_id,
        ]);

        return redirect()->route('kontrak.hasil');
    }

    public function delDataKontrak($id)
    {
        $del = data_kontrak::find($id)->delete();

        return redirect()->route('kontrak.hasil');
    }



















    public function saveUltis(Request $request)
    {
        $this->validate($request, [
            "f_jaminan_uang" => "mimes:pdf",
            "f_uang_muka" => "mimes:pdf",
            "f_termyn" => "mimes:pdf",
            "f_jaminan_pemeliharaan" => "mimes:pdf",
        ]);

        // $ekstensi1 = $request->f_jaminan_uang->getClientOriginalExtension();
        // $ekstensi2 = $request->f_uang_muka->getClientOriginalExtension();
        // $ekstensi3 = $request->f_termyn->getClientOriginalExtension();
        // $ekstensi4 = $request->f_jaminan_pemeliharaan->getClientOriginalExtension();
        // $rename1 = 'brantas' . rand(11111, 99999) . '.' . $ekstensi1;
        // $rename2 = 'brantas' . rand(11111, 99999) . '.' . $ekstensi2;
        // $rename3 = 'brantas' . rand(11111, 99999) . '.' . $ekstensi3;
        // $rename4 = 'brantas' . rand(11111, 99999) . '.' . $ekstensi4;

        // $tempatUpload = 'upload';
        // $file = $request->file('f_jaminan_uang');
        // $file->move($tempatUpload, $rename1);

        // $tempatUpload = 'upload';
        // $file = $request->file('f_uang_muka');
        // $file->move($tempatUpload, $rename2);

        // $tempatUpload = 'upload';
        // $file = $request->file('f_termyn');
        // $file->move($tempatUpload, $rename3);

        // $tempatUpload = 'upload';
        // $file = $request->file('f_jaminan_pemeliharaan');
        // $file->move($tempatUpload, $rename4);

        // $sim1 = new data_pembayaran();
        // $sim1->jaminan_um = $request->jaminan_uang;
        // $sim1->uang_muka = $request->uang_muka;
        // $sim1->termin = $request->termyn;
        // $sim1->jaminan_pemeliharaan = $request->jaminan_pemeliharaan;
        // $sim1->kontrak_id = $request->kontrak_id;

        // //upload file;
        // $sim1->f_jaminan_uang = $rename1;
        // $sim1->f_uang_muka = $rename2;
        // $sim1->f_termyn = $rename3;
        // $sim1->jaminan_pemeliharaan1 = $rename4;
        // $sim1->save();

        // $sim = new data_penyedia();
        // $sim->vendor = $request->nama_pt;
        // $sim->wakil_penyedia = $request->wakil_penyedia;
        // $sim->alamat = $request->alamat;
        // $sim->koresponden = $request->koresponden;
        // $sim->npwp = $request->npwp;
        // $sim->Bank = $request->nama_bank;
        // $sim->Rekening = $request->rekening;
        // $sim->kontrak_id = $request->kontrak_id;
        // $sim->save();



        // $sim2 = new data_pelaksanaan();
        // $sim2->mc = $request->mc_1;
        // $sim2->shop_drawing = $request->shop_drawing;
        // $sim2->k3 = $request->rambu_k3;
        // $sim2->direksi_kit = $request->kelengkapan_direksi;
        // $sim2->laporan_harian = $request->laporan_harian;
        // $sim2->laporan_bulanan = $request->lb;
        // $sim2->request_pekerjaan = $request->request_pelaksanaan;
        // $sim2->quality_control = $request->quality_control;
        // $sim2->foto_dokumentasi = $request->foto_dokumentasi;
        // $sim2->hasil_lab = $request->hasil_lab;
        // $sim2->as_build = $request->as_built;
        // // assbuilt pake -
        // $sim2->mc_100 = $request->mc_2;
        // $sim2->video_dokumentasi = $request->vidio_dokumentasi;
        // $sim2->kontrak_id = $request->kontrak_id;

        // $sim2->f_mc_1 = $request->f_mc_1;
        // $sim2->f_rambu_k3 = $request->f_rambu_k3;
        // $sim2->f_kelengkapan_direksi = $request->f_kelengkapan_direksi;
        // $sim2->f_laporan_harian = $request->f_laporan_harian;
        // $sim2->f_lb = $request->f_lb;
        // $sim2->f_request_pelaksanaan = $request->f_request_pelaksanaan;
        // $sim2->f_quality_control = $request->f_quality_control;
        // $sim2->f_foto_dokumentasi = $request->f_foto_dokumentasi;
        // $sim2->f_hasil_lab = $request->f_hasil_lab;
        // $sim2->f_as_built = $request->f_as_built;
        // $sim2->f_mc_2 = $request->f_mc_2;
        // $sim2->f_vidio_dokumentasi = $request->f_vidio_dokumentasi;
        // $sim2->save();

        // $sim3 = new data_lelang();
        // $sim3->surat_penetapan_ppk = $request->surat_penetapan_ppk;
        // $sim3->surat_penetapan_ppk1 = $request->surat_penetapan_ppk1;
        // $sim3->kak = $request->KAK;
        // $sim3->spppk = $request->surat_penetapan_ppk;
        // $sim3->dok_perencanaan = $request->dok_perencanaan;
        // $sim3->rup = $request->rup_siprup;
        // $sim3->dok_persiapan = $request->dok_persiapan;
        // $sim3->sk_pokja = $request->sk_pokja;
        // $sim3->hps = $request->HPS;
        // $sim3->dok_pemilihan = $request->dok_pemilihan;
        // $sim3->bahp = $request->baph;
        // $sim3->kontrak_id = $request->kontrak_id;
        // $sim3->save();

        // $sim3->f_KAK = $request->f_KAK;
        // $sim3->f_surat_penetapan_ppk = $request->f_surat_penetapan_ppk;
        // $sim3->f_dok_Perencanaan = $request->f_dok_Perencanaan;
        // $sim3->f_dok_persiapan = $request->f_dok_persiapan;
        // $sim3->f_rup_siprup = $request->f_rup_siprup;
        // $sim3->f_sk_pokja = $request->f_sk_pokja;
        // $sim3->f_HPS = $request->f_HPS;
        // $sim3->f_baph = $request->f_baph;
        // $sim3->save();

        // $sim4 = new data_kontrak();
        // $sim4->ba_persiapan = $request->ba_penunjukan;
        // $sim4->sppbj = $request->SPPBJ;
        // $sim4->ba_rapat_persiapan = $request->ba_rapat_persiapan;
        // $sim4->daftar_personil = $request->daftar_personil;
        // $sim4->jaminan_pelaksanaan = $request->jaminan_pelaksanaan;
        // $sim4->no_kontrak = $request->no_kontrak;
        // $sim4->ba_penyerahan = $request->ba_penyerahan;
        // $sim4->spmk = $request->SPMK;
        // $sim4->jadwal_pelaksanaan = $request->jadwal_pelaksanaan;
        // $sim4->ba_pcm = $request->bapcm;
        // $sim4->rpmk = $request->RMPK;
        // $sim4->rkk = $request->rkk;
        // $sim4->addendum = $request->addendum;
        // $sim4->bast_1 = $request->BAST;
        // $sim4->laporan_bmn = $request->laporan_bmn;
        // $sim4->ba_pphp = $request->ba_pphp;
        // $sim4->bast_2 = $request->BAST_II;
        // $sim4->kontrak_id = $request->kontrak_id;

        // $sim4->f_ba_penunjukan = $request->f_ba_penunjukan;
        // $sim4->f_SPPBJ = $request->f_SPPBJ;
        // $sim4->f_ba_rapat_persiapan = $request->f_ba_rapat_persiapan;
        // $sim4->f_ba_rapat_persiapan_kontrak = $request->f_ba_rapat_persiapan_kontrak;
        // $sim4->f_daftar_personil = $request->f_daftar_personil;
        // $sim4->f_jaminan_pelaksanaan = $request->f_jaminan_pelaksanaan;
        // $sim4->f_no_kontrak = $request->f_no_kontrak;
        // $sim4->f_ba_penyerahan = $request->f_ba_penyerahan;
        // $sim4->f_bapcm = $request->f_bapcm;
        // $sim4->f_jadwal_pelaksanaan = $request->f_jadwal_pelaksanaan;
        // $sim4->f_SPMK = $request->f_SPMK;
        // $sim4->f_RMPK = $request->f_RMPK;
        // $sim4->f_rkk = $request->f_rkk;
        // $sim4->f_addendum = $request->f_addendum;
        // $sim4->f_BAST = $request->f_BAST;
        // $sim4->f_laporan_bmn = $request->f_laporan_bmn;
        // $sim4->f_ba_pphp = $request->f_ba_pphp;
        // $sim4->f_BAST_II = $request->f_BAST_II;

        // $sim4->save();
    }

    public function showUtils($id)
    {
        $kontraks = kontrak::with('lelangs', 'pelaksanaans', 'pembayarans', 'penyedias')->where('id', $id)->first();


        return view('admin.kontrak.showUtils', compact('kontraks'));
    }
}
