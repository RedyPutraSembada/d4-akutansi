<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Akuntansi Perpajakan D4 - Unpam</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    {{--  style  --}}
    @include('components.d4-akutansi.style')
    {{--  end style  --}}
</head>

<body>

    {{--  header  --}}
    @include('components.d4-akutansi.header')
    {{--  end header  --}}

    {{--  section hero animated  --}}
    @yield('hero')
    {{--  end section hero animated  --}}


    <main id="main">

        @yield('content')

        {{--  footer  --}}
        @include('components.d4-akutansi.footer')
        {{--  end footer  --}}

        <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i
                class="bi bi-arrow-up-short"></i></a>

        <div id="preloader"></div>

        {{--  script  --}}
        @include('components.d4-akutansi.script')
        {{--  end script  --}}

        <!-- Modal Struktur Organisasi -->
        <div class="modal fade bg-transparent" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog bg-transparent">
                <div class="modal-content bg-transparent align-items-center">
                    <img src="{{ asset('storage/' . $strukturOrganisasi->img_struktur_organisasi) }}" alt=""
                        width="1000px" class="align-items-lg-center">
                    <div class="">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </main>

</body>

</html>
