<?php

namespace App\Http\Controllers;

use App\Models\MahasiswaModel;
use Illuminate\Http\Request;
use App\Models\Kelas;
use App\Models\Mahasiswa_MataKuliah;
use Barryvdh\DomPDF\Facade\Pdf as FacadePdf;
use Illuminate\Support\Facades\Storage;
use Symfony\Contracts\Service\Attribute\Required;
use PDF;

class MahasiswaModelController extends Controller
{
    public function index()
    {
        $mahasiswa = MahasiswaModel::with('kelas')->get();
        $paginate = MahasiswaModel::orderBy('id', 'asc')->paginate(3);
        return view('mahasiswa.mahasiswa', ['mhs' => $mahasiswa, 'paginate' => $paginate]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kelas = Kelas::all(); //mendapatkan data dari tabel kelas
        return view('mahasiswa.create_mahasiswa', ['kelas' => $kelas, 'url_form' => route('mahasiswa.store')]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validasi
        $request->validate([
            'nim' => 'required|string|max:10|unique:mahasiswa_models,nim',
            'nama' => 'required|string|max:50',
            'jk' => 'required|in:l,p',
            'tempat_lahir' => 'required|string|max:50',
            'tanggal_lahir' => 'required|date',
            'alamat' => 'required|string|max:255',
            'hp' => 'required|digits_between:6,15',
            'kelas' => 'required',
        ]);

        //Menyimpan foto
        $foto_name = null;
        if ($request->file('image')) {
            $foto = $request->file('image');
            $foto_name = time() . '_' . $foto->getClientOriginalName();
            $foto_name = $request->file('image')->store('images', 'public');
        }

        $mhs = new MahasiswaModel();
        $mhs->nim = $request->get('nim');
        $mhs->nama = $request->get('nama');
        $mhs->jk = $request->get('jk');
        $mhs->tempat_lahir = $request->get('tempat_lahir');
        $mhs->tanggal_lahir = $request->get('tanggal_lahir');
        $mhs->alamat = $request->get('alamat');
        $mhs->kelas_id = $request->get('kelas');
        $mhs->hp = $request->get('hp');
        $mhs->foto = $request->get('foto');
        $mhs->foto = $foto_name;

        $kelas = new kelas;
        $kelas->id = $request->get('kelas_id');

        //fungsi eloquent untuk menambah data dengan relasi belongsTo
        $mhs->kelas()->associate($kelas);
        $mhs->save();


        //jika data berhasil ditambahkan, akan kembali ke halaman utama
        return redirect('mahasiswa')
            ->with('success', 'Mahasiswa Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $mahasiswa = MahasiswaModel::with('kelas')->where('id', $id)->first();
        return view('mahasiswa.detail', ['mahasiswa' => $mahasiswa]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //menampilkan detail data dengan menemukan berdasarkan NIM Mahasiswa untuk diedit
        $mhs = MahasiswaModel::with('kelas')->where('id', $id)->first();
        $kelas = kelas::all(); //mendapatkan data dari tabel kelas
        $url_form = route('mahasiswa.store') . "/$id";
        return view('mahasiswa.edit', compact('mhs', 'kelas', 'url_form'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nim' => 'required|string|max:10|unique:mahasiswa_models,nim,' . $id,
            'nama' => 'required|string|max:50',
            'jk' => 'required|in:l,p',
            'tempat_lahir' => 'required|string|max:50',
            'tanggal_lahir' => 'required|date',
            'alamat' => 'required|string|max:255',
            'hp' => 'required|digits_between:6,15',
            'kelas' => 'required',
        ]);

        $mhs = MahasiswaModel::find($id);
        $mhs->nim = $request->get('nim');
        $mhs->nama = $request->get('nama');
        $mhs->jk = $request->get('jk');
        $mhs->tempat_lahir = $request->get('tempat_lahir');
        $mhs->tanggal_lahir = $request->get('tanggal_lahir');
        $mhs->alamat = $request->get('alamat');
        $mhs->hp = $request->get('hp');
        $mhs->foto = $request->get('foto');
        $mhs->kelas_id = $request->get('kelas');
        $foto_name = null;
        if ($mhs->foto && file_exists(storage_path('app/public/' . $mhs->foto))) {
            Storage::delete('public/' . $mhs->foto);
        }
        $foto_name = $request->file('image')->store('images', 'public');
        $mhs->foto = $foto_name;

        $mhs->save();

        //jika data berhasil ditambahkan, akan kembali ke halaman utama
        return redirect()->route('mahasiswa.index')
            ->with('success', 'Mahasiswa Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        MahasiswaModel::where('id', '=', $id)->delete();
        return redirect('mahasiswa')
            ->with('success', 'Mahasiswa Berhasil Dihapus');
    }
    public function cetak_pdf($id)
    {
        $mahasiswa = MahasiswaModel::find($id);
        $Mahasiswa_MataKuliah = Mahasiswa_MataKuliah::with('mahasiswa', 'matakuliah')->where('mahasiswa_id',  $id)->get();
        $pdf = FacadePdf::loadview('mahasiswa.nilai_pdf', ['mahasiswa' => $mahasiswa, 'mhsmatkul' => $Mahasiswa_MataKuliah]);
        return $pdf->stream();
    }
}
