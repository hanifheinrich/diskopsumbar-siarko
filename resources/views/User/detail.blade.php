<!DOCTYPE html>
<html lang="en">

<head>
    <title>{{ $title }}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description"
        content="Mega Able Bootstrap admin template made using Bootstrap 4 and it has huge amount of ready made feature, UI components, pages which completely fulfills any dashboard needs." />
    <meta name="keywords"
        content="bootstrap, bootstrap admin template, admin theme, admin dashboard, dashboard template, admin template, responsive" />
    <meta name="author" content="codedthemes" />
    @include('layouts/partials/style')
</head>

<body>
    <!-- Pre-loader start -->
    @include('layouts/partials/preloader')
    <!-- Pre-loader end -->
    <!-- Container -->
    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">
            <nav class="navbar header-navbar pcoded-header">
                <nav class="navbar navbar-light bg-green">
                    <div class="container-fluid">
                        <img class="mx-auto" src={{ asset('assets/images/siarko2.png') }} alt="">
                    </div>
                </nav>
        </div>
        </nav>
        <div class="pcoded-main-container">
            <div class="pcoded-wrapper">

                <div class="main-body">
                    <div class="page-wrapper">
                        <div style="flex-direction: row;align-items: center;padding: 20px;" class="card">
                            <img src="{{ url('logowilayah') . '/' . $data->gambar }}" width="80px" />
                            <div class="card-body">
                                <h2 style="padding-bottom:10px;"class="card-title">Koperasi {{ $data->nama }}</h2>
                                <h6 class="card-text">
                                    Temukan Arsip Pendirian dan PAD Anda Disini !
                                </h6>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h5>Tabel Koperasi & UKM Sumatera Barat</h5>
                                <span>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolores adipisci
                                    pariatur odit omnis atque architecto ipsa quas neque eveniet cumque.</span>
                            </div>
                            <div class="card-block table-border-style">
                                <div class="table-responsive">
                                    <table id="myTable" class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Koperasi & UKM</th>
                                                <th>Daerah</th>
                                                <th>Arsip Pendirian</th>
                                                <th>Arsip PAD 1</th>
                                                <th>Arsip PAD 2</th>
                                                <th>Arsip PAD 3</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($data->koperasi as $item)
                                                <tr>
                                                    <th scope="row">{{ $loop->iteration }}</th>
                                                    <td> {{ $item->nama_koperasi }} </td>
                                                    <td> {{ $item->wilayah['nama'] }} </td>
                                                    <td>
                                                        <a href="/arsip pendirian/{{ $item->arsip_pendirian }}"
                                                            target="_blank" download=""><button
                                                                class="btn btn-primary">Download</button>
                                                    </td>
                                                    <td>
                                                        @if ($item->arsip_pad_1 != '')
                                                            <a href="/arsip pad 1/{{ $item->arsip_pad_1 }}"
                                                                download=""><button
                                                                    class="btn btn-primary">Download</button></a>
                                                        @elseif($item->arsip_pad_1 == '')
                                                            <button class="btn btn-secondary"disabled>Dokumen tidak
                                                                ada</button>
                                                        @endif
                                                    </td>
                                                    <td>
                                                        @if ($item->arsip_pad_2 != '')
                                                            <a href="/arsip pad 2/{{ $item->arsip_pad_2 }}"
                                                                download=""><button
                                                                    class="btn btn-primary">Download</button></a>
                                                        @elseif($item->arsip_pad_2 == '')
                                                            <button class="btn btn-secondary" disabled>Dokumen tidak
                                                                ada</button>
                                                        @endif
                                                    </td>
                                                    <td>
                                                        @if ($item->arsip_pad_3 != '')
                                                            <a href="/arsip pad 3/{{ $item->arsip_pad_3 }}"
                                                                download=""><button
                                                                    class="btn btn-primary">Download</button></a>
                                                        @elseif($item->arsip_pad_3 == '')
                                                            <button class="btn btn-secondary" disabled>Dokumen tidak
                                                                ada</button>
                                                        @endif
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- Hover table card end -->
                    </div>
                    <div id="styleSelector"> </div>
                </div>
            </div>
        </div>
        <!-- Isi Konten End -->
    </div>
    </div>
    </div>
    </div>

    <footer class="text-center text-white fixed-bottom" style="background-color: #036D19;">
        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            Sistem Informasi Pengarsipan Dinas Koperasi & UKM
            <b>Created by Mahasiswa KP Sistem Informasi Unand</b>
            © {{ date('Y') }}
        </div>
        <!-- Copyright -->
    </footer>

    @include('layouts/partials/script')
</body>

</html>
