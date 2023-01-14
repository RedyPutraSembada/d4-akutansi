@extends('layouts.admin.app')

@section('content')
    <section class="section">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Tambah Data Jadwal Perkulihan</h4>
            </div>

            <div class="card-body">
                <div class="row">
                    <form action="{{ route('update-formulir-akademik', $formulirAkademik->id) }}" method="post">
                        @method('PUT')
                        @csrf
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="basicInput">Nama File</label>
                                <input name="nama_file" type="text"
                                    class="form-control @error('nama_file') is-invalid @enderror" id="basicInput"
                                    value="{{ old('nama_file', $formulirAkademik->nama_file) }}">
                                @error('nama_file')
                                    <p><small class="text-danger">{{ $message }}</small>
                                    @enderror
                            </div>

                            <div class="form-group">
                                <label for="basicInput">Link Google Drive</label>
                                <input name="link_file" type="text"
                                    class="form-control @error('link_file') is-invalid @enderror" id="basicInput"
                                    value="{{ old('link_file', $formulirAkademik->link_file) }}">
                                @error('link_file')
                                    <p><small class="text-danger">{{ $message }}</small>
                                    @enderror
                            </div>
                            <button class="btn btn-primary rounded-pill mt-4">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
