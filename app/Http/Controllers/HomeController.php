<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\BeritaAcara;
use App\Models\Hero;
use App\Models\Misi;
use App\Models\Profil;
use App\Models\SlideSwipe;
use App\Models\StrukturOrganisasi;
use App\Models\Tujuan;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $beritaAcaras = BeritaAcara::all();
        $strukturOrganisasi = StrukturOrganisasi::all()->first();
        $slideSwipes = SlideSwipe::all();
        $hero = Hero::all()->first();
        $profil = Profil::all()->first();
        $misis = Misi::all();
        $tujuans = Tujuan::all();
        return view('pages.home', [
            'hero' => $hero,
            'profil' => $profil,
            'misis' => $misis,
            'tujuans' => $tujuans,
            'slideSwipes' => $slideSwipes,
            'strukturOrganisasi' => $strukturOrganisasi,
            'beritaAcaras' => $beritaAcaras,
        ]);
    }
}
