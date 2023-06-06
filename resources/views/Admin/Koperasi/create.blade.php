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
                            <h5 class="m-b-10">Tambah Koperasi</h5>
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
                                        <h3>Tambah Koperasi dan UKM</h3>
                                    </div>
                                    <div class="card-block">

                                        <form method="POST" action="/koperasi" enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Nama Koperasi</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="nama" id="nama"
                                                        placeholder="Masukkan Nama Koperasi dan UKM" required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Wilayah</label>
                                                <div class="col-sm-10">
                                                    <select name="id_kotakab" id="id_kotakab" class="form-control">
                                                        <option value="">Pilih Daerah</option>
                                                        @foreach ($data as $item)
                                                            <option value="{{ $item->id }}">{{ $item->nama }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Arsip Pendirian</label>
                                                <div class="col-sm-10">
                                                    <input type="file" class="form-control" name="arsip_pendirian"
                                                        id="arsip_pendirian" required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Arsip PAD 1</label>
                                                <div class="col-sm-10">
                                                    <input type="file" class="form-control" name="arsip_pad_1"
                                                        id="arsip_pad_1">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Arsip PAD 2</label>
                                                <div class="col-sm-10">
                                                    <input type="file" class="form-control" name="arsip_pad_2"
                                                        id="arsip_pad_2">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Arsip PAD 3</label>
                                                <div class="col-sm-10">
                                                    <input type="file" class="form-control" name="arsip_pad_3"
                                                        id="arsip_pad_3">
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
