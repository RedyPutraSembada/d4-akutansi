@extends('layouts.d4-akutansi.app')

@section('content')
    <div class="mt-5">
        <section class="text-center align-items-center">
            <h2>{!! $kurikulum->judul !!}</h2>
            <div class="container-md">
                <img src="{{ asset('storage/' . $kurikulum->img_kurikulum) }}" class="img-fluid" alt="...">

            </div>
        </section>
    </div>
@endsection
