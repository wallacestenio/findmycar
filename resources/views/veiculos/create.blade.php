@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">Cadastrar Veículo</h1>

    <form action="{{ route('veiculos.store') }}" method="POST">
        @csrf

        <div class="row">
            <div class="col-md-4 mb-3">
                <label for="placa" class="form-label">Placa</label>
                <input type="text" name="placa" id="placa" class="form-control">
            </div>

            <div class="col-md-4 mb-3">
                <label for="renavam" class="form-label">Renavam</label>
                <input type="text" name="renavam" id="renavam" class="form-control">
            </div>

            <div class="col-md-4 mb-3">
                <label for="chassi" class="form-label">Chassi</label>
                <input type="text" name="chassi" id="chassi" class="form-control">
            </div>

            <div class="col-md-4 mb-3">
                <label for="motor" class="form-label">Motor</label>
                <input type="text" name="motor" id="motor" class="form-control">
            </div>

            <div class="col-md-4 mb-3">
                <label for="marca_modelo" class="form-label">Marca / Modelo</label>
                <input type="text" name="marca_modelo" id="marca_modelo" class="form-control">
            </div>

            <div class="col-md-4 mb-3">
                <label for="ano_fabricacao" class="form-label">Ano de Fabricação</label>
                <input type="text" name="ano_fabricacao" id="ano_fabricacao" class="form-control">
            </div>

            <div class="col-md-4 mb-3">
                <label for="ano_modelo" class="form-label">Ano do Modelo</label>
                <input type="text" name="ano_modelo" id="ano_modelo" class="form-control">
            </div>

            <div class="col-md-4 mb-3">
                <label for="categoria" class="form-label">Categoria</label>
                <input type="text" name="categoria" id="categoria" class="form-control">
            </div>

            <div class="col-md-4 mb-3">
                <label for="cor" class="form-label">Cor</label>
                <input type="text" name="cor" id="cor" class="form-control">
            </div>

            <div class="col-md-4 mb-3">
                <label for="especie" class="form-label">Espécie</label>
                <input type="text" name="especie" id="especie" class="form-control">
            </div>

            <div class="col-md-4 mb-3">
                <label for="capacidade" class="form-label">Capacidade</label>
                <input type="text" name="capacidade" id="capacidade" class="form-control">
            </div>

            <div class="col-md-4 mb-3">
                <label for="potencia" class="form-label">Potência</label>
                <input type="text" name="potencia" id="potencia" class="form-control">
            </div>

            <div class="col-md-4 mb-3">
                <label for="uf" class="form-label">UF</label>
                <input type="text" name="uf" id="uf" class="form-control">
            </div>

            <div class="col-md-4 mb-3">
                <label for="municipio" class="form-label">Município</label>
                <input type="text" name="municipio" id="municipio" class="form-control">
            </div>

            <div class="col-md-4 mb-3">
                <label for="data_emplacamento" class="form-label">Data de Emplacamento</label>
                <input type="date" name="data_emplacamento" id="data_emplacamento" class="form-control">
            </div>

            <div class="col-md-4 mb-3">
                <label for="status" class="form-label">Status</label>
                <input type="text" name="status" id="status" class="form-control">
            </div>

            <div class="col-md-4 mb-3">
                <label for="combustivel" class="form-label">Combustível</label>
                <input type="text" name="combustivel" id="combustivel" class="form-control">
            </div>
        </div>

        <div class="mt-4">
            <button type="submit" class="btn btn-primary">Salvar</button>
            <a href="{{ route('veiculos.index') }}" class="btn btn-secondary">Cancelar</a>
        </div>
    </form>
</div>
@endsection
