@extends('layouts.app')
@section('content')
    <form action="{{ url('/kontrak/saveUtil') }}" class="form" method="post" enctype="multipart/form-data">
        @csrf
        <div class="card">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
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
                                <input type="text" name="nama_pt" class="form-control">
                                <input type="hidden" name="kontrak_id" value="{{ $id }}">
                            </div>
                            <div class="form-group">
                                <label for="">Wakil Penyedia jasa</label>
                                <input type="text" name="wakil_penyedia" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Alamat</label>
                                <input type="text" name="alamat" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Koresponden</label>
                                <input type="text" name="koresponden" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">NPWP</label>
                                <input type="text" name="npwp" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Nama Bank</label>
                                <input type="text" class="form-control" name="nama_bank">
                            </div>
                            <div class="form-group">
                                <label for="">Nomor Rekening</label>
                                <input type="text" class="form-control" name="rekening">
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
                                <select name="KAK" id="" class="form-control">
                                    <option value="Ada">Ada</option>
                                    <option value="Tidak Ada">Tidak Ada</option>
                                </select>
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="f_KAK" id="exampleInputFile">
                                            <label class="custom-file-label" for="exampleInputFile">File Input</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="">Surat Penetapan PPK</label>
                                <input placeholder="Nomor Surat" type="text" name="surat_penetapan_ppk"
                                    class="form-control">
                                <input placeholder="Tanggal Surat" type="text" name="surat_penetapan_ppk1"
                                    class="form-control">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="f_surat_penetapan_ppk"
                                                id="exampleInputFile">
                                            <label class="custom-file-label" for="exampleInputFile">File Input</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="">Dokumen Perencanaan</label>
                                <select name="dok_Perencanaan" id="" class="form-control">
                                    <option value="Ada">Ada</option>
                                    <option value="Tidak Ada">Tidak Ada</option>
                                </select>
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="f_dok_Perencanaan"
                                                id="exampleInputFile">
                                            <label class="custom-file-label" for="exampleInputFile">File Input</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="">Dok. Persiapan Pengadaan</label>
                                <select name="dok_persiapan" id="" class="form-control">
                                    <option value="Ada">Ada</option>
                                    <option value="Tidak Ada">Tidak Ada</option>
                                </select>
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="f_dok_persiapan"
                                                id="exampleInputFile">
                                            <label class="custom-file-label" for="exampleInputFile">File Input</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="">RUP/SIPRUP</label>
                                <select name="rup_siprup" id="" class="form-control">
                                    <option value="Ada">Ada</option>
                                    <option value="tidak_ada">Tidak Ada</option>
                                </select>
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="f_rup_siprup"
                                                id="exampleInputFile">
                                            <label class="custom-file-label" for="exampleInputFile">File Input</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="">SK Pokja</label>
                                <input placeholder="Nomor Surat" type="text" name="sk_pokja" class="form-control">
                                <input placeholder="Tanggal Surat" type="text" name="sk_pokja1" class="form-control">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="f_sk_pokja"
                                                id="exampleInputFile">
                                            <label class="custom-file-label" for="exampleInputFile">File Input</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="">HPS</label>
                                <select name="HPS" id="" class="form-control">
                                    <option value="1">Ada</option>
                                    <option value="2">Tidak Ada</option>
                                </select>
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="f_HPS" id="exampleInputFile">
                                            <label class="custom-file-label" for="exampleInputFile">File Input</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="">Dok Pemilihan</label>
                                <select name="dok_pemilihan" id="" class="form-control">
                                    <option value="1">Ada</option>
                                    <option value="2">Tidak Ada</option>
                                </select>
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="f_dok_pemilihan"
                                                id="exampleInputFile">
                                            <label class="custom-file-label" for="exampleInputFile">File Input</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="">BAPH</label>
                                <select name="baph" id="" class="form-control">
                                    <option value="1">Ada</option>
                                    <option value="2">Tidak Ada</option>
                                </select>
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="f_baph"
                                                id="exampleInputFile">
                                            <label class="custom-file-label" for="exampleInputFile">File Input</label>
                                        </div>
                                    </div>
                                </div>
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
                                <select name="mc_1" id="" class="form-control">
                                    <option value="1">Ada</option>
                                    <option value="2">Tidak Ada</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" name="f_mc_1" id="exampleInputFile">
                                        <label class="custom-file-label" for="exampleInputFile">File Input</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="">Papan Nama Proyek, Rambu K3, Spanduk K3, BPJS Ketenagakerjaan</label>
                                <select name="rambu_k3" id="" class="form-control">
                                    <option value="1">Ada</option>
                                    <option value="2">Tidak Ada</option>
                                </select>
                                <br>
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="f_rambu_k3"
                                                id="exampleInputFile">
                                            <label class="custom-file-label" for="exampleInputFile">File Input</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="">Kelengkapan Direksi Keet</label>
                                <select name="kelengkapan_direksi" id="" class="form-control">
                                    <option value="1">Ada</option>
                                    <option value="2">Tidak Ada</option>
                                </select>
                                <br>
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="f_kelengkapan_direksi"
                                                id="exampleInputFile">
                                            <label class="custom-file-label" for="exampleInputFile">File Input</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="">Laporan Harian/Mingguan</label>
                                <select name="laporan_harian" id="" class="form-control">
                                    <option value="1">Ada</option>
                                    <option value="2">Tidak Ada</option>
                                </select>
                                <br>
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="f_laporan_harian"
                                                id="exampleInputFile">
                                            <label class="custom-file-label" for="exampleInputFile">File Input</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="">Laporan Bulanan</label>
                                <select name="lb" id="" class="form-control">
                                    <option value="1">Ada</option>
                                    <option value="2">Tidak Ada</option>
                                </select>
                                <br>
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="f_lb" id="exampleInputFile">
                                            <label class="custom-file-label" for="exampleInputFile">File Input</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="">Request Pelaksanaan Pekerjaan</label>
                                <select name="request_pelaksanaan" id="" class="form-control">
                                    <option value="1">Ada</option>
                                    <option value="2">Tidak Ada</option>
                                </select>
                                <br>
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="f_request_pelaksanaan"
                                                id="exampleInputFile">
                                            <label class="custom-file-label" for="exampleInputFile">File Input</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="">Quality Control</label>
                                <select name="quality_control" id="" class="form-control">
                                    <option value="1">Ada</option>
                                    <option value="2">Tidak Ada</option>
                                </select>
                                <br>
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="f_quality_control"
                                                id="exampleInputFile">
                                            <label class="custom-file-label" for="exampleInputFile">File Input</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="">Foto Dokumentasi</label>
                                <select name="foto_dokumentasi" id="" class="form-control">
                                    <option value="1">Ada</option>
                                    <option value="2">Tidak Ada</option>
                                </select>
                                <br>
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="f_foto_dokumentasi"
                                                id="exampleInputFile">
                                            <label class="custom-file-label" for="exampleInputFile">File Input</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="">Hasil Uji Laboratorium</label>
                                <select name="hasil_lab" id="" class="form-control">
                                    <option value="1">Ada</option>
                                    <option value="2">Tidak Ada</option>
                                </select>
                                <br>
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="f_hasil_lab"
                                                id="exampleInputFile">
                                            <label class="custom-file-label" for="exampleInputFile">File Input</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="">As Built Drawing</label>
                                <select name="as_built" id="" class="form-control">
                                    <option value="1">Ada</option>
                                    <option value="2">Tidak Ada</option>
                                </select>
                                <br>
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="f_as_built"
                                                id="exampleInputFile">
                                            <label class="custom-file-label" for="exampleInputFile">File Input</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="">MC 100%</label>
                                <select name="mc_2" id="" class="form-control">
                                    <option value="1">Ada</option>
                                    <option value="2">Tidak Ada</option>
                                </select>
                                <br>
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="f_mc_2"
                                                id="exampleInputFile">
                                            <label class="custom-file-label" for="exampleInputFile">File Input</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="">Vidio Dokumentasi</label>
                                <select name="vidio_dokumentasi" id="" class="form-control">
                                    <option value="ada">Ada</option>
                                    <option value="tidak_ada">Tidak Ada</option>
                                </select>
                                <br>
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="f_vidio_dokumentasi"
                                                id="exampleInputFile">
                                            <label class="custom-file-label" for="exampleInputFile">File Input</label>
                                        </div>
                                    </div>
                                </div>
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
                                <input placeholder="Nomor Surat" type="text" name="ba_penunjukan" class="form-control">
                                <input placeholder="Tanggal Surat" type="text" name="ba_penunjukan" class="form-control">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="f_ba_penunjukan"
                                                id="exampleInputFile">
                                            <label class="custom-file-label" for="exampleInputFile">File Input</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="">SPPBJ</label>
                                <input placeholder="Nomor Surat" type="text" name="SPPBJ" class="form-control">
                                <input placeholder="Tanggal Surat" type="text" name="SPPBJ1" class="form-control">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="f_SPPBJ"
                                                id="exampleInputFile">
                                            <label class="custom-file-label" for="exampleInputFile">File Input</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="">Ba Rapat Persiapan</label>
                                <input placeholder="Nomor Surat" type="text" name="ba_rapat_persiapan"
                                    class="form-control">
                                <input placeholder="Tanggal Surat" type="text" name="ba_rapat_persiapan1"
                                    class="form-control">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="f_ba_rapat_persiapan"
                                                id="exampleInputFile">
                                            <label class="custom-file-label" for="exampleInputFile">File Input</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="">BA Rapat Persiapan Penandatanganan Kontrak</label>
                                <input placeholder="Nomor Surat" type="text" name="ba_rapat_persiapan_kontrak"
                                    class="form-control">
                                <input placeholder="Tanggal Surat" type="text" name="ba_rapat_persiapan_kontrak1"
                                    class="form-control">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input"
                                                name="f_ba_rapat_persiapanba_rapat_persiapan_kontrak" id="exampleInputFile">
                                            <label class="custom-file-label" for="exampleInputFile">File Input</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="">Daftar Personil Managerial</label>
                                <select name="daftar_personil" id="" class="form-control">
                                    <option value="1">Ada</option>
                                    <option value="2">Tidak Ada</option>
                                </select>
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="f_daftar_personil"
                                                id="exampleInputFile">
                                            <label class="custom-file-label" for="exampleInputFile">File Input</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="">Jaminan Pelaksanaan</label>
                                <input placeholder="Nomor Surat" type="text" name="jaminan_pelaksanaan"
                                    class="form-control">
                                <input placeholder="Tanggal Surat" type="text" name="jaminan_pelaksanaan1"
                                    class="form-control">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="fjaminan_pelaksanaan"
                                                id="exampleInputFile">
                                            <label class="custom-file-label" for="exampleInputFile">File Input</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="">Nomor Kontrak</label>
                                <input placeholder="Nomor Surat" type="text" name="no_kontrak" class="form-control">
                                <input placeholder="Tanggal Surat" type="text" name="no_kontrak1" class="form-control">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="f_no_kontrak"
                                                id="exampleInputFile">
                                            <label class="custom-file-label" for="exampleInputFile">File Input</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="">Ba Peyerahan</label>
                                <input placeholder="Nomor Surat" type="text" name="ba_penyerahan" class="form-control">
                                <input placeholder="Tanggal Surat" type="text" name="ba_penyerahan1"
                                    class="form-control">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="f_ba_penyerahan"
                                                id="exampleInputFile">
                                            <label class="custom-file-label" for="exampleInputFile">File Input</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="">BA PCM</label>
                                <input placeholder="Nomor Surat" type="text" name="bapcm" class="form-control">
                                <input placeholder="Tanggal Surat" type="text" name="bapcm1" class="form-control">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="f_bapcm"
                                                id="exampleInputFile">
                                            <label class="custom-file-label" for="exampleInputFile">File Input</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="">Jadwal Pelaksanaan</label>
                                <select name="jadwal_pelaksanaan" id="" class="form-control">
                                    <option value="1">Ada</option>
                                    <option value="2">Tidak Ada</option>
                                </select>
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="f_jadwal_pelaksanaan"
                                                id="exampleInputFile">
                                            <label class="custom-file-label" for="exampleInputFile">File Input</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="">SPMK</label>
                                <input placeholder="Nomor Surat" type="text" name="SPMK" class="form-control">
                                <input placeholder="Tanggal Surat" type="text" name="SPMK1" class="form-control">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="f_SPMK"
                                                id="exampleInputFile">
                                            <label class="custom-file-label" for="exampleInputFile">File Input</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="">RMPK</label>
                                <input placeholder="Nomor Surat" type="text" name="RMPK" class="form-control">
                                <input placeholder="Tanggal Surat" type="text" name="RMPK1" class="form-control">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="f_RMPK"
                                                id="exampleInputFile">
                                            <label class="custom-file-label" for="exampleInputFile">File Input</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="">RKK</label>
                                <input placeholder="Nomor Surat" type="text" name="rkk" class="form-control">
                                <input placeholder="Tanggal Surat" type="text" name="rkk1" class="form-control">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="f_rkk"
                                                id="exampleInputFile">
                                            <label class="custom-file-label" for="exampleInputFile">File Input</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="">Addendum</label>
                                <input placeholder="Nomor Surat" type="text" name="addendum" class="form-control">
                                <input placeholder="Tanggal Surat" type="text" name="addendum1" class="form-control">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="f_addendum"
                                                id="exampleInputFile">
                                            <label class="custom-file-label" for="exampleInputFile">File Input</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="">BA Serah Terima I</label>
                                <input placeholder="Nomor Surat" type="text" name="BAST" class="form-control">
                                <input placeholder="Tanggal Surat" type="text" name="BAST1" class="form-control">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="f_BAST"
                                                id="exampleInputFile">
                                            <label class="custom-file-label" for="exampleInputFile">File Input</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="">Laporan BMN</label>
                                <select name="laporan_bmn" id="" class="form-control">
                                    <option value="1">Ada</option>
                                    <option value="2">Tidak Ada</option>
                                </select>
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="f_laporan_bmn"
                                                id="exampleInputFile">
                                            <label class="custom-file-label" for="exampleInputFile">File Input</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="">BA PPHP</label>
                                <input placeholder="Nomor Surat" type="text" name="ba_pphp" class="form-control">
                                <input placeholder="Tanggal Surat" type="text" name="ba_pphp1" class="form-control">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="f_ba_pphp"
                                                id="exampleInputFile">
                                            <label class="custom-file-label" for="exampleInputFile">File Input</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="">BA Serah Terima II</label>
                                <input placeholder="Nomor Surat" type="text" name="BAST_II" class="form-control">
                                <input placeholder="Tanggal Surat" type="text" name="BAST_II1" class="form-control">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="f_BAST_II"
                                                id="exampleInputFile">
                                            <label class="custom-file-label" for="exampleInputFile">File Input</label>
                                        </div>
                                    </div>
                                </div>
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
                                <input placeholder="Nomor Surat" type="text" name="jaminan_uang" class="form-control">
                                <input placeholder="Tanggal Surat" type="text" name="jaminan_uang" class="form-control">
                                <br>
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="f_jaminan_uang"
                                                id="exampleInputFile">
                                            <label class="custom-file-label" for="exampleInputFile">File Input</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="">Uang Muka</label>
                                <select name="uang_muka" id="" class="form-control">
                                    <option value="1">Ada</option>
                                    <option value="2">Tidak Ada</option>
                                </select>
                                <br>
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="f_uang_muka"
                                                id="exampleInputFile">
                                            <label class="custom-file-label" for="exampleInputFile">File Input</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="">Termyn</label>
                                <select name="termyn" id="" class="form-control">
                                    <option value="1">Ada</option>
                                    <option value="2">Tidak Ada</option>
                                </select>
                                <br>
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="f_termyn"
                                                id="exampleInputFile">
                                            <label class="custom-file-label" for="exampleInputFile">File Input</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="">Jaminan Pemeliharaan</label>
                                <input placeholder="Nomor Surat" type="text" name="jaminan_pemeliharaan"
                                    class="form-control">
                                <input placeholder="Tanggal Surat" type="text" name="jaminan_pemeliharaan1"
                                    class="form-control">
                                <br>
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="f_jaminan_pemeliharaan"
                                                id="exampleInputFile">
                                            <label class="custom-file-label" for="exampleInputFile">File Input</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="btn btn-primary col-md-3 mt-3 mb-3 ml-3">Simpan </button>
        </div>
    </form>
@endsection
