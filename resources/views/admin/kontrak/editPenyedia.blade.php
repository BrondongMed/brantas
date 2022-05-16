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
                <div class="card-success">
                    <div class="card-header">
                        <div class="card-title">
                            Update Penyedia
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{ url('/kontrak/updatePenyedia') }}" method="post">
                        @method("patch")
                        @csrf
                        <div class="form-group">
                            <label for="">Nama PT</label>
                            <input type="text" name="nama_pt" class="form-control" value="{{ $data->vendor }}">
                            <input type="hidden" name="kontrak_id" value="{{ $data->kontrak_id }}">
                        </div>
                        <div class="form-group">
                            <label for="">Wakil Penyedia jasa</label>
                            <input type="text" name="wakil_penyedia" class="form-control" value="{{ $data->wakil_penyedia }}">
                        </div>
                        <div class="form-group">
                            <label for="">Alamat</label>
                            <input type="text" name="alamat" class="form-control" value="{{$data->alamat }}">
                        </div>
                        <div class="form-group">
                            <label for="">Koresponden</label>
                            <input type="text" name="koresponden" class="form-control" value="{{ $data->koresponden }}">
                        </div>
                        <div class="form-group">
                            <label for="">NPWP</label>
                            <input type="text" name="npwp" class="form-control" value="{{ $data->npwp }}">
                        </div>
                        <div class="form-group">
                            <label for="">Nama Bank</label>
                            <input type="text" class="form-control" name="nama_bank" value="{{ $data->Bank }}">
                        </div>
                        <div class="form-group">
                            <label for="">Nomor Rekening</label>
                            <input type="text" class="form-control" name="rekening" value="{{ $data->Rekening }}">
                        </div>
                        <button class="btn btn-info">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
<script>
    $('#example').tooltip(options)
</script>
