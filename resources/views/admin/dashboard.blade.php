@extends("layouts.admin")

@section('title', 'Dashboard - ')

@section('content')
    <h1>Dashboard</h1>
    <hr>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="card-counter primary">
                    <i class="bi bi-newspaper"></i>
                    <span class="text-counter">
                        <span class="count-numbers">{{ $totalNoticias }}</span>
                        <span class="count-name">Total de notícias</span>
                    </span>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card-counter danger">
                    <i class="bi bi-slash-circle"></i>
                    <span class="text-counter">
                        <span class="count-numbers">{{ $totalNoticiasInativas }}</span>
                        <span class="count-name">Notícias inativas</span>
                    </span>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card-counter success">
                    <i class="bi bi-check-circle"></i>
                    <span class="text-counter">
                        <span class="count-numbers">{{ $totalNoticiasAtivas }}</span>
                        <span class="count-name">Notícias ativas</span>
                    </span>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card-counter info">
                    <i class="bi bi-card-list"></i>
                    <span class="text-counter">
                        <span class="count-numbers">{{ $totalCategorias }}</span>
                        <span class="count-name">Total de categorias</span>
                    </span>
                </div>
            </div>
        </div>
    </div>
@endsection
