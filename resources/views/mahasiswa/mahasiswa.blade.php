@extends('layout.template')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Mahasiswa</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Mahasiswa</a></li>
                            <li class="breadcrumb-item active">Mahasiswa Page</li>
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
                    <h3 class="card-title">Mahasiswa</h3>

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

                    <a href="{{ route('mahasiswa.create') }}" class="btn btn-sm btn-success my-2">Tambah Data</a>

                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>NIM</th>
                                <th>Nama</th>
                                <th>JK</th>
                                <th>Tempat Lahir</th>
                                <th>Tanggal Lahir</th>
                                <th>Alamat</th>
                                <th>HP</th>
                                <th>Kelas</th>
                                <th>Action</th>

                            </tr>
                        </thead>
                        <tbody>
                            @if ($mhs->count() > 0)
                                @foreach ($mhs as $i => $m)
                                    <tr>
                                        <td>{{ ++$i }}</td>
                                        <td>{{ $m->nim }}</td>
                                        <td>{{ $m->nama }}</td>
                                        <td>{{ $m->jk }}</td>
                                        <td>{{ $m->tempat_lahir }}</td>
                                        <td>{{ $m->tanggal_lahir }}</td>
                                        <td>{{ $m->alamat }}</td>
                                        <td>{{ $m->hp }}</td>
                                        <td>{{ $m->kelas !== null ? $m->kelas->nama_kelas : 'tidak ada' }}</td>
                                        <td>
                                            <!-- Bikin tombol Edit dan Delete-->
                                            <div class="btn-group">
                                                <a href="{{ route('mahasiswa.edit', [$m->id]) }}"
                                                    class="btn btn-sm btn-warning mr-2">edit</a>
                                                <a href="{{ route('mahasiswa.show', [$m->id]) }}"
                                                    class="btn btn-sm btn-primary mr-2">show</a>
                                                <a href="{{ route('mahasiswamatakuliah.show', [$m->id]) }}"
                                                    class="btn btn-sm btn-success mr-2">nilai</a>
                                                <form method="POST" action="{{ url('/mahasiswa/' . $m->id) }}">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit"
                                                        class="btn btn-sm btn-danger mr-2">DELETE</button>
                                                </form>
                                            </div>

                                        </td>

                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="10" class="text-center">Data tidak ada</td>
                                </tr>
                            @endif
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
