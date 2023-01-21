@extends('layouts.d4-akutansi.app')

@section('content')
    <section id="about" class="about mt-5">
        <div class="container" data-aos="fade-up">

            <div class="row g-4 g-lg-12" data-aos="fade-up" data-aos-delay="200">

                <div class="col-lg-12">

                    <!-- Tabs -->
                    <ul class="nav nav-pills mb-3">
                        <li>
                            <h4>{!! $transkipNilai->judul !!}</h3>
                        </li>
                    </ul><!-- End Tabs -->

                    <!-- Tab Content -->
                    <div class="tab-content">

                        <div class="tab-pane fade show active" id="tab1">

                            {!! $transkipNilai->deskripsi_tengah !!}

                            <hr>

                            {!! $transkipNilai->deskripsi_bawah !!}

                        </div>

                    </div>

                </div>

            </div>

        </div>
    </section>
@endsection
