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
                    <div class="noticia">
                        <h2>Titulo noticia</h2>
                        <p class="gravata">O que temos que ter sempre em mente é que o novo modelo estrutural aqui
                            preconizado acarreta um processo de reformulação e modernização das posturas dos órgãos
                            dirigentes com relação às suas atribuições.</p>
                        <a href="{{ route("visualizar.noticia") }}" class="bt_acessar_noticia">Acessar Notícia</a>
                    </div>
                    <div class="noticia">
                        <h2>Titulo noticia</h2>
                        <p class="gravata">O que temos que ter sempre em mente é que o novo modelo estrutural aqui
                            preconizado acarreta um processo de reformulação e modernização das posturas dos órgãos
                            dirigentes com relação às suas atribuições.</p>
                        <a href="#" class="bt_acessar_noticia">Acessar Notícia</a>
                    </div>
                    <div class="noticia">
                        <h2>Titulo noticia</h2>
                        <p class="gravata">O que temos que ter sempre em mente é que o novo modelo estrutural aqui
                            preconizado acarreta um processo de reformulação e modernização das posturas dos órgãos
                            dirigentes com relação às suas atribuições.</p>
                        <a href="#" class="bt_acessar_noticia">Acessar Notícia</a>
                    </div>
                    <div class="noticia">
                        <h2>Titulo noticia</h2>
                        <p class="gravata">O que temos que ter sempre em mente é que o novo modelo estrutural aqui
                            preconizado acarreta um processo de reformulação e modernização das posturas dos órgãos
                            dirigentes com relação às suas atribuições.</p>
                        <a href="#" class="bt_acessar_noticia">Acessar Notícia</a>
                    </div>
                    <div class="noticia">
                        <h2>Titulo noticia</h2>
                        <p class="gravata">O que temos que ter sempre em mente é que o novo modelo estrutural aqui
                            preconizado acarreta um processo de reformulação e modernização das posturas dos órgãos
                            dirigentes com relação às suas atribuições. O que temos que ter sempre em mente é que o novo
                            modelo estrutural aqui preconizado acarreta um processo de reformulação e modernização das
                            posturas dos órgãos dirigentes com relação às suas atribuições.</p>
                        <a href="#" class="bt_acessar_noticia">Acessar Notícia</a>
                    </div>
                    <div class="noticia">
                        <h2>Titulo noticia</h2>
                        <p class="gravata">O que temos que ter sempre em mente é que o novo modelo estrutural aqui
                            preconizado acarreta um processo de reformulação e modernização das posturas dos órgãos
                            dirigentes com relação às suas atribuições.</p>
                        <a href="#" class="bt_acessar_noticia">Acessar Notícia</a>
                    </div>
                    <div class="noticia">
                        <h2>Titulo noticia</h2>
                        <p class="gravata">O que temos que ter sempre em mente é que o novo modelo estrutural aqui
                            preconizado acarreta um processo de reformulação e modernização das posturas dos órgãos
                            dirigentes com relação às suas atribuições.</p>
                        <a href="#" class="bt_acessar_noticia">Acessar Notícia</a>
                    </div>

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
                    <li><a href="#">Categoria 1</a></li>
                    <li><a href="#">Categoria 2</a></li>
                    <li><a href="#">Categoria 3</a></li>
                    <li><a href="#">Categoria 4</a></li>
                    <li><a href="#">Categoria 5</a></li>
                </ul>
            </aside>
        </div>
    </div>
@endsection
