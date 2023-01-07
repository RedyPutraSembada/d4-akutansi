@extends('layouts.admin.app')

@section('content')
    <section class="section">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Tambah Data Tujuan</h4>
            </div>

            <div class="card-body">
                <div class="row">
                    <form action="{{ route('store-tujuan') }}" method="post">
                        @csrf
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="basicInput">List :</label>
                                <input name="list" type="text"
                                    class="form-control @error('list') is-invalid @enderror" id="basicInput"
                                    value="{{ old('list') }}">
                                @error('list')
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
