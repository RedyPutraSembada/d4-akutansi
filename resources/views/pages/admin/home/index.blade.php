@extends('layouts.admin.app')

@section('content')
    <div class="page-title mb-3">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Mengatur Menu Home</h3>
            </div>
        </div>
    </div>
    <!-- Bagian HERO -->
    <section class="section">
        <div class="row" id="table-head">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Bagian HERO</h4>
                        <a href="{{ route('create-hero') }}" class="btn btn-outline-primary icon-left mt-3">Tambah
                            Bagian</a>
                    </div>
                    <div class="card-content">
                        <!-- table head dark -->
                        <div class="table-responsive">
                            <table class="table mb-0">
                                <thead class="thead-dark text-center">
                                    <tr>
                                        <th>Image Hero</th>
                                        <th>Judul Hero</th>
                                        <th>Sub Judul</th>
                                        <th>SK-Pendirian</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody class="text-center">
                                    @foreach ($heroes as $hero)
                                        <tr>
                                            <td><img src="{{ asset('storage/' . $hero->img_hero) }}" alt="image"
                                                    style="width: 200px;"></td>
                                            <td>{{ $hero->judul_hero }}</td>
                                            <td>{{ $hero->sub_judul }}</td>
                                            <td>{{ $hero->sk_pendirian }}</td>
                                            <td>
                                                <div class="d-flex">
                                                    <a href="{{ route('edit-hero', $hero->id) }}"
                                                        class="btn btn-outline-warning .icon-left me-2"><i
                                                            class="bi bi-pencil-square"></i></a>
                                                    <form
                                                        onsubmit="return confirm('Apakah yakin untuk menghapus data tersebut??');"
                                                        action="{{ route('destroy-hero', $hero->id) }}" method="POST">
                                                        @method('DELETE')
                                                        @csrf
                                                        <button type="submit" class="btn btn-outline-danger .icon-left"><i
                                                                class="bi bi-trash3-fill"></i></button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- HERO end -->

    <!-- Bagian Visi Dan HERO vidio -->
    <section class="section">
        <div class="row" id="table-head">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Bagian Visi Dan HERO vidio</h4>
                        <a href="{{ route('create-visi') }}" class="btn btn-outline-primary icon-left mt-3">Tambah
                            Bagian</a>
                    </div>
                    <div class="card-content">
                        <!-- table head dark -->
                        <div class="table-responsive">
                            <table class="table mb-0">
                                <thead class="thead-dark text-center">
                                    <tr>
                                        <th>VISI</th>
                                        <th>Judul Hero Vidio</th>
                                        <th>Link Youtube Profile</th>
                                        <th>Jumlah Mahasiswa Aktif</th>
                                        <th>Jumlah Reguler</th>
                                        <th>Deskripsi</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody class="text-center">
                                    @foreach ($profils as $profil)
                                        <tr>
                                            <td>{{ $profil->visi }}</td>
                                            <td>{{ $profil->judul_hero_vidio }}</td>
                                            <td>{{ $profil->link_yt_profil }}</td>
                                            <td>Memiliki jumlah {{ $profil->jmlh_mhs_aktif }} mahasiswa aktif</td>
                                            <td>Memiliki {{ $profil->jmlh_reg }} regular kelas</td>
                                            <td>{{ $profil->deskripsi }}</td>
                                            <td>
                                                <div class="d-flex">
                                                    <a href="{{ route('edit-visi', $profil->id) }}"
                                                        class="btn btn-outline-warning .icon-left me-2"><i
                                                            class="bi bi-pencil-square"></i></a>
                                                    <form
                                                        onsubmit="return confirm('Apakah yakin untuk menghapus data tersebut??');"
                                                        action="{{ route('destroy-visi', $profil->id) }}" method="POST">
                                                        @method('DELETE')
                                                        @csrf
                                                        <button type="submit" class="btn btn-outline-danger .icon-left"><i
                                                                class="bi bi-trash3-fill"></i></button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Bagian Visi Dan HERO vidio end -->

    <!-- Bagian MISI-->
    <section class="section">
        <div class="row" id="table-head">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Bagian Misi</h4>
                        <a href="{{ route('create-misi') }}" class="btn btn-outline-primary icon-left mt-3">Tambah
                            Bagian</a>
                    </div>
                    <div class="card-content">
                        <!-- table head dark -->
                        <div class="table-responsive">
                            <table class="table mb-0">
                                <thead class="thead-dark text-center">
                                    <tr>
                                        <th>MISI</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody class="text-center">
                                    @foreach ($misis as $misi)
                                        <tr>
                                            <td>{{ $misi->list }}</td>
                                            <td>
                                                <div class="d-flex justify-content-center">
                                                    <a href="{{ route('edit-misi', $misi->id) }}"
                                                        class="btn btn-outline-warning .icon-left me-2"><i
                                                            class="bi bi-pencil-square"></i></a>
                                                    <form
                                                        onsubmit="return confirm('Apakah yakin untuk menghapus data tersebut??');"
                                                        action="{{ route('destroy-misi', $misi->id) }}" method="POST">
                                                        @method('DELETE')
                                                        @csrf
                                                        <button type="submit" class="btn btn-outline-danger .icon-right"><i
                                                                class="bi bi-trash3-fill"></i></button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Bagian MISI end -->

    <!-- Bagian TUJUAN -->
    <section class="section">
        <div class="row" id="table-head">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Bagian Tujuan</h4>
                        <a href="{{ route('create-tujuan') }}" class="btn btn-outline-primary icon-left mt-3">Tambah
                            Bagian</a>
                    </div>
                    <div class="card-content">
                        <!-- table head dark -->
                        <div class="table-responsive">
                            <table class="table mb-0">
                                <thead class="thead-dark text-center">
                                    <tr>
                                        <th>TUJUAN</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody class="text-center">
                                    @foreach ($tujuans as $tujuan)
                                        <tr>
                                            <td>{{ $tujuan->list }}</td>
                                            <td>
                                                <div class="d-flex justify-content-center">
                                                    <a href="{{ route('edit-tujuan', $tujuan->id) }}"
                                                        class="btn btn-outline-warning .icon-left me-2"><i
                                                            class="bi bi-pencil-square"></i></a>
                                                    <form
                                                        onsubmit="return confirm('Apakah yakin untuk menghapus data tersebut??');"
                                                        action="{{ route('destroy-tujuan', $tujuan->id) }}" method="POST">
                                                        @method('DELETE')
                                                        @csrf
                                                        <button type="submit" class="btn btn-outline-danger .icon-left"><i
                                                                class="bi bi-trash3-fill"></i></button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Bagian TUJUAN end -->
@endsection
