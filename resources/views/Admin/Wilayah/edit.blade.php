@extends('layouts.index')

@section('konten')
    <!-- Isi Page-header Disini -->
    <div class="pcoded-content">
        <!-- Page-header start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Edit Wilayah</h5>
                            <p class="m-b-0">Lengkapi Arsip Pendirian dan Arsip Perubahan Anggaran Dasar untuk menambahkan
                                Koperasi</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page-header end -->
        <div class="pcoded-inner-content">
            <!-- Main-body start -->
            <div class="main-body">
                <div class="page-wrapper">
                    <!-- Page-body start -->
                    <div class="page-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <!-- Basic Form Inputs card start -->
                                <div class="card">
                                    <div class="card-header">
                                        <h3>Edit Wilayah Kota atau Kabupaten</h3>
                                    </div>
                                    <div class="card-block">

                                        <form method="POST" action="/wilayah/{{ $data->id }}"
                                            enctype="multipart/form-data">
                                            @csrf
                                            @method('PUT')
                                            <input type="hidden" name="oldGambar" id="oldGambar"
                                                value="{{ $data->gambar }}">
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Nama</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="nama" id="nama"
                                                        value="{{ $data->nama }}" required>
                                                </div>
                                            </div>
                                            @if ($data->gambar)
                                                <div>
                                                    <div class="mb-5">
                                                        <img style="maxwidth:200px;max-height:200px;"src="{{ url('logowilayah') . '/' . $data->gambar }}"
                                                            alt="">
                                                    </div>
                                                </div>
                                            @endif
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Gambar/Logo</label>
                                                <div class="col-sm-10">
                                                    <input type="file" class="form-control" name="gambar" id="gambar"
                                                        value="{{ old('gambar') }}">
                                                </div>
                                            </div>
                                            <div class="card-footer">
                                                <!-- button Default -->
                                                <button type="submit"
                                                    class="btn waves-effect waves-light btn-style btn-green"
                                                    style="float: right; margin-left:20px">Update</button>
                                                <button type="reset"
                                                    class="btn waves-effect waves-light btn-style btn-danger"
                                                    style="float: right">Batal</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Basic Form Inputs card end -->
                    </div>
                    <!-- Page-body end -->
                </div>
                <div id="styleSelector"> </div>
            </div>
        </div>
    </div>
@endsection
