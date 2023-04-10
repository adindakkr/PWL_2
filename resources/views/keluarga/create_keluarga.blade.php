@extends('layout.template')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Keluarga</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Keluarga</a></li>
              <li class="breadcrumb-item active">Family Page</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Keluarga</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ $url_form}}">
                @csrf
                {!! (isset($kel))? method_field('PUT'): ''!!}
                <div class="form-group">
                    <label>ID</label>
                    <input class="form-control @error('id') is-invalid @enderror" value="{{ isset($kel)? $kel->id :old('id') }}" name="id" type="text"/>
                    @error('id')
                        <span class="error invalid-feedback">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Nama</label>
                    <input class="form-control @error('nama') is-invalid @enderror" value="{{ isset($kel)? $kel->nama :old('nama') }}" name="nama" type="text"/>
                    @error('nama')
                        <span class="error invalid-feedback">{{$message}}</span>
                    @enderror
                </div>
                 <div class="form-group">
                    <label>Peran</label>
                    <input class="form-control @error('peran') is-invalid @enderror" value="{{ isset($kel)? $kel->peran :old('peran') }}" name="peran" type="text"/>
                    @error('peran')
                        <span class="error invalid-feedback">{{$message}}</span>
                    @enderror
                </div>
                 <div class="form-group">
                    <label>Tanggal Lahir</label>
                    <input class="form-control @error('tgl_lahir') is-invalid @enderror" value="{{ isset($kel)? $kel->tgl_lahir :old('tgl_lahir') }}" name="tgl_lahir" type="text"/>
                    @error('tgl_lahir')
                        <span class="error invalid-feedback">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Pekerjaan</label>
                    <input class="form-control @error('pekerjaan') is-invalid @enderror" value="{{ isset($kel)? $kel->pekerjaan :old('pekerjaan') }}" name="pekerjaan" type="text"/>
                    @error('pekerjaan')
                        <span class="error invalid-feedback">{{$message}}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <input type="submit" value="submit">
                </div>
            </form>
          </div>
          <!-- /.card-body -->
        <div class="card-footer">
          (-Adinda Kurnia Rifanti/ 2141720100 / 01-)
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  @endsection