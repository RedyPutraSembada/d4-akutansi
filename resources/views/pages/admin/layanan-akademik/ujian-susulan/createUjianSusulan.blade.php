@extends('layouts.admin.app')

@section('content')
    <section class="section">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Tambah Data Ujian Susulan</h4>
            </div>

            <div class="card-body">
                <div class="row">
                    <form action="{{ route('store-ujian-susulan') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="basicInput">Judul</label>
                                <input name="judul" type="text"
                                    class="form-control @error('judul') is-invalid @enderror" id="basicInput"
                                    value="{{ old('judul') }}">
                                @error('judul')
                                    <p><small class="text-danger">{{ $message }}</small>
                                    @enderror
                            </div>

                            <div class="form-group">
                                <label for="helperText">Deskripsi</label>
                                <textarea name="deskripsi" class="form-control @error('deskripsi') is-invalid @enderror" name="" id=""
                                    cols="30" rows="10">{{ old('deskripsi') }}</textarea>
                                @error('deskripsi')
                                    <p><small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </p>
                            </div>

                            <div class="form-group">
                                <div class="card shadow-sm p-2 m-0">
                                    <img class="img-responsive" id="preview" width="300" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="imgInp" class="form-label">Gambar HERO</label>
                                <input name="img" class="form-control @error('img') is-invalid @enderror" type="file"
                                    id="imgInp" multiple>
                                @error('img')
                                    <p><small class="text-danger">{{ $message }}</small>
                                    @enderror
                            </div>

                            <div class="form-group">
                                <label for="basicInput">Judul Table</label>
                                <input name="title_table" type="text"
                                    class="form-control @error('title_table') is-invalid @enderror" id="basicInput"
                                    value="{{ old('title_table') }}">
                                @error('title_table')
                                    <p><small class="text-danger">{{ $message }}</small>
                                    @enderror
                            </div>

                            <div class="form-group">
                                <label for="basicInput">Shift</label>
                                <input name="shift" type="text"
                                    class="form-control @error('shift') is-invalid @enderror" id="basicInput"
                                    value="{{ old('shift') }}">
                                @error('shift')
                                    <p><small class="text-danger">{{ $message }}</small>
                                    @enderror
                            </div>

                            <div class="form-group">
                                <label for="basicInput">Tanggal Pendaftaran</label>
                                <input name="tgl_pendaftaran" type="text"
                                    class="form-control @error('tgl_pendaftaran') is-invalid @enderror" id="basicInput"
                                    value="{{ old('tgl_pendaftaran') }}">
                                @error('tgl_pendaftaran')
                                    <p><small class="text-danger">{{ $message }}</small>
                                    @enderror
                            </div>

                            <div class="form-group">
                                <label for="basicInput">Ruang Pelaksanaan</label>
                                <input name="ruang_pelaksanaan" type="text"
                                    class="form-control @error('ruang_pelaksanaan') is-invalid @enderror" id="basicInput"
                                    value="{{ old('ruang_pelaksanaan') }}">
                                @error('ruang_pelaksanaan')
                                    <p><small class="text-danger">{{ $message }}</small>
                                    @enderror
                            </div>

                            <div class="form-group">
                                <label for="basicInput">Tanggal Pelaksanaan</label>
                                <input name="tgl_pelaksanaan" type="date"
                                    class="form-control @error('tgl_pelaksanaan') is-invalid @enderror" id="basicInput"
                                    value="{{ old('tgl_pelaksanaan') }}">
                                @error('tgl_pelaksanaan')
                                    <p><small class="text-danger">{{ $message }}</small>
                                    @enderror
                            </div>

                            <div class="form-group">
                                <label for="basicInput">Jam Pelaksanaan</label>
                                <input name="jam_pelaksanaan" type="text"
                                    class="form-control @error('jam_pelaksanaan') is-invalid @enderror" id="basicInput"
                                    value="{{ old('jam_pelaksanaan') }}">
                                @error('jam_pelaksanaan')
                                    <p><small class="text-danger">{{ $message }}</small>
                                    @enderror
                            </div>
                        </div>
                        <button class="btn btn-primary rounded-pill mt-4">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('script')
    <script src="{{ asset('template/admin/dist/assets/extensions/jquery/jquery.min.js') }}"></script>
    <script>
        imgInp.onchange = evt => {
            const [file] = imgInp.files
            if (file) {
                preview.src = URL.createObjectURL(file)
            }
        }
    </script>
@endpush
