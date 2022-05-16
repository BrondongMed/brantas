@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-md-12">
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
            <div class="card card-success">
                <div class="card-header">
                    <div class="card-title">
                        Add Data Kontrak
                    </div>
                </div>
            </div>
                <div class="card-body">
                    <form action="{{ url('/kontrak/saveDataKontrak') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="">BA Persiapan Penunjukan</label>
                            <input type="hidden" name="kontrak_id" id="" value="{{ $data->id }}">
                            <input placeholder="Nomor Surat" type="text" name="ba_no_surat" class="form-control">
                            <input placeholder="Tanggal Surat" type="text" name="ba_tanggal" class="form-control">
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
                            <input placeholder="Nomor Surat" type="text" name="no_sppbj" class="form-control">
                            <input placeholder="Tanggal Surat" type="text" name="tgl_sppbj" class="form-control">
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
                            <input placeholder="Nomor Surat" type="text" name="ba_no_persiapan"
                                class="form-control">
                            <input placeholder="Tanggal Surat" type="text" name="ba_tgl_persiapan"
                                class="form-control">
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" name="f_ba_persiapan"
                                            id="exampleInputFile">
                                        <label class="custom-file-label" for="exampleInputFile">File Input</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">BA Rapat Persiapan Penandatanganan Kontrak</label>
                            <input placeholder="Nomor Surat" type="text" name="ba_no_rapat_persiapan_kontrak"
                                class="form-control">
                            <input placeholder="Tanggal Surat" type="text" name="ba_tgl_rapat_persiapan_kontrak1"
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
                            <input placeholder="Nomor Surat" type="text" name="no_jaminan_pelaksanaan"
                                class="form-control">
                            <input placeholder="Tanggal Surat" type="text" name="tgl_jaminan_pelaksanaan1"
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
                            <input placeholder="Tanggal Surat" type="text" name="tgl_kontrak" class="form-control">
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
                            <input placeholder="Nomor Surat" type="text" name="ba_no_penyerahan" class="form-control">
                            <input placeholder="Tanggal Surat" type="text" name="ba_tgl_penyerahan"
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
                            <input placeholder="Nomor Surat" type="text" name="ba_no_pcm" class="form-control">
                            <input placeholder="Tanggal Surat" type="text" name="ba_tgl_pcm" class="form-control">
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
                            <input placeholder="Nomor Surat" type="text" name="ba_no_spmk" class="form-control">
                            <input placeholder="Tanggal Surat" type="text" name="ba_tgl_spmk" class="form-control">
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" name="f_spmk"
                                            id="exampleInputFile">
                                        <label class="custom-file-label" for="exampleInputFile">File Input</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">RMPK</label>
                            <input placeholder="Nomor Surat" type="text" name="no_rmpk" class="form-control">
                            <input placeholder="Tanggal Surat" type="text" name="tgl_rmpk" class="form-control">
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" name="f_rmpk"
                                            id="exampleInputFile">
                                        <label class="custom-file-label" for="exampleInputFile">File Input</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">RKK</label>
                            <input placeholder="Nomor Surat" type="text" name="no_rkk" class="form-control">
                            <input placeholder="Tanggal Surat" type="text" name="tgl_rkk" class="form-control">
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
                            <input placeholder="Nomor Surat" type="text" name="no_adendum" class="form-control">
                            <input placeholder="Tanggal Surat" type="text" name="tgl_addendum" class="form-control">
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
                            <input placeholder="Nomor Surat" type="text" name="no_bast" class="form-control">
                            <input placeholder="Tanggal Surat" type="text" name="tgl_bast" class="form-control">
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" name="f_bast"
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
                            <input placeholder="Nomor Surat" type="text" name="ba_no_pphp" class="form-control">
                            <input placeholder="Tanggal Surat" type="text" name="ba_tgl_pphp" class="form-control">
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
                            <input placeholder="Nomor Surat" type="text" name="no_bast2" class="form-control">
                            <input placeholder="Tanggal Surat" type="text" name="tgl_bast2" class="form-control">
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" name="f_bast2"
                                            id="exampleInputFile">
                                        <label class="custom-file-label" for="exampleInputFile">File Input</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-success">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
