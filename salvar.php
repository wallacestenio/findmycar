<?php
// Exemplo básico para capturar dados do formulário anterior
$dados = $_POST ?? [];
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8" />
  <title>Confirmação de Dados Veiculares</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
  <style>
    input[readonly] {
      border: none;
      background-color: transparent;
      padding-left: 0;
      box-shadow: none;
    }
    label.form-label {
      font-weight: bold;
    }
    .card {
      margin-bottom: 1rem;
    }
    .form-section {
      padding: 1rem;
    }
  </style>
</head>
<body>
<div class="container mt-5">
  <h2 class="mb-4">Confirmação de Dados Veiculares</h2>
  <form method="POST" action="salvar.php">
    <div class="card">
      <div class="card-body row g-3 form-section">
        <?php
        function campo($label, $name, $value, $cols = 6) {
          echo <<<HTML
          <div class="col-12 col-md-$cols">
            <label class="form-label">$label</label>
            <input type="text" name="{$name}" value="{$value}" class="form-control" readonly />
            <input type="hidden" name="{$name}" value="{$value}" />
          </div>
          HTML;
        }

        campo("Placa", "placa", $dados['placa'] ?? '', 4);
        campo("RENAVAM", "renavam", $dados['renavam'] ?? '', 4);
        campo("Chassi (VIN)", "chassi", $dados['chassi'] ?? '', 4);
        campo("Número do Motor", "motor", $dados['motor'] ?? '', 4);
        campo("Marca / Modelo", "marca_modelo", $dados['marca_modelo'] ?? '', 4);
        campo("Ano de Fabricação", "ano_fabricacao", $dados['ano_fabricacao'] ?? '', 4);
        campo("Ano do Modelo", "ano_modelo", $dados['ano_modelo'] ?? '', 4);
        campo("Categoria", "categoria", $dados['categoria'] ?? '', 4);
        campo("Cor Predominante", "cor", $dados['cor'] ?? '', 4);
        campo("Espécie / Tipo", "especie", $dados['especie'] ?? '', 4);
        campo("Capacidade", "capacidade", $dados['capacidade'] ?? '', 4);
        campo("Potência", "potencia", $dados['potencia'] ?? '', 4);
        campo("UF", "uf", $dados['uf'] ?? '', 4);
        campo("Município", "municipio", $dados['municipio'] ?? '', 4);
        campo("Data do Primeiro Emplacamento", "data_emplacamento", $dados['data_emplacamento'] ?? '', 4);
        campo("Status de Registro", "status", $dados['status'] ?? '', 4);
        ?>

        <div class="col-12 col-md-4">
          <label class="form-label">Combustível</label>
          <input type="text" class="form-control" value="<?= htmlspecialchars($dados['combustivel'] ?? '') ?>" readonly />
          <input type="hidden" name="combustivel" value="<?= htmlspecialchars($dados['combustivel'] ?? '') ?>" />
        </div>
      </div>
    </div>

    <div class="mt-4 d-flex gap-3">
      <button type="submit" class="btn btn-success">Confirmar e Salvar</button>
      <a href="javascript:history.back()" class="btn btn-secondary">Voltar</a>
    </div>
  </form>
  <br>
</div>
</body>
</html>
