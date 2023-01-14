<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\FormulirAkademik;
use App\Models\JadwalPerkuliahan;
use App\Models\KetenRevisiKrs;
use App\Models\Kurikulum;
use App\Models\TabelJadwalPerkuliahan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class AkademikAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $formulirs = FormulirAkademik::all();
        $tabels = TabelJadwalPerkuliahan::all();
        $ketRevisis = KetenRevisiKrs::all();
        $jadwalPerkuliahans = JadwalPerkuliahan::all();
        $kurikulums = Kurikulum::all();
        return view('pages.admin.akademik.index', [
            'kurikulums' => $kurikulums,
            'jadwalPerkuliahans' => $jadwalPerkuliahans,
            'ketRevisis' => $ketRevisis,
            'tabels' => $tabels,
            'formulirs' => $formulirs
        ]);
    }

    //? Aksi Bagian Kurikulum
    public function createKurikulum()
    {
        return view('pages.admin.akademik.kurikulum.createKurikulum');
    }

    public function storeKurikulum(Request $request)
    {
        $data = $request->validate([
            'judul' => 'required|max:255',
            'img_kurikulum' => 'required|mimes:jpg,jpeg,png,webp,svg|max:1024'
        ]);

        $data['img_kurikulum'] = $request->file('img_kurikulum')->store('images/kurikulum', 'public');

        Kurikulum::create($data);
        Alert::success('Berhasil', 'Data Kurikulum Berhasil Ditambahkan');
        return redirect(route('halaman-akademik'));
    }

    // public function show($id)
    // {
    //     //
    // }

    public function editKurikulum($id)
    {
        $kurikulum = Kurikulum::findOrFail($id);
        return view('pages.admin.akademik.kurikulum.editKurikulum', [
            'kurikulum' => $kurikulum
        ]);
    }

    public function updateKurikulum(Request $request, $id)
    {
        $kurikulum = Kurikulum::findOrFail($id);
        $data = $request->validate([
            'judul' => 'required|max:255',
            'img_kurikulum' => 'mimes:jpg,jpeg,png,webp,svg|max:1024'
        ]);
        if ($request->file('img_kurikulum')) {
            Storage::delete($kurikulum->img_kurikulum);
            $data['img_kurikulum'] = $request->file('img_kurikulum')->store('images/hero', 'public');
        } else {
            $data['img_kurikulum'] = $kurikulum->img_kurikulum;
        }

        $kurikulum->update($data);
        Alert::success('Berhasil', 'Data Kurikulum Berhasil Diubah');
        return redirect(route('halaman-akademik'));
    }

    public function destroyKurikulum($id)
    {
        $kurikulum = Kurikulum::findOrFail($id);
        Storage::delete($kurikulum->img_kurikulum);
        Kurikulum::destroy($kurikulum->id);

        Alert::success('Berhasil', 'Data Kurikulum Berhasil Dihapus');
        return redirect(route('halaman-akademik'));
    }
    // //? Penutup Aksi Bagian Kurikulum

    //? Aksi Bagian JadwalPerkuliahan
    public function createJadwalPerkuliahan()
    {
        return view('pages.admin.akademik.jadwal-perkuliahan.createJadwalPerkuliahan');
    }

    public function storeJadwalPerkuliahan(Request $request)
    {
        $data = $request->validate([
            'judul_atas' => 'required|max:255',
            'penjelasan' => 'required',
            'mengikuti_revisi' => 'required',
            'judul_tengah' => 'required|max:255',
            'catatan_bawah' => 'required',
        ]);

        JadwalPerkuliahan::create($data);
        Alert::success('Berhasil', 'Data Jadwal Perkuliahan Berhasil Ditambahkan');
        return redirect(route('halaman-akademik'));
    }

    public function show($id)
    {
        //
    }

    public function editJadwalPerkuliahan($id)
    {
        $jadwal = JadwalPerkuliahan::findOrFail($id);
        return view('pages.admin.akademik.jadwal-perkuliahan.editJadwalPerkuliahan', [
            'jadwal' => $jadwal
        ]);
    }

    public function updateJadwalPerkuliahan(Request $request, $id)
    {
        $jadwal = JadwalPerkuliahan::findOrFail($id);
        $data = $request->validate([
            'judul_atas' => 'required|max:255',
            'penjelasan' => 'required',
            'mengikuti_revisi' => 'required',
            'judul_tengah' => 'required|max:255',
            'catatan_bawah' => 'required',
        ]);

        $jadwal->update($data);
        Alert::success('Berhasil', 'Data Jadwal Perkuliahan Berhasil Diubah');
        return redirect(route('halaman-akademik'));
    }

    public function destroyJadwalPerkuliahan($id)
    {
        $jadwal = JadwalPerkuliahan::findOrFail($id);
        JadwalPerkuliahan::destroy($jadwal->id);

        Alert::success('Berhasil', 'Data Jadwal Perkulihan Berhasil Dihapus');
        return redirect(route('halaman-akademik'));
    }
    //? Penutup Aksi Bagian JadwalPerkuliahan

    //? Aksi Bagian Ketentuan Revisi
    public function createKetRevisi()
    {
        return view('pages.admin.akademik.ketentuan-revisi.createKetRevisi');
    }

    public function storeKetRevisi(Request $request)
    {
        $data = $request->validate([
            'list' => 'required',
        ]);

        KetenRevisiKrs::create($data);
        Alert::success('Berhasil', 'Data Ketentuan Revisi Telah di Tambah Silahkan Tambah data kembali');
        return redirect(route('create-ketentuan-revisi'));
    }

    public function editKetRevisi($id)
    {
        $ketRevisi = KetenRevisiKrs::findOrFail($id);
        return view('pages.admin.akademik.ketentuan-revisi.editKetRevisi', [
            'ketRevisi' => $ketRevisi
        ]);
    }

    public function updateKetRevisi(Request $request, $id)
    {
        $ketRevisi = KetenRevisiKrs::findOrFail($id);
        $data = $request->validate([
            'list' => 'required',
        ]);
        $ketRevisi->update($data);
        Alert::success('Berhasil', 'Data Ketentuan Revisi Berhasi Diubah');
        return redirect(route('halaman-akademik'));
    }

    public function destroyKetRevisi($id)
    {
        $ketRevisi = KetenRevisiKrs::findOrFail($id);
        KetenRevisiKrs::destroy($ketRevisi->id);

        Alert::success('Berhasil', 'Data Ketentuan Revisi Berhasi Dihapus');
        return redirect(route('halaman-akademik'));
    }
    //? Penutup Aksi Bagian Ketentuan Revisi

    //? Aksi Bagian Tabel Jadwal Perkuliahan
    public function createTblJadwalPerkuliahan()
    {
        return view('pages.admin.akademik.tabel-jadwal-perkuliahan.createTblJadwalPerkuliahan');
    }

    public function storeTblJadwalPerkuliahan(Request $request)
    {
        $data = $request->validate([
            'kd_mk' => 'required|max:255',
            'mata_kuliah' => 'required|max:255',
            'sks' => 'required|numeric',
        ]);

        TabelJadwalPerkuliahan::create($data);
        Alert::success('Berhasil', 'Data Tabel Jadwal Perkuliahan Berhasil Ditambahkan');
        return redirect(route('halaman-akademik'));
    }

    public function editTblJadwalPerkuliahan($id)
    {
        $tabelJadwal = TabelJadwalPerkuliahan::findOrFail($id);
        return view('pages.admin.akademik.tabel-jadwal-perkuliahan.editTblJadwalPerkuliahan', [
            'tabelJadwal' => $tabelJadwal
        ]);
    }

    public function updateTblJadwalPerkuliahan(Request $request, $id)
    {
        $tabelJadwal = TabelJadwalPerkuliahan::findOrFail($id);
        $data = $request->validate([
            'kd_mk' => 'required|max:255',
            'mata_kuliah' => 'required|max:255',
            'sks' => 'required|numeric',
        ]);

        $tabelJadwal->update($data);
        Alert::success('Berhasil', 'Data Tabel Jadwal Perkuliahan Berhasil Diubah');
        return redirect(route('halaman-akademik'));
    }

    public function destroyTblJadwalPerkuliahan($id)
    {
        $tabelJadwal = TabelJadwalPerkuliahan::findOrFail($id);
        TabelJadwalPerkuliahan::destroy($tabelJadwal->id);

        Alert::success('Berhasil', 'Data Tabel Jadwal Perkuliahan Berhasil Dihapus');
        return redirect(route('halaman-akademik'));
    }
    //? Penutup Aksi Bagian Tabel Jadwal Perkuliahan

    //? Aksi Bagian Formulir Akademik
    public function createFormulirAkademik()
    {
        return view('pages.admin.akademik.formulir-akademik.createFormulirAkademik');
    }

    public function storeFormulirAkademik(Request $request)
    {
        $data = $request->validate([
            'nama_file' => 'required|max:255',
            'link_file' => 'required',
        ]);

        FormulirAkademik::create($data);
        Alert::success('Berhasil', 'Data Formulir Akademik Berhasil Ditambahkan');
        return redirect(route('halaman-akademik'));
    }

    public function editFormulirAkademik($id)
    {
        $formulirAkademik = FormulirAkademik::findOrFail($id);
        return view('pages.admin.akademik.formulir-akademik.editFormulirAkademik', [
            'formulirAkademik' => $formulirAkademik
        ]);
    }

    public function updateFormulirAkademik(Request $request, $id)
    {
        $formulirAkademik = FormulirAkademik::findOrFail($id);
        $data = $request->validate([
            'nama_file' => 'required|max:255',
            'link_file' => 'required',
        ]);

        $formulirAkademik->update($data);
        Alert::success('Berhasil', 'Data Formulir Akademik Berhasil Diubah');
        return redirect(route('halaman-akademik'));
    }

    public function destroyFormulirAkademik($id)
    {
        $formulirAkademik = FormulirAkademik::findOrFail($id);
        FormulirAkademik::destroy($formulirAkademik->id);

        Alert::success('Berhasil', 'Data Formulir Akademik Berhasil Dihapus');
        return redirect(route('halaman-akademik'));
    }
    //? Penutup Aksi Bagian Formulir Akademik
}
