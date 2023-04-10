@extends('layout.template')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Mata Kuliah</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Mata Kuliah</a></li>
              <li class="breadcrumb-item active">Subject Page</li>
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
          <h3 class="card-title">Mata Kuliah</h3>

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
                {!! (isset($matkul))? method_field('PUT'): ''!!}
                <div class="form-group">
                    <label>ID</label>
                    <input class="form-control @error('id') is-invalid @enderror" value="{{ isset($matkul)? $matkul->id :old('id') }}" name="id" type="text"/>
                    @error('id')
                        <span class="error invalid-feedback">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Nama Mata Kuliah</label>
                    <input class="form-control @error('nama_matkul') is-invalid @enderror" value="{{ isset($matkul)? $matkul->nama_matkul :old('nama_matkul') }}" name="nama_matkul" type="text"/>
                    @error('nama_matkul')
                        <span class="error invalid-feedback">{{$message}}</span>
                    @enderror
                </div>
                 <div class="form-group">
                    <label>Dosen</label>
                    <input class="form-control @error('dosen') is-invalid @enderror" value="{{ isset($matkul)? $matkul->dosen :old('dosen') }}" name="dosen" type="text"/>
                    @error('dosen')
                        <span class="error invalid-feedback">{{$message}}</span>
                    @enderror
                </div>
                 <div class="form-group">
                    <label>SKS</label>
                    <input class="form-control @error('sks') is-invalid @enderror" value="{{ isset($matkul)? $matkul->sks :old('sks') }}" name="sks" type="text"/>
                    @error('sks')
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