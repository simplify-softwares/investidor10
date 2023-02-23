@extends("layouts.main")

@section("css")
    <link rel="stylesheet" type="text/css" href="/css/visualizar-noticia.css">
@endsection

@section("title", $noticia->title . " - ")

@section("content")

    <div class="content">
        <section class="content-noticia">
            <h1 class="titulo_noticia">{{ $noticia->title }}</h1>
            <p class="gravata"><em>{{ $noticia->tie }}</em></p>

            <div class="texto-noticia">
                {!! nl2br($noticia->content) !!}
            </div>
            <p class="hora_noticia"><small>Notícia cadastrada em
                    <time>{{ $noticia->created_at->format("d/m/Y") }}
                        às {{  $noticia->created_at->format("H:i")}}</time>
                </small></p>
        </section>
        <section class="ver-mais">
            <h3>Veja notícias relacionadas ... </h3>
            <div class="noticias">
                @foreach($noticias_relacionadas as $noticia_relacionada)
                    <div class="noticia">
                        <h2>{{ $noticia_relacionada->title }}</h2>
                        <p class="gravata">{{ $noticia_relacionada->title }}</p>
                        <a href="{{ route("visualizar.noticia", [$noticia_relacionada->created_at->format("Y"), $noticia_relacionada->created_at->format("m"), $noticia_relacionada->category->slug_name, $noticia_relacionada->slug_title]) }}"
                           class="bt_acessar_noticia">Acessar Notícia</a>
                    </div>
                @endforeach
            </div>
        </section>

    </div>

@endsection
