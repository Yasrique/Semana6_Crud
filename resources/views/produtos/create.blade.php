@extends('produtos.layout')
  
@section('content')

<br>
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <br>
            <br>
            <h2>Novo Produto</h2>
            <br>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('produtos.index') }}"> Voltar</a>
        </div>
    </div>
</div>

<br>
   
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Eita!</strong> Tem algum problema com os dados fornecidos.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
   
<form action="{{ route('produtos.store') }}" method="POST">
    @csrf
  
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Descrição:</strong>
                <input type="text" name="descricao" class="form-control" placeholder="Descrição">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Qtd:</strong>
                <input type="number" min="0" max="99999" step="1" name="qtd" class="form-control" placeholder="Qtd">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Custo:</strong>
                <input type="number" format="currency" step="0.01" name="precoUnitario" class="form-control" placeholder="Custo">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Venda:</strong>
                <input type="number" format="currency" step="0.01" name="precoVenda" class="form-control" placeholder="Venda">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <br>
                <button type="submit" class="btn btn-primary">Salvar</button>
        </div>
    </div>
   
</form>
@endsection