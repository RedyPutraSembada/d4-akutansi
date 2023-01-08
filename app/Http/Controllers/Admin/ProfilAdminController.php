<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\StrukturOrganisasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class ProfilAdminController extends Controller
{

    public function index()
    {
        $strukturs = StrukturOrganisasi::all();
        return view('pages.admin.profil.index', [
            'strukturs' => $strukturs
        ]);
    }

    //? Aksi Bagian Struktur Organisasi
    public function createStruktur()
    {
        return view('pages.admin.profil.struktur-organisasi.createStruktur');
    }

    public function storeStruktur(Request $request)
    {
        $data = $request->validate([
            'img_struktur_organisasi' => 'required|mimes:jpg,jpeg,png,webp,svg|max:1024'
        ]);

        $data['img_struktur_organisasi'] = $request->file('img_struktur_organisasi')->store('images/struktur-organisasi', 'public');

        StrukturOrganisasi::create($data);
        Alert::success('Berhasil', 'Data Struktur Organisasi Berhasil Ditambahkan');
        return redirect(route('halaman-profil'));
    }

    public function show($id)
    {
        //
    }

    public function editStruktur($id)
    {
        $struktur = StrukturOrganisasi::findOrFail($id);
        return view('pages.admin.profil.struktur-organisasi.editStruktur', [
            'struktur' => $struktur
        ]);
    }

    public function updateStruktur(Request $request, $id)
    {
        $struktur = StrukturOrganisasi::findOrFail($id);
        $data = $request->validate([
            'img_struktur_organisasi' => 'mimes:jpg,jpeg,png,webp,svg|max:1024'
        ]);
        if ($request->file('img_struktur_organisasi')) {
            Storage::delete($struktur->img_struktur_organisasi);
            $data['img_struktur_organisasi'] = $request->file('img_struktur_organisasi')->store('images/struktur-organisasi', 'public');
        } else {
            Alert::warning('Tidak Berubah', 'Data Struktur Organisasi Tidak Ada Yang Diubah');
            return redirect(route('halaman-profil'));
        }

        $struktur->update($data);
        Alert::success('Berhasil', 'Data Struktur Organisasi Berhasil Diubah');
        return redirect(route('halaman-profil'));
    }

    public function destroyStruktur($id)
    {
        $struktur = StrukturOrganisasi::findOrFail($id);
        Storage::delete($struktur->img_struktur_organisasi);
        StrukturOrganisasi::destroy($struktur->id);

        Alert::success('Berhasil', 'Data Struktur Organisasi Berhasil Dihapus');
        return redirect(route('halaman-profil'));
    }
    //? Penutup Aksi Bagian Struktur Organisasi
}
