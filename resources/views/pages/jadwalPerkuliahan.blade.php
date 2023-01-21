@extends('layouts.d4-akutansi.app')

@section('content')
    <!-- ======= About Section ======= -->
    <section id="about" class="about mt-5">
        <div class="container" data-aos="fade-up">
            <div class="section-header" id="visi">
                <h3>{{ $jadwalPerkuliahan->judul_atas }}</h3>
            </div>
            <div class="row g-4 g-lg-12" data-aos="fade-up" data-aos-delay="200">
                <div class="col-lg-12">

                    <!-- Tabs -->
                    <ul class="nav nav-pills mb-3">
                        <li><a class="nav-link active" data-bs-toggle="pill" href="#tab1">PENJELASAN</a></li>
                        <li><a class="nav-link" data-bs-toggle="pill" href="#tab2">KETENTUAN REVISI KRS</a></li>
                        <li><a class="nav-link" data-bs-toggle="pill" href="#tab3">SEMESTER YANG DAPAT MENGIKUTI REVISI
                                KRS</a></li>
                    </ul><!-- End Tabs -->

                    <!-- Tab Content -->
                    <div class="tab-content">

                        <div class="tab-pane fade show active" id="tab1">
                            <p class="fst-normal">{!! $jadwalPerkuliahan->penjelasan !!}</p>

                        </div><!-- End Tab 1 Content -->

                        <div class="tab-pane fade show" id="tab2">

                            @foreach ($ketentuanRevisis as $ketentuanRevisi)
                                <div class="d-flex align-items-center mt-4">
                                    <i class="bi bi-check2"></i>
                                    <p>{{ $ketentuanRevisi->list }}</p>
                                </div>
                            @endforeach

                        </div><!-- End Tab 2 Content -->

                        <div class="tab-pane fade show" id="tab3">

                            {!! $jadwalPerkuliahan->mengikuti_revisi !!}
                        </div><!-- End Tab 3 Content -->

                    </div>

                </div>

            </div>

        </div>
    </section><!-- End About Section -->

    <section id="about" class="about">
        <div class="container" data-aos="fade-up">

            <div class="section-header" id="visi">
                <h3>{{ $jadwalPerkuliahan->judul_tengah }}</h3>
            </div>

            <div class="row g-4 g-lg-12" data-aos="fade-up" data-aos-delay="200">

                <div class="col-lg-12">
                    <p>Harap diperhatikan bila merevisi mata kuliah dibawah ini:</p>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Kd-MK</th>
                                <th scope="col">Mata Kuliah</th>
                                <th scope="col">sks</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($tabelJadwalPerkuliahans as $tabelJadwalPerkuliahan)
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td>{{ $tabelJadwalPerkuliahan->kd_mk }}</td>
                                    <td>{{ $tabelJadwalPerkuliahan->mata_kuliah }}</td>
                                    <td>{{ $tabelJadwalPerkuliahan->sks }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>

            </div>

        </div>
    </section>

    <section id="about" class="about">
        <div class="container" data-aos="fade-up">

            <div class="row g-4 g-lg-12" data-aos="fade-up" data-aos-delay="200">

                <div class="col-lg-12">
                    {!! $jadwalPerkuliahan->catatan_bawah !!}

                </div>

            </div>

        </div>
    </section>
@endsection
