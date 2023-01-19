@extends('layouts.admin.app')

@section('content')
    <section class="section">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Update Data Layanan Ijazah & Transkip Nilai</h4>
            </div>

            <div class="card-body">
                <div class="row">
                    <form action="{{ route('update-ijazah-transkip-nilai', $ijazahTranskip->id) }}" method="post">
                        @method('PUT')
                        @csrf
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="basicInput">Judul</label>
                                <input name="judul" type="text"
                                    class="form-control @error('judul') is-invalid @enderror" id="basicInput"
                                    value="{{ old('judul', $ijazahTranskip->judul) }}">
                                @error('judul')
                                    <p><small class="text-danger">{{ $message }}</small>
                                    @enderror
                            </div>

                            <div class="form-group">
                                <label for="helperText">Deskripsi Tengah</label>
                                <textarea name="deskripsi_tengah" class="form-control @error('deskripsi_tengah') is-invalid @enderror" name=""
                                    id="" cols="30" rows="10">{{ old('deskripsi_tengah', $ijazahTranskip->deskripsi_tengah) }}</textarea>
                                @error('deskripsi_tengah')
                                    <p><small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </p>
                            </div>

                            <div class="form-group">
                                <label for="helperText">Deskripsi Bawah</label>
                                <textarea name="deskripsi_bawah" class="form-control @error('deskripsi_bawah') is-invalid @enderror" name=""
                                    id="" cols="30" rows="10">{{ old('deskripsi_bawah', $ijazahTranskip->deskripsi_bawah) }}</textarea>
                                @error('deskripsi_bawah')
                                    <p><small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </p>
                            </div>
                        </div>
                        <button class="btn btn-primary rounded-pill mt-4">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
