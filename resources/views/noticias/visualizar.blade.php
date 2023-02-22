@extends("layouts.main")

@section("css")
    <link rel="stylesheet" type="text/css" href="/css/visualizar-noticia.css">
@endsection

@section("title", "Aqui vai o título da notícia")

@section("content")

    <div class="content">
        <section class="content-noticia">
            <h1 class="titulo_noticia">Aqui vai o título da notícia</h1>
            <p class="gravata"><em>As experiências acumuladas demonstram que o aumento do diálogo entre os diferentes setores produtivos facilita a criação dos modos de operação convencionais.</em></p>

            <div class="texto-noticia">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer dapibus sagittis mauris, a congue augue placerat non. Vivamus eleifend, purus non sodales fermentum, dolor libero suscipit purus, in aliquam dui arcu luctus est. Phasellus placerat, est a ultrices fermentum, ligula nibh tempus lectus, et viverra magna justo id augue. Sed id rutrum leo. Aliquam imperdiet massa et tellus malesuada vestibulum. Cras lacinia est in feugiat tempor. Curabitur sed nulla tellus. Fusce rutrum, justo nec imperdiet vulputate, tortor nisl efficitur orci, sit amet congue metus lacus lacinia ante. Curabitur aliquet turpis nulla, vel laoreet mauris consequat non. Sed ac vulputate odio, eget finibus odio. Quisque ut arcu at neque scelerisque aliquam nec at mi. Pellentesque tempus purus nec fermentum volutpat. Donec sed faucibus ex. Praesent vehicula nulla consequat, pretium lacus placerat, efficitur leo. Mauris euismod a ante id blandit. Pellentesque vel ligula ac tortor porta congue.</p>

                <p>Sed lacinia justo sit amet quam vestibulum gravida. Donec volutpat, augue a pretium efficitur, justo orci lacinia leo, id blandit velit neque ut tortor. Quisque nec hendrerit diam, id porta justo. Integer lacinia lacinia libero, sed vestibulum augue luctus at. Curabitur nec massa sed mauris sollicitudin vestibulum. Quisque iaculis ante vel mauris aliquam vehicula. Nam non risus at turpis lacinia luctus nec vel lacus. Aliquam ac rutrum magna. Vestibulum posuere, nisi vel ullamcorper molestie, nibh nunc hendrerit dolor, id ultrices leo sapien sit amet neque.</p>

                <p>Phasellus eu leo nec nisl commodo eleifend nec eget ante. Donec vel dapibus elit, eu sagittis odio. Curabitur laoreet felis odio, a porttitor erat mollis sed. Nulla pretium facilisis ex. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Proin eu mi elit. Duis aliquam ornare commodo. Sed vehicula ac ante sit amet accumsan. Nunc eget justo vitae nisl efficitur suscipit. Curabitur sit amet lacus porttitor, aliquam purus ornare, vestibulum velit.</p>

                <p>Praesent ut eros eget odio porta hendrerit. Sed accumsan dolor sit amet augue luctus laoreet. Cras in ex non lacus commodo mattis sit amet sed orci. Cras a tellus sed felis blandit porta. Donec nec tellus dui. Pellentesque aliquam hendrerit malesuada. Vivamus faucibus enim luctus, bibendum sapien ornare, consequat nibh. Nunc porttitor vulputate neque, at tristique massa blandit in.</p>

                <p>Donec fermentum dui at dui placerat elementum nec sit amet urna. Praesent viverra vel risus quis efficitur. Maecenas volutpat odio nec massa molestie, at finibus nisl porta. Praesent molestie velit risus, at ullamcorper magna varius quis. Proin vestibulum tellus vel quam hendrerit rutrum. Aliquam cursus sit amet mi at porta. Morbi dictum, lectus vitae consequat blandit, arcu ipsum mattis metus, quis convallis orci dolor vel orci. Etiam et aliquam tellus. Suspendisse potenti. Fusce faucibus, augue in molestie lacinia, tortor arcu placerat urna, consectetur consequat lectus velit et mauris. Mauris sem mauris, tempor non massa eget, gravida scelerisque turpis. Vivamus vitae ante id tortor sodales pharetra eget et neque. Curabitur eros enim, sodales at nunc at, tristique sollicitudin quam. Quisque libero libero, rutrum euismod molestie eget, aliquam sed enim. Cras aliquam, est et accumsan tristique, magna enim venenatis lorem, a molestie nisl augue sed neque. Aenean pulvinar finibus libero, suscipit mollis ante tristique id.</p>
            </div>
            <p class="hora_noticia"><small>Notícia cadastrada em <time>22/02/2023 às 02h33</time></small></p>
        </section>
        <section class="ver-mais">
            <h3>Veja notícias relacionadas ... </h3>
            <div class="noticias">
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
        </section>

    </div>

@endsection
