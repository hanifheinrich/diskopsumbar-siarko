@extends('layouts.index')

@section('konten')
    <div class="pcoded-content">
        <!-- Page-header start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Arsip Perubahan Anggaran Dasar</h5>
                            <p class="m-b-0">Temukan file arsip perubahan anggaran dasar secara cepat disini</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <ul class="breadcrumb-title">
                            <li class="breadcrumb-item">
                                <a href="index.html"> <i class="fa fa-home"></i> </a>
                            </li>
                            <li class="breadcrumb-item"><a href="#!">Arsip PAD</a>
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
                    <h5>Tabel Arsip Perubahan Anggaran Dasar</h5>
                    <div class="card-header-right">
                    </div>
                </div>
                <div class="card-block table-border-style">
                    <div class="table-responsive">
                        <table id="myTable" class="table table-hover">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Koperasi dan UKM</th>
                                    <th>Kabupaten/Kota</th>
                                    <th>PAD 1</th>
                                    <th>PAD 2</th>
                                    <th>PAD 3</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $item)
                                    <tr>
                                        <th scope="row">{{ $loop->iteration }}</th>
                                        <td>{{ $item->nama_koperasi }}</td>
                                        <td>{{ $item->wilayah['nama'] }}</td>
                                        <td>
                                            @if ($item->arsip_pad_1 != '')
                                                <a href="arsip pad 1/{{ $item->arsip_pad_1 }}" download=""><button
                                                        class="btn btn-primary">Download</button></a>
                                            @elseif($item->arsip_pad_1 == '')
                                                <button class="btn btn-secondary"disabled>Dokumen tidak ada</button>
                                            @endif
                                        </td>
                                        <td>
                                            @if ($item->arsip_pad_2 != '')
                                                <a href="arsip pad 2/{{ $item->arsip_pad_2 }}" download=""><button
                                                        class="btn btn-primary">Download</button></a>
                                            @elseif($item->arsip_pad_2 == '')
                                                <button class="btn btn-secondary" disabled>Dokumen tidak ada</button>
                                            @endif
                                        </td>
                                        <td>
                                            @if ($item->arsip_pad_3 != '')
                                                <a href="arsip pad 3/{{ $item->arsip_pad_3 }}" download=""><button
                                                        class="btn btn-primary">Download</button></a>
                                            @elseif($item->arsip_pad_3 == '')
                                                <button class="btn btn-secondary" disabled>Dokumen tidak ada</button>
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
            <div class="main-body">
                <div class="page-wrapper">
                </div>
                <div id="styleSelector"> </div>
            </div>
        </div>
    </div>
@endsection
