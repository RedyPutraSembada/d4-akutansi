@extends('layouts.admin.app')

@section('content')
    <section class="section">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Tambah Data Jadwal Perkulihan</h4>
            </div>

            <div class="card-body">
                <div class="row">
                    <form action="{{ route('store-jadwal-perkuliahan') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="basicInput">Judul Atas</label>
                                <input name="judul_atas" type="text"
                                    class="form-control @error('judul_atas') is-invalid @enderror" id="basicInput"
                                    value="{{ old('judul_atas') }}">
                                @error('judul_atas')
                                    <p><small class="text-danger">{{ $message }}</small>
                                    @enderror
                            </div>

                            <div class="form-group">
                                <label for="helperText">Penjelasan</label>
                                <textarea name="penjelasan" class="form-control @error('penjelasan') is-invalid @enderror" name="" id=""
                                    cols="30" rows="10">{{ old('penjelasan') }}</textarea>
                                @error('penjelasan')
                                    <p><small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </p>
                            </div>

                            <div class="form-group">
                                <label for="helperText">Semester Yang Dapat Mengikuti Revisi</label>
                                <textarea name="mengikuti_revisi" class="form-control @error('mengikuti_revisi') is-invalid @enderror" name=""
                                    id="" cols="30" rows="10">{{ old('mengikuti_revisi') }}</textarea>
                                @error('mengikuti_revisi')
                                    <p><small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </p>
                            </div>

                            <div class="form-group">
                                <label for="basicInput">Judul Tengah</label>
                                <input name="judul_tengah" type="text"
                                    class="form-control @error('judul_tengah') is-invalid @enderror" id="basicInput"
                                    value="{{ old('judul_tengah') }}">
                                @error('judul_tengah')
                                    <p><small class="text-danger">{{ $message }}</small>
                                    @enderror
                            </div>

                            <div class="form-group">
                                <label for="helperText">Catatan Bawah</label>
                                <textarea name="catatan_bawah" class="form-control @error('catatan_bawah') is-invalid @enderror" name=""
                                    id="" cols="30" rows="10">{{ old('catatan_bawah') }}</textarea>
                                @error('catatan_bawah')
                                    <p><small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </p>
                            </div>
                            <button class="btn btn-primary rounded-pill mt-4">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
