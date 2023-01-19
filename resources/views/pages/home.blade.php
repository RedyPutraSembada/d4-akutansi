@extends('layouts.d4-akutansi.app')

@section('hero')
    <section id="hero-animated" class="hero-animated d-flex align-items-center">
        <div class="container d-flex flex-column justify-content-center align-items-center text-center position-relative"
            data-aos="zoom-out">
            <img src="{{ asset('template/d4-akutansi/assets/img/unpam1.jpg') }}" class="img-fluid animated">
            <div class="p-1 mb-1 text-primary">
                <h1>Program Studi Akuntansi perpajakan <span>Universitkas Pamulang</span></h1>
            </div>
            <div class="p-1 mb-2 text-warning">
                <h3>Smart, Creative & Entrepreneur</h3>
            </div>
            <p>Program Studi Sarjana Terapan Akuntansi Perpajakan Universitas Pamulang berdiri pada tanggal 22 Februari
                2021 berdasarkan Surat Keputusan Menteri Pendidikan dan Kebudayaan Republik Indonesia No. 019/D/DOT/2021
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
                            <p class="fst-normal">Menjadi program studi unggul yang menghasilkan teknisi akuntansi
                                ahli dan perpajakan berjiwa wirausaha yang adaptif dengan teknologi, berintegritas,
                                humanis, religius, dan berdaya saing global pada tahun 2025</p>

                        </div><!-- End Tab 1 Content -->

                        <div class="tab-pane fade show" id="tab2" name:misi>
                            <p class="fst-normal">Mewujudkan suatu sarana pendidikan yang murah dan terjangkau oleh
                                seluruh lapisan masyarakat tanpa melupakan kualitas </p>
                            <div class="d-flex align-items-center mt-4">
                                <i class="bi bi-check2"></i>
                                <p>Menyelenggarakan pendidikan vokasi bidang akuntansi perpajakan berbasis teknologi
                                    informasi dengan mengimplementasikan budaya humanis dan religius</p>
                            </div>

                            <div class="d-flex align-items-center mt-4">
                                <i class="bi bi-check2"></i>
                                <p>Melaksanakan dan mendiseminasikan penelitian bidang akuntansi perpajakan untuk
                                    pengembangan ilmu pengetahuan serta menghasilkan teknologi baru yang dapat
                                    dimanfaatkan masyarakat</p>
                            </div>

                            <div class="d-flex align-items-center mt-4">
                                <i class="bi bi-check2"></i>
                                <p>Melaksanakan pengabdian kepada masyarakat sebagai implementasi hasil proses
                                    Pendidikan dan penelitian yang bermanfaat bagi masyarakat.</p>
                            </div>

                            <div class="d-flex align-items-center mt-4">
                                <i class="bi bi-check2"></i>
                                <p>Mengimplementasikan gagasan maupun produk teknologi hasil penelitian dalam bentuk
                                    pengabdian untuk memecahkan permasalahan di masyarakat</p>
                            </div>

                        </div><!-- End Tab 2 Content -->

                        <div class="tab-pane fade show" id="tab3" name:tujuan>

                            <p class="fst-normal">Program Studi Akuntansi Perpajakan D4 memilki tujuan sebagai
                                berikut:</p>
                            <div class="d-flex align-items-center mt-3">
                                <i class="bi bi-check2"></i>
                                <p>Menghasilkan lulusan di bidang akuntansi dan perpajakan yang kompeten,
                                    berintegritas, dan mengedepankan kualitas dalam memberikan pelayanan</p>
                            </div>


                            <div class="d-flex align-items-center mt-3">
                                <i class="bi bi-check2"></i>
                                <p>Menghasilkan analisis pajak yang berintegritas, menguasai teknologi informasi dan
                                    regulasi perpajakan beserta perkembangannya</p>
                            </div>

                            <div class="d-flex align-items-center mt-3">
                                <i class="bi bi-check2"></i>
                                <p>Menjadikan proses penyelenggaraan pendidikan Teknik Informatika yang berdaya
                                    saing.</p>
                            </div>


                            <div class="d-flex align-items-center mt-3">
                                <i class="bi bi-check2"></i>
                                <p>Menghasilkan Teknisi akuntansi ahli yang kompeten, berintegritas, menguasai
                                    teknologi, dan mampu menganalisis informasi keuangan secara komprehensif </p>
                            </div>

                            <div class="d-flex align-items-center mt-3">
                                <i class="bi bi-check2"></i>
                                <p>Menghasilkan entrepreneur dibidang jasa akuntansi dan pajak</p>
                            </div><!-- End Tab 3 Content -->

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
                    <div class="swiper-slide"><img src="{{ asset('template/d4-akutansi/assets/img/clients/bpr.png') }}"
                            class="img-fluid" alt="">
                    </div>
                    <div class="swiper-slide"><img src="{{ asset('template/d4-akutansi/assets/img/clients/sjtv.png') }}"
                            class="img-fluid" alt="">
                    </div>
                    <div class="swiper-slide"><img
                            src="{{ asset('template/d4-akutansi/assets/img/clients/kampusmerderka.jpg') }}"
                            class="img-fluid" alt=""></div>
                    <div class="swiper-slide"><img
                            src="{{ asset('template/d4-akutansi/assets/img/clients/yayasan.jpg') }}" class="img-fluid"
                            alt=""></div>
                </div>
            </div>

        </div>
    </section><!-- End Clients Section -->

    <!-- ======= Call To Action Section ======= -->
    <section id="cta" class="cta">
        <div class="container" data-aos="zoom-out">

            <div class="row g-8">

                <div class="col-lg-8 col-md-6 content d-flex flex-column justify-content-center order-last order-md-first">
                    <h3>Solution <em>of The</em> Future<h3>
                            <p>mewujudkan suatu sarana pendidikan yang murah dan terjangkau oleh seluruh lapisan
                                masyarakat tanpa melupakan kualitas</p>
                            <a class="btn btn-danger align-self-start " href="http://pmb.unpam.ac.id/">Lests Join
                                Us!</a>
                </div>

                <div class="col-lg-4 col-md-6 order-first order-md-last d-flex align-items-center">
                    <div class="img">
                        <img src="{{ asset('template/d4-akutansi/assets/img/pmb.jpg') }}" alt=""
                            class="img-fluid">
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Call To Action Section -->

    <!-- ======= On Focus Section ======= -->
    <section id="onfocus" class="onfocus">
        <div class="container-fluid p-0" data-aos="fade-up">

            <div class="row g-0">
                <div class="col-lg-6 video-play position-relative">
                    <a href="https://www.youtube.com/watch?v=9kwdLPS6ejc&ab_channel=AkuntansiPerpajakanUNPAM"
                        class="glightbox play-btn"></a>
                </div>
                <div class="col-lg-6">
                    <div class="content d-flex flex-column justify-content-center h-100">
                        <h3>Prodi Akuntansi Perpajakan D4 </h3>
                        <ul>
                            <li><i class="bi bi-check-circle"></i> Memiliki jumlah 11323 mahasiswa aktif</li>
                            <li><i class="bi bi-check-circle"></i> Memiliki 4 regular kelas</li>
                            <li><i class="bi bi-check-circle"></i> Sudah terbukti menghasilkan lulusan berkualiatas
                                dan berdaya saing dunia di era digital</li>
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
                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="post-box">
                        <div class="post-img"><img src="{{ asset('template/d4-akutansi/assets/img/seminarbazar.jpeg') }}"
                                width="600" height="600" class="img-fluid" alt=""></div>
                        <div class="meta">
                            <span class="post-date">Tue, November 21</span>
                            <span class="post-author"> / erick tohir</span>
                        </div>
                        <h3 class="post-title">BAZAAR SEMINAR NASIONAL</h3>
                        <p>PENGUMUMAN Assalamu’alaikum Warahmatullahi Wabarakatuh Selamat siang teman-teman
                            mahasiswa/i, semuanya...</p>
                        <a href="blog-details.html" class="readmore stretched-link"><span>Read More</span><i
                                class="bi bi-arrow-right"></i></a>
                    </div>
                </div>

                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="400">
                    <div class="post-box">
                        <div class="post-img"><img src="{{ asset('template/d4-akutansi/assets/img/blog/senam.jpeg') }}"
                                width="600" height="600" class="img-fluid" alt=""></div>
                        <div class="meta">
                            <span class="post-date">Fri, September 05</span>
                            <span class="post-author"> / Mario Douglas</span>
                        </div>
                        <h3 class="post-title">LINE DANCE DAN SENAM SEHAT 2022</h3>
                        <p>Voluptatem nesciunt omnis libero autem tempora enim ut ipsam id. Odit quia ab eum
                            assumenda. Quisquam omnis aliquid necessitatibus tempora consectetur doloribus...</p>
                        <a href="blog-details.html" class="readmore stretched-link"><span>Read More</span><i
                                class="bi bi-arrow-right"></i></a>
                    </div>
                </div>

                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="600">
                    <div class="post-box">
                        <div class="post-img"><img src="{{ asset('template/d4-akutansi/assets/img/blog/blog-3.jpg') }}"
                                class="img-fluid" alt="">
                        </div>
                        <div class="meta">
                            <span class="post-date">Tue, July 27</span>
                            <span class="post-author"> / Lisa Hunter</span>
                        </div>
                        <h3 class="post-title">Quia assumenda est et veritatis aut quae</h3>
                        <p>Quiaveritatis dicta nihil...</p>
                        <a href="blog-details.html" class="readmore stretched-link"><span>Read More</span><i
                                class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div>
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
