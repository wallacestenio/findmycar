<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Veiculo extends Model
{
    protected $fillable = [
        'placa', 'renavam', 'chassi', 'motor', 'marca_modelo',
        'ano_fabricacao', 'ano_modelo', 'categoria', 'cor', 'especie',
        'capacidade', 'potencia', 'uf', 'municipio',
        'data_emplacamento', 'status', 'combustivel'
    ];
}
