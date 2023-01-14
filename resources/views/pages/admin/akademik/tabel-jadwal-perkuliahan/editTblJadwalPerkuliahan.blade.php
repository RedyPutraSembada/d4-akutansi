@extends('layouts.admin.app')

@section('content')
    <section class="section">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Tambah Data Jadwal Perkulihan</h4>
            </div>

            <div class="card-body">
                <div class="row">
                    <form action="{{ route('update-tabel-jadwal-perkuliahan', $tabelJadwal->id) }}" method="post">
                        @method('PUT')
                        @csrf
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="basicInput">Kode Mata Kuliah</label>
                                <input name="kd_mk" type="text"
                                    class="form-control @error('kd_mk') is-invalid @enderror" id="basicInput"
                                    value="{{ old('kd_mk', $tabelJadwal->kd_mk) }}">
                                @error('kd_mk')
                                    <p><small class="text-danger">{{ $message }}</small>
                                    @enderror
                            </div>

                            <div class="form-group">
                                <label for="basicInput">Mata Kuliah</label>
                                <input name="mata_kuliah" type="text"
                                    class="form-control @error('mata_kuliah') is-invalid @enderror" id="basicInput"
                                    value="{{ old('mata_kuliah', $tabelJadwal->mata_kuliah) }}">
                                @error('mata_kuliah')
                                    <p><small class="text-danger">{{ $message }}</small>
                                    @enderror
                            </div>

                            <div class="form-group">
                                <label for="basicInput">Jumlah SKS</label>
                                <input name="sks" type="number" class="form-control @error('sks') is-invalid @enderror"
                                    id="basicInput" value="{{ old('sks', $tabelJadwal->sks) }}">
                                @error('sks')
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
