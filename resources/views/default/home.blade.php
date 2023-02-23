@extends("layouts.main")

@section("css")
    <link rel="stylesheet" type="text/css" href="/css/home.css">
@endsection

@section('title', "")

@section('content')
    <div class="content">
        <div class="main">
            <div class="noticias">
                <h3 class="titulo_ultimas_noticias">Últimas notícias</h3>
                <div class="noticias_interna">
                    @foreach($noticias as $noticia)
                        <div class="noticia">
                            <h2>{{ $noticia->title }}</h2>
                            <p class="gravata">{{ $noticia->tie }}</p>
                            <a href="{{ route("visualizar.noticia", [$noticia->created_at->format("Y"), $noticia->created_at->format("m"), $noticia->category->slug_name, $noticia->slug_title]) }}"
                               class="bt_acessar_noticia">Acessar Notícia</a>
                        </div>
                    @endforeach
                </div>
            </div>
            <aside class="sidebar">
                <form action="/search" method="get" id="form_busca">
                    <label for="search">Realize sua busca no campo abaixo</label>
                    <div class="grupo-campo-botao">
                        <input type="search" name="q" id="search" placeholder="Busque sua notícia aqui!">
                        <button type="submit">buscar</button>
                    </div>
                </form>
                <h3>Filtre por categoria</h3>
                <ul class="list-categorias">
                    @foreach($categorias as $categoria)
                        <li><a href="{{ route("noticias.categorias", $categoria->slug_name) }}">{{ $categoria->name }}</a></li>
                    @endforeach
                </ul>
            </aside>
        </div>
    </div>
@endsection
