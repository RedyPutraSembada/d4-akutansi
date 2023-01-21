<?php

namespace App\Http\Controllers;

use App\Models\Kurikulum;
use App\Models\StrukturOrganisasi;
use App\Models\UjianSusulan;
use Illuminate\Http\Request;

class UjianSusulanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $strukturOrganisasi = StrukturOrganisasi::all()->first();
        $ujianSusulan = UjianSusulan::all()->first();
        return view('pages.ujianSusulan', [
            'ujianSusulan' => $ujianSusulan,
            'strukturOrganisasi' => $strukturOrganisasi,
        ]);
    }
}
