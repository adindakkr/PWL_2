<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Kartu Hasil Studi (KHS)</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .container {
            margin: 50px auto;
            max-width: 800px;
        }

        h1 {
            text-align: center;
            margin-bottom: 30px;
        }

        ul li {
            list-style: none;
            margin-bottom: 10px;
        }

        table {
            border-collapse: collapse;
            margin-top: 30px;
            width: 100%;
        }

        table th,
        table td {
            border: 1px solid black;
            padding: 10px;
            text-align: left;
        }

        table th {
            background-color: #dddddd;
        }
    </style>
</head>

<body>

    <!-- Default box -->
    <div class="card">
        <div class="col-sm-12 text-center"><br>
            <h2><strong>JURUSAN TEKNOLOGI INFORMASI - POLITEKNIK NEGERI MALANG</strong></h2>
            <BR>
            <h3><strong>KARTU HASIL STUDI (KHS)</strong></h3>
        </div>
        <br>
        <div class="card-header">
            <div class="card-title">
                <div> Nama : {{ $mahasiswa->nama }} </div>
                <div> NIM : {{ $mahasiswa->nim }} </div>
                <div> Kelas: {{ $mahasiswa->kelas->nama_kelas }} </div>
            </div>

            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                    <i class="fas fa-times"></i>
                </button>
            </div>
        </div>
        <div class="card-body table-responsive p-0">
            <table class="table table-hover text-nowrap">
                <thead>
                    <tr>
                        <th>Mata Kuliah</th>
                        <th>SKS</th>
                        <th>Semester</th>
                        <th>Nilai</th>
                    </tr>
                </thead>
                <tbody>
                    @if ($mhsmatkul->count() > 0)
                        @foreach ($mhsmatkul as $m)
                            <tr>
                                <td>{{ $m->matakuliah->nama_matkul }}</td>
                                <td>{{ $m->matakuliah->sks }}</td>
                                <td>{{ $m->matakuliah->semester }}</td>
                                <td>{{ $m->nilai }}</td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="4" class="text-center">
                                Data Tidak ada
                            </td>
                        </tr>
                    @endif
            </table>
        </div>
</body>
