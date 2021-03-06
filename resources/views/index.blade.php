@extends('layout')

@section('content')

    <!--CABEÇALHO - Neilton-->
    <header class="cabecalho">
        <div class="logo">
            @foreach ($logos as $logo)
                <img src="{{ url("storage/{$logo->logo}") }}" alt="logotipo do instituto Batucando Esperança">
            @endforeach
        </div>

        <button class="botao__cabecalho" type="button" data-toggle="collapse" onclick="openMenu()" data-target="#navbar">
            <i class="uil uil-bars burger__icon"></i>
        </button>

        <nav class="menu" id="navbar">
            <ul class="menu__lista">
                <li class="menu__item"><a class="menu__link close__menu times" href="#" onclick="closeMenu()">&times;</a>
                </li>
                <li class="menu__item"><a class="menu__link" href="#inicio">Início</a></li>
                <li class="menu__item"><a class="menu__link" href="#quem-somos">Quem Somos</a></li>
                <li class="menu__item"><a class="menu__link" href="#projetos">Projetos</a></li>
                <li class="menu__item"><a class="menu__link" href="#batuqueiros">Batuqueiros</a></li>
                <li class="menu__item"><a class="menu__link menu__link__contato" href="#contato">Contato</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <!--SESSÂO INICIAL Beatriz-->
        <section class="hero" id="inicio">
            <div>
                <div class="container__background">
                    <div class="background__hero">
                        <figure alt="imagem-fundo" class="imagem__background">
                        </figure>
                    </div>
                    <div class="descricao__background">
                        @foreach ($initialSections as $initialSection)
                            <h1>{{ $initialSection->title }}</h1>
                            <p>
                                {{ $initialSection->content }}
                            </p>
                        @endforeach
                    </div>
                    <div class="botao__video">
                        <a href="#video" class="play__video"><i class="uil uil-play-circle link_play"></i>Ver vídeo</a>
                    </div>
                </div>
            </div>
        </section>

        <!--SESSÂO QUEM SOMOS Beatriz-->
        <section class="sobre" id="quem-somos">
            @foreach ($areSections as $areSection)
                <div class="sombra__secao">
                    <h2>{{ $areSection->title }}</h2>
                </div>
                <div class="titulo__secao">
                    <h3>{{ $areSection->title }}</h3>
                </div>
                <p class="pilares">{{ $areSection->phrase }}</p>
            @endforeach

            <div class="sobre__cards">
                @foreach ($cardSections as $cardSection)
                    <div class="borda__sobre">
                        <h3 class="titulo__sobre"><i class="{{ $cardSection->icon }}"></i>{{ $cardSection->title }}
                        </h3>
                        <p class="texto__sobre">
                            {{ $cardSection->content }}
                        </p>
                    </div>
                @endforeach
            </div>

        </section>

        <!--SESSÂO NOSSOS PROJETOS Beatriz-->
        <section class="projetos" id="projetos">
            @foreach ($projectsSections as $projectsSection)
                <div>
                    <div class="sombra__secao">
                        <h2>{{ $projectsSection->title }}</h2>
                    </div>
                    <div class="titulo__secao">
                        <h3>{{ $projectsSection->title }}</h3>
                    </div>
                    <p class="pilares">{{ $projectsSection->phrase }}</p>
            @endforeach
            <article class="c-carousel c-carousel--simple">
                <div class="c-carousel__slides js-carousel--simple">
                    @foreach ($slideSections as $slideSection)
                        <article class="c-carousel__slide">
                            <div class="container__projeto">
                                <figure class="img{{ $slideSection->id }}"></figure>
                            </div>
                            <div class="texto__projeto">
                                <h3>{{ $slideSection->title }}</h3>
                                <p>
                                    {{ $slideSection->content }}
                                </p>
                            </div>
                        </article>
                    @endforeach

                </div>
                <div class="js-carousel--simple-dots " role="tablist "></div>
            </article>
            </div>
        </section>

        <!--SESSÃO NOSSOS BATUQUEIROS Beatriz-->
        <section class="batuqueiros" id="batuqueiros">
            @foreach ($drummerSections as $drummerSection)
                <div class="sombra__secao">
                    <h2>{{ $drummerSection->title }}</h2>
                </div>
                <div class="titulo__secao">
                    <h2>{{ $drummerSection->title }}</h2>
                </div>
                <p class="pilares">{{ $drummerSection->phrase }}</p>
            @endforeach
            <div class="batuqueiros__conteudo">
                <div class="flex__batuqueiros">
                    @foreach ($skillCardSections as $skillCardSection)
                        <div class="borda__batuqueiros">
                            <div class="box__imagem-batuqueiros">
                                <img src="{{ url("storage/{$skillCardSection->image}") }}" class="imagem__batuqueiros"
                                    alt="{{ $skillCardSection->title }}">
                            </div>
                            <div class="texto__batuqueiros">
                                <h3 class="titulo__batuqueiros">{{ $skillCardSection->title }}</h3>
                                <p class="descricao__batuqueiros">
                                    {{ $skillCardSection->content }}
                                </p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        <!--SESSÂO VEJA O VIDEO Beatriz-->
        <section class="institucional" id="video">
            <!-- <video src="" class="video__intitucional"></video> -->
            @foreach ($videoSections as $videoSection)
                <div class="institucional__container">
                    <div class="institucional__thumb">
                        <figure class="thumb__video"></figure>
                    </div>
                    <div class="institucional__texto">
                        <a href=" "><i class="uil uil-play-circle "></i></a>
                        <h2>{{ $videoSection->title }}</h2>
                        <p>
                            {{ $videoSection->phrase }}
                        </p>
                    </div>
                </div>
            @endforeach
        </section>

        <!--SESSÂO COMO AJUDAR Kelvyn-->
        <section class="ajudar">
            <div class="container">
                @foreach ($helpSections as $helpSection)
                    <div class="title">
                        <div class="sombra__secao">
                            <h2>{{ $helpSection->title }}</h2>
                        </div>
                        <h3 class="titulo__secao">{{ $helpSection->title }}</h3>
                        <p class="pilares">{{ $helpSection->phrase }}</p> <!-- mobile first  -->
                    </div>
                    <div class="content__ajuda__prima">
                        <div class="content__ajuda ">
                            <div class="content__ajuda__div">
                                <h3>{{ $helpSection->help_title }}</h3>
                @endforeach
                <ul>
                    @foreach ($helperSections as $helperSection)
                        <li class="content__list">
                            <i class="content_ajuda_icon {{ $helperSection->icon }}"></i> {{ $helperSection->helper }}
                        </li>
                    @endforeach
                </ul>
            </div>
            @foreach ($helpSections as $helpSection)
                <p>
                    {{ $helpSection->help_info }}
                </p>
            @endforeach
            </div>
            <div class="content__form ">
                <form action="#enviar-formulario ">
                    <label>Nome:<input type="text " name="name " required /></label>

                    <label>Email:<input type="email " required name="email "></label>

                    <label>Telefone: <input type="number" name="number " required></label>
                    <div class="content__button">
                        <button class="content__enviar" type="submit">Enviar</button>
                    </div>
                </form>
            </div>
            </div>
            </div>
        </section>

        <!--SESSÂO PARCEIROS Kelvyn-->
        <section class="parceiros">
            <div class="parceiros__content ">
                @foreach ($partinersSections as $partinersSection)
                    <div class="sombra__secao">
                        <h2>{{ $partinersSection->title }}</h2>
                    </div>
                    <div class="titulo__secao">
                        <h2>{{ $partinersSection->title }}</h2>
                    </div>
                    <p class="pilares">{{ $partinersSection->phrase }}</p>
                @endforeach
            </div>
            <div class="parceiros__logo">
                @foreach ($contributorsSections as $contributorsSection)
                    <div>
                        <img src="{{ url("storage/{$contributorsSection->image}") }}"
                            alt="{{ $contributorsSection->name }}">
                    </div>
                @endforeach
            </div>
        </section>

        <!--SESSÂO CONTATO Kelvyn-->
        <!-- Adicionar a imagem de bg no CSS -->
        <section class="contato" id="contato">
            @foreach ($contactSections as $contactSection)
                <figure class="contato__imagem"></figure>
                <div class="contato__endereco ">
                    <div class="contato__endereco___inf ">
                        <h3><i class="uil uil-map-marker "></i>Endereço:</h3>
                        <p>{{ $contactSection->address }}</p>
                    </div>
                    <div class="contato__endereco___inf ">
                        <h3><i class="uil uil-envelope "></i>Email:</h3>
                        <p>{{ $contactSection->email }}</p>
                    </div>
                    <div class="contato__endereco___inf ">
                        <h3><i class="uil uil-phone-volume "></i>Telefone:</h3>
                        <p>{{ $contactSection->telephone }}</p>
                    </div>

                </div>
                <div class="contato__iframe ">
                    <iframe src="{{ $contactSection->link }}" style="border:0; " allowfullscreen=" " loading="lazy "
                        class="contato__iframe___mapa "></iframe>
                </div>
            @endforeach
        </section>

    </main>

    <!--RODAPÉ - Neilton-->
    <footer class="rodape ">
        <div class="rodape__icones ">

            @foreach ($networksSections as $networksSection)
                <a href="{{ $networksSection->link }}" target="_blank"><img class="facebook__icon" src="{{ urL("storage/{$networksSection->image}") }}" alt=" "></a>
            @endforeach
        </div>
        <div class="rodape__copyright ">
            <p>© Copyright “nome da equipe”. All Rights Reserved</p>
        </div>
    </footer>

@endsection
