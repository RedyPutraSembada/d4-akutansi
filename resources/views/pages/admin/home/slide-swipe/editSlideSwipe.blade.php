@extends('layouts.admin.app')

@section('content')
    <section class="section">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Update Gambar Slide Swipe</h4>
            </div>

            <div class="card-body">
                <div class="row">
                    <form action="{{ route('update-slide-swipe', $slideSwipe->id) }}" method="post"
                        enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="col-md-12">
                            <div class="form-group">
                                <div class="card shadow-sm p-2 m-0">
                                    @if ($slideSwipe->image_slide_swipes)
                                        <img src="{{ asset('storage/' . $slideSwipe->image_slide_swipes) }}"
                                            class="img-responsive" id="preview" width="300" />
                                    @else
                                        img class="img-responsive" id="preview" width="300" />
                                    @endif
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="imgInp" class="form-label">Gambar Slide Swipe</label>
                                <input name="image_slide_swipes"
                                    class="form-control @error('image_slide_swipes') is-invalid @enderror" type="file"
                                    id="imgInp" multiple>
                                @error('image_slide_swipes')
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
