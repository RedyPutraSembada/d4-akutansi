<?php

namespace App\Http\Controllers;

use App\Models\ProfilLulusan;
use App\Models\StrukturOrganisasi;
use App\Models\TabelProfilLulusan;
use Illuminate\Http\Request;

class ProfilLulusanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $strukturOrganisasi = StrukturOrganisasi::all()->first();
        $profilLulusan = ProfilLulusan::all()->first();
        $tabelProfilLulusans = TabelProfilLulusan::all();
        return view('pages.profilLulusan', [
            'strukturOrganisasi' => $strukturOrganisasi,
            'profilLulusan' => $profilLulusan,
            'tabelProfilLulusans' => $tabelProfilLulusans,
        ]);
    }
}
