@extends('template')

@section('conteudo')
<div>
    <h2>Incluir Produtos</h2>

    <form action="">
        <div class="mb-3">
            <input type="text" class="form-control" id="cod_prod" name="cod_prod" placeholder="Código do produto">
        </div>
        <div class="mb-3">
            <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome do produto">
        </div>
        <div class="mb-3">
            <input type="Number" class="form-control" id="valor" name="valor" step="0.010" placeholder="Valor do produto">
        </div>
        <div class="mb-3">
            <textarea class="form-control" id="des" rows="3"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </form>

    <hr>



</div>
@endsection