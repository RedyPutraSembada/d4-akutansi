@extends('layouts.admin.app')

@section('content')
    <div class="page-title mb-3">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Mengatur Menu Layanan Akademik</h3>
            </div>
        </div>
    </div>
    <!-- Bagian Ujian Susulan -->
    <section class="section">
        <div class="row" id="table-head">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Bagian Layanan Ijazah & Transkip Nilai</h4>
                        <a href="{{ route('create-ijazah-transkip-nilai') }}"
                            class="btn btn-outline-primary icon-left mt-3">Tambah
                            Bagian</a>
                    </div>
                    <div class="card-content">
                        <!-- table head dark -->
                        <div class="table-responsive">
                            <table class="table mb-0">
                                <thead class="thead-dark text-center">
                                    <tr>
                                        <th>Judul</th>
                                        <th>Deskripsi Tengah</th>
                                        <th>Deskripsi Bawah</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody class="text-center">
                                    @foreach ($izajahTranskipNilais as $izajahTranskipNilai)
                                        <tr>
                                            <td>{{ $izajahTranskipNilai->judul }}</td>
                                            <td>{{ $izajahTranskipNilai->deskripsi_tengah }}</td>
                                            <td>{{ $izajahTranskipNilai->deskripsi_bawah }}</td>
                                            <td>
                                                <div class="d-flex">
                                                    <a href="{{ route('edit-ijazah-transkip-nilai', $izajahTranskipNilai->id) }}"
                                                        class="btn btn-outline-warning .icon-left me-2"><i
                                                            class="bi bi-pencil-square"></i></a>
                                                    <form
                                                        onsubmit="return confirm('Apakah yakin untuk menghapus data tersebut??');"
                                                        action="{{ route('destroy-ijazah-transkip-nilai', $izajahTranskipNilai->id) }}"
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
    <!-- Ujian Susulan end -->

    <!-- Bagian Profile Lulusan -->
    <section class="section">
        <div class="row" id="table-head">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Bagian Profil Lulusan</h4>
                        <a href="{{ route('create-profil-lulusan') }}" class="btn btn-outline-primary icon-left mt-3">Tambah
                            Bagian</a>
                    </div>
                    <div class="card-content">
                        <!-- table head dark -->
                        <div class="table-responsive">
                            <table class="table mb-0">
                                <thead class="thead-dark text-center">
                                    <tr>
                                        <th>Image</th>
                                        <th>Judul Atas</th>
                                        <th>Content</th>
                                        <th>Judul Bagian Table</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody class="text-center">
                                    @foreach ($profilLulusans as $profilLulusan)
                                        <tr>
                                            <td><img src="{{ asset('storage/' . $profilLulusan->img) }}" alt="image"
                                                    style="width: 200px;"></td>
                                            <td>{{ $profilLulusan->judul_atas }}</td>
                                            <td>{{ $profilLulusan->content }}</td>
                                            <td>{{ $profilLulusan->judul_table_bawah }}</td>
                                            <td>
                                                <div class="d-flex">
                                                    <a href="{{ route('edit-profil-lulusan', $profilLulusan->id) }}"
                                                        class="btn btn-outline-warning .icon-left me-2"><i
                                                            class="bi bi-pencil-square"></i></a>
                                                    <form
                                                        onsubmit="return confirm('Apakah yakin untuk menghapus data tersebut??');"
                                                        action="{{ route('destroy-profil-lulusan', $profilLulusan->id) }}"
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
    <!-- Bagian Profile Lulusan end -->

    <!-- Bagian Tabel Profile Lulusan -->
    <section class="section">
        <div class="row" id="table-head">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Bagian Tabel Profil Lulusan</h4>
                        <a href="{{ route('create-tabel-profil-lulusan') }}"
                            class="btn btn-outline-primary icon-left mt-3">Tambah
                            Bagian</a>
                    </div>
                    <div class="card-content">
                        <!-- table head dark -->
                        <div class="table-responsive">
                            <table class="table mb-0">
                                <thead class="thead-dark text-center">
                                    <tr>
                                        <th>Profil Lulusan </th>
                                        <th>Deskripsi</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody class="text-center">
                                    @foreach ($tabelProfilLulusans as $tabelProfilLulusan)
                                        <tr>
                                            <td>{{ $tabelProfilLulusan->profile_lulusan }}</td>
                                            <td>{{ $tabelProfilLulusan->deskripsi }}</td>
                                            <td>
                                                <div class="d-flex">
                                                    <a href="{{ route('edit-tabel-profil-lulusan', $tabelProfilLulusan->id) }}"
                                                        class="btn btn-outline-warning .icon-left me-2"><i
                                                            class="bi bi-pencil-square"></i></a>
                                                    <form
                                                        onsubmit="return confirm('Apakah yakin untuk menghapus data tersebut??');"
                                                        action="{{ route('destroy-tabel-profil-lulusan', $tabelProfilLulusan->id) }}"
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
    <!-- Tabel Profile Lulusan end -->
@endsection
