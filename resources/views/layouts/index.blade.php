<!DOCTYPE html>
<html lang="en">

<head>
    <title>{{ $title }}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="Sistem Pengarsipan Dinas Koperasi & UKM Sumbar" />
    <meta name="keywords"
        content="laravel, mysql, arsip, sistem, pengarsipan, pad, pendirian, sumatera barat, dinas, koperasi" />
    <meta name="author" content="Mahasiswa SI20 FTI UNAND" />
    <!-- koperasi icon -->
    <link rel="icon" src={{ asset('/assets/images/koperasi.gif') }}>
    @include('/layouts/partials/style')
</head>

<body>
    <!-- Pre-loader start -->
    @include('layouts/partials/preloader')
    <!-- Pre-loader end -->

    <!-- Container -->
    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">

            <!-- Navbar -->
            @include('layouts/partials/navbar')
            <!-- Navbar End-->

            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">

                    <!-- Sidebar -->
                    @include('layouts/partials/sidebar')
                    <!-- Sidebar End -->

                    <!-- Isi Konten -->
                    @yield('konten')
                    <!-- Isi Konten End -->
                </div>
            </div>
        </div>
    </div>

    @include('layouts/partials/script')
</body>

</html>
