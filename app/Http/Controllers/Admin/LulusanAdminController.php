<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\IjazahTranskipNilai;
use App\Models\ProfilLulusan;
use App\Models\TabelProfilLulusan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class LulusanAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tabelProfilLulusans = TabelProfilLulusan::all();
        $profilLulusans = ProfilLulusan::all();
        $izajahTranskipNilais = IjazahTranskipNilai::all();
        return view('pages.admin.lulusan.index', [
            'izajahTranskipNilais' => $izajahTranskipNilais,
            'profilLulusans' => $profilLulusans,
            'tabelProfilLulusans' => $tabelProfilLulusans
        ]);
    }

    //? Aksi Bagian Layanan Ijazah & Transkip Nilai
    public function createIjazahTranskip()
    {
        return view('pages.admin.lulusan.ijazah-transkip-nilai.createIjazahTranskip');
    }

    public function storeIjazahTranskip(Request $request)
    {
        $data = $request->validate([
            'judul' => 'required|max:255',
            'deskripsi_tengah' => 'required',
            'deskripsi_bawah' => 'required',
        ]);

        IjazahTranskipNilai::create($data);
        Alert::success('Berhasil', 'Data Layanan Ijazah & Transkip Nilai Berhasil Ditambahkan');
        return redirect(route('halaman-lulusan'));
    }

    public function editIjazahTranskip($id)
    {
        $ijazahTranskip = IjazahTranskipNilai::findOrFail($id);
        return view('pages.admin.lulusan.ijazah-transkip-nilai.editIjazahTranskip', [
            'ijazahTranskip' => $ijazahTranskip
        ]);
    }

    public function updateIjazahTranskip(Request $request, $id)
    {
        $ijazahTranskip = IjazahTranskipNilai::findOrFail($id);
        $data = $request->validate([
            'judul' => 'required|max:255',
            'deskripsi_tengah' => 'required',
            'deskripsi_bawah' => 'required',
        ]);
        $ijazahTranskip->update($data);
        Alert::success('Berhasil', 'Data Layanan Ijazah & Transkip Nilai Berhasil Diubah');
        return redirect(route('halaman-lulusan'));
    }

    public function destroyIjazahTranskip($id)
    {
        $ijazahTranskip = IjazahTranskipNilai::findOrFail($id);
        IjazahTranskipNilai::destroy($ijazahTranskip->id);

        Alert::success('Berhasil', 'Data Layanan Ijazah & Transkip Nilai Berhasil Dihapus');
        return redirect(route('halaman-lulusan'));
    }
    //? Penutup Aksi Bagian Layanan Ijazah & Transkip Nilai

    //? Aksi Bagian Profile Lulusan
    public function createProfilLulusan()
    {
        return view('pages.admin.lulusan.profil-lulusan.createProfilLulusan');
    }

    public function storeProfilLulusan(Request $request)
    {
        $data = $request->validate([
            'judul_atas' => 'required|max:255',
            'img' => 'required|mimes:jpg,jpeg,png,webp,svg|max:1024',
            'content' => 'required',
            'judul_table_bawah' => 'required|max:255',
        ]);

        $data['img'] = $request->file('img')->store('images/profil-Lulusan', 'public');

        ProfilLulusan::create($data);
        Alert::success('Berhasil', 'Data Profil Lulusan Berhasil Ditambahkan');
        return redirect(route('halaman-lulusan'));
    }

    public function editProfilLulusan($id)
    {
        $profilLulusan = ProfilLulusan::findOrFail($id);
        return view('pages.admin.lulusan.profil-lulusan.editProfilLulusan', [
            'profilLulusan' => $profilLulusan
        ]);
    }

    public function updateProfilLulusan(Request $request, $id)
    {
        $profilLulusan = ProfilLulusan::findOrFail($id);
        $data = $request->validate([
            'judul_atas' => 'required|max:255',
            'img' => 'required|mimes:jpg,jpeg,png,webp,svg|max:1024',
            'content' => 'required',
            'judul_table_bawah' => 'required|max:255',
        ]);
        if ($request->file('img')) {
            Storage::delete($profilLulusan->img);
            $data['img'] = $request->file('img')->store('images/profil-Lulusan', 'public');
        } else {
            $data['img'] = $profilLulusan->img;
        }

        $profilLulusan->update($data);
        Alert::success('Berhasil', 'Data Profil Lulusan Berhasil Diubah');
        return redirect(route('halaman-lulusan'));
    }

    public function destroyProfilLulusan($id)
    {
        $profilLulusan = ProfilLulusan::findOrFail($id);
        Storage::delete($profilLulusan->img);
        ProfilLulusan::destroy($profilLulusan->id);

        Alert::success('Berhasil', 'Data Profil Lulusan Berhasil Dihapus');
        return redirect(route('halaman-lulusan'));
    }
    //? Penutup Aksi Bagian Profile Lulusan

    //? Aksi Bagian Tabel Profile Lulusan
    public function createTabelProfilLulusan()
    {
        return view('pages.admin.lulusan.tabel-profil-lulusan.createTabelProfilLulusan');
    }

    public function storeTabelProfilLulusan(Request $request)
    {
        $data = $request->validate([
            'profile_lulusan' => 'required',
            'deskripsi' => 'required',
        ]);

        TabelProfilLulusan::create($data);
        Alert::success('Berhasil', 'Data Tabel Profile Lulusan Berhasil Ditambahkan');
        return redirect(route('halaman-lulusan'));
    }

    public function editTabelProfilLulusan($id)
    {
        $tabelProfilLulusan = TabelProfilLulusan::findOrFail($id);
        return view('pages.admin.lulusan.tabel-profil-lulusan.editTabelProfilLulusan', [
            'tabelProfilLulusan' => $tabelProfilLulusan
        ]);
    }

    public function updateTabelProfilLulusan(Request $request, $id)
    {
        $tabelProfileLulusan = TabelProfilLulusan::findOrFail($id);
        $data = $request->validate([
            'profile_lulusan' => 'required',
            'deskripsi' => 'required',
        ]);
        $tabelProfileLulusan->update($data);
        Alert::success('Berhasil', 'Data Tabel Profile Lulusan Berhasil Diubah');
        return redirect(route('halaman-lulusan'));
    }

    public function destroyTabelProfilLulusan($id)
    {
        $tabelProfileLulusan = TabelProfilLulusan::findOrFail($id);
        TabelProfilLulusan::destroy($tabelProfileLulusan->id);

        Alert::success('Berhasil', 'Data Tabel Profile Lulusan Berhasil Dihapus');
        return redirect(route('halaman-lulusan'));
    }
    //? Penutup Aksi Bagian Tabel Profile Lulusan
}
