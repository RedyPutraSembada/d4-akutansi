@extends('layouts.d4-akutansi.app')

@section('content')
    <section id="about" class="about mt-5">
        <div class="container" data-aos="fade-up">

            <div class="section-header" id="visi">
                <h3>Formulir Akademik</h3>
            </div>

            <div class="row g-4 g-lg-12" data-aos="fade-up" data-aos-delay="200">

                <div class="col-lg-12">
                    <p>Silahkan unduh formulir dibawah sesuai dengan kebutuhan:</p>
                    <ul>
                        @foreach ($formulirAkademiks as $formulirAkademik)
                            <li><a href="{{ $formulirAkademik->link_file }}">{{ $formulirAkademik->nama_file }}</a></li>
                        @endforeach
                    </ul>

                </div>

            </div>

        </div>
    </section>
@endsection
