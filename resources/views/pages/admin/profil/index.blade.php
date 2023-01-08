@extends('layouts.admin.app')

@section('content')
    <div class="page-title mb-3">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Mengatur Menu Profil</h3>
            </div>
        </div>
    </div>
    <section class="section">
        <div class="row" id="table-head">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Struktur Organisasi</h4>
                        <a href="{{ route('create-struktur') }}" class="btn btn-outline-primary icon-left mt-3">Tambah
                            Bagian</a>
                    </div>
                    <div class="card-content">
                        <!-- table head dark -->
                        <div class="table-responsive">
                            <table class="table mb-0">
                                <thead class="thead-dark text-center">
                                    <tr>
                                        <th>Image Struktur Organisasi</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody class="text-center">
                                    @foreach ($strukturs as $struktur)
                                        <tr>
                                            <td><img src="{{ asset('storage/' . $struktur->img_struktur_organisasi) }}"
                                                    alt="image" style="width: 200px;"></td>
                                            <td>
                                                <div class="d-flex justify-content-center">
                                                    <a href="{{ route('edit-struktur', $struktur->id) }}"
                                                        class="btn btn-outline-warning .icon-left me-2"><i
                                                            class="bi bi-pencil-square"></i></a>
                                                    <form
                                                        onsubmit="return confirm('Apakah yakin untuk menghapus data tersebut??');"
                                                        action="{{ route('destroy-struktur', $struktur->id) }}"
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
