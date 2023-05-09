<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa_MataKuliah;
use App\Models\MahasiswaMatakuliah;
use Illuminate\Http\Request;
use App\Models\MahasiswaModel;
use App\Models\Matakuliah;

class MahasiswaMatakuliahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $nilai_mhs = Mahasiswa_MataKuliah::where('mahasiswa_id', $id)->get();
        $mahasiswa = MahasiswaModel::where('id', $id)->first();
        $mahasiswamatakuliah = Mahasiswa_MataKuliah::with('mahasiswa', 'matakuliah')->where('mahasiswa_id',  $id)->get();
        return view('mahasiswa.nilai')
            ->with('mahasiswa', $mahasiswa)
            ->with('mhsmatkul', $mahasiswamatakuliah)
            ->with('nilai', $nilai_mhs);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
