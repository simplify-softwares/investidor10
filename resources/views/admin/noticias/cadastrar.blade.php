@extends("layouts.admin")

@section('title', 'Nova notícia - ')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h2 class="d-2">Cadastrar nova notícia</h2>
            <form action="{{ route("news.cadastrar") }}" method="post">
                @csrf
                @include("admin.noticias._form")
            </form>
        </div>
    </div>
@endsection
