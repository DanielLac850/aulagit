<?php
include_once("header.php");
?>

<div class=container >
<form class="row g-3" action="../controler/inserirCadastroJogo.php" method="Get">
  <div class="col-md-6">
    <label for="inputnome" class="form-label">Nome</label>
    <input type="text" name="nomejogo" class="form-control" id="inputnome" required>
  </div>
  <div class="col-md-6">
    <label for="inputvalor" class="form-label">Valor</label>
    <input type="text" name="valorjogo"class="form-control" id="inputvalor" required>
  </div>
  <div class="col-4">
    <label for="inputqtd" class="form-label">Quantidade</label>
    <input type="number" name="qtdjogo" class="form-control" id="inputqtd" required>
  </div>
  <div class="col-md-2">
    <label for="inputdata" class="form-label">Data de Lançamento</label>
    <input type="date" name="datalancamentojogo" class="form-control" id="inputdata" placeholder="0000/00/00" required>
  </div>
  <div class="col-md-2">
    <label for="inputstudio" class="form-label">Estudio</label>
    <input type="text" name="studiojogo" class="form-control" id="inputstudio" required>
  </div>
  <div class="col-md-2">
    <label for="inputgenero" class="form-label">Gênero</label>
    <select id=inputgenero name="generojogo"class="form-select" required > 
    <option selected >escolha...</option>
     <option value="1">Ação</option>
     <option value="2">Aventura</option>
     <option value="2">RPG</option>
     <option value="2">Terror</option>
     <option value="2">FPS</option>
    </select>
  </div>
  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck" required>
      <label class="form-check-label" for="gridCheck">
        Aceito os termos de uso
      </label>
    </div>
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Salvar</button>
  </div>
</div>
</form>

<?php
include_once("footer.php");
?>