@extends("layouts.admin")

@section('title', 'Listar Notícias - ')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h2 class="d-2">Listar Notícias</h2>
            <a href="{{ route("news.cadastrar") }}" class="btn btn-success mt-2 mb-3 float-end">Cadastrar Notícia</a>
            <table class="table table-striped table-hover mt-4">
                <thead>
                <tr>
                    <th class="col-1">ID</th>
                    <th class="col-4">Título</th>
                    <th class="col-3">Categoria</th>
                    <th class="col-2">Status</th>
                    <th class="col-2">Ações</th>
                </tr>
                </thead>
                <tbody class="table-group-divider">
                @forelse($noticias as $noticia)
                    <tr>
                        <td>{{ $noticia->id }}</td>
                        <td>{{ $noticia->title }}</td>
                        <td>{{ $noticia->category->name }}</td>
                        <td>{{ $noticia->is_active == 1 ? "Ativo" : "Inativo"}}</td>
                        <td>
                            <a href="{{ route("news.visualizar", $noticia->id) }}" class="btn btn-warning"><i class="bi bi-eye-fill"></i></a>
                            <a href="{{ route("news.editar", $noticia->id) }}" class="btn btn-primary"><i class="bi bi-pencil-square"></i></a>
                            <a href="{{ route("news.excluir", $noticia->id) }}" data-origem="listagem" class="btn btn-danger bt_excluir_noticia"><i class="bi bi-trash3-fill"></i></a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4">Nenhuma notícia cadastrada!</td>
                    </tr>
                @endforelse
                </tbody>
            </table>

            @if (count($noticias) > 0)
                <hr>
                {{ $noticias->onEachSide(3)->links() }}
            @endif

        </div>
    </div>
@endsection
