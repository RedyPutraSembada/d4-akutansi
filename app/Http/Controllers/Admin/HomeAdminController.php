<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Hero;
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
        $heroes = Hero::all();
        return view('pages.admin.home.index', [
            'heroes' => $heroes
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createHero()
    {
        return view('pages.admin.home.createHero');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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
    public function editHero($id)
    {
        $hero = Hero::findOrFail($id);
        return view('pages.admin.home.editHero', [
            'hero' => $hero
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroyHero($id)
    {
        $hero = Hero::findOrFail($id);
        Storage::delete($hero->img_hero);
        Hero::destroy($hero->id);

        Alert::success('Berhasil', 'Data Hero Berhasil Dihapus');
        return redirect(route('halaman-home'));
    }
}
