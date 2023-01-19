<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Hero;
use App\Models\Misi;
use App\Models\Profil;
use App\Models\SlideSwipe;
use App\Models\Tujuan;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HomeAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $imageSwipes = SlideSwipe::all();
        $heroes = Hero::all();
        $profils = Profil::all();
        $misis = Misi::all();
        $tujuans = Tujuan::all();
        return view('pages.admin.home.index', [
            'heroes' => $heroes,
            'profils' => $profils,
            'misis' => $misis,
            'tujuans' => $tujuans,
            'imageSwipes' => $imageSwipes,
        ]);
    }


    //? Aksi Bagian Hero
    public function createHero()
    {
        return view('pages.admin.home.hero.createHero');
    }

    public function storeHero(Request $request)
    {
        $data = $request->validate([
            'judul_hero' => 'required|max:255',
            'sub_judul' => 'required',
            'sk_pendirian' => 'required',
            'img_hero' => 'required|mimes:jpg,jpeg,png,webp,svg|max:1024'
        ]);

        $data['img_hero'] = $request->file('img_hero')->store('images/hero', 'public');

        Hero::create($data);
        Alert::success('Berhasil', 'Data Hero Berhasil Ditambahkan');
        return redirect(route('halaman-home'));
    }

    public function editHero($id)
    {
        $hero = Hero::findOrFail($id);
        return view('pages.admin.home.hero.editHero', [
            'hero' => $hero
        ]);
    }

    public function updateHero(Request $request, $id)
    {
        $hero = Hero::findOrFail($id);
        $data = $request->validate([
            'judul_hero' => 'required|max:255',
            'sub_judul' => 'required',
            'sk_pendirian' => 'required',
            'img_hero' => 'mimes:jpg,jpeg,png,webp,svg|max:1024'
        ]);
        if ($request->file('img_hero')) {
            Storage::delete($hero->img_hero);
            $data['img_hero'] = $request->file('img_hero')->store('images/hero', 'public');
        } else {
            $data['img_hero'] = $hero->img_hero;
        }

        $hero->update($data);
        Alert::success('Berhasil', 'Data Hero Berhasil Diubah');
        return redirect(route('halaman-home'));
    }

    public function destroyHero($id)
    {
        $hero = Hero::findOrFail($id);
        Storage::delete($hero->img_hero);
        Hero::destroy($hero->id);

        Alert::success('Berhasil', 'Data Hero Berhasil Dihapus');
        return redirect(route('halaman-home'));
    }
    //? Penutup Aksi Bagian Hero


    //? Aksi Bagian Visi dan HERO Vidio
    public function createVisi()
    {
        return view('pages.admin.home.visi.createVisi');
    }

    public function storeVisi(Request $request)
    {
        $data = $request->validate([
            'visi' => 'required',
            'judul_hero_vidio' => 'required|max:255',
            'link_yt_profil' => 'required',
            'jmlh_mhs_aktif' => 'required|numeric',
            'jmlh_reg' => 'required|numeric',
            'deskripsi' => 'required',
        ]);

        Profil::create($data);
        Alert::success('Berhasil', 'Data Visi Dan Hero Vidio Berhasil Ditambahkan');
        return redirect(route('halaman-home'));
    }

    public function editVisi($id)
    {
        $profil = Profil::findOrFail($id);
        return view('pages.admin.home.visi.editVisi', [
            'profil' => $profil
        ]);
    }

    public function updateVisi(Request $request, $id)
    {
        $profil = Profil::findOrFail($id);
        $data = $request->validate([
            'visi' => 'required',
            'judul_hero_vidio' => 'required|max:255',
            'link_yt_profil' => 'required',
            'jmlh_mhs_aktif' => 'required|numeric',
            'jmlh_reg' => 'required|numeric',
            'deskripsi' => 'required',
        ]);
        $profil->update($data);
        Alert::success('Berhasil', 'Data Visi Dan Hero Vidio Berhasil Diubah');
        return redirect(route('halaman-home'));
    }

    public function destroyVisi($id)
    {
        $profil = Profil::findOrFail($id);
        Profil::destroy($profil->id);

        Alert::success('Berhasil', 'Data Visi Dan Hero Vidio Berhasil Dihapus');
        return redirect(route('halaman-home'));
    }
    //? Penutup Aksi Bagian Visi Dan HERO Vidio


    //? Aksi Bagian Misi
    public function createMisi()
    {
        return view('pages.admin.home.misi.createMisi');
    }

    public function storeMisi(Request $request)
    {
        $data = $request->validate([
            'list' => 'required',
        ]);

        Misi::create($data);
        Alert::success('Berhasil', 'Data Misi Telah di Tambah Silahkan Tambah data kembali');
        return redirect(route('create-misi'));
    }

    public function editMisi($id)
    {
        $misi = Misi::findOrFail($id);
        return view('pages.admin.home.misi.editMisi', [
            'misi' => $misi
        ]);
    }

    public function updateMisi(Request $request, $id)
    {
        $misi = Misi::findOrFail($id);
        $data = $request->validate([
            'list' => 'required',
        ]);
        $misi->update($data);
        Alert::success('Berhasil', 'Data Misi Berhasi Diubah');
        return redirect(route('halaman-home'));
    }

    public function destroyMisi($id)
    {
        $misi = Misi::findOrFail($id);
        Misi::destroy($misi->id);

        Alert::success('Berhasil', 'Data Misi Berhasi Dihapus');
        return redirect(route('halaman-home'));
    }
    //? Penutup Aksi Bagian Misi

    //? Aksi Bagian Tujuan
    public function createTujuan()
    {
        return view('pages.admin.home.tujuan.createTujuan');
    }

    public function storeTujuan(Request $request)
    {
        $data = $request->validate([
            'list' => 'required',
        ]);

        Tujuan::create($data);
        Alert::success('Berhasil', 'Data Misi Telah di Tambah Silahkan Tambah data kembali');
        return redirect(route('create-tujuan'));
    }

    public function editTujuan($id)
    {
        $tujuan = Tujuan::findOrFail($id);
        return view('pages.admin.home.tujuan.editTujuan', [
            'tujuan' => $tujuan
        ]);
    }

    public function updateTujuan(Request $request, $id)
    {
        $tujuan = Tujuan::findOrFail($id);
        $data = $request->validate([
            'list' => 'required',
        ]);
        $tujuan->update($data);
        Alert::success('Berhasil', 'Data Tujuan Berhasi Diubah');
        return redirect(route('halaman-home'));
    }

    public function destroyTujuan($id)
    {
        $tujuan = Tujuan::findOrFail($id);
        Tujuan::destroy($tujuan->id);

        Alert::success('Berhasil', 'Data Tujuan Berhasi Dihapus');
        return redirect(route('halaman-home'));
    }
    //? Penutup Aksi Bagian Misi

    //? Aksi Bagian Image Slide Swipe
    public function createSlideSwipe()
    {
        return view('pages.admin.home.slide-swipe.createSlideSwipe');
    }

    public function storeSlideSwipe(Request $request)
    {
        $data = $request->validate([
            'image_slide_swipes' => 'required|mimes:jpg,jpeg,png,webp,svg|max:1024'
        ]);

        $data['image_slide_swipes'] = $request->file('image_slide_swipes')->store('images/image-slide-swipe', 'public');

        SlideSwipe::create($data);
        Alert::success('Berhasil', 'Data Image Slide Swipe Berhasil Ditambahkan');
        return redirect(route('halaman-home'));
    }

    public function show($id)
    {
        //
    }

    public function editSlideSwipe($id)
    {
        $slideSwipe = SlideSwipe::findOrFail($id);
        return view('pages.admin.home.slide-swipe.editSlideSwipe', [
            'slideSwipe' => $slideSwipe
        ]);
    }

    public function updateSlideSwipe(Request $request, $id)
    {
        $slideSwipe = SlideSwipe::findOrFail($id);
        $data = $request->validate([
            'image_slide_swipes' => 'mimes:jpg,jpeg,png,webp,svg|max:1024'
        ]);
        if ($request->file('image_slide_swipes')) {
            Storage::delete($slideSwipe->image_slide_swipes);
            $data['image_slide_swipes'] = $request->file('image_slide_swipes')->store('images/image-slide-swipe', 'public');
        } else {
            Alert::warning('Tidak Berubah', 'Data Image Slide Swipe Tidak Ada Yang Diubah');
            return redirect(route('halaman-home'));
        }

        $slideSwipe->update($data);
        Alert::success('Berhasil', 'Data Image Slide Swipe Berhasil Diubah');
        return redirect(route('halaman-home'));
    }

    public function destroySlideSwipe($id)
    {
        $slideSwipe = SlideSwipe::findOrFail($id);
        Storage::delete($slideSwipe->image_slide_swipes);
        SlideSwipe::destroy($slideSwipe->id);

        Alert::success('Berhasil', 'Data Image Slide Swipe Berhasil Dihapus');
        return redirect(route('halaman-home'));
    }
    //? Penutup Aksi Bagian Image Slide Swipe
}
