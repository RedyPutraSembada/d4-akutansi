@extends('layouts.admin.app')

@section('content')
    <section class="section">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Tambah Data Tabel Profil Lulusan</h4>
            </div>

            <div class="card-body">
                <div class="row">
                    <form action="{{ route('store-tabel-profil-lulusan') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="helperText">Profile Lulusan</label>
                            <textarea name="profile_lulusan" class="form-control @error('profile_lulusan') is-invalid @enderror" cols="30"
                                rows="10">{{ old('profile_lulusan') }}</textarea>
                            @error('profile_lulusan')
                                <p><small class="text-danger">{{ $message }}</small>
                                @enderror
                            </p>
                        </div>

                        <div class="form-group">
                            <label for="helperText">Deskripsi</label>
                            <textarea name="deskripsi" class="form-control @error('deskripsi') is-invalid @enderror" cols="30" rows="10">{{ old('deskripsi') }}</textarea>
                            @error('deskripsi')
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
