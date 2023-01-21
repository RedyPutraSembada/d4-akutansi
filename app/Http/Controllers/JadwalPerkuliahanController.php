<?php

namespace App\Http\Controllers;

use App\Models\JadwalPerkuliahan;
use App\Models\KetenRevisiKrs;
use App\Models\StrukturOrganisasi;
use App\Models\TabelJadwalPerkuliahan;
use Illuminate\Http\Request;

class JadwalPerkuliahanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $strukturOrganisasi = StrukturOrganisasi::all()->first();
        $jadwalPerkuliahan = JadwalPerkuliahan::all()->first();
        $ketentuanRevisis = KetenRevisiKrs::all();
        $tabelJadwalPerkuliahans = TabelJadwalPerkuliahan::all();
        return view('pages.jadwalPerkuliahan', [
            'strukturOrganisasi' => $strukturOrganisasi,
            'jadwalPerkuliahan' => $jadwalPerkuliahan,
            'ketentuanRevisis' => $ketentuanRevisis,
            'tabelJadwalPerkuliahans' => $tabelJadwalPerkuliahans,
        ]);
    }
}
