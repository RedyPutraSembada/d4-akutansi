@extends('layouts.admin.app')

@section('content')
    <div class="page-title mb-3">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Berita Acara</h3>
            </div>
        </div>
    </div>
    <section class="section">
        <div class="row" id="table-head">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Berita Acara</h4>
                        <a href="{{ route('berita-acara.create') }}" class="btn btn-outline-primary icon-left mt-3">Tambah
                            Bagian</a>
                    </div>
                    <div class="card-content">
                        <!-- table head dark -->
                        <div class="table-responsive">
                            <table class="table mb-0">
                                <thead class="thead-dark text-center">
                                    <tr>
                                        <th>Image Berita</th>
                                        <th>Judul Berita</th>
                                        <th>Tanggal Pelaksanaan Acara</th>
                                        <th>Deskripsi</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody class="text-center">
                                    @foreach ($beritaAcaras as $beritaAcara)
                                        <tr>
                                            <td><img src="{{ asset('storage/' . $beritaAcara->img_berita) }}" alt="image"
                                                    style="width: 200px;"></td>
                                            <td>{{ $beritaAcara->judul_berita }}</td>
                                            <td>{{ $beritaAcara->tanggal }}</td>
                                            <td>{{ $beritaAcara->deskripsi }}</td>
                                            <td>
                                                <div class="d-flex">
                                                    <a href="{{ route('berita-acara.edit', $beritaAcara->id) }}"
                                                        class="btn btn-outline-warning .icon-left me-2"><i
                                                            class="bi bi-pencil-square"></i></a>
                                                    <form
                                                        onsubmit="return confirm('Apakah yakin untuk menghapus data tersebut??');"
                                                        action="{{ route('berita-acara.destroy', $beritaAcara->id) }}"
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
@endsection
