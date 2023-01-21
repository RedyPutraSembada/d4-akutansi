<?php

namespace App\Http\Controllers;

use App\Models\FormulirAkademik;
use App\Models\StrukturOrganisasi;
use Illuminate\Http\Request;

class FormulirAkademikController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $strukturOrganisasi = StrukturOrganisasi::all()->first();
        $formulirAkademiks = FormulirAkademik::all();
        return view('pages.formulirAkademik', [
            'strukturOrganisasi' => $strukturOrganisasi,
            'formulirAkademiks' => $formulirAkademiks,
        ]);
    }
}
