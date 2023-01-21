@extends('layouts.d4-akutansi.app')

@section('hero')
    <section id="hero-animated" class="hero-animated d-flex align-items-center">
        <div class="container d-flex flex-column justify-content-center align-items-center text-center position-relative"
            data-aos="zoom-out">
            <img src="{{ asset('storage/' . $hero->img_hero) }}" class="img-fluid animated">
            <div class="p-1 mb-1 text-primary">
                <h1>{{ $hero->judul_hero }}</span></h1>
            </div>
            <div class="p-1 mb-2 text-warning">
                <h3>{{ $hero->sub_judul }}</h3>
            </div>
            <p>{{ $hero->sk_pendirian }}
            </p>
    </section>
@endsection

@section('content')
    <!-- ======= Featured Services Section ======= -->
    <section id="featured-services" class="featured-services">
        <div class="container">

            <div class="row">
                <div class="col-xl-1">
                </div>

                <div class="col-xl-2 col-md-6 col-sm-12 d-flex justify-content-center" data-aos="zoom-out">
                    <div class="service-item position-relative">
                        <div class="icon cen"> <img
                                src="{{ asset('template/d4-akutansi/assets/img/GIF/268-avatar-man-outline.gif') }}"
                                alt="" width="120" height="100"></div>
                        <h4 class="text-center"><a href="https://dosen.unpam.ac.id/" class="stretched-link">MY DOSEN</a>
                        </h4>
                    </div>
                </div>

                <div class="col-xl-2 col-md-6 col-sm-12 d-flex justify-content-center" data-aos="zoom-out">
                    <div class="service-item position-relative">
                        <div class="icon cen"> <img
                                src="{{ asset('template/d4-akutansi/assets/img/GIF/17-avatar-man-nodding-outline.gif') }}"
                                alt="" width="120" height="100"></div>
                        <h4 class="text-center"><a href="https://my.unpam.ac.id/login" class="stretched-link">MY UNPAM</a>
                        </h4>
                    </div>
                </div>

                <div class="col-xl-2 col-md-6 col-sm-12 d-flex justify-content-center" data-aos="zoom-out">
                    <div class="service-item position-relative">
                        <div class="icon cen"> <img
                                src="{{ asset('template/d4-akutansi/assets/img/GIF/478-computer-display-outline.gif') }}"
                                alt="" width="120" height="100"></div>
                        <h4 class="text-center"><a href="https://e-learning.unpam.ac.id/"
                                class="stretched-link">ELEARNING</a></h4>
                    </div>
                </div>

                <div class="col-xl-2 col-md-6 col-sm-12 d-flex justify-content-center" data-aos="zoom-out">
                    <div class="service-item position-relative">
                        <div class="icon cen"> <img
                                src="{{ asset('template/d4-akutansi/assets/img/GIF/981-consultation-outline.gif') }}"
                                alt="" width="120" height="100"></div>
                        <h4 class="text-center"><a href="http://perpustakaan.unpam.ac.id/"
                                class="stretched-link">LIBRARY</a></h4>
                    </div>
                </div>

                <div class="col-xl-2 col-md-6 col-sm-12 d-flex justify-content-center" data-aos="zoom-out">
                    <div class="service-item position-relative">
                        <div class="icon cen"> <img
                                src="{{ asset('template/d4-akutansi/assets/img/GIF/981-consultation-outline.gif') }}"
                                alt="" width="120" height="100"></div>
                        <h4 class="text-center"><a href="http://helpdesk.unpam.ac.id/" class="stretched-link">HELPDESK</a>
                        </h4>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End Featured Services Section -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container" data-aos="fade-up">

            <div class="section-header" id="visi">
                <h4>PROFIL</h4>
            </div>

            <div class="row g-4 g-lg-5" data-aos="fade-up" data-aos-delay="200">

                <div class="col-lg-5">
                    <div class="about-img">
                        <img src="{{ asset('template/d4-akutansi/assets/img/gedung.jpeg') }}" class="img-fluid"
                            alt="">
                    </div>
                </div>

                <div class="col-lg-7">

                    <!-- Tabs -->
                    <ul class="nav nav-pills mb-3">
                        <li><a class="nav-link active" data-bs-toggle="pill" href="#tab1">VISI</a></li>
                        <li><a class="nav-link" data-bs-toggle="pill" href="#tab2">MISI</a></li>
                        <li><a class="nav-link" data-bs-toggle="pill" href="#tab3">TUJUAN</a></li>
                    </ul><!-- End Tabs -->


                    <!-- Tab Content -->
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="tab1" name:visi>
                            <p class="fst-normal">{{ $profil->visi }}</p>

                        </div><!-- End Tab 1 Content -->

                        <div class="tab-pane fade show" id="tab2" name:misi>
                            @foreach ($misis as $misi)
                                <div class="d-flex align-items-center mt-4">
                                    <i class="bi bi-check2"></i>
                                    <p>{{ $misi->list }}</p>
                                </div>
                            @endforeach

                        </div><!-- End Tab 2 Content -->

                        <div class="tab-pane fade show" id="tab3" name:tujuan>

                            <p class="fst-normal">Program Studi Akuntansi Perpajakan D4 memilki tujuan sebagai
                                berikut:</p>
                            @foreach ($tujuans as $tujuan)
                                <div class="d-flex align-items-center mt-3">
                                    <i class="bi bi-check2"></i>
                                    <p>{{ $tujuan->list }}</p>
                                </div>
                            @endforeach
                        </div>

                    </div>

                </div>

            </div>
        </div>
    </section><!-- End About Section -->

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients">
        <div class="container" data-aos="zoom-out">

            <div class="clients-slider swiper">
                <div class="swiper-wrapper align-items-center">
                    @foreach ($slideSwipes as $slideSwipe)
                        <div class="swiper-slide"><img src="{{ asset('storage/' . $slideSwipe->image_slide_swipes) }}"
                                class="img-fluid" alt="">
                        </div>
                    @endforeach
                </div>
            </div>

        </div>
    </section><!-- End Clients Section -->

    <!-- ======= On Focus Section ======= -->
    <section id="onfocus" class="onfocus">
        <div class="container-fluid p-0" data-aos="fade-up">

            <div class="row g-0">
                <div class="col-lg-6 video-play position-relative">
                    <a href="{{ $profil->link_yt_profil }}"></a>
                </div>
                <div class="col-lg-6">
                    <div class="content d-flex flex-column justify-content-center h-100">
                        <h3>{{ $profil->judul_hero_vidio }}</h3>
                        <ul>
                            <li><i class="bi bi-check-circle"></i> Memiliki jumlah {{ $profil->jmlh_mhs_aktif }}
                                mahasiswa aktif</li>
                            <li><i class="bi bi-check-circle"></i> Memiliki {{ $profil->jmlh_reg }} regular kelas</li>
                            <li><i class="bi bi-check-circle"></i> {{ $profil->deskripsi }}</li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </section><!-- End On Focus Section -->

    <!-- ======= berita acara======= -->
    <section id="recent-blog-posts" class="recent-blog-posts">
        <div class="container" data-aos="fade-up">
            <div class="section-header">
                <h3>Berita acara</h3>
            </div>
            <div class="row">
                @foreach ($beritaAcaras as $beritaAcara)
                    <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                        <div class="post-box">
                            <div class="post-img"><img src="{{ asset('storage/' . $beritaAcara->img_berita) }}"
                                    width="600" height="600" class="img-fluid" alt=""></div>
                            <div class="meta">
                                <span class="post-date">{{ date('d F Y', strtotime($beritaAcara->tanggal)) }}</span>
                            </div>
                            <h3 class="post-title">{{ $beritaAcara->judul_berita }}</h3>
                            <p>{{ Str::limit($beritaAcara->deskripsi) }}</p>
                            <a href="blog-details.html" class="readmore stretched-link"><span>Read More</span><i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                @endforeach
            </div>

            <div>
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center">
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                            </a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                            </a>
                        </li>
                    </ul>
                </nav>
    </section><!-- berita acara  -->
    <!-- ======= Services Section ======= -->
@endsection
