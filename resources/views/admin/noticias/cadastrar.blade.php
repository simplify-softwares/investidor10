@extends("layouts.admin")

@section('title', 'Nova notícia - ')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h2 class="d-2">Cadastrar nova notícia</h2>
            {!! Form::model($noticia, ['route' => ['news.salvar']]) !!}
{{--            <form action="{{ route("news.salvar") }}" method="post">--}}
{{--                @csrf--}}
                @include("admin.noticias._form")
{{--            </form>--}}
            {!! Form::close() !!}
        </div>
    </div>
@endsection
