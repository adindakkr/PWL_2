@extends('layout.template')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Hobi</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Hobi</a></li>
              <li class="breadcrumb-item active">Hobby Page</li>
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
          <h3 class="card-title">Hobi</h3>

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
                {!! (isset($hobi))? method_field('PUT'): ''!!}
                <div class="form-group">
                    <label>ID</label>
                    <input class="form-control @error('id') is-invalid @enderror" value="{{ isset($hobi)? $hobi->id :old('id') }}" name="id" type="text"/>
                    @error('id')
                        <span class="error invalid-feedback">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Nama Hobi</label>
                    <input class="form-control @error('nama_hobi') is-invalid @enderror" value="{{ isset($hobi)? $hobi->nama_hobi :old('nama_hobi') }}" name="nama_hobi" type="text"/>
                    @error('nama_hobi')
                        <span class="error invalid-feedback">{{$message}}</span>
                    @enderror
                </div>
                 <div class="form-group">
                    <label>Jenis</label>
                    <input class="form-control @error('jenis') is-invalid @enderror" value="{{ isset($hobi)? $hobi->jenis :old('jenis') }}" name="jenis" type="text"/>
                    @error('jenis')
                        <span class="error invalid-feedback">{{$message}}</span>
                    @enderror
                </div>
                 <div class="form-group">
                    <label>Status</label>
                    <input class="form-control @error('status') is-invalid @enderror" value="{{ isset($hobi)? $hobi->status :old('status') }}" name="status" type="text"/>
                    @error('status')
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