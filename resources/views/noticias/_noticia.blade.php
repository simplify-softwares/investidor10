<div class="noticia">
    <small>{{ $noticia->category->name }}</small>
    <h2>{{ $noticia->title }}</h2>
    <p class="gravata">{{ $noticia->tie }}</p>
    <a href="{{ route("visualizar.noticia", [$noticia->created_at->format("Y"), $noticia->created_at->format("m"), $noticia->category->slug_name, $noticia->slug_title]) }}"
       class="bt_acessar_noticia">Acessar Notícia</a>
</div>
