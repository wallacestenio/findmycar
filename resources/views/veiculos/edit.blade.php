@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Veículo</h1>

    <form action="{{ route('veiculos.update', $veiculo->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="placa" class="form-label">Placa</label>
            <input type="text" name="placa" class="form-control" value="{{ old('placa', $veiculo->placa) }}">
        </div>

        <div class="mb-3">
            <label for="renavam" class="form-label">Renavam</label>
            <input type="text" name="renavam" class="form-control" value="{{ old('renavam', $veiculo->renavam) }}">
        </div>

        <div class="mb-3">
            <label for="chassi" class="form-label">Chassi</label>
            <input type="text" name="chassi" class="form-control" value="{{ old('chassi', $veiculo->chassi) }}">
        </div>

        <div class="mb-3">
            <label for="marca_modelo" class="form-label">Marca / Modelo</label>
            <input type="text" name="marca_modelo" class="form-control" value="{{ old('marca_modelo', $veiculo->marca_modelo) }}">
        </div>

        <div class="mb-3">
            <label for="ano_fabricacao" class="form-label">Ano Fabricação</label>
            <input type="text" name="ano_fabricacao" class="form-control" value="{{ old('ano_fabricacao', $veiculo->ano_fabricacao) }}">
        </div>

        <div class="mb-3">
            <label for="ano_modelo" class="form-label">Ano Modelo</label>
            <input type="text" name="ano_modelo" class="form-control" value="{{ old('ano_modelo', $veiculo->ano_modelo) }}">
        </div>

        <div class="mb-3">
            <label for="cor" class="form-label">Cor</label>
            <input type="text" name="cor" class="form-control" value="{{ old('cor', $veiculo->cor) }}">
        </div>

        <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <select name="status" class="form-control">
                <option value="Ativo" {{ $veiculo->status == 'Ativo' ? 'selected' : '' }}>Ativo</option>
                <option value="Inativo" {{ $veiculo->status == 'Inativo' ? 'selected' : '' }}>Inativo</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Salvar alterações</button>
        <a href="{{ route('veiculos.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
