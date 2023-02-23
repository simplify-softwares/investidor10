<div class="row mt-4">
    <div class="form-group col-md-6">
        {!! Form::label('title', 'Título'); !!}
        {!! Form::text('title', $noticia->title ?? null, ['class' => 'form-control']); !!}
    </div>
    <div class="form-group col-md-6">
        {!! Form::label('category_id', 'Categoria'); !!}
        {!! Form::select('category_id', $categorias, $noticia->category_id ?? null, ['class' => 'form-select', 'placeholder' => 'Selecione' ]) !!}
    </div>
</div>
<div class="row mt-2">
    <div class="col-md-12 form-group">
        {!! Form::label('tie', 'Gravata'); !!}
        {!! Form::textarea('tie', $noticia->tie ?? null, ['class' => 'form-control', 'rows' => 3]); !!}
        <span class="form-text">Texto curto, com resumo da notícia. Mais ou menos 200 caracteres.</span>
    </div>
</div>
<div class="row mt-2">
    <div class="col-md-12 form-group">
        {!! Form::label('content', 'Conteúdo'); !!}
        {!! Form::textarea('content', $noticia->content ?? null, ['class' => 'form-control', 'rows' => 10]); !!}
        <span class="form-text">Texto completo da notícia</span>
    </div>
</div>
<div class="row mt-2">
    <div class="col-md-12 form-group">
        {!! Form::hidden('is_active', 0) !!}
        {!! Form::checkbox('is_active', 1, $noticia->is_active, ['id' => 'is_active']); !!}
        {!! Form::label('is_active', 'Ativar notícia?'); !!}
    </div>
</div>
<div class="row mt-4">
    <div class="col-md-12 form-group">
        <hr>
        <button type="submit" class="btn btn-primary float-end">Salvar notícia</button>
        <a href="{{ route("news.listar") }}" class="btn btn-light">< Voltar</a>
    </div>
</div>
