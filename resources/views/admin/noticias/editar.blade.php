@extends("layouts.admin")

@section('title', 'Nova notícia - ')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h2 class="d-2">Cadastrar nova notícia</h2>
            {!! Form::model($noticia, ['route' => ['news.atualizar', 'id' => $noticia->id]]) !!}
                @include("admin.noticias._form")
            {!! Form::close() !!}
        </div>
    </div>
@endsection
