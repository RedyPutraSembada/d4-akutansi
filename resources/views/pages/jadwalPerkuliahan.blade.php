@extends('layouts.d4-akutansi.app')

@section('content')
    <!-- ======= About Section ======= -->
    <section id="about" class="about mt-5">
        <div class="container" data-aos="fade-up">
            <div class="section-header" id="visi">
                <h3>JADWAL PERKULIAHAN SEMESTER GANJIL – 2022/2023</h3>
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
                            <p class="fst-normal">Setiap awal semester, mahasiswa yang telah melakukan registrasi wajib
                                mengajukan rencana kegiatan akademik, termasuk mahasiswa yang sedang mengerjakan Skripsi /
                                Tugas Akhir. Pengajuan rencana kegiatan akademik dilakukan mahasiswa secara langsung dengan
                                memasukkan mata kuliah yang akan diambil ke dalam Kartu Rencana Studi (KRS) melalui Website
                                my.unpam.ac.id.</p>

                            <p>masa Revisi KRS ditetapkan oleh Universitas/Fakultas dan tercantum dalam Kalender Akademik.
                            </p>

                            <p>Bagi mahasiswa yang memerlukan konsultasi mata kuliah yang akan diambil atau masalah lain
                                yang berkaitan dengan akademik, Fakultas/Jurusan/Program Studi (Prodi). Harap datang ke
                                Staff prodi/Ketua Program Studi.</p>

                        </div><!-- End Tab 1 Content -->

                        <div class="tab-pane fade show" id="tab2">

                            <p class="fst-normal">Mewujudkan suatu sarana pendidikan yang murah dan terjangkau oleh seluruh
                                lapisan masyarakat tanpa melupakan kualitas </p>
                            <div class="d-flex align-items-center mt-4">
                                <i class="bi bi-check2"></i>
                                <p>Telah melakukan registrasi/semester aktif.</p>
                            </div>

                            <div class="d-flex align-items-center mt-4">
                                <i class="bi bi-check2"></i>
                                <p>Jadwal Kuliah dan Rekap Nilai wajib dicetak terlebih dahulu.</p>
                            </div>

                            <div class="d-flex align-items-center mt-4">
                                <i class="bi bi-check2"></i>
                                <p>Perhatikan jadwal kuliah utama, ambil revisi pada jam yang kosong</p>
                            </div>

                            <div class="d-flex align-items-center mt-4">
                                <i class="bi bi-check2"></i>
                                <p>Apabila ada kesalahan input krs menjadi tanggungjawab mahasiswa ybs.</p>
                            </div>

                            <div class="d-flex align-items-center mt-4">
                                <i class="bi bi-check2"></i>
                                <p>Perubahan isian KRS hanya dapat dilakukan pada masa REVISI KRS.</p>
                            </div>

                        </div><!-- End Tab 2 Content -->

                        <div class="tab-pane fade show" id="tab3">

                            <p class="fst-normal">Bagi Mahasiswa Reguler A & B:</p>
                            <ul>
                                <li>Mulai Semester 8 dapat Revisi KRS/Perbaikan Mata kuliah</li>
                                <li>Jumlah SKS revisi yang dapat diambil dalam satu semester maksimal 18 SKS</li>
                                <li>Tanggal 23 s.d. 27 Agustus 2022 pelaksanaan penginputan KRS Online</li>
                                <li>Penginputan secara online di my.unpam.ac.id. menu KRS</li>
                                <li>Cek Jadwal Perkuliahan di my.unpam.ac.id menu jadwal kuliah sub menu cek jadwal kuliah
                                </li>
                                <small class="text-danger">*Jadwal masih dapat berubah tanpa konfirmasi selalu cek jadwal di
                                    my.unpam.ac.id </small>
                            </ul>

                            <p class="fst-normal">Bagi Mahasiswa Reguler C:</p>
                            <ul>
                                <li>Mulai Semester 8 dapat Revisi KRS/Perbaikan Mata kuliah</li>
                                <li>Jumlah SKS yang dapat diambil dalam satu semester maksimal 18 SKS</li>
                                <li>Penginputan secara online di my.unpam.ac.id menu KRS</li>
                                <li>Tanggal 23 s.d. 27 Agustus 2022 pelaksanaan penginputan KRS</li>
                                <li>Cek Jadwal Perkuliahan di my.unpam.ac.id menu jadwal kuliah sub menu cek jadwal kuliah
                                </li>
                                <small class="text-danger">*mulai semester ini tidak ada sistem modul 1/2/3 pengisian KRS
                                    hanya diawal semester saja.</small>
                            </ul>
                        </div><!-- End Tab 3 Content -->

                    </div>

                </div>

            </div>

        </div>
    </section><!-- End About Section -->

    <section id="about" class="about">
        <div class="container" data-aos="fade-up">

            <div class="section-header" id="visi">
                <h3>KURIKULUM KBK (Lama)</h3>
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
                            <tr>
                                <th scope="row">1</th>
                                <td>SMJU1304</td>
                                <td>Pendidikan Kewarganegaraan</td>
                                <td>3</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>SMJE3207</td>
                                <td>Kewirausahaan/Enterpreneurship</td>
                                <td>2</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>SMJE6206</td>
                                <td>Bank dan Lembaga Keuangan Lainnya</td>
                                <td>3</td>
                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <td>SMJE6206</td>
                                <td>Bank dan Lembaga Keuangan Lainnya</td>
                                <td>3</td>
                            </tr>
                            <tr>
                                <th scope="row">5</th>
                                <td>SMJE6206</td>
                                <td>Bank dan Lembaga Keuangan Lainnya</td>
                                <td>3</td>
                            </tr>
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
                    <p>Konsultasikan terlebih dahulu ke staf prodi manajemen:</p>
                    <p class="text-primary">Jika mengalami kendala silahkan hubungi Admin Prodi Manajemen melalui layanan
                        helpdesk.unpam.ac.id</p>
                    <p>Catatan:</p>
                    <ul>
                        <li>Sebelum penambahan mata kuliah, jadwal mata kuliah harus disesuaikan (tidak bentrok).</li>
                        <li class="text-danger">Bila mahasiswa tidak mematuhi syarat pengisian revisi krs, inputan akan
                            dihapus tanpa konfirmasi.</li>
                        <li class="text-danger">Jika mahasiswa registrasi Tugas Akhir tidak diperkenankan mengambil mata
                            kuliah revisi.</li>
                    </ul>

                </div>

            </div>

        </div>
    </section>
@endsection
