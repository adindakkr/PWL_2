<?php

namespace App\Http\Controllers;

use App\Models\MahasiswaModel;
use Illuminate\Http\Request;
use App\Models\Kelas;
use Symfony\Contracts\Service\Attribute\Required;

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
            'Kelas' => 'required',
        ]);

        $mhs = new MahasiswaModel();
        $mhs->nim = $request->get('nim');
        $mhs->nama = $request->get('nama');
        $mhs->jk = $request->get('jk');
        $mhs->tempat_lahir = $request->get('tempat_lahir');
        $mhs->tanggal_lahir = $request->get('tanggal_lahir');
        $mhs->alamat = $request->get('alamat');
        $mhs->kelas_id = $request->get('Kelas');
        $mhs->hp = $request->get('hp');

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
        return view('mahasiswa.create_mahasiswa', compact('mhs', 'kelas', 'url_form'));
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
        $mhs->kelas_id = $request->get('kelas');
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
}
