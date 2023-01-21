@extends('layouts.d4-akutansi.app')

@section('content')
    <section id="about" class="about mt-5">
        <div class="container d-flex " data-aos="fade-up">
            <div>
                <div class="row g-4 g-lg-12" data-aos="fade-up" data-aos-delay="200">
                    <div class="col-lg-12">
                        <!-- Tab Content -->
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="tab1">
                                {!! $kontak->content !!}


                                {!! $kontak->iframe_map !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
@endsection
