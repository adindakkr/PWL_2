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
              <li class="breadcrumb-item active">Hobi Page</li>
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
          Selama 20 tahun hidup di dunia, saya pernah menekuni beberapa hobi yaitu: 
          <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>ID</th>
                    <th>Jenis</th>
                    <th>Nama Hobi</th>
                    <th>Status</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach($hobis as $h)
                    <tr>
                      <td>{{$h->id}}</td>
                      <td>{{$h->jenis}}</td>
                      <td>{{$h->nama_hobi}}</td>
                      <td>{{$h->status}}</td>
                    </tr>
                    @endforeach
                  </tbody>
          </table>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          -Adinda Kurnia Rifanti/ 2141720100 / 01-
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  @endsection
  @push('custom_js')
  <script>
    alert('tugas pertemuan 4'); 
  </script>
      
  @endpush