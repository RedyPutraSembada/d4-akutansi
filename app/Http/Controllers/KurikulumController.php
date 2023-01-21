<?php

namespace App\Http\Controllers;

use App\Models\Kurikulum;
use App\Models\StrukturOrganisasi;
use Illuminate\Http\Request;

class KurikulumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $strukturOrganisasi = StrukturOrganisasi::all()->first();
        $kurikulum = Kurikulum::all()->first();
        return view('pages.kurikulum', [
            'strukturOrganisasi' => $strukturOrganisasi,
            'kurikulum' => $kurikulum,
        ]);
    }
}
