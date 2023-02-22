<div class="row mt-4">
    <div class="form-group col-md-6">
        <label for="title">Título</label>
        <input type="text" class="form-control" name="title" id="title">
    </div>
    <div class="form-group col-md-6">
        <label for="category_id">Categoria</label>
        <select class="form-control form-select" name="category_id" id="category_id">
            <option value="">Selecione</option>
        </select>
    </div>
</div>
<div class="row mt-2">
    <div class="col-md-12 form-group">
        <label for="tie">Gravata</label>
        <textarea name="tie" id="tie" cols="30" rows="3" class="form-control"></textarea>
        <span class="form-text">Texto curto, com resumo da notícia. Mais ou menos 200 caracteres.</span>
    </div>
</div>

<div class="row mt-2">
    <div class="col-md-12 form-group">
        <label for="content">Conteúdo</label>
        <textarea name="content" id="content" cols="30" rows="10" class="form-control"></textarea>
        <span class="form-text">Texto completo da notícia</span>
    </div>
</div>
<div class="row mt-4">
    <div class="col-md-12 form-group">
        <hr>
        <button type="submit" class="btn btn-primary float-end">Salvar notícia</button>
        <a href="{{ route("news.listar") }}" class="btn btn-light">< Voltar</a>
    </div>
</div>
