@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detalhes do Veículo</h1>

    <ul>
        <li><strong>Placa:</strong> {{ $veiculo->placa }}</li>
        <li><strong>Renavam:</strong> {{ $veiculo->renavam }}</li>
        <li><strong>Chassi:</strong> {{ $veiculo->chassi }}</li>
        <li><strong>Motor:</strong> {{ $veiculo->motor }}</li>
        <li><strong>Marca/Modelo:</strong> {{ $veiculo->marca_modelo }}</li>
        <li><strong>Ano Fabricação:</strong> {{ $veiculo->ano_fabricacao }}</li>
        <li><strong>Ano Modelo:</strong> {{ $veiculo->ano_modelo }}</li>
        <li><strong>Categoria:</strong> {{ $veiculo->categoria }}</li>
        <li><strong>Cor:</strong> {{ $veiculo->cor }}</li>
        <li><strong>Espécie:</strong> {{ $veiculo->especie }}</li>
        <li><strong>Capacidade:</strong> {{ $veiculo->capacidade }}</li>
        <li><strong>Potência:</strong> {{ $veiculo->potencia }}</li>
        <li><strong>UF:</strong> {{ $veiculo->uf }}</li>
        <li><strong>Município:</strong> {{ $veiculo->municipio }}</li>
        <li><strong>Data Emplacamento:</strong> {{ $veiculo->data_emplacamento }}</li>
        <li><strong>Status:</strong> {{ $veiculo->status }}</li>
        <li><strong>Combustível:</strong> {{ $veiculo->combustivel }}</li>
    </ul>

    <a href="{{ route('veiculos.index') }}" class="btn btn-secondary">Voltar</a>
</div>
@endsection
