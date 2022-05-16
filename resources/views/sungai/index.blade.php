@extends('layouts.app')
@section('content')
<div class="row">
  <div class="col-lg-4 col-6">
      <!-- small box -->
      <div class="small-box bg-info">
          <div class="inner">
              <h3>{{ $wakil_nama->count() }}</h3>

              <p>Daerah Irigasi</p>
          </div>
          <div class="icon">
              <i class="fas fa-bacon"></i>
          </div>

      </div>
  </div>
  <!-- ./col -->
  <div class="col-lg-4 col-6">
      <!-- small box -->
      <div class="small-box bg-success">
          <div class="inner">
              <h3>{{ $lingkungans->count() }}</h3>

              <p>Total Lingkungan</p>
          </div>
          <div class="icon">
              <i class="ion ion-stats-bars"></i>
          </div>

      </div>
  </div>
  <!-- ./col -->
  <div class="col-lg-4 col-6">
      <!-- small box -->
      <div class="small-box bg-warning">
          <div class="inner">
              <h3>{{ $users->count() }}</h3>

              <p>User Registrations</p>
          </div>
          <div class="icon">
              <i class="ion ion-person-add"></i>
          </div>

      </div>
  </div>
  <!-- ./col -->

  <!-- ./col -->
</div>
<div class="row">
  <div class="col-md-6 justify-center">
      <div class="card">
          <div class="card-header">
          </div>
          <div class="card-body">
              <form action=" {{ url('/sungai/add') }}" method="post">
                  @csrf
                  <div class="form-group">
                      <label for="">Nama Daerah Irigasi</label>
                      <input type="text" name="sungai" class="form-control">
                  </div>

                  <button class="btn btn-primary">Simpan</button>
              </form>
              <hr>
              <div class="card-body">
                  <table class="table table-bordered">
                      <thead>
                          <tr>
                              <th style="width: 10px">No</th>
                              <th>Daerah Irigasi</th>
                              <th>Tindakan</th>
                          </tr>
                      </thead>
                      <tbody>
                          @php $no = 1 @endphp
                          @foreach ($wakil_nama as $data)
                              <tr>
                                  <td>{{ $no++ }}</td>
                                  <td>{{ $data->nama_sungai }}</td>
                                  <td>
                                      <a href="{{ url('/admin/' . $data->id . '/edit') }}">
                                          <button class="btn btn-info"><i class="fas fa-edit"></i></i></button>
                                      </a>
                                      <a href="{{ url('/admin/delSungai/' . $data->id) }}">
                                          <button class="btn btn-danger"
                                              onclick="return confirm(' Anda Yakin Menghapus?');"><i
                                                  class="fas fa-trash-alt"></i></button>
                                      </a>

                                  </td>
                              </tr>
                          @endforeach
                      </tbody>
                  </table>
              </div>
          </div>
      </div>
  </div>
  <div class="col-md-6">
    <div id="mapid" style="width: 500px; height: 690px;"></div>
  </div>
</div>
@endsection

