@extends('layout.template')
@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center align-items-center">
            <div class="card" style="width: 24rem;">
                <div class="card-header">
                    Detail Mahasiswa
                </div>
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><b>ID: </b>{{ $mahasiswa->id }}</li>
                        <li class="list-group-item"><b>Nim: </b>{{ $mahasiswa->nim }}</li>
                        <li class="list-group-item"><b>Nama: </b>{{ $mahasiswa->nama }}</li>
                        {{-- <li class="list-group-item"><b>Kelas: </b>{{ $mahasiswa->kelas->nama_kelas }}</li> --}}
                        <li class="list-group-item"><b>JK: </b>{{ $mahasiswa->jk }}</li>
                        <li class="list-group-item"><b>Tempat Lahir: </b>{{ $mahasiswa->tempat_lahir }}</li>
                        <li class="list-group-item"><b>Tanggal Lahir: </b>{{ $mahasiswa->tanggal_lahir }}</li>
                        <li class="list-group-item"><b>HP: </b>{{ $mahasiswa->hp }}</li>
                        {{-- <li class="list-group-item"><b>Foto:</b><br>
                            @if ($mahasiswa->foto)
                                <img style="max-width: 100px;max-height:100px"
                                    src="{{ url('storage') . '/' . $mahasiswa->foto }}" />
                            @else
                                Foto tidak tersedia
                            @endif
                        </li> --}}
                    </ul>
                </div>
                <a class="btn btn-success mt-3" href="{{ route('mahasiswa.index') }}">Kembali</a>
            </div>
        </div>
    </div>
@endsection
