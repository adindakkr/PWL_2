@extends('layout.template')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Pengalaman Kerja</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Pengalaman</a></li>
              <li class="breadcrumb-item active">Experience Page</li>
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
          <h3 class="card-title">Pengalaman Kerja</h3>

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
            Berawal dari masuk di Polinema melalui jalur SBMPTN <br>
            D-IV Teknik Informatika adalah pilihan kedua saya di SBMPTN <br>
            Saat ini saya sudah berkuliah selama 4 semester di Polinema dan berada di kelas TI-2A <br>
            Kurang 2 tahun lagi saya dapat lulus dari sini dan mendapat gelar STr Kom. <br>
            Harapannya semoga saya dapat segera lulus dan menerapkan ilmu yang saya dapat disini dan bekerja di perusahaan yang saya impikan <br>
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
    alert('selamat datang'); 
  </script>
      
  @endpush