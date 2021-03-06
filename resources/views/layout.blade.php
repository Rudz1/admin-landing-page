<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glider-js@1/glider.min.css">
    <title>Instituto Batucando Esperança</title>
    <style>
        .imagem__background {
            @foreach ($initialSections as $initialSection)background-image: url({{ url("storage/{$initialSection->image}") }} );
            @endforeach background-size: cover;
            height: 100%;
            left: -40px;
            position: relative;
            -webkit-mask-image: linear-gradient(to top, transparent 3%, black 200%);
            width: 100%;
        }

        @foreach ($slideSections as $key => $slideSection).img{{ $slideSection->id }} {
            background-image: url({{ url("storage/{$slideSection->image}") }});
            background-size: cover;
            background-position: center;
            margin: 0 0;
            position: relative;
            -webkit-mask-image: linear-gradient(to top, transparent 3%, black 100%);
            width: 100%;
            height: 100vh;
        }
        @endforeach

        .institucional__thumb {
            @foreach ($videoSections as $videoSection)
            background-image: url({{ url("storage/{$videoSection->image}") }});
            @endforeach
            background-size: cover;
            position: absolute;
            -webkit-mask-image: linear-gradient(to top, transparent 3%, black 200%);
            filter: brightness(80%);
            width: 100%;
            height: 283px;
            margin: 0;
        }

    </style>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/reset.css') }}" rel="stylesheet">
    <link href="{{ asset('css/normalize.css') }}" rel="stylesheet">
    <link href="{{ asset('css/formata.css') }}" rel="stylesheet">
    <link href="{{ asset('css/container.css') }}" rel="stylesheet">
    <link href="{{ asset('css/cabecalho.css') }}" rel="stylesheet">
    <link href="{{ asset('css/hero.css') }}" rel="stylesheet">
    <link href="{{ asset('css/secao.css') }}" rel="stylesheet">
    <link href="{{ asset('css/sobre.css') }}" rel="stylesheet">
    <link href="{{ asset('css/slider.css') }}" rel="stylesheet">
    <link href="{{ asset('css/projeto.css') }}" rel="stylesheet">
    <link href="{{ asset('css/batuqueiros.css') }}" rel="stylesheet">
    <link href="{{ asset('css/logo.css') }}" rel="stylesheet">
    <link href="{{ asset('css/rodape.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('css/intitucional.css') }}" rel="stylesheet">
</head>

<body>

    @yield('content')
    <!--SCRIPTS-->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/app_fotos.js') }}" defer></script>
    <script src="{{ asset('js/main.js') }}" defer></script>
    <script src="{{ asset('js/app_slide.js') }}" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/glider-js@1/glider.min.js "></script>

</body>

</html>
