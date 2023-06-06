@extends('layouts.index')

@section('konten')
    <div class="pcoded-content">
        <!-- Page-header start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Daftar Kota dan Kabupaten</h5>
                            <p class="m-b-0">Pilih Kota atau Kabupaten terlebih dahulu</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <ul class="breadcrumb-title">
                            <li class="breadcrumb-item">
                                <a href="index.html"> <i class="fa fa-home"></i> </a>
                            </li>
                            <li class="breadcrumb-item"><a href="#!">Daftar Kota & Kabupaten</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page-header end -->
        <div class="pcoded-inner-content">
            <!-- Main-body start -->
            <!-- Hover table card start -->
            <div class="card">
                <div class="card-header">
                    <h5>Tabel Wilayah Sumatera Barat</h5>
                    <span>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolores adipisci pariatur odit omnis
                        atque architecto ipsa quas neque eveniet cumque.</span>
                    <div class="card-header-right">
                        {{-- <button class="btn btn-primary">Tambah Koperasi</button> --}}
                    </div>
                </div>
                <div class="card-block table-border-style">
                    <div class="table-responsive">
                        <table class="table table-hover" id="myTable">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Logo</th>
                                    <th>Nama</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($dataWilayah as $dw)
                                    <tr>
                                        <td scope="row">{{ $loop->iteration }}</td>
                                        <td>
                                            @if ($dw->gambar)
                                                <img style="max-width:100px;max-height:100px;"
                                                    src="{{ url('logowilayah') . '/' . $dw->gambar }}" />
                                            @endif
                                        </td>
                                        <td>{{ $dw->nama }}</td>
                                        <td><a class="btn btn-primary"
                                                href="/arsip-wilayah-detail/{{ $dw->id }}">Detail</a></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- Hover table card end -->
            <div class="main-body">
                <div class="page-wrapper">
                </div>
                <div id="styleSelector"> </div>
            </div>
        </div>
    </div>
@endsection
