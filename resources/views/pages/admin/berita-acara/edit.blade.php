@extends('layouts.admin.app')

@section('content')
    <section class="section">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Edit Data Berita Acara</h4>
            </div>

            <div class="card-body">
                <div class="row">
                    <form action="{{ route('berita-acara.update', $beritaAcara->id) }}" method="post"
                        enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="basicInput">Judul Berita</label>
                                <input name="judul_berita" type="text"
                                    class="form-control @error('judul_berita') is-invalid @enderror" id="basicInput"
                                    value="{{ old('judul_berita', $beritaAcara->judul_berita) }}">
                                @error('judul_berita')
                                    <p><small class="text-danger">{{ $message }}</small>
                                    @enderror
                            </div>
                            <div class="form-group">
                                <label for="helpInputTop">Tanggal Pelaksanaan Acara</label>
                                <input name="tanggal" type="date"
                                    class="form-control @error('tanggal') is-invalid @enderror" id="helpInputTop"
                                    value="{{ old('tanggal', $beritaAcara->tanggal) }}">
                                @error('tanggal')
                                    <p><small class="text-danger">{{ $message }}</small>
                                    @enderror
                            </div>
                            <div class="form-group">
                                <label for="helperText">Deskripsi</label>
                                <textarea name="deskripsi" class="form-control @error('deskripsi') is-invalid @enderror" name="" id=""
                                    cols="30" rows="10">{{ old('deskripsi', $beritaAcara->deskripsi) }}</textarea>
                                @error('deskripsi')
                                    <p><small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </p>
                            </div>
                            <div class="form-group">
                                <div class="card shadow-sm p-2 m-0">
                                    @if ($beritaAcara->img_berita)
                                        <img src="{{ asset('storage/' . $beritaAcara->img_berita) }}" class="img-responsive"
                                            id="preview" width="300" />
                                    @else
                                        img class="img-responsive" id="preview" width="300" />
                                    @endif
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="imgInp" class="form-label">Gambar Berita</label>
                                <input name="img_berita" class="form-control @error('img_berita') is-invalid @enderror"
                                    type="file" id="imgInp" multiple>
                                @error('img_berita', $beritaAcara->img_berita)
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
