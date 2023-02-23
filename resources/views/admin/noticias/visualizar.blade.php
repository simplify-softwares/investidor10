@extends("layouts.admin")

@section('title', $noticia->title . ' - ')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h2 class="d-2">Visualizando noticia <strong>{{ $noticia->title }}</strong></h2>
            <a href="{{ route("news.editar", $noticia->id) }}" class="btn btn-primary mt-2 mb-3 ms-3 float-end">Editar</a>
            <a href="{{ route("news.excluir", $noticia->id) }}" data-origem="visualizar" class="btn btn-danger mt-2 mb-3 float-end bt_excluir_noticia">Excluir</a>
            <a href="{{ route("news.listar") }}" class="btn btn-light">< Voltar</a>
            <table class="table table-striped table-hover mt-4">
                <tr>
                    <th class="col-2">Id</th>
                    <td class="col-10">1</td>
                </tr>
                <tr>
                    <th>Título</th>
                    <td>{{ $noticia->title }}</td>
                </tr>
                <tr>
                    <th>Gravata</th>
                    <td>{{ $noticia->tie }}</td>
                </tr>
                <tr>
                    <th>Conteúdo</th>
                    <td>{!! nl2br($noticia->content) !!}</td>
                </tr>
                <tr>
                    <th>Slug</th>
                    <td>{{ $noticia->slug_title }}</td>
                </tr>
                <tr>
                    <th>Cadastrado em</th>
                    <td>{{ $noticia->created_at->format("d/m/Y H:i:s") }}</td>
                </tr>
                <tr>
                    <th>Última alteração em</th>
                    <td>{{ $noticia->updated_at->format("d/m/Y H:i:s") }}</td>
                </tr>
            </table>
            <a href="{{ route("news.editar", $noticia->id) }}" class="btn btn-primary mt-2 mb-3 ms-3 float-end">Editar</a>
            <a href="{{ route("news.excluir", $noticia->id) }}" data-origem="visualizar" class="btn btn-danger mt-2 mb-3 float-end bt_excluir_noticia">Excluir</a>
            <a href="{{ route("news.listar") }}" class="btn btn-light">< Voltar</a>
        </div>
    </div>
@endsection
