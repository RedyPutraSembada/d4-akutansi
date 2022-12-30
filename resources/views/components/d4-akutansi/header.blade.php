<!-- ======= Header ======= -->
<header id="header" class="header fixed-top bg-light" data-scrollto-offset="0">
    <div class="container-fluid d-flex align-items-center justify-content-between">
        <a href="{{ route('home') }}" class="logo d-flex align-items-center scrollto me-auto me-lg-0">
            <img src="{{ asset('template/d4-akutansi/assets/img/logoatas.png') }}" width="40" height="40"
                alt="">
            <h4>AKUNTANSI <span class="text-warning">PERPAJAKAN</span> </h4>
        </a>

        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto" href="{{ route('home') }}">HOME</a></li>

                <li class="dropdown"><a href="#"><span>PROFIL</span> <i
                            class="bi bi-chevron-down dropdown-indicator"></i></a>
                    <ul>
                        <li><a href="http://lpm.unpam.ac.id/akreditasi/">AKREDITASI</a></li>
                        <li><a data-bs-toggle="modal" data-bs-target="#exampleModal">STRUKTUR ORGANISASI</a></li>
                        <li><a href="#">TUGAS DAN FUNGSI</a></li>
                    </ul>
                </li>

                <li class="dropdown"><a href="#"><span>KEMAHASISWAAN</span> <i
                            class="bi bi-chevron-down dropdown-indicator"></i></a>
                    <ul>
                        <li><a href="juknisJuklak.html">Juknis & Juklak PKM Mahasiswa</a></li>
                    </ul>
                </li>

                <li class="dropdown"><a href="#"><span>AKADEMIK</span> <i
                            class="bi bi-chevron-down dropdown-indicator"></i></a>
                    <ul>
                        <li><a href="{{ route('kurikulum') }}">KURIKULUM</a></li>
                        <li><a href="{{ route('jadwalPerkuliahan') }}">JADWAL PERKULIAHAN</a></li>
                        <li><a href="#">KALENDER MAHASISWA</a></li>
                        <li class="dropdown"><a href="#">UNDUH FILE AKADEMIK <i
                                    class="bi bi-checron-down dropdown-indikator"></i></a>
                            <ul>
                                <li><a href="{{ route('formulirAkademik') }}">KUMPULAN FILE AKADEMIK</a></li>
                            </ul>
                        </li>

                    </ul>
                </li>

                <li class="dropdown"><a href="#"><span>LAYANAN AKADEMIK</span> <i
                            class="bi bi-chevron-down dropdown-indicator"></i></a>
                    <ul>
                        <li><a href="{{ route('ujianSusulan') }}">Ujian Susulan</a></li>


                    </ul>
                </li>

                <li class="dropdown"><a href="#"><span>LULUSAN</span> <i
                            class="bi bi-chevron-down dropdown-indicator"></i></a>
                    <ul>
                        <li><a href="https://alumni.unpam.ac.id/">ALUMNI (Arumdalu)</a></li>
                        <li><a href="{{ route('layananIjazahTranskip') }}">LAYANAN IJAZAH & TRANSKIP NILAI</a></li>
                        <li><a href="{{ route('profilLulusan') }}">PROFIL LULUSAN</a></li>

                    </ul>
                </li>
                <li><a class="nav-link scrollto" href="{{ route('kontak') }}">Contact</a></li>
                <li><a href="http://helpdesk.unpam.ac.id/">LAYANAN ONLINE</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle d-none"></i>
        </nav>
    </div>
    <!-- End Header -->
</header>
<!-- end navbar -->
