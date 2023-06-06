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
                            <h5 class="m-b-10">Edit Koperasi</h5>
                            <p class="m-b-0">Lengkapi Arsip Pendirian dan Arsip Perubahan Anggaran Dasar yang terbaru untuk
                                Edit Koperasi</p>
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
                                        <h3>Edit Koperasi dan UKM</h3>
                                    </div>
                                    <div class="card-block">

                                        <form method="POST" action="/koperasi/{{ $data->id }}"
                                            enctype="multipart/form-data">
                                            @csrf
                                            @method('PUT')
                                            <input type="hidden" name="oldpad1" id="oldpad1"
                                                value="{{ $data->arsip_pad_1 }}">
                                            <input type="hidden" name="oldpad2" id="oldpad2"
                                                value="{{ $data->arsip_pad_2 }}">
                                            <input type="hidden" name="oldpad3" id="oldpad3"
                                                value="{{ $data->arsip_pad_3 }}">
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Nama</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="nama" id="nama"
                                                        value="{{ $data->nama_koperasi }}" required>
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
