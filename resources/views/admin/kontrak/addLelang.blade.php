@extends('layouts.app')
@section('content')
    <style>
        .btn-circle {
            width: 30px;
            height: 30px;
            text-align: center;
            padding: 6px 0;
            font-size: 12px;
            line-height: 1.428571429;
            border-radius: 15px;
        }

    </style>
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
                            Add Data Lelang
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('kontrak/saveLelang') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="">KAK</label>
                                <select name="kak" id="" class="form-control">
                                    <option value="1">Ada</option>
                                    <option value="2">Tidak Ada</option>
                                </select>
                                <input type="hidden" name="kontrak_id" value="{{ $sungai->id }}">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="f_kak" id="exampleInputFile">
                                            <label class="custom-file-label" for="exampleInputFile">File Input</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="">Surat Penetapan PPK</label>
                                <input placeholder="Nomor Surat" type="text" name="nomor_surat_ppk"
                                    class="form-control">
                                <input placeholder="Tanggal Surat" type="text" name="tanggal_surat_ppk"
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
                                    <option value="1">Ada</option>
                                    <option value="2">Tidak Ada</option>
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
                                    <option value="1">Ada</option>
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
                                    <option value="1">Ada</option>
                                    <option value="2">Tidak Ada</option>
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
                                            <input type="file" class="custom-file-input" name="f_sk_pokjaa"
                                                id="exampleInputFile">
                                            <label class="custom-file-label" for="exampleInputFile">File Input</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="">HPS</label>
                                <select name="hps" id="" class="form-control">
                                    <option value="1">Ada</option>
                                    <option value="2">Tidak Ada</option>
                                </select>
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="f_hps" id="exampleInputFile">
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
                            <button class="btn btn-success">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
<script>
    $('#example').tooltip(options)
</script>
