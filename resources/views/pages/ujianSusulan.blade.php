@extends('layouts.d4-akutansi.app')

@section('content')
    <section id="about" class="about mt-5">
        <div class="container" data-aos="fade-up">
            <div class="section-header" id="visi">
                <h3>{{ $ujianSusulan->judul }}</h3>
            </div>

            <div class="row g-4 g-lg-12" data-aos="fade-up" data-aos-delay="200">
                <div class="col-lg-12">
                    {!! $ujianSusulan->deskripsi !!}
                </div>

            </div>

        </div>
    </section>
    <section>
        <div class="container" data-aos="fade-up">
            <img src="{{ asset('storage/' . $ujianSusulan->img) }}" style="width: 100%; height: auto;" alt="">
        </div>
    </section>

    <section id="about" class="about">
        <div class="container" data-aos="fade-up">

            <div class="row g-4 g-lg-12" data-aos="fade-up" data-aos-delay="200">

                <div class="col-lg-12">
                    <strong>{{ $ujianSusulan->title_table }}</strong>
                    <table class="table">
                        <thead>
                            <tr class="text-center">
                                <th scope="col">SHIFT</th>
                                <th scope="col">TANGGAL PENDAFTARAN</th>
                                <th scope="col">RUANGAN PELAKSANAAN</th>
                                <th scope="col">TANGGAL PELAKSANAAN</th>
                                <th scope="col">JAM PELAKSANAAN</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="text-center">
                                <th scope="row">{{ $ujianSusulan->shift }}</th>
                                <td>{{ $ujianSusulan->tgl_pendaftaran }}</td>
                                <td>{{ $ujianSusulan->ruang_pelaksanaan }}</td>
                                <td>{{ $ujianSusulan->tgl_pelaksanaan }}</td>
                                <td>{{ $ujianSusulan->jam_pelaksanaan }}</td>
                            </tr>
                        </tbody>
                    </table>

                </div>

            </div>

        </div>
    </section>
@endsection
