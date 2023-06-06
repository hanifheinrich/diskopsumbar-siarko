@extends('layouts.index')

@section('konten')
    <div class="pcoded-content">
        <!-- Page-header start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Profil</h5>
                            <p class="m-b-0">Dinas Koperasi & UKM Provinsi Sumatera Barat</p>
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
            <div class="col col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="container px-4">
                            <div class="row gx-5">
                                <div class="col">
                                    <img src={{ asset('assets/images/LAMBANG-KOPERASI.png') }} width="200px">
                                </div>
                                <div class="col">
                                    <h5>Motto :</h5>
                                    <br>
                                    <p>“Kami siap berubah”</p>
                                    <br>
                                    <h5>Visi :</h5>
                                    <br>
                                    <p>Mewujudkan Koperasi dan UMKM yang Tangguh, Berdaya Saing Tinggi, Berorientasi Pasar
                                        dan Berbasis Sumber Daya Lokal</p>
                                </div>
                                <div class="col">
                                    <h5>Misi :</h5>
                                    <ol type="1">
                                        <li>Meningkatkan kualitas kelembagaan Koperasi dan kesadaran masyarakat dalm
                                            berkoperasi.</li>
                                        <li>Meningkatkan kapasitas Koperasi untuk mengelola potensi ekonomi serta usaha
                                            simpan pinjam.</li>
                                        <li>Mengembangkan iklim usaha yang kondusif dan mendorong peningkatan daya saing
                                            produk-produk UMKM.</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="container px-4">
                            <div class="row gx-5" style="margin-top: 20px;">
                                <form method="" action="">
                                    {{-- @csrf --}}
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">Email:</label>
                                        <div class="col-sm-6">
                                            <input type="text" size="100" class="form-control"
                                                value="{{ Auth::user()->email }}" readonly>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">Alamat:</label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" value="{{ Auth::user()->alamat }}"
                                                readonly>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">No Telepon:</label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control"
                                                value="{{ Auth::user()->no_telepon }}" readonly>
                                        </div>
                                    </div>
                                </form>

                                <div class="container">
                                    <button type="button" class="btn btn-info btn-style" data-toggle="modal"
                                        data-target="#contohModal">Edit Profil</button>
                                    <div class="modal fade" id="contohModal" role="dialog" arialabelledby="modalLabel"
                                        aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Edit Profil</h4>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>

                                                <div class="modal-body">
                                                    <form method="POST" action="/profil-edit/{{ $data->id }}">
                                                        @csrf
                                                        <div class="form-group">
                                                            <label>Email</label>
                                                            <input type="email" name="email" id="email"
                                                                value="{{ Auth::user()->email }}" class="form-control">
                                                        </div>

                                                        <div class="form-group">
                                                            <label>Alamat</label>
                                                            <input type="text" name="alamat" id="alamat"
                                                                value="{{ Auth::user()->alamat }}" class="form-control">
                                                        </div>

                                                        <div class="form-group">
                                                            <label>Nomor Telepon</label>
                                                            <input type="notelepon" name="telepon" id="telepon"
                                                                value="{{ Auth::user()->no_telepon }}" class="form-control">
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="submit" class="btn btn-primary">SIMPAN</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <button type="button" class="btn btn-success btn-style" data-toggle="modal"
                                        data-target="#modal">Edit Password</button>
                                    <div class="modal fade" id="modal" role="dialog" arialabelledby="modalLabel"
                                        aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Edit Password</h4>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="POST" action="/password-edit">
                                                        @csrf
                                                        <div class="form-group">
                                                            <label>Masukkan Password Saat Ini</label>
                                                            <input type="password" name="current_password"
                                                                id="current_password" class="form-control" required>
                                                        </div>

                                                        <div class="form-group">
                                                            <label>Masukkan Password Baru</label>
                                                            <input type="password" name="password" id="password"
                                                                class="form-control" required>
                                                        </div>

                                                        <div class="form-group">
                                                            <label>Konfirmasi Password Baru</label>
                                                            <input type="password" name="password_confirmation"
                                                                id="password_confirmation" class="form-control" required>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="submit" class="btn btn-primary">SIMPAN</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endsection

        @section('script')
            <script>
                @if (Session::has('message'))
                    toastr.success('Password berhasil diperbaharui', 'Success')
                @endif

                @if (Session::has('eror'))
                    toastr.error('Current Password anda salah', 'Eror')
                @endif

                @if (Session::has('update'))
                    toastr.success('Data berhasil diperbaharui', 'Update')
                @endif
            </script>
        @endsection
