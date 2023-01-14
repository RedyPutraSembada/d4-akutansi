@extends('layouts.admin.app')

@section('content')
    <div class="page-title mb-3">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Mengatur Menu Akadmik</h3>
            </div>
        </div>
    </div>
    <!-- Bagian Kurikulum -->
    <section class="section">
        <div class="row" id="table-head">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Bagian Kurikulum</h4>
                        <a href="{{ route('create-kurikulum') }}" class="btn btn-outline-primary icon-left mt-3">Tambah
                            Bagian</a>
                    </div>
                    <div class="card-content">
                        <!-- table head dark -->
                        <div class="table-responsive">
                            <table class="table mb-0">
                                <thead class="thead-dark text-center">
                                    <tr>
                                        <th>Image Kurikulum</th>
                                        <th>Judul Kurikulum</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody class="text-center">
                                    @foreach ($kurikulums as $kurikulum)
                                        <tr>
                                            <td><img src="{{ asset('storage/' . $kurikulum->img_kurikulum) }}"
                                                    alt="image" style="width: 200px;"></td>
                                            <td>{{ $kurikulum->judul }}</td>
                                            <td>
                                                <div class="d-flex">
                                                    <a href="{{ route('edit-kurikulum', $kurikulum->id) }}"
                                                        class="btn btn-outline-warning .icon-left me-2"><i
                                                            class="bi bi-pencil-square"></i></a>
                                                    <form
                                                        onsubmit="return confirm('Apakah yakin untuk menghapus data tersebut??');"
                                                        action="{{ route('destroy-kurikulum', $kurikulum->id) }}"
                                                        method="POST">
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
    <!-- Kurikulum end -->

    <!-- Bagian Bagian Jadwal Perkuliahan -->
    <section class="section">
        <div class="row" id="table-head">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Bagian Jadwal Perkuliahan</h4>
                        <a href="{{ route('create-jadwal-perkuliahan') }}"
                            class="btn btn-outline-primary icon-left mt-3">Tambah
                            Bagian</a>
                    </div>
                    <div class="card-content">
                        <!-- table head dark -->
                        <div class="table-responsive">
                            <table class="table mb-0">
                                <thead class="thead-dark text-center">
                                    <tr>
                                        <th>Judul Atas</th>
                                        <th>Penjelasan</th>
                                        <th>Semester Yang Mengikuti Revisi</th>
                                        <th>Judul Tengah</th>
                                        <th>Catatan Bawah</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody class="text-center">
                                    @foreach ($jadwalPerkuliahans as $jadwalPerkuliahan)
                                        <tr>
                                            <td>{{ $jadwalPerkuliahan->judul_atas }}</td>
                                            <td>{{ $jadwalPerkuliahan->penjelasan }}</td>
                                            <td>{{ $jadwalPerkuliahan->mengikuti_revisi }}</td>
                                            <td>{{ $jadwalPerkuliahan->judul_tengah }}</td>
                                            <td>{{ $jadwalPerkuliahan->catatan_bawah }}</td>
                                            <td>
                                                <div class="d-flex">
                                                    <a href="{{ route('edit-jadwal-perkuliahan', $jadwalPerkuliahan->id) }}"
                                                        class="btn btn-outline-warning .icon-left me-2"><i
                                                            class="bi bi-pencil-square"></i></a>
                                                    <form
                                                        onsubmit="return confirm('Apakah yakin untuk menghapus data tersebut??');"
                                                        action="{{ route('destroy-jadwal-perkuliahan', $jadwalPerkuliahan->id) }}"
                                                        method="POST">
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
    <!-- Bagian Bagian Jadwal Perkuliahan end -->

    <!-- Bagian Ketentuan Revisi KRS-->
    <section class="section">
        <div class="row" id="table-head">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Bagian Ketentuan Revisi KRS</h4>
                        <a href="{{ route('create-ketentuan-revisi') }}"
                            class="btn btn-outline-primary icon-left mt-3">Tambah
                            Bagian</a>
                    </div>
                    <div class="card-content">
                        <!-- table head dark -->
                        <div class="table-responsive">
                            <table class="table mb-0">
                                <thead class="thead-dark text-center">
                                    <tr>
                                        <th>List</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody class="text-center">
                                    @foreach ($ketRevisis as $ketRevisi)
                                        <tr>
                                            <td>{{ $ketRevisi->list }}</td>
                                            <td>
                                                <div class="d-flex justify-content-center">
                                                    <a href="{{ route('edit-ketentuan-revisi', $ketRevisi->id) }}"
                                                        class="btn btn-outline-warning .icon-left me-2"><i
                                                            class="bi bi-pencil-square"></i></a>
                                                    <form
                                                        onsubmit="return confirm('Apakah yakin untuk menghapus data tersebut??');"
                                                        action="{{ route('destroy-ketentuan-revisi', $ketRevisi->id) }}"
                                                        method="POST">
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
    <!-- Bagian Ketentuan Revisi KRS end -->

    <!-- Bagian Tabel Kurikulum KBK -->
    <section class="section">
        <div class="row" id="table-head">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Tabel Kurikulum KBK</h4>
                        <a href="{{ route('create-tabel-jadwal-perkuliahan') }}"
                            class="btn btn-outline-primary icon-left mt-3">Tambah
                            Bagian</a>
                    </div>
                    <div class="card-content">
                        <!-- table head dark -->
                        <div class="table-responsive">
                            <table class="table mb-0">
                                <thead class="thead-dark text-center">
                                    <tr>
                                        <th>No</th>
                                        <th>Kd-MK</th>
                                        <th>Mata Kuliah</th>
                                        <th>Sks</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody class="text-center">
                                    @foreach ($tabels as $tabel)
                                        <tr>
                                            <td>1</td>
                                            <td>{{ $tabel->kd_mk }}</td>
                                            <td>{{ $tabel->mata_kuliah }}</td>
                                            <td>{{ $tabel->sks }}</td>
                                            <td>
                                                <div class="d-flex">
                                                    <a href="{{ route('edit-tabel-jadwal-perkuliahan', $tabel->id) }}"
                                                        class="btn btn-outline-warning .icon-left me-2"><i
                                                            class="bi bi-pencil-square"></i></a>
                                                    <form
                                                        onsubmit="return confirm('Apakah yakin untuk menghapus data tersebut??');"
                                                        action="{{ route('destroy-tabel-jadwal-perkuliahan', $tabel->id) }}"
                                                        method="POST">
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
    <!-- Bagian Tabel Kurikulum KBK end -->

    <!-- Bagian Formulir Akademik -->
    <section class="section">
        <div class="row" id="table-head">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Formulir Akademik</h4>
                        <a href="{{ route('create-formulir-akademik') }}"
                            class="btn btn-outline-primary icon-left mt-3">Tambah
                            Bagian</a>
                    </div>
                    <div class="card-content">
                        <!-- table head dark -->
                        <div class="table-responsive">
                            <table class="table mb-0">
                                <thead class="thead-dark text-center">
                                    <tr>
                                        <th>Nama File</th>
                                        <th>Link File Google Drive</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody class="text-center">
                                    @foreach ($formulirs as $formulir)
                                        <tr>
                                            <td>{{ $formulir->nama_file }}</td>
                                            <td>{{ $formulir->link_file }}</td>
                                            <td>
                                                <div class="d-flex">
                                                    <a href="{{ route('edit-formulir-akademik', $formulir->id) }}"
                                                        class="btn btn-outline-warning .icon-left me-2"><i
                                                            class="bi bi-pencil-square"></i></a>
                                                    <form
                                                        onsubmit="return confirm('Apakah yakin untuk menghapus data tersebut??');"
                                                        action="{{ route('destroy-formulir-akademik', $formulir->id) }}"
                                                        method="POST">
                                                        @method('DELETE')
                                                        @csrf
                                                        <button type="submit"
                                                            class="btn btn-outline-danger .icon-left"><i
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
    <!-- Bagian Formulir Akademik end -->
@endsection
