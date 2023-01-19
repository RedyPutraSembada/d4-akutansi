<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\UjianSusulan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class LayananAkademikAdminController extends Controller
{
    public function index()
    {
        $ujianSusulans = UjianSusulan::all();
        return view('pages.admin.layanan-akademik.index', [
            'ujianSusulans' => $ujianSusulans,
        ]);
    }


    //? Aksi Bagian Ujian Susulan
    public function createUjianSusulan()
    {
        return view('pages.admin.layanan-akademik.ujian-susulan.createUjianSusulan');
    }

    public function storeUjianSusulan(Request $request)
    {
        $data = $request->validate([
            'judul' => 'required|max:255',
            'deskripsi' => 'required',
            'img' => 'required|mimes:jpg,jpeg,png,webp,svg|max:1024',
            'title_table' => 'required|max:255',
            'shift' => 'required|max:255',
            'tgl_pendaftaran' => 'required',
            'ruang_pelaksanaan' => 'required',
            'tgl_pelaksanaan' => 'required',
            'jam_pelaksanaan' => 'required',
        ]);

        $data['img'] = $request->file('img')->store('images/ujian-susulan', 'public');

        UjianSusulan::create($data);
        Alert::success('Berhasil', 'Data Ujian Susulan Berhasil Ditambahkan');
        return redirect(route('halaman-layanan-akademik'));
    }

    public function editUjianSusulan($id)
    {
        $ujianSusulan = UjianSusulan::findOrFail($id);
        return view('pages.admin.layanan-akademik.ujian-susulan.editUjianSusulan', [
            'ujianSusulan' => $ujianSusulan
        ]);
    }

    public function updateUjianSusulan(Request $request, $id)
    {
        $ujianSusulan = UjianSusulan::findOrFail($id);
        $data = $request->validate([
            'judul' => 'required|max:255',
            'deskripsi' => 'required',
            'img' => 'mimes:jpg,jpeg,png,webp,svg|max:1024',
            'title_table' => 'required|max:255',
            'shift' => 'required|max:255',
            'tgl_pendaftaran' => 'required',
            'ruang_pelaksanaan' => 'required',
            'tgl_pelaksanaan' => 'required',
            'jam_pelaksanaan' => 'required',
        ]);
        if ($request->file('img')) {
            Storage::delete($ujianSusulan->img);
            $data['img'] = $request->file('img')->store('images/ujian-susulan', 'public');
        } else {
            $data['img'] = $ujianSusulan->img;
        }

        $ujianSusulan->update($data);
        Alert::success('Berhasil', 'Data Ujian Susulan Berhasil Diubah');
        return redirect(route('halaman-layanan-akademik'));
    }

    public function destroyUjianSusulan($id)
    {
        $ujianSusulan = UjianSusulan::findOrFail($id);
        Storage::delete($ujianSusulan->img);
        UjianSusulan::destroy($ujianSusulan->id);

        Alert::success('Berhasil', 'Data Ujian Susulan Berhasil Dihapus');
        return redirect(route('halaman-layanan-akademik'));
    }
    //? Penutup Aksi Bagian Ujian Susulan
}
