@extends('layouts.admin.app')

@section('content')
    <section class="section">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Tambah Data Kontak</h4>
            </div>

            <div class="card-body">
                <div class="row">
                    <form action="{{ route('store-contact') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="helperText">Content</label>
                            <textarea name="content" class="form-control @error('content') is-invalid @enderror" cols="30" rows="10">{{ old('content') }}</textarea>
                            @error('content')
                                <p><small class="text-danger">{{ $message }}</small>
                                @enderror
                            </p>
                        </div>

                        <div class="form-group">
                            <label for="helperText">Iframe Maps</label>
                            <textarea name="iframe_map" class="form-control @error('iframe_map') is-invalid @enderror" cols="30"
                                rows="10">{{ old('iframe_map') }}</textarea>
                            @error('iframe_map')
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
