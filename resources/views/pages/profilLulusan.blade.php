@extends('layouts.d4-akutansi.app')

@section('content')
    <section class="mt-5">
        <div class="container-fluid">
            <div class="section-header">
                <h3>{{ $profilLulusan->judul_atas }}</h3>
                <img src="{{ asset('storage/' . $profilLulusan->img) }}" class="img-fluid p-3" alt="...">
                {!! $profilLulusan->content !!}
                <h3 class="text-center tekt-bold">{!! $profilLulusan->judul_table_bawah !!}</h3>

                <div>
                    <table class="table" border="1" cellpadding="10">
                        <thead>
                            <tr>
                                <th scope="col">Profil Lulusan
                                    (2)
                                </th>
                                <th scope="row">Deskripsi
                                    (3)
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($tabelProfilLulusans as $tabelProfilLulusan)
                                <tr>
                                    <td>{{ $tabelProfilLulusan->profile_lulusan }}
                                    </td>
                                    <td colspan="2">{{ $tabelProfilLulusan->deskripsi }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        </div>
    </section>
@endsection
