<?php

namespace App\Http\Controllers;

use App\Models\pemohon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class pemohonController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pemohon.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pemohon.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Session::flash('nama_permohonan',$request->nama_permohonan);
        Session::flash('tipe_permohonan',$request->tipe_permohonan);
        Session::flash('latar_belakang',$request->latar_belakang);
        Session::flash('tujuan',$request->tujuan);

        $request->validate([
            'nomor_permohonan'=>'required|numeric|unique:pemohon,nomor_permohonan',
            'tipe_permohonan'=>'required',
            'latar_belakang'=>'required',
            'tujuan'=>'required',
        ],[
            'nomor_permohonan.required'=>'akan auto generate',
            'nomor_permohonan.numeric'=>'wajib menggunakan angka',
            'nomor_permohonan.unique'=>'nomor sudah pernah dibuat',
            'tipe_permohonan.required'=>'menggunakan dropdonwn',
            'latar_belakang.required'=>'latar belakang wajib diisi',
            'tujuan.required'=>'tujuan wajib diisi',
        ]);
        $data = [
            'nomor_permohonan'=>$request->nomor_permohonan,
            'tipe_permohonan' =>$request->tipe_permohonan,
            'latar_belakang'=>$request->latar_belakang,
            'tujuan'=>$request->tujuan,
        ];
        pemohon::create($data);
        return redirect()->to('pemohon')->with('success','Permohonan Berhasil Dibuat, silahkan isi data barang yang diajukan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
