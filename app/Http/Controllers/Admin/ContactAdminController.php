<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Kontak;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class ContactAdminController extends Controller
{
    public function index()
    {
        $kontaks = Kontak::all();
        return view('pages.admin.kontak.index', [
            'kontaks' => $kontaks,
        ]);
    }

    //? Aksi Bagian Kontak
    public function createContact()
    {
        return view('pages.admin.kontak.kontak.createKontak');
    }

    public function storeContact(Request $request)
    {
        $data = $request->validate([
            'content' => 'required',
            'iframe_map' => 'required',
        ]);

        Kontak::create($data);
        Alert::success('Berhasil', 'Data Kontak Berhasil Ditambahkan');
        return redirect(route('halaman-contact'));
    }

    public function editContact($id)
    {
        $kontak = Kontak::findOrFail($id);
        return view('pages.admin.kontak.kontak.editKontak', [
            'kontak' => $kontak
        ]);
    }

    public function updateContact(Request $request, $id)
    {
        $kontak = Kontak::findOrFail($id);
        $data = $request->validate([
            'content' => 'required',
            'iframe_map' => 'required',
        ]);
        $kontak->update($data);
        Alert::success('Berhasil', 'Data Kontak Berhasil Diubah');
        return redirect(route('halaman-contact'));
    }

    public function destroyContact($id)
    {
        $kontak = Kontak::findOrFail($id);
        Kontak::destroy($kontak->id);

        Alert::success('Berhasil', 'Data Kontak Berhasil Dihapus');
        return redirect(route('halaman-contact'));
    }
    //? Penutup Aksi Bagian Kontak
}
