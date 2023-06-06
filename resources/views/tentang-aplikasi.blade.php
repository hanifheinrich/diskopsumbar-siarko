@extends('layouts.index')

@section('konten')
    <div class="pcoded-content">
        <!-- Page-header start -->
        <div class="page-header">
            <div style="flex-direction: row;align-items: center;padding: 20px;" class="card">
                <img src={{ asset('assets/images/LAMBANG-KOPERASI.png') }} width="90PX" />
                <div class="card-body">
                    <h3 style="padding-bottom:10px; color:black;"class="card-title">SISTEM INFORMASI PENGARSIPAN KOPERASI
                        (SIARKO)</h3>
                    <h6 class="card-text">
                        DINAS KOPERASI & UKM PROVINSI SUMATERA BARAT
                    </h6>
                </div>
            </div>
        </div>
        <!-- Page-header end -->
        <!-- Page-header end -->
        <div class="pcoded-inner-content">
            <div class="page-wrapper">
                <!-- Page-body start -->
                <div class="page-body">
                    <!-- Row start -->
                    <div class="row">
                        <!-- Color Open Accordion start -->
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-header-text">Tentang Aplikasi</h5>
                                </div>
                                <div class="card-block accordion-block color-accordion-block">
                                    <div class="color-accordion" id="color-accordion">
                                        <a class="accordion-msg b-none waves-effect waves-light">SIARKO</a>
                                        <div class="accordion-desc">
                                            <h6>
                                                SIARKO merupakan singkatan dari Sistem Informasi Arsip Koperasi yaitu
                                                aplikasi pengarsipan berbasis website yang dibangun menggunakan framework
                                                Laravel 9. Aplikasi ini berfungsi untuk menyimpan dokumen Pendirian dan
                                                Perubahan Anggaran (PAD) dari koperasi yang ada di seluruh Provinsi Sumatera
                                                Barat. Tujuan dibuatnya aplikasi ini yaitu untuk memudahkan masyarakat dalam
                                                mencari dokumen terkait dengan koperasi yang dibutuhkan, serta dapat
                                                mengunduh dokumen tersebut jika ada kepentingan tertentu.
                                            </h6>
                                        </div>
                                        <a class="accordion-msg bg-dark-primary b-none waves-effect waves-light">Main</a>
                                        <div class="accordion-desc">
                                            <h6>
                                                Halaman dasbor menampilkan total kabupaten/kota, koperasi, dokumen
                                                Pendirian, dokumen Perubahan Anggaran Dasar koperasi, serta analisis
                                                pengunjung yang mengakses website ini.
                                            </h6>
                                        </div>
                                        <a class="accordion-msg bg-darkest-primary b-none waves-effect waves-light">Master
                                            Data</a>
                                        <div class="accordion-desc">
                                            <h6>
                                                Terdapat dua submenu yaitu Wilayah dan Koperasi&UKM. Pada menu Wilayah
                                                berisikan daftar Kabupaten/Kota yang ada di Sumatera Barat, terdapat aksi
                                                tambah atau hapus wilayah apabila ada pemekaran kota atau tidak termasuk
                                                lagi ke dalam Provinsi Sumatera Barat. Menu Koperasi&UKM berisikan daftar
                                                Koperasi&UKM yang ada di Provinsi Sumatera Barat berdasarkan dokumen yang
                                                ada, penambahan koperasi dapat dilakukan apabila ada dokumen yang terkait
                                                yaitu Pendirian Koperasi.
                                            </h6>
                                        </div>
                                        <a class="accordion-msg bg-darkest-primary b-none waves-effect waves-light">Lihat
                                            File Pengarsipan</a>
                                        <div class="accordion-desc">
                                            <h6>
                                                Pada menu ini menampilan dokumen Pendirian dan Perubahan Anggaran Dasar(PAD)
                                                berdasarkan Wilayah atau melihat berdasarkan kelompoknya yaitu Arsip
                                                Pendirian dan Arsip PAD.
                                            </h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Color Open Accordion ends -->
                    </div>
                    <!-- Row end -->
                </div>
            </div>
        @endsection

        @section('script')
            <script type="text/javascript" src="assets/js/jquery/jquery.min.js"></script>
            <script type="text/javascript" src="assets/js/jquery-ui/jquery-ui.min.js "></script>
            <script type="text/javascript" src="assets/js/popper.js/popper.min.js"></script>
            <script type="text/javascript" src="assets/js/bootstrap/js/bootstrap.min.js "></script>
            <!-- jquery slimscroll js -->
            {{-- <script type="text/javascript" src="assets/js/jquery-slimscroll/jquery.slimscroll.js "></script> --}}
            <!-- modernizr js -->
            <script type="text/javascript" src="assets/js/SmoothScroll.js"></script>
            <script src="assets/js/jquery.mCustomScrollbar.concat.min.js "></script>
            <!-- waves js -->
            <script src="assets/pages/waves/js/waves.min.js"></script>

            <!-- Accordion js -->
            <script type="text/javascript" src="assets/pages/accordion/accordion.js"></script>
            <!-- Custom js -->
            <script src="assets/js/pcoded.min.js"></script>
            <script src="assets/js/vertical-layout.min.js "></script>
            <script src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
            <script type="text/javascript" src="assets/js/script.js"></script>
        @endsection
