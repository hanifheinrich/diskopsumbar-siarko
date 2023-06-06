@extends('layouts.index') @section('konten')
    <!-- Isi Page-header Disini -->
    <div class="pcoded-content">
        <!-- Page-header start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Dashboard</h5>
                            <p class="m-b-0">Halo {{ Auth::user()->name }}! Welcome to Sistem Informasi Pengarsipan Dinas
                                Koperasi & UKM Provinsi Sumatera Barat</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <ul class="breadcrumb-title">
                            <li class="breadcrumb-item">
                                <a href="index.html"> <i class="fa fa-home"></i> </a>
                            </li>
                            <li class="breadcrumb-item"><a href="#!">Dashboard</a>
                            </li>
                        </ul>
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
                            <!-- task, page, download counter  start -->
                            <div class="col-xl-3 col-md-6">
                                <div class="card">
                                    <div class="card-block">
                                        <div class="row align-items-center">
                                            <div class="col-8">
                                                <h4 class="text-c-purple">{{ $jumlahWilayah }}</h4>
                                                <h6 class="text-muted m-b-0">Total Kota Kabupaten</h6>
                                            </div>
                                            <div class="col-4 text-right">
                                                <i class="fa fa-file-text-o f-28"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer bg-c-purple">
                                        <div class="row align-items-center">
                                            <div class="col-9">
                                                <p class="text-white m-b-0"></p>
                                            </div>
                                            <div class="col-3 text-right">
                                                {{-- <i class="fa fa-line-chart text-white f-16"></i> --}}
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card">
                                    <div class="card-block">
                                        <div class="row align-items-center">
                                            <div class="col-8">
                                                <h4 class="text-c-green">{{ $jumlahKoperasi }}</h4>
                                                <h6 class="text-muted m-b-0">Total Koperasi</h6>
                                            </div>
                                            <div class="col-4 text-right">
                                                <i class="fa fa-file-text-o f-28"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer bg-c-green">
                                        <div class="row align-items-center">
                                            <div class="col-9">
                                                {{-- <p class="text-white m-b-0">% change</p> --}}
                                            </div>
                                            <div class="col-3 text-right">
                                                {{-- <i class="fa fa-line-chart text-white f-16"></i> --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card">
                                    <div class="card-block">
                                        <div class="row align-items-center">
                                            <div class="col-8">
                                                <h4 class="text-c-red">{{ $jumlahKoperasi }}</h4>
                                                <h6 class="text-muted m-b-0">Total Arsip Pendirian</h6>
                                            </div>
                                            <div class="col-4 text-right">
                                                <i class="fa fa-file-text-o f-28"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer bg-c-red">
                                        <div class="row align-items-center">
                                            <div class="col-9">
                                                {{-- <p class="text-white m-b-0">% change</p> --}}
                                            </div>
                                            <div class="col-3 text-right">
                                                {{-- <i class="fa fa-line-chart text-white f-16"></i> --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card">
                                    <div class="card-block">
                                        <div class="row align-items-center">
                                            <div class="col-8">
                                                <h4 class="text-c-blue">500</h4>
                                                <h6 class="text-muted m-b-0">Total Arsip PAD</h6>
                                            </div>
                                            <div class="col-4 text-right">
                                                <i class="fa fa-file-text-o f-28"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer bg-c-blue">
                                        <div class="row align-items-center">
                                            <div class="col-9">
                                                {{-- <p class="text-white m-b-0">% change</p> --}}
                                            </div>
                                            <div class="col-3 text-right">
                                                {{-- <i class="fa fa-line-chart text-white f-16"></i> --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- task, page, download counter  end -->

                            <!--  sale analytics start -->
                            <div class="col col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h5>View Analytics</h5>
                                        <span class="text-muted">Grafik jumlah pengunjung website dalam satuan waktu</span>
                                        <div class="card-header-right">
                                            <ul class="list-unstyled card-option">
                                                <li><i class="fa fa fa-wrench open-card-option"></i></li>
                                                <li><i class="fa fa-window-maximize full-card"></i></li>
                                                <li><i class="fa fa-minus minimize-card"></i></li>
                                                <li><i class="fa fa-refresh reload-card"></i></li>
                                                <li><i class="fa fa-trash close-card"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="card-block">
                                        <div id="sales-analytics" style="height: 400px;"></div>
                                    </div>
                                </div>
                            </div>
                            <!--  sale analytics end -->
                        </div>
                    </div>
                    <!-- Page-body end -->
                </div>
                <div id="styleSelector"> </div>
            </div>
        </div>
    </div>
@endsection

@section('footer')
@endsection
