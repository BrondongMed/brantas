@extends('layouts.app')
@section('content')
<div class="container">
    <!-- PENYEDIA -->
    <div class="pt-3 mb-5">
        <div class="p-3 bg-white rounded">
            <h3>DATA PENYEDIA</h3>
            <div class="container">
                <table class="table table-striped">
                    @if($kontraks->penyedias)
                    <tr>
                        <td class="col-lg-2">Vendor</td>
                        <td class="col-lg-4">{{ $kontraks->penyedias->vendor }}</td>
                    </tr>
                    <tr>
                        <td class="col-lg-2">Wakil Penyedia</td>
                        <td class="col-lg-4">{{$kontraks->penyedias->wakil_penyedia}}</td>
                    </tr>
                    <tr>
                        <td class="col-lg-2">Alamat</td>
                        <td class="col-lg-4">{{$kontraks->penyedias->alamat}}</td>
                    </tr>
                    <tr>
                        <td class="col-lg-2">Koresponden</td>
                        <td class="col-lg-4">{{$kontraks->penyedias->koresponden}}</td>
                    </tr>
                    <tr>
                        <td class="col-lg-2">NPWP</td>
                        <td class="col-lg-4">{{$kontraks->penyedias->npwp}}</td>
                    </tr>
                    <tr>
                        <td class="col-lg-2">Bank</td>
                        <td class="col-lg-4">{{$kontraks->penyedias->Bank}}</td>
                    </tr>
                    <tr>
                        <td class="col-lg-2">Rekening</td>
                        <td class="col-lg-4">{{$kontraks->penyedias->Rekening}}</td>
                    </tr>
                    @else
                    <li>-</li>
                    @endif
                </table>
            </div>
        </div>
    </div>

    <!-- LELANG -->
    <div class="pt-3 mb-5">
        <div class="bg-white p-3 rounded">
            <h3>DATA LELANG</h3>
            <div class="container">
                @if($kontraks->lelangs)
                <table class="table table-striped">
                    <tr>
                        <td class="col-lg-2">KAK 1</td>
                        <td class="col-lg-4">{{ $kontraks->lelangs->kak }}</td>
                        <td class="col-lg-1">nomer</td>
                        <td class="col-lg-4">tanggal</td>
                        <td class="col-lg-1"><i class="fas fa-solid fa-download"></i></td>
                    </tr>
                    <tr>
                        <td class="col-lg-2">SPPPK</td>
                        <td class="col-lg-4">{{ $kontraks->lelangs->spppk }}</td>
                        <td class="col-lg-1">nomer</td>
                        <td class="col-lg-4">tanggal</td>
                        <td class="col-lg-1"><i class="fas fa-solid fa-download"></i></td>
                    </tr>
                    <tr>
                        <td class="col-lg-2">Dok Perencanaan</td>
                        <td class="col-lg-4">{{ $kontraks->lelangs->dok_perencanaan }}</td>
                        <td class="col-lg-1">nomer</td>
                        <td class="col-lg-4">tanggal</td>
                        <td class="col-lg-1"><i class="fas fa-solid fa-download"></i></td>
                    </tr>
                    <tr>
                        <td class="col-lg-2">RUP</td>
                        <td class="col-lg-4">{{ $kontraks->lelangs->rup }}</td>
                        <td class="col-lg-1">nomer</td>
                        <td class="col-lg-4">tanggal</td>
                        <td class="col-lg-1"><i class="fas fa-solid fa-download"></i></td>
                    </tr>
                    <tr>
                        <td class="col-lg-2">Dok Persiapan</td>
                        <td class="col-lg-4">{{ $kontraks->lelangs->dok_persiapan }}</td>
                        <td class="col-lg-1">nomer</td>
                        <td class="col-lg-4">tanggal</td>
                        <td class="col-lg-1"><i class="fas fa-solid fa-download"></i></td>
                    </tr>
                    <tr>
                        <td class="col-lg-2">SK Pokja</td>
                        <td class="col-lg-4">{{ $kontraks->lelangs->sk_pokja }}</td>
                        <td class="col-lg-1">nomer</td>
                        <td class="col-lg-4">tanggal</td>
                        <td class="col-lg-1"><i class="fas fa-solid fa-download"></i></td>
                    </tr>
                    <tr>
                        <td class="col-lg-2">HPS</td>
                        <td class="col-lg-4">{{ $kontraks->lelangs->hps }}</td>
                        <td class="col-lg-1">nomer</td>
                        <td class="col-lg-4">tanggal</td>
                        <td class="col-lg-1"><i class="fas fa-solid fa-download"></i></td>
                    </tr>
                    <tr>
                        <td class="col-lg-2">Dok Pemilihan</td>
                        <td class="col-lg-4">{{ $kontraks->lelangs->dok_pemilihan }}</td>
                        <td class="col-lg-1">nomer</td>
                        <td class="col-lg-4">tanggal</td>
                        <td class="col-lg-1"><i class="fas fa-solid fa-download"></i></td>
                    </tr>
                    <tr>
                        <td class="col-lg-2">BAPH</td>
                        <td class="col-lg-4">{{ $kontraks->lelangs->bahp }}</td>
                        <td class="col-lg-1">nomer</td>
                        <td class="col-lg-4">tanggal</td>
                        <td class="col-lg-1"><i class="fas fa-solid fa-download"></i></td>
                    </tr>
                    @else
                    <li class="form-control">-</li>
                    @endif
                </table>
            </div>
        </div>
    </div>

    <!-- PELAKSANAAN -->
    <div class="pt-3 mb-5">
        <div class="bg-white p-3 rounded">
            <h3>DATA PELAKSANAAN</h3>
            <div class="container">
                @if($kontraks->pelaksanaans)
                <table class="table table-striped">
                    <tr>
                        <td class="col-lg-2">MC 0%</td>
                        <td class="col-lg-4">{{ $kontraks->pelaksanaans->mc }}</td>
                        <td class="col-lg-1">nomer</td>
                        <td class="col-lg-4">tanggal</td>
                        <td class="col-lg-1"><i class="fas fa-solid fa-download"></i></td>
                    </tr>
                    <tr>
                        <td class="col-lg-2">Shop Drawing</td>
                        <td class="col-lg-4">{{ $kontraks->pelaksanaans->shop_drawing }}</td>
                        <td class="col-lg-1">nomer</td>
                        <td class="col-lg-4">tanggal</td>
                        <td class="col-lg-1"><i class="fas fa-solid fa-download"></i></td>
                    </tr>
                    <tr>
                        <td class="col-lg-2">K3</td>
                        <td class="col-lg-4">{{ $kontraks->pelaksanaans->k3 }}</td>
                        <td class="col-lg-1">nomer</td>
                        <td class="col-lg-4">tanggal</td>
                        <td class="col-lg-1"><i class="fas fa-solid fa-download"></i></td>
                    </tr>
                    <tr>
                        <td class="col-lg-2">Kelengkapan Direksi</td>
                        <td class="col-lg-4">{{ $kontraks->pelaksanaans->direksi_kit }}</td>
                        <td class="col-lg-1">nomer</td>
                        <td class="col-lg-4">tanggal</td>
                        <td class="col-lg-1"><i class="fas fa-solid fa-download"></i></td>
                    </tr>
                    <tr>
                        <td class="col-lg-2">Laporan Harian</td>
                        <td class="col-lg-4">{{ $kontraks->pelaksanaans->laporan_harian }}</td>
                        <td class="col-lg-1">nomer</td>
                        <td class="col-lg-4">tanggal</td>
                        <td class="col-lg-1"><i class="fas fa-solid fa-download"></i></td>
                    </tr>
                    <tr>
                        <td class="col-lg-2">Laporan Bulanan</td>
                        <td class="col-lg-4">{{ $kontraks->pelaksanaans->laporan_bulanan }}</td>
                        <td class="col-lg-1">nomer</td>
                        <td class="col-lg-4">tanggal</td>
                        <td class="col-lg-1"><i class="fas fa-solid fa-download"></i></td>
                    </tr>
                    <tr>
                        <td class="col-lg-2">Request Pekerja</td>
                        <td class="col-lg-4">{{ $kontraks->pelaksanaans->request_pekerjaan }}</td>
                        <td class="col-lg-1">nomer</td>
                        <td class="col-lg-4">tanggal</td>
                        <td class="col-lg-1"><i class="fas fa-solid fa-download"></i></td>
                    </tr>
                    <tr>
                        <td class="col-lg-2">Quality Control</td>
                        <td class="col-lg-4">{{ $kontraks->pelaksanaans->quality_control }}</td>
                        <td class="col-lg-1">nomer</td>
                        <td class="col-lg-4">tanggal</td>
                        <td class="col-lg-1"><i class="fas fa-solid fa-download"></i></td>
                    </tr>
                    <tr>
                        <td class="col-lg-2">Foto Dokumentasi</td>
                        <td class="col-lg-4">{{ $kontraks->pelaksanaans->foto_dokumentasi }}</td>
                        <td class="col-lg-1">nomer</td>
                        <td class="col-lg-4">tanggal</td>
                        <td class="col-lg-1"><i class="fas fa-solid fa-download"></i></td>
                    </tr>
                    <tr>
                        <td class="col-lg-2">Hasil Lab</td>
                        <td class="col-lg-4">{{ $kontraks->pelaksanaans->hasil_lab }}</td>
                        <td class="col-lg-1">nomer</td>
                        <td class="col-lg-4">tanggal</td>
                        <td class="col-lg-1"><i class="fas fa-solid fa-download"></i></td>
                    </tr>
                    <tr>
                        <td class="col-lg-2">As Build</td>
                        <td class="col-lg-4">{{ $kontraks->pelaksanaans->as_build }}</td>
                        <td class="col-lg-1">nomer</td>
                        <td class="col-lg-4">tanggal</td>
                        <td class="col-lg-1"><i class="fas fa-solid fa-download"></i></td>
                    </tr>
                    <tr>
                        <td class="col-lg-2">MC 100%</td>
                        <td class="col-lg-4">{{ $kontraks->pelaksanaans->mc_100 }}</td>
                        <td class="col-lg-1">nomer</td>
                        <td class="col-lg-4">tanggal</td>
                        <td class="col-lg-1"><i class="fas fa-solid fa-download"></i></td>
                    </tr>
                    <tr>
                        <td class="col-lg-2">Video Dokuentasi</td>
                        <td class="col-lg-4">{{ $kontraks->pelaksanaans->video_dokumentasi }}</td>
                        <td class="col-lg-1">nomer</td>
                        <td class="col-lg-4">tanggal</td>
                        <td class="col-lg-1"><i class="fas fa-solid fa-download"></i></td>
                    </tr>
                    @else
                    <li class="form-control">-</li>
                    @endif
                </table>
            </div>
        </div>
    </div>

    <!-- KONTRAK -->
    <div class="pt-3 mb-5">
        <div class="bg-white p-3 rounded">
            <h3>DATA KONTRAK</h3>
            
            <div class="container">
                @if($kontraks->kontraks)
                <table class="table table-striped">
                    <tr>
                        <td class="col-lg-2">BA Persiapan</td>
                        <td class="col-lg-4">{{ $kontraks->kontraks->ba_persiapan }}</td>
                        <td class="col-lg-1">nomer</td>
                        <td class="col-lg-4">tanggal</td>
                        <td class="col-lg-1"><i class="fas fa-solid fa-download"></i></td>
                    </tr>
                    <tr>
                        <td class="col-lg-2">SPPBJ</td>
                        <td class="col-lg-4">{{ $kontraks->kontraks->sppbj }}</td>
                        <td class="col-lg-1">nomer</td>
                        <td class="col-lg-4">tanggal</td>
                        <td class="col-lg-1"><i class="fas fa-solid fa-download"></i></td>
                    </tr>
                    <tr>
                        <td class="col-lg-2">BA Rapat Persiapan</td>
                        <td class="col-lg-4">{{ $kontraks->kontraks->ba_rapat_persiapan }}</td>
                        <td class="col-lg-1">nomer</td>
                        <td class="col-lg-4">tanggal</td>
                        <td class="col-lg-1"><i class="fas fa-solid fa-download"></i></td>
                    </tr>
                    <tr>
                        <td class="col-lg-2">Daftar Personil</td>
                        <td class="col-lg-4">{{ $kontraks->kontraks->daftar_personil }}</td>
                        <td class="col-lg-1">nomer</td>
                        <td class="col-lg-4">tanggal</td>
                        <td class="col-lg-1"><i class="fas fa-solid fa-download"></i></td>
                    </tr>
                    <tr>
                        <td class="col-lg-2">Jaminan Pelaksanaan</td>
                        <td class="col-lg-4">{{ $kontraks->kontraks->jaminan_pelaksanaan }}</td>
                        <td class="col-lg-1">nomer</td>
                        <td class="col-lg-4">tanggal</td>
                        <td class="col-lg-1"><i class="fas fa-solid fa-download"></i></td>
                    </tr>
                    <tr>
                        <td class="col-lg-2">Nomor Kontrak</td>
                        <td class="col-lg-4">{{ $kontraks->kontraks->no_kontrak }}</td>
                        <td class="col-lg-1">nomer</td>
                        <td class="col-lg-4">tanggal</td>
                        <td class="col-lg-1"><i class="fas fa-solid fa-download"></i></td>
                    </tr>
                    <tr>
                        <td class="col-lg-2">BA Penyerahan</td>
                        <td class="col-lg-4">{{ $kontraks->kontraks->ba_penyerahan }}</td>
                        <td class="col-lg-1">nomer</td>
                        <td class="col-lg-4">tanggal</td>
                        <td class="col-lg-1"><i class="fas fa-solid fa-download"></i></td>
                    </tr>
                    <tr>
                        <td class="col-lg-2">SPMK</td>
                        <td class="col-lg-4">{{ $kontraks->kontraks->spmk }}</td>
                        <td class="col-lg-1">nomer</td>
                        <td class="col-lg-4">tanggal</td>
                        <td class="col-lg-1"><i class="fas fa-solid fa-download"></i></td>
                    </tr>
                    <tr>
                        <td class="col-lg-2">Jadwal Pelaksanaan</td>
                        <td class="col-lg-4">{{ $kontraks->kontraks->jadwal_pelaksanaan }}</td>
                        <td class="col-lg-1">nomer</td>
                        <td class="col-lg-4">tanggal</td>
                        <td class="col-lg-1"><i class="fas fa-solid fa-download"></i></td>
                    </tr>
                    <tr>
                        <td class="col-lg-2">BA PCM</td>
                        <td class="col-lg-4">{{ $kontraks->kontraks->ba_pcm }}</td>
                        <td class="col-lg-1">nomer</td>
                        <td class="col-lg-4">tanggal</td>
                        <td class="col-lg-1"><i class="fas fa-solid fa-download"></i></td>
                    </tr>
                    <tr>
                        <td class="col-lg-2">RPMK</td>
                        <td class="col-lg-4">{{ $kontraks->kontraks->rpmk }}</td>
                        <td class="col-lg-1">nomer</td>
                        <td class="col-lg-4">tanggal</td>
                        <td class="col-lg-1"><i class="fas fa-solid fa-download"></i></td>
                    </tr>
                    <tr>
                        <td class="col-lg-2">RKK</td>
                        <td class="col-lg-4">{{ $kontraks->kontraks->rkk }}</td>
                        <td class="col-lg-1">nomer</td>
                        <td class="col-lg-4">tanggal</td>
                        <td class="col-lg-1"><i class="fas fa-solid fa-download"></i></td>
                    </tr>
                    <tr>
                        <td class="col-lg-2">Addendum</td>
                        <td class="col-lg-4">{{ $kontraks->kontraks->addendum }}</td>
                        <td class="col-lg-1">nomer</td>
                        <td class="col-lg-4">tanggal</td>
                        <td class="col-lg-1"><i class="fas fa-solid fa-download"></i></td>
                    </tr>
                    <tr>
                        <td class="col-lg-2">BAST 1</td>
                        <td class="col-lg-4">{{ $kontraks->kontraks->bast_1 }}</td>
                        <td class="col-lg-1">nomer</td>
                        <td class="col-lg-4">tanggal</td>
                        <td class="col-lg-1"><i class="fas fa-solid fa-download"></i></td>
                    </tr>
                    <tr>
                        <td class="col-lg-2">Laporan BMN</td>
                        <td class="col-lg-4">{{ $kontraks->kontraks->laporan_bmn }}</td>
                        <td class="col-lg-1">nomer</td>
                        <td class="col-lg-4">tanggal</td>
                        <td class="col-lg-1"><i class="fas fa-solid fa-download"></i></td>
                    </tr>
                    <tr>
                        <td class="col-lg-2">BA PPHP</td>
                        <td class="col-lg-4">{{ $kontraks->kontraks->ba_pphp }}</td>
                        <td class="col-lg-1">nomer</td>
                        <td class="col-lg-4">tanggal</td>
                        <td class="col-lg-1"><i class="fas fa-solid fa-download"></i></td>
                    </tr>
                    <tr>
                        <td class="col-lg-2">Bast 2</td>
                        <td class="col-lg-4">{{ $kontraks->kontraks->bast_2 }}</td>
                        <td class="col-lg-1">nomer</td>
                        <td class="col-lg-4">tanggal</td>
                        <td class="col-lg-1"><i class="fas fa-solid fa-download"></i></td>
                    </tr>

                    @else
                    <li class="form-control">-</li>
                    @endif
                </table>
            </div>
        </div>
    </div>

    <!-- PEMBAYARAN -->
    <div class="pt-3 pb-5">
        <div class="p-3 bg-white rounded">
            <h3>PEMBAYARAN</h3>
            <div class="container">
                <table class="table table-lg table-striped">
                    @if($kontraks->pembayarans)
                    <tr>
                        <td class="col-lg-2">Jaminan Uang Muka</td>
                        <td class="col-lg-4">{{ $kontraks->pembayarans->jaminan_um }}</td>
                        <td class="col-lg-1">nomer</td>
                        <td class="col-lg-4">tanggal</td>
                        <td class="col-lg-1"><i class="fas fa-solid fa-download"></i></td>
                    </tr>
                    <tr>
                        <td class="col-lg-2">Uang Muka</td>
                        <td class="col-lg-4">{{ $kontraks->pembayarans->uang_muka }}</td>
                        <td class="col-lg-1">nomer</td>
                        <td class="col-lg-4">tanggal</td>
                        <td class="col-lg-1"><i class="fas fa-solid fa-download"></i></td>
                    </tr>
                    <tr>
                        <td class="col-lg-2">Termin</td>
                        <td class="col-lg-4">{{ $kontraks->pembayarans->termin }}</td>
                        <td class="col-lg-1">nomer</td>
                        <td class="col-lg-4">tanggal</td>
                        <td class="col-lg-1"><i class="fas fa-solid fa-download"></i></td>
                    </tr>
                    <tr>
                        <td class="col-lg-2">Jaminan Pemeliharaan</td>
                        <td class="col-lg-4">{{ $kontraks->pembayarans->jaminan_pemeliharaan }}</td>
                        <td class="col-lg-1">nomer</td>
                        <td class="col-lg-4">tanggal</td>
                        <td class="col-lg-1"><i class="fas fa-solid fa-download"></i></td>
                    </tr>
                    @else
                    <li>-</li>
                    @endif
            </div>
        </div>
    </div>
    @endsection