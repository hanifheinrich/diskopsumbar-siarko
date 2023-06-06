<?php

namespace App\Http\Controllers;

use App\Models\Wilayah;
use App\Models\Koperasi;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class KoperasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $koperasi = Koperasi::get();
        return view('/Admin/Koperasi/index',[
          "title" => "Koperasi & UKM",
          "data" => $koperasi
        ]); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $wilayah = Wilayah::get();
        return view('/Admin/Koperasi/create',[
            "title" => "Tambah koperasi",
            "data" => $wilayah
          ]); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nama_koperasi = $request->nama;
        $id_kotakab = $request->id_kotakab;
        $arsip_pendirian = $request->arsip_pendirian;
        $arsip_pad_1 = $request->arsip_pad_1;
        $arsip_pad_2 = $request->arsip_pad_2;
        $arsip_pad_3 = $request->arsip_pad_3;

        $arsip_pendirian_file = $request->file('arsip_pendirian');
        $arsip_pendirian_ekstensi = $arsip_pendirian_file->extension();
        $arsip_pendirian_nama = Str::slug($arsip_pendirian_file->getClientOriginalName()).".".$arsip_pendirian_ekstensi;
        $arsip_pendirian_file->move(public_path('arsip pendirian'),$arsip_pendirian_nama);
        
        if($request->hasFile('arsip_pad_1')){
            $arsip_pad_1_file = $request->file('arsip_pad_1');
            $arsip_pad_1_ekstensi = $arsip_pad_1_file->extension();
            $arsip_pad_1_nama = Str::slug($arsip_pad_1_file->getClientOriginalName()).".".$arsip_pad_1_ekstensi;
            $arsip_pad_1_file->move(public_path('arsip pad 1'),$arsip_pad_1_nama);
         }else{
            $arsip_pad_1_nama = '';
         }
         
         if($request->hasFile('arsip_pad_2')){
            $arsip_pad_2_file = $request->file('arsip_pad_2');
            $arsip_pad_2_ekstensi = $arsip_pad_2_file->extension();
            $arsip_pad_2_nama = Str::slug($arsip_pad_2_file->getClientOriginalName()).".".$arsip_pad_2_ekstensi;
            $arsip_pad_2_file->move(public_path('arsip pad 2'),$arsip_pad_2_nama);
         }else{
            $arsip_pad_2_nama = '';
         }
         
         if($request->hasFile('arsip_pad_3')){
            $arsip_pad_3_file = $request->file('arsip_pad_3');
            $arsip_pad_3_ekstensi = $arsip_pad_3_file->extension();
            $arsip_pad_3_nama = Str::slug($arsip_pad_3_file->getClientOriginalName()).".".$arsip_pad_3_ekstensi;
            $arsip_pad_3_file->move(public_path('arsip pad 3'),$arsip_pad_3_nama);
         }else{
            $arsip_pad_3_nama = '';
         }

        $koperasi = new Koperasi;
        $koperasi->nama_koperasi = $nama_koperasi;
        $koperasi->id_kotakab = $id_kotakab; 
        $koperasi->arsip_pendirian = $arsip_pendirian_nama;
        $koperasi->arsip_pad_1 = $arsip_pad_1_nama;
        $koperasi->arsip_pad_2 = $arsip_pad_2_nama; 
        $koperasi->arsip_pad_3 = $arsip_pad_3_nama;
        $koperasi->SAVE();

        return redirect('koperasi')->with('added','Data berhasil disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $koperasi = Koperasi::where('id',$id)->first();
        return view('/Admin/Koperasi/edit',[
            "title" => "Edit Koperasi",
            "data" => $koperasi
          ]);  
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
        
        if($request->hasFile('arsip_pad_1')){
            File::delete(public_path('arsip pad 1').'/'.$request->oldpad1);

            $arsip_pad_1_file = $request->file('arsip_pad_1');
            $arsip_pad_1_ekstensi = $arsip_pad_1_file->extension();
            $arsip_pad_1_nama = Str::slug($arsip_pad_1_file->getClientOriginalName()).".".$arsip_pad_1_ekstensi;
            $arsip_pad_1_file->move(public_path('arsip pad 1'),$arsip_pad_1_nama);
         }else{
            $arsip_pad_1_nama = $request-> oldpad1;
         }
         
         if($request->hasFile('arsip_pad_2')){
            File::delete(public_path('arsip pad 2').'/'.$request->oldpad2);

            $arsip_pad_2_file = $request->file('arsip_pad_2');
            $arsip_pad_2_ekstensi = $arsip_pad_2_file->extension();
            $arsip_pad_2_nama = Str::slug($arsip_pad_2_file->getClientOriginalName()).".".$arsip_pad_2_ekstensi;
            $arsip_pad_2_file->move(public_path('arsip pad 2'),$arsip_pad_2_nama);
         }else{
            $arsip_pad_2_nama = $request->oldpad2;
         }
         
         if($request->hasFile('arsip_pad_3')){
            File::delete(public_path('arsip pad 3').'/'.$request->oldpad3);

            $arsip_pad_3_file = $request->file('arsip_pad_3');
            $arsip_pad_3_ekstensi = $arsip_pad_3_file->extension();
            $arsip_pad_3_nama = Str::slug($arsip_pad_3_file->getClientOriginalName()).".".$arsip_pad_3_ekstensi;
            $arsip_pad_3_file->move(public_path('arsip pad 3'),$arsip_pad_3_nama);
         }else{
            $arsip_pad_3_nama = "$request->oldpad3";
         }

         $data=[
            'nama_koperasi' => $request-> input('nama'),
            'arsip_pad_1'=> $arsip_pad_1_nama,
            'arsip_pad_2'=> $arsip_pad_2_nama,
            'arsip_pad_3'=> $arsip_pad_3_nama
         ];

         Koperasi::where('id',$id)->update($data);
         return redirect('koperasi')->with('update','Data berhasil diperbaharui');;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Koperasi::where('id', $id)->first();
        File::delete(public_path('arsip pendirian').'/'.$data->arsip_pendirian);
        File::delete(public_path('arsip pad 1').'/'.$data->arsip_pad_1);
        File::delete(public_path('arsip pad 2').'/'.$data->arsip_pad_2);
        File::delete(public_path('arsip pad 3').'/'.$data->arsip_pad_3);
        koperasi::where('id', $id)->delete();
        return redirect('/koperasi');
    }

    public function deletekoperasi($id)
    {
        $data = Koperasi::where('id', $id)->first();
        File::delete(public_path('arsip pendirian').'/'.$data->arsip_pendirian);
        File::delete(public_path('arsip pad 1').'/'.$data->arsip_pad_1);
        File::delete(public_path('arsip pad 2').'/'.$data->arsip_pad_2);
        File::delete(public_path('arsip pad 3').'/'.$data->arsip_pad_3);
        koperasi::where('id', $id)->delete();
        return redirect('/koperasi')->with('sukses','Data berhasil dihapus');;
    }
}
