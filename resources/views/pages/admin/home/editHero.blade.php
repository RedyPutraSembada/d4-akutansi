@extends('layouts.admin.app')

@section('content')
    <section class="section">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Basic Inputs</h4>
            </div>

            <div class="card-body">
                <div class="row">
                    <form action="{{ route('update-hero', $hero->id) }}" method="post" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="basicInput">Judul HERO</label>
                                <input name="judul_hero" type="text"
                                    class="form-control @error('judul_hero') is-invalid @enderror" id="basicInput"
                                    value="{{ old('judul_hero', $hero->judul_hero) }}">
                                @error('judul_hero')
                                    <p><small class="text-danger">{{ $message }}</small>
                                    @enderror
                            </div>

                            <div class="form-group">
                                <label for="helpInputTop">Sub Judul</label>
                                <input name="sub_judul" type="text"
                                    class="form-control @error('sub_judul') is-invalid @enderror" id="helpInputTop"
                                    value="{{ old('sub_judul', $hero->sub_judul) }}">
                                @error('sub_judul')
                                    <p><small class="text-danger">{{ $message }}</small>
                                    @enderror
                            </div>

                            <div class="form-group">
                                <label for="helperText">SK-Pendirian</label>
                                <textarea name="sk_pendirian" class="form-control @error('sk_pendirian') is-invalid @enderror" name=""
                                    id="" cols="30" rows="10">{{ old('sk_pendirian', $hero->sk_pendirian) }}</textarea>
                                @error('sk_pendirian')
                                    <p><small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </p>
                            </div>
                            <div class="form-group">
                                <div class="card shadow-sm p-2 m-0">
                                    @if ($hero->img_hero)
                                        <img src="{{ asset('storage/' . $hero->img_hero) }}" class="img-responsive"
                                            id="preview" width="300" />
                                    @else
                                        img class="img-responsive" id="preview" width="300" />
                                    @endif
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="imgInp" class="form-label">Gambar HERO</label>
                                <input name="img_hero" class="form-control @error('img_hero') is-invalid @enderror"
                                    type="file" id="imgInp" value="{{ old('img_hero', $hero->img_hero) }}" multiple>
                                @error('img_hero')
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
