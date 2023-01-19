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
                        <h4 class="card-title">Bagian Ujian Susulan</h4>
                        <a href="{{ route('create-ujian-susulan') }}" class="btn btn-outline-primary icon-left mt-3">Tambah
                            Bagian</a>
                    </div>
                    <div class="card-content">
                        <!-- table head dark -->
                        <div class="table-responsive">
                            <table class="table mb-0">
                                <thead class="thead-dark text-center">
                                    <tr>
                                        <th>Image</th>
                                        <th>Judul</th>
                                        <th>Deskripsi</th>
                                        <th>Judul Table</th>
                                        <th>Shift</th>
                                        <th>Tanggal Pendaftaran</th>
                                        <th>Ruang Pelaksanaan</th>
                                        <th>Tanggal Pelaksanaan</th>
                                        <th>Jam Pelaksanaan</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody class="text-center">
                                    @foreach ($ujianSusulans as $ujianSusulan)
                                        <tr>
                                            <td><img src="{{ asset('storage/' . $ujianSusulan->img) }}" alt="image"
                                                    style="width: 200px;"></td>
                                            <td>{{ $ujianSusulan->judul }}</td>
                                            <td>{{ $ujianSusulan->deskripsi }}</td>
                                            <td>{{ $ujianSusulan->title_table }}</td>
                                            <td>{{ $ujianSusulan->shift }}</td>
                                            <td>{{ $ujianSusulan->tgl_pendaftaran }}</td>
                                            <td>{{ $ujianSusulan->ruang_pelaksanaan }}</td>
                                            <td>{{ $ujianSusulan->tgl_pelaksanaan }}</td>
                                            <td>{{ $ujianSusulan->jam_pelaksanaan }}</td>
                                            <td>
                                                <div class="d-flex">
                                                    <a href="{{ route('edit-ujian-susulan', $ujianSusulan->id) }}"
                                                        class="btn btn-outline-warning .icon-left me-2"><i
                                                            class="bi bi-pencil-square"></i></a>
                                                    <form
                                                        onsubmit="return confirm('Apakah yakin untuk menghapus data tersebut??');"
                                                        action="{{ route('destroy-ujian-susulan', $ujianSusulan->id) }}"
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
@endsection
