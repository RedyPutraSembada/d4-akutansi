@extends('layouts.d4-akutansi.app')

@section('content')
    <section id="about" class="about mt-5">
        <div class="container" data-aos="fade-up">
            <div class="section-header" id="visi">
                <h3>PENDAFTARAN UJIAN SUSULAN SEMESTER GANJIL TA 2022-2023</h3>
            </div>

            <div class="row g-4 g-lg-12" data-aos="fade-up" data-aos-delay="200">
                <div class="col-lg-12">
                    <p>Pendaftaran Ujian Susulan GANJIL TA 2022-2023 , mahasiswa wajib mengisi form ujian susulan yang telah
                        disediakan sesuai dengan shift perkuliahan, melakukan pendaftaran melalui link form ujian susulan
                        mahasiswa WAJIB mencetak bukti pendaftaran susulan yang telah dikirim melalui email yang sudah di
                        daftarkan, mahasiswa wajib melampirkan Persyaratan yang Asli dan Cetak Kartu Ujian, jika semua
                        persyaratan sudah di lengkapi maka mahasiswa wajib melakukan proses validasi kelengkapan dokumen ke
                        staff prodi manajemen.</p>

                    <p>Link Pendaftaran Ujian Susulan Reguler Manajemen <a
                            href="https://bit.ly/ujiansusulanprodimanajemen">https://bit.ly/ujiansusulanprodimanajemen</a>
                    </p>

                    <p class="text-primary">Persyaratan Ujian Susulan:</p>
                    <p class="text-primary">Ujian Susulan bisa diberikan kepada mahasiswa yang tidak bisa mengikuti Ujian
                        dengan alasan:</p>
                    <ul class="text-primary">
                        <li>Mahasiswa dengan status AKTIF.</li>
                        <li>Mata kuliah semester berjalan.</li>
                        <li>Berhalangan hadir pada saat ujian karena sakit, atau ada keluarga inti yang meninggal, atau
                            dinas oleh institusi dan copy idcard pegawai/ Universitas untuk kompetisi / kegiatan diluar
                            kampus.</li>
                        <li>Memiliki bukti berupa surat sakit, atau surat keterangan dari pihak yang berwenang (surat
                            keterangan wajib dengan kop surat, tanda tangan, stempel asli, dan print out kartu ujian yang di
                            lampirkan.</li>
                        <li>Telah melunasi administrasi keuangan sesuai ketentuan.</li>
                    </ul>
                </div>

            </div>

        </div>
    </section>
    <section>
        <div class="container" data-aos="fade-up">
            <img src="{{ asset('template/d4-akutansi/assets/img/ALUR-PENDAFTARAN-SUSULAN_HD.png') }}"
                style="width: 100%; height: auto;" alt="">
        </div>
    </section>

    <section id="about" class="about">
        <div class="container" data-aos="fade-up">

            <div class="row g-4 g-lg-12" data-aos="fade-up" data-aos-delay="200">

                <div class="col-lg-12">
                    <strong>Jadwal Ujian Susulan Ujian Akhir Semester (UAS) Reguler A, B, CK & CS:</strong>
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
                                <th scope="row">REGULER</th>
                                <td>19 Desember 2022 s/d 03 Januari 2023</td>
                                <td>–</td>
                                <td>05 Januari 2023</td>
                                <td>Sesi 1. 09.00 – 12. 00 WIB | Sesi 2. 14.00 – 17.00 WIB</td>
                            </tr>
                        </tbody>
                    </table>

                </div>

            </div>

        </div>
    </section>
@endsection
