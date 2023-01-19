@extends('layouts.admin.app')

@section('content')
    <section class="section">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Tambah Data Profile Lulusan</h4>
            </div>

            <div class="card-body">
                <div class="row">
                    <form action="{{ route('store-profil-lulusan') }}" method="post" enctype="multipart/form-data">
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
                                <div class="card shadow-sm p-2 m-0">
                                    <img class="img-responsive" id="preview" width="300" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="imgInp" class="form-label">Gambar Profile Lulusan</label>
                                <input name="img" class="form-control @error('img') is-invalid @enderror" type="file"
                                    id="imgInp" multiple>
                                @error('img')
                                    <p><small class="text-danger">{{ $message }}</small>
                                    @enderror
                            </div>

                            <div class="form-group">
                                <label for="helperText">Content</label>
                                <textarea name="content" class="form-control @error('content') is-invalid @enderror" name="" id=""
                                    cols="30" rows="10">{{ old('content') }}</textarea>
                                @error('content')
                                    <p><small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </p>
                            </div>

                            <div class="form-group">
                                <label for="basicInput">Judul Table Profile Lulusan</label>
                                <input name="judul_table_bawah" type="text"
                                    class="form-control @error('judul_table_bawah') is-invalid @enderror" id="basicInput"
                                    value="{{ old('judul_table_bawah') }}">
                                @error('judul_table_bawah')
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
