<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Profile;
use App\Models\Wilayah;
use App\Models\Koperasi;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller

//Main Menu
{
    public function dashboard(){
        $jumlahKoperasi = Koperasi::count();
        $jumlahWilayah = Wilayah::count();
        return view('dashboard',[
        "title" => "Dashboard",
        'jumlahKoperasi' => $jumlahKoperasi,
        'jumlahWilayah' => $jumlahWilayah
    ]);
  }

  public function profile($id){
    $profile = Profile::findorFail($id);
    return view('/Admin/profile/profile',[
        "title" => "Profile",
        'data' => $profile
      ]);
  }

  public function updateprofile(Request $request, $id)
  {      
      $data = [
          'email' => $request-> input('email'),
          'alamat'=> $request-> input('alamat'),
          'no_telepon'=> $request-> input('telepon'),
      ];


      
      User::where('id',$id)->update($data);
      return redirect('/profil/1')->with('update','Data berhasil diperbaharui');
  }

  public function updatepassword(Request $request)
  {      
     $request->validate([
      'current_password' =>['required'],
      'password' =>['required','confirmed'],
     ]);  

     if(Hash::check($request->current_password, auth()->user()->password)){
       auth()->user()->update(['password'=> Hash::make($request->password)]);
       return redirect('/profil/1')->with('message','Password Berhasil Berubah');
     }
     else{
      return redirect('/profil/1')->with('eror','Password saat ini yang anda masukkan salah');
     }
  }

  public function index()
  {
    $wilayah = Wilayah::get();
    return view('master-koperasi',[
        "title" => "Koperasi & UKM",
        'dataWilayah' => $wilayah
      ]);
  }

  public function arsippendirian(){
    $koperasi = Koperasi::get();
    return view('Admin/Viewby/arsip-pendirian',[
        "title" => "Arsip Pendirian Koperasi & UKM",
        'data' => $koperasi
    ]);
  }

  public function arsippad(){
    $koperasi = Koperasi::get();
    return view('Admin/Viewby/arsip-pad',[
        "title" => "Arsip Perubahan Anggaran Dasar Koperasi & UKM",
        'data' => $koperasi
    ]);
  }

  public function arsipwilayah(){
    $wilayah = Wilayah::get();
    return view('Admin/Viewby/arsip-wilayah',[
        "title" => "Arsip Koperasi & UKM",
        'dataWilayah' => $wilayah
      ]);
  }

//Detail-Activity

  public function show($id)
  {
    $wilayah = Wilayah::with(['koperasi'])->findorFail($id);
    return view('Admin/Viewby/arsip-wilayah-detail',[
        "title" => "Detail Koperasi & UKM",
        'Wilayah'=>$wilayah
      ]);
  }

  public function create($id)
  {
    $wilayah = Wilayah::findorFail($id);
    // dd($wilayah);
    return view('tambah-koperasi',[
        "title" => "Detail Koperasi & UKM",
        'Wilayah'=>$wilayah
      ]);
  }

  public function store(Request $request)
  {
     $koperasi=Koperasi::create($request->all());

     return redirect('master-data');
  }

  public function about(){
    return view('tentang-aplikasi',[
        "title" => "Tentang Aplikasi"
    ]);
  }


}
