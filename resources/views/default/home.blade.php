@extends("layouts.main")

@section("css")
    <link rel="stylesheet" type="text/css" href="/css/home.css">
@endsection

@section('title', "")

@section('content')
    <div class="content">
        <div class="main">
            <div class="noticias">
                <h3 class="titulo_ultimas_noticias">Últimas notícias
                    @if($busca)
                        <small> - buscando por <strong>{{ $busca }}</strong></small>
                    @endif
                </h3>
                <div class="noticias_interna">
                    @foreach($noticias as $noticia)
                        @include("noticias._noticia")
                    @endforeach
                </div>
                @if(!empty($noticias))
                    {{ $noticias->links() }}
                @endif
            </div>
            <aside class="sidebar">
                <form action="/" method="get" id="form_busca">
                    <input type="hidden" value="{{ $categoria }}" name="categoria" id="categoria">
                    <label for="search">Realize sua busca no campo abaixo</label>
                    <div class="grupo-campo-botao">
                        <input type="search" name="busca" value="{{ $busca }}" id="busca"
                               placeholder="Busque sua notícia aqui!">
                        <button type="button" id="bt_buscar">buscar</button>
                    </div>
                </form>
                <h3>Filtre por categoria</h3>
                <ul class="list-categorias">
                    @foreach($categorias as $category)
                        <li>
                            <a {{ $categoria == $category->id ? "class=categoria_ativa" : ""}} href="?categoria={{ $category->id }}">{{ $category->name }} {{ $categoria == $category->id ? "<" : ""}}</a>
                        </li>
                    @endforeach
                </ul>
            </aside>
        </div>
    </div>
@endsection
