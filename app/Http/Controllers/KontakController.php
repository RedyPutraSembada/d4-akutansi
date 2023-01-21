<?php

namespace App\Http\Controllers;

use App\Models\Kontak;
use App\Models\StrukturOrganisasi;
use Illuminate\Http\Request;

class KontakController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $strukturOrganisasi = StrukturOrganisasi::all()->first();
        $kontak = Kontak::all()->first();
        return view('pages.kontak', [
            'strukturOrganisasi' => $strukturOrganisasi,
            'kontak' => $kontak,
        ]);
    }
}
