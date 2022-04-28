@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-md-6">
            <div class="card card-success">
                <div class="card-header">
                    <div class="card-title">
                        Data Penyedia
                    </div>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="">Nama PT</label>
                        <input type="text" name="nama_pt" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="">Wakil Penyedia jasa</label>
                        <input type="text" name="wakil_penyedia" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="">Alamat</label>
                        <input type="text" name="alamat" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="">Koresponden</label>
                        <input type="text" name="koresponden" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="">NPWP</label>
                        <input type="text" name="npwp" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="">Nama Bank</label>
                        <input type="text" class="form-control" name="nama_bank" required>
                    </div>
                    <div class="form-group">
                        <label for="">Nomor Rekening</label>
                        <input type="text" class="form-control" name="rekening" required>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-md-6">
            <div class="card card-success">
                <div class="card-header">
                    <div class="card-title">
                        Data Lelang
                    </div>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="">KAK</label>
                        <input type="text" name="KAK" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="">Surat Penetapan PPK</label>
                        <input type="text" name="surat_penetapan_ppk" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="">Dok. Persiapan Pengadaan</label>
                        <input type="text" name="dok_persiapan" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="">RUP/SIPRUP</label>
                        <input type="text" name="rup_siprup" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="">Dok. Persiapan Pengadaan</label>
                        <input type="text" name="dok_persiapan" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="">SK Pokja</label>
                        <input type="text" class="form-control" name="sk_pokja" required>
                    </div>
                    <div class="form-group">
                        <label for="">HPS</label>
                        <input type="text" class="form-control" name="HPS" required>
                    </div>
                    <div class="form-group">
                        <label for="">Dok Pemilihan</label>
                        <input type="text" class="form-control" name="dok_pemilihan" required>
                    </div>
                    <div class="form-group">
                        <label for="">BAPH</label>
                        <input type="text" class="form-control" name="baph" required>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card card-success">
                <div class="card-header">
                    <div class="card-title">
                        Data Pelaksanaan
                    </div>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="">MC 0%</label>
                        <input type="text" name="mc_1" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="">Shop Drawing</label>
                        <input type="text" name="shop_drawing" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="">Papan Nama Proyek, Rambu K3, Spanduk K3, BPJS Ketenagakerjaan</label>
                        <input type="text" name="rambu_k3" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="">Kelengkapan Direksi Keet</label>
                        <input type="text" name="kelengkapan_direksi" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="">Laporan Harian/Mingguan</label>
                        <input type="text" name="laporan_harian" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="">Laporan Bulanan</label>
                        <input type="text" class="laporan_bulanan" name="sk_pokja" required>
                    </div>
                    <div class="form-group">
                        <label for="">Request Pelaksanaan Pekerjaan</label>
                        <input type="text" class="form-control" name="request_pelaksanaan" required>
                    </div>
                    <div class="form-group">
                        <label for="">Quality Control</label>
                        <input type="text" class="form-control" name="quality_control" required>
                    </div>
                    <div class="form-group">
                        <label for="">Foto Dokumentasi</label>
                        <input type="text" class="form-control" name="foto_dokumentasi" required>
                    </div>
                    <div class="form-group">
                        <label for="">Hasil Uji Laboratorium</label>
                        <input type="text" class="form-control" name="hasil_lab" required>
                    </div>
                    <div class="form-group">
                        <label for="">As Built Drawing</label>
                        <input type="text" class="form-control" name="as-built" required>
                    </div>
                    <div class="form-group">
                        <label for="">MC 100%</label>
                        <input type="text" class="form-control" name="mc_2" required>
                    </div>
                    <div class="form-group">
                        <label for="">Vidio Dokumentasi</label>
                        <input type="text" class="form-control" name="vidio_dokumentasi" required>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card card-success">
                <div class="card-header">
                    <div class="card-title">
                        Data Kontrak
                    </div>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="">BA Persiapan Penunjukan</label>
                        <input type="text" name="ba_penunjukan" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="">SPPBJ</label>
                        <input type="text" name="SPPBJ" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="">BA Rapat Persiapan Penandatanganan Kontrak</label>
                        <input type="text" name="rambu_k3" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="">Daftar Personil Managerial</label>
                        <input type="text" name="daftar_personil" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="">Jaminan Pelaksanaan</label>
                        <input type="text" name="jaminan_pelaksanaan" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="">BA PCM</label>
                        <input type="text" class="ba_pcm" name="sk_pokja" required>
                    </div>
                    <div class="form-group">
                        <label for="">Jadwal Pelaksanaan</label>
                        <input type="text" class="form-control" name="jadwal_pelaksanaan" required>
                    </div>
                    <div class="form-group">
                        <label for="">SPMK</label>
                        <input type="text" class="form-control" name="SPMK" required>
                    </div>
                    <div class="form-group">
                        <label for="">RMPK</label>
                        <input type="text" class="form-control" name="RMPK" required>
                    </div>
                    <div class="form-group">
                        <label for="">RKK</label>
                        <input type="text" class="form-control" name="rkk" required>
                    </div>
                    <div class="form-group">
                        <label for="">Addendum</label>
                        <input type="text" class="form-control" name="addendum" required>
                    </div>
                    <div class="form-group">
                        <label for="">BA Serah Terima I</label>
                        <input type="text" class="form-control" name="BAST" required>
                    </div>
                    <div class="form-group">
                        <label for="">Laporan BMN</label>
                        <input type="text" class="form-control" name="laporan_bmn" required>
                    </div>
                    <div class="form-group">
                        <label for="">BA PPHP</label>
                        <input type="text" class="form-control" name="ba_pphp" required>
                    </div><div class="form-group">
                        <label for="">BA Serah Terima II</label>
                        <input type="text" class="form-control" name="BAST_II" required>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card card-success">
                <div class="card-header">
                    <div class="card-title">
                        Data Pembayaran
                    </div>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="">Jaminan Uang Muka</label>
                        <input type="text" name="jaminan_uang" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="">Uang Muka</label>
                        <input type="text" name="uang_muka" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="">Termyn</label>
                        <input type="text" name="termyn" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="">Jaminan Pemeliharaan</label>
                        <input type="text" name="jaminan_pemeliharaan" class="form-control" required>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
