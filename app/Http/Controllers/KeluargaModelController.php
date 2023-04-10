<?php

namespace App\Http\Controllers;

use App\Models\KeluargaModel;
use Illuminate\Http\Request;

class KeluargaModelController extends Controller
{
    public function index()
    {
        $keluarga = KeluargaModel::all();
        return view('keluarga.keluarga')
            ->with('kel', $keluarga);
    }

    public function create()
    {
        return view('keluarga.create_keluarga')
            ->with('url_form', url('/keluarga'));
    }

    public function store(Request $request)
    {
        //validasi
        $request->validate([
            'id' => 'required|string|max:10|unique:keluarga,id,',
            'nama' => 'required|string|max:50',
            'peran' => 'required|',
            'tgl_lahir' => 'required|date',
            'peran' => 'required|string|max:50',
            'pekerjaan' => 'required|string|max:100',
        ]);

        $data = KeluargaModel::create($request->except(['_token']));
        //jika data berhasil ditambahkan, akan kembali ke halaman utama
        return redirect('keluarga')
            ->with('success', 'Data Keluarga Berhasil Ditambahkan');
    }

    public function show(KeluargaModel $keluarga)
    {
        //
    }

    public function edit($id)
    {
        $keluarga = KeluargaModel::find($id);
        return view('keluarga.create_keluarga')
            ->with('kel', $keluarga)
            ->with('url_form', url('/keluarga/' . $id));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'id' => 'required|string|max:10|unique:keluarga,id,' . $id,
            'nama' => 'required|string|max:50',
            'peran' => 'required|',
            'tgl_lahir' => 'required|date',
            'peran' => 'required|string|max:50',
            'pekerjaan' => 'required|string|max:100',
        ]);

        $data = KeluargaModel::where('id', '=', $id)->update($request->except(['_token', '_method', 'submit']));
        return redirect('keluarga')
            ->with('success', 'Data Keluarga Berhasil Diiedit');
    }

    public function destroy($id)
    {
        KeluargaModel::where('id', '=', $id)->delete();
        return redirect('keluarga')
            ->with('success', 'Data Keluarga Berhasil Dihapus');
    }
}
