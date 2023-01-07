@extends('layouts.admin.app')

@section('content')
    <section class="section">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Tambah Data Visi Dan Vidio Hero</h4>
            </div>

            <div class="card-body">
                <div class="row">
                    <form action="{{ route('store-visi') }}" method="post">
                        @csrf
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="helperText">VISI</label>
                                <textarea name="visi" class="form-control @error('visi') is-invalid @enderror" id="" cols="30"
                                    rows="10">{{ old('visi') }}</textarea>
                                @error('visi')
                                    <p><small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </p>
                            </div>

                            <div class="form-group">
                                <label for="basicInput">Judul HERO Vidio</label>
                                <input name="judul_hero_vidio" type="text"
                                    class="form-control @error('judul_hero_vidio') is-invalid @enderror" id="basicInput"
                                    value="{{ old('judul_hero_vidio') }}">
                                @error('judul_hero_vidio')
                                    <p><small class="text-danger">{{ $message }}</small>
                                    @enderror
                            </div>

                            <div class="form-group">
                                <label for="helpInputTop">Jumlah Mahasiswa Aktif</label>
                                <input name="jmlh_mhs_aktif" type="number"
                                    class="form-control @error('jmlh_mhs_aktif') is-invalid @enderror" id="helpInputTop"
                                    value="{{ old('jmlh_mhs_aktif') }}">
                                @error('jmlh_mhs_aktif')
                                    <p><small class="text-danger">{{ $message }}</small>
                                    @enderror
                            </div>

                            <div class="form-group">
                                <label for="helpInputTop">Jumlah Reguler</label>
                                <input name="jmlh_reg" type="number"
                                    class="form-control @error('jmlh_reg') is-invalid @enderror" id="helpInputTop"
                                    value="{{ old('jmlh_reg') }}">
                                @error('jmlh_reg')
                                    <p><small class="text-danger">{{ $message }}</small>
                                    @enderror
                            </div>

                            <div class="form-group">
                                <label for="helpInputTop">Link Youtube Profile(Embed Link)</label>
                                <input name="link_yt_profil" type="text"
                                    class="form-control @error('link_yt_profil') is-invalid @enderror" id="helpInputTop"
                                    value="{{ old('link_yt_profil') }}">
                                @error('link_yt_profil')
                                    <p><small class="text-danger">{{ $message }}</small>
                                    @enderror
                            </div>

                            <div class="form-group">
                                <label for="helperText">deskripsi</label>
                                <textarea name="deskripsi" class="form-control @error('deskripsi') is-invalid @enderror" name="" id=""
                                    cols="30" rows="10">{{ old('deskripsi') }}</textarea>
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
