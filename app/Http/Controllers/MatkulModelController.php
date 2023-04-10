<?php

namespace App\Http\Controllers;

use App\Models\MatkulModel;
use Illuminate\Http\Request;

class MatkulModelController extends Controller
{
    public function index()
    {
        $matkul = MatkulModel::all();
        return view('matkul.matkul')
            ->with('matkul', $matkul);
    }

    public function create()
    {
        return view('matkul.create_matkul')
            ->with('url_form', url('/matkul'));
    }

    public function store(Request $request)
    {
        //validasi
        $request->validate([
            'id' => 'required|string|max:10|unique:matkul,id,',
            'nama_matkul' => 'required|string|max:50',
            'dosen' => 'required|string|max:50',
            'sks' => 'required|string|max:50',
        ]);

        $data = MatkulModel::create($request->except(['_token']));
        //jika data berhasil ditambahkan, akan kembali ke halaman utama
        return redirect('matkul')
            ->with('success', 'Data Matkul Berhasil Ditambahkan');
    }

    public function show(MatkulModel $matkul)
    {
        //
    }

    public function edit($id)
    {
        $matkul = MatkulModel::find($id);
        return view('matkul.create_matkul')
            ->with('matkul', $matkul)
            ->with('url_form', url('/matkul/' . $matkul->$id));
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'id' => 'required|string|max:10|unique:matkul,id,' . $id,
            'nama_matkul' => 'required|string|max:50',
            'dosen' => 'required|string|max:50',
            'sks' => 'required|string|max:50',
        ]);

        $data = MatkulModel::where('id', '=', $id)->update($request->except(['_token', '_method', 'submit']));
        return redirect('matkul')
            ->with('success', 'Data Matkul Berhasil Diiedit');
    }

    public function destroy($id)
    {
        MatkulModel::where('id', '=', $id)->delete();
        return redirect('matkul')
            ->with('success', 'Data Matkul Berhasil Dihapus');
    }
}
