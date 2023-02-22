@extends("layouts.admin")

@section('title', 'Titulo da noticia aqui - ')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h2 class="d-2">Visualizando noticia <strong>Titulo da noticia aqui</strong></h2>
            <a href="{{ route("news.editar", 1) }}" class="btn btn-primary mt-2 mb-3 ms-3 float-end">Editar</a>
            <a href="#" class="btn btn-danger mt-2 mb-3 float-end">Excluir</a>
            <a href="{{ route("news.listar") }}" class="btn btn-light">< Voltar</a>
            <table class="table table-striped table-hover mt-4">
                <tr>
                    <th class="col-2">Id</th>
                    <td class="col-10">1</td>
                </tr>
                <tr>
                    <th>Título</th>
                    <td>fadf adf ad fad f</td>
                </tr>
                <tr>
                    <th>Gravata</th>
                    <td>fdafadfadfadf adf ad </td>
                </tr>
                <tr>
                    <th>Conteúdo</th>
                    <td>fadfad fadf ad fad fad</td>
                </tr>
                <tr>
                    <th>Slug</th>
                    <td>fad-fad-fadf-adf-fadf</td>
                </tr>
                <tr>
                    <th>Cadastrado em</th>
                    <td>22/02/2023 as 18h34</td>
                </tr>
                <tr>
                    <th>Última alteração em</th>
                    <td>22/02/2023 as 18h34</td>
                </tr>
            </table>
            <a href="{{ route("news.editar", 1) }}" class="btn btn-primary mt-2 mb-3 ms-3 float-end">Editar</a>
            <a href="#" class="btn btn-danger mt-2 mb-3 float-end">Excluir</a>
            <a href="{{ route("news.listar") }}" class="btn btn-light">< Voltar</a>
        </div>
    </div>
@endsection
