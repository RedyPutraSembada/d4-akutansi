<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BeritaAcara;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class BeritaAcaraAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $beritaAcaras = BeritaAcara::all();
        return view('pages.admin.berita-acara.index', [
            'beritaAcaras' => $beritaAcaras
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.berita-acara.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'judul_berita' => 'required|max:255',
            'tanggal' => 'required',
            'deskripsi' => 'required',
            'img_berita' => 'required|mimes:jpg,jpeg,png,webp,svg|max:1024'
        ]);

        $data['img_berita'] = $request->file('img_berita')->store('images/berita-acara', 'public');

        BeritaAcara::create($data);
        Alert::success('Berhasil', 'Data Berita Acara Berhasil Ditambahkan');
        return redirect(route('berita-acara.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $beritaAcara = BeritaAcara::findOrFail($id);
        return view('pages.admin.berita-acara.edit', [
            'beritaAcara' => $beritaAcara
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $beritaAcara = BeritaAcara::findOrFail($id);
        $data = $request->validate([
            'judul_berita' => 'required|max:255',
            'tanggal' => 'required',
            'deskripsi' => 'required',
            'img_berita' => 'mimes:jpg,jpeg,png,webp,svg|max:1024'
        ]);
        if ($request->file('img_berita')) {
            Storage::delete($beritaAcara->img_berita);
            $data['img_berita'] = $request->file('img_berita')->store('images/berita-acara', 'public');
        } else {
            $data['img_berita'] = $beritaAcara->img_berita;
        }

        $beritaAcara->update($data);
        Alert::success('Berhasil', 'Data Berita Acara Berhasil Diubah');
        return redirect(route('berita-acara.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $beritaAcara = BeritaAcara::findOrFail($id);
        Storage::delete($beritaAcara->img_berita);
        BeritaAcara::destroy($beritaAcara->id);

        Alert::success('Berhasil', 'Data Berita Acar Berhasil Dihapus');
        return redirect(route('berita-acara.index'));
    }
}
