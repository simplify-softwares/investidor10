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
            <h3>Veja mais notícias sobre {{ $noticia->category->name }} </h3>
            <div class="noticias">
                @foreach($noticias as $noticia)
                    @include("noticias._noticia")
                @endforeach
            </div>
        </section>

    </div>

@endsection
