<?php

namespace App\Http\Controllers;

use App\Models\IjazahTranskipNilai;
use App\Models\StrukturOrganisasi;
use Illuminate\Http\Request;

class layananIjazahTranskipController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $strukturOrganisasi = StrukturOrganisasi::all()->first();
        $transkipNilai = IjazahTranskipNilai::all()->first();
        return view('pages.layananIjazahTranskip', [
            'strukturOrganisasi' => $strukturOrganisasi,
            'transkipNilai' => $transkipNilai,
        ]);
    }
}
