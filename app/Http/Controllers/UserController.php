<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\Wilayah;
use App\Models\Koperasi;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\File;


class UserController extends Controller
{
  public function index(){
    return view('User/index');
  }

  public function detail($id)
  {
    $wilayah = Wilayah::with(['koperasi'])->findorFail($id);
    return view('User/detail',[
      "title"=>"List Koperasi",
      "data" => $wilayah
    ]);
  }
}