@extends('layouts.admin.app')

@section('content')
    <section class="section">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Edit Data Struktur Organisasi</h4>
            </div>

            <div class="card-body">
                <div class="row">
                    <form action="{{ route('update-struktur', $struktur->id) }}" method="post" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="col-md-12">
                            <div class="form-group">
                                <div class="card shadow-sm p-2 m-0">
                                    @if ($struktur->img_struktur_organisasi)
                                        <img src="{{ asset('storage/' . $struktur->img_struktur_organisasi) }}"
                                            class="img-responsive" id="preview" width="300" />
                                    @else
                                        img class="img-responsive" id="preview" width="300" />
                                    @endif
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="imgInp" class="form-label">Gambar Struktur Organisasi</label>
                                <input name="img_struktur_organisasi"
                                    class="form-control @error('img_struktur_organisasi') is-invalid @enderror"
                                    type="file" id="imgInp" multiple>
                                @error('img_struktur_organisasi')
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
