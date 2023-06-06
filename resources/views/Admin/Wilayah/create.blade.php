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
                            <h5 class="m-b-10">Tambah Wilayah</h5>
                            <p class="m-b-0">Lengkapi Nama Wilayah dan Logo Wilayah untuk menambahkan Wilayah</p>
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
                                        <h3>Tambah Wilayah</h3>
                                    </div>
                                    <div class="card-block">

                                        <form method="POST" action="/wilayah" enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Nama</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="nama" id="nama"
                                                        placeholder="Masukkan Nama Koperasi dan UKM" required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Gambar/Logo</label>
                                                <div class="col-sm-10">
                                                    <input type="file" class="form-control" name="gambar" id="gambar"
                                                        required>
                                                </div>
                                            </div>
                                            <div class="card-footer">
                                                <!-- button Default -->
                                                <button type="submit"
                                                    class="btn waves-effect waves-light btn-style btn-green"
                                                    style="float: right; margin-left:20px">Tambah</button>
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
