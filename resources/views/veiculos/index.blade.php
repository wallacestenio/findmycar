@extends('layouts.app')

@section('title', 'Lista de Veículos')

@section('content')
<div class="container">
    <h1>Veículos</h1>

    <form method="GET" action="{{ route('veiculos.index') }}" class="mb-3">
        <input type="text" name="search" placeholder="Buscar por Placa, RENAVAM, Chassi, Modelo..." value="{{ request('search') }}" class="form-control">
    </form>

    <a href="{{ route('veiculos.create') }}" class="btn btn-primary mb-3">Novo Veículo</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Placa</th>
                <th>RENAVAM</th>
                <th>Chassi</th>
                <th>Marca/Modelo</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @forelse($veiculos as $veiculo)
                <tr>
                    <td>{{ $veiculo->id }}</td>
                    <td>{{ $veiculo->placa }}</td>
                    <td>{{ $veiculo->renavam }}</td>
                    <td>{{ $veiculo->chassi }}</td>
                    <td>{{ $veiculo->marca_modelo }}</td>
                    <td>
                        <a href="{{ route('veiculos.show', $veiculo) }}" class="btn btn-info btn-sm">Ver</a>
                        <a href="{{ route('veiculos.edit', $veiculo) }}" class="btn btn-warning btn-sm">Editar</a>
                        <form action="{{ route('veiculos.destroy', $veiculo) }}" method="POST" class="d-inline">
                            @csrf @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Excluir este veículo?')">Excluir</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr><td colspan="6">Nenhum veículo encontrado.</td></tr>
            @endforelse
        </tbody>
    </table>

    {{ $veiculos->links() }}
</div>
@endsection
