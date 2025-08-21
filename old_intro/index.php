<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Formulário de Dados Veiculares</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>
<body>
<div class="container-lg mt-5">
  <h2 class="mb-4 text-center">Formulário de Dados Veiculares</h2>
  <form method="POST" action="salvar.php" novalidate>
    
    <fieldset class="border p-4 mb-4 rounded">
      <legend class="float-none w-auto px-3">Identificação</legend>
      <div class="row g-4">
        <div class="col-12 col-md-4">
          <label for="placa" class="form-label">Placa</label>
          <input type="text" id="placa" name="placa" class="form-control" maxlength="8" pattern="[A-Z]{3}-[0-9A-Z]{4}" />
        </div>
        <div class="col-12 col-md-4">
          <label for="renavam" class="form-label">RENAVAM</label>
          <input type="text" id="renavam" name="renavam" class="form-control" maxlength="11" pattern="[0-9]{11}" />
        </div>
        <div class="col-12 col-md-4">
          <label for="chassi" class="form-label">Chassi (VIN)</label>
          <input type="text" id="chassi" name="chassi" class="form-control" maxlength="17" pattern="[A-Za-z0-9]{17}" />
        </div>
        <div class="col-12 col-md-4">
          <label for="motor" class="form-label">Número do Motor</label>
          <input type="text" id="motor" name="motor" class="form-control" maxlength="12" pattern="[A-Za-z0-9]{8,12}" />
        </div>
      </div>
    </fieldset>

    <fieldset class="border p-4 mb-4 rounded">
      <legend class="float-none w-auto px-3">Características</legend>
      <div class="row g-4">
        <div class="col-12 col-md-6">
          <label for="marca_modelo" class="form-label">Marca / Modelo</label>
          <input type="text" id="marca_modelo" name="marca_modelo" class="form-control" maxlength="50" />
        </div>
        <div class="col-6 col-md-3">
          <label for="ano_fabricacao" class="form-label">Ano de Fabricação</label>
          <input type="number" id="ano_fabricacao" name="ano_fabricacao" class="form-control" min="1900" max="2099" />
        </div>
        <div class="col-6 col-md-3">
          <label for="ano_modelo" class="form-label">Ano do Modelo</label>
          <input type="number" id="ano_modelo" name="ano_modelo" class="form-control" min="1900" max="2099" />
        </div>
        <div class="col-12 col-md-4">
          <label for="categoria" class="form-label">Categoria</label>
          <input type="text" id="categoria" name="categoria" class="form-control" maxlength="20" />
        </div>
        <div class="col-12 col-md-4">
          <label for="combustivel" class="form-label">Combustível</label>
          <select id="combustivel" name="combustivel" class="form-select">
            <option value="">-- Selecione --</option>
            <option value="Gasolina">Gasolina</option>
            <option value="Etanol">Etanol</option>
            <option value="Flex">Flex</option>
            <option value="Diesel">Diesel</option>
            <option value="GNV">GNV</option>
            <option value="Elétrico">Elétrico</option>
            <option value="Híbrido">Híbrido</option>
            <option value="Energia">Energia</option>
          </select>
        </div>
        <div class="col-12 col-md-4">
          <label for="cor" class="form-label">Cor Predominante</label>
          <input type="text" id="cor" name="cor" class="form-control" maxlength="20" />
        </div>
        <div class="col-12 col-md-4">
          <label for="especie" class="form-label">Espécie / Tipo</label>
          <input type="text" id="especie" name="especie" class="form-control" maxlength="20" />
        </div>
        <div class="col-6 col-md-2">
          <label for="capacidade" class="form-label">Capacidade</label>
          <input type="text" id="capacidade" name="capacidade" class="form-control" maxlength="5" pattern="[0-9]+" />
        </div>
        <div class="col-6 col-md-2">
          <label for="potencia" class="form-label">Potência</label>
          <input type="text" id="potencia" name="potencia" class="form-control" maxlength="10" />
        </div>
      </div>
    </fieldset>

    <fieldset class="border p-4 mb-4 rounded">
      <legend class="float-none w-auto px-3">Localização</legend>
      <div class="row g-4">
        <div class="col-6 col-md-2">
          <label for="uf" class="form-label">UF</label>
          <input type="text" id="uf" name="uf" class="form-control" maxlength="2" pattern="[A-Z]{2}" />
        </div>
        <div class="col-6 col-md-4">
          <label for="municipio" class="form-label">Município</label>
          <input type="text" id="municipio" name="municipio" class="form-control" maxlength="50" />
        </div>
      </div>
    </fieldset>

    <fieldset class="border p-4 mb-4 rounded">
      <legend class="float-none w-auto px-3">Registro</legend>
      <div class="row g-4">
        <div class="col-12 col-md-6">
          <label for="data_emplacamento" class="form-label">Data do Primeiro Emplacamento</label>
          <input type="date" id="data_emplacamento" name="data_emplacamento" class="form-control" />
        </div>
        <div class="col-12 col-md-6">
          <label for="status" class="form-label">Status de Registro</label>
          <input type="text" id="status" name="status" class="form-control" maxlength="20" />
        </div>
      </div>
    </fieldset>

    <div class="text-end">
      <button type="submit" class="btn btn-primary px-4">Salvar</button>
    </div>
  </form>

  <script>
  const ufSelect = document.getElementById("uf");
  const municipioSelect = document.getElementById("municipio");

  async function carregarDados() {
    try {
      const response = await fetch("municipios.json");
      const dados = await response.json();

      // Preenche as UFs
      Object.keys(dados).sort().forEach(uf => {
        let option = document.createElement("option");
        option.value = uf;
        option.textContent = uf;
        ufSelect.appendChild(option);
      });

      // Atualiza os municípios ao mudar a UF
      ufSelect.addEventListener("change", () => {
        const selectedUF = ufSelect.value;
        municipioSelect.innerHTML = "<option value=''>-- Selecione --</option>";

        if (dados[selectedUF]) {
          dados[selectedUF].sort().forEach(municipio => {
            const option = document.createElement("option");
            option.value = municipio;
            option.textContent = municipio;
            municipioSelect.appendChild(option);
          });
        }
      });
    } catch (erro) {
      console.error("Erro ao carregar os dados:", erro);
    }
  }

  window.addEventListener("DOMContentLoaded", carregarDados);
</script>
</div>
</div>
</body>
</html>
