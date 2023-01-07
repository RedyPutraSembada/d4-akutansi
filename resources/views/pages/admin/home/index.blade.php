@extends('layouts.admin.app')

@section('content')
    <div class="page-title mb-3">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Mengatur Halaman Home</h3>
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
                                            <td class="text-bold-500">{{ $hero->judul_hero }}</td>
                                            <td class="text-bold-500">{{ $hero->sub_judul }}</td>
                                            <td class="text-bold-500">{{ $hero->sk_pendirian }}</td>
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
                        <a href="#" class="btn btn-outline-primary icon-left mt-3">Tambah Bagian</a>
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
                                    <tr>
                                        <td class="text-bold-500">Menjadi program studi unggul yang menghasilkan teknisi
                                            akuntansi ahli dan perpajakan berjiwa wirausaha yang adaptif dengan teknologi,
                                            berintegritas, humanis, religius, dan berdaya saing global pada tahun 2025
                                        </td>
                                        <td>Prodi Akuntansi Perpajakan D4</td>
                                        <td>https://www.youtube.com/watch?v=9kwdLPS6ejc&ab_channel=AkuntansiPerpajakanUNPAM
                                        </td>
                                        <td>Memiliki jumlah 11323 mahasiswa aktif</td>
                                        <td>Memiliki 4 regular kelas</td>
                                        <td>Sudah terbukti menghasilkan lulusan berkualiatas dan berdaya saing dunia di era
                                            digital</td>
                                        <td>
                                            <div class="d-flex">
                                                <a href="#" class="btn btn-outline-warning .icon-left me-2"><i
                                                        class="bi bi-pencil-square"></i></a>
                                                <form onsubmit="return confirm('Are you sure ?');" action="#"
                                                    method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-outline-danger .icon-left"><i
                                                            class="bi bi-trash3-fill"></i></button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
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
                        <a href="#" class="btn btn-outline-primary icon-left mt-3">Tambah Bagian</a>
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
                                    <tr>
                                        <td>Mewujudkan suatu sarana pendidikan yang murah dan terjangkau oleh seluruh
                                            lapisan masyarakat tanpa melupakan kualitas</td>
                                        <td>
                                            <div class="d-flex">
                                                <a href="#" class="btn btn-outline-warning .icon-left me-2"><i
                                                        class="bi bi-pencil-square"></i></a>
                                                <form onsubmit="return confirm('Are you sure ?');" action="#"
                                                    method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-outline-danger .icon-left"><i
                                                            class="bi bi-trash3-fill"></i></button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Menyelenggarakan pendidikan vokasi bidang akuntansi perpajakan berbasis
                                            teknologi informasi dengan mengimplementasikan budaya humanis dan religius</td>
                                        <td>
                                            <div class="d-flex">
                                                <a href="#" class="btn btn-outline-warning .icon-left me-2"><i
                                                        class="bi bi-pencil-square"></i></a>
                                                <form onsubmit="return confirm('Are you sure ?');" action="#"
                                                    method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-outline-danger .icon-left"><i
                                                            class="bi bi-trash3-fill"></i></button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
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
                        <a href="#" class="btn btn-outline-primary icon-left mt-3">Tambah Bagian</a>
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
                                    <tr>
                                        <td>Menghasilkan lulusan di bidang akuntansi dan perpajakan yang kompeten,
                                            berintegritas, dan mengedepankan kualitas dalam memberikan pelayanan</td>
                                        <td>
                                            <div class="d-flex">
                                                <a href="#" class="btn btn-outline-warning .icon-left me-2"><i
                                                        class="bi bi-pencil-square"></i></a>
                                                <form onsubmit="return confirm('Are you sure ?');" action="#"
                                                    method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-outline-danger .icon-left"><i
                                                            class="bi bi-trash3-fill"></i></button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Menghasilkan analisis pajak yang berintegritas, menguasai teknologi informasi
                                            dan regulasi perpajakan beserta perkembangannya</td>
                                        <td>
                                            <div class="d-flex">
                                                <a href="#" class="btn btn-outline-warning .icon-left me-2"><i
                                                        class="bi bi-pencil-square"></i></a>
                                                <form onsubmit="return confirm('Are you sure ?');" action="#"
                                                    method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-outline-danger .icon-left"><i
                                                            class="bi bi-trash3-fill"></i></button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
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
