<?php

namespace App\Http\Controllers;

use App\Models\HobiModel;
use Illuminate\Http\Request;

class HobiModelController extends Controller
{
    public function index()
    {
        $hobis = HobiModel::all();
        return view('hobi.hobi')
            ->with('hobi', $hobis);
    }

    public function create()
    {
        return view('hobi.create_hobi')
            ->with('url_form', url('/hobi'));
    }

    public function store(Request $request)
    {
        //validasi
        $request->validate([
            'id' => 'required|string|max:10|unique:hobi,id,',
            'jenis' => 'required|string|max:50',
            'nama_hobi' => 'required|',
            'status' => 'required|',
        ]);

        $data = HobiModel::create($request->except(['_token']));
        //jika data berhasil ditambahkan, akan kembali ke halaman utama
        return redirect('hobi')
            ->with('success', 'Data Hobi Berhasil Ditambahkan');
    }

    public function show(HobiModel $hobis)
    {
        //
    }

    public function edit($id)
    {
        $hobi = HobiModel::find($id);
        return view('hobi.create_hobi')
            ->with('hobi', $hobi)
            ->with('url_form', url('/hobi/' . $id));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'id' => 'required|string|max:10|unique:hobi,id,' . $id,
            'jenis' => 'required|string|max:50',
            'nama_hobi' => 'required|',
            'status' => 'required|',
        ]);

        $data = HobiModel::where('id', '=', $id)->update($request->except(['_token', '_method', 'submit']));
        return redirect('hobi')
            ->with('success', 'Data Hobi Berhasil Diiedit');
    }

    public function destroy($id)
    {
        HobiModel::where('id', '=', $id)->delete();
        return redirect('hobi')
            ->with('success', 'Data Hobi Berhasil Dihapus');
    }
}
