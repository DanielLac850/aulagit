<?php  
include_once("../view/header.php");
include_once("../model/conexao.php");
include_once("../model/jogomodel.php");
?>

<div class="centroform">
<form action="#" method="Post" class="row row-cols-lg-auto g-3 align-items-center">
  <div class="col-12">
    <label class="visually-hidden" for="inlineFormInputGroupUsername">Username</label>
    <div class="input-group">
      <div class="input-group-text">Gênero</div>
    <select id=inputgenero name="generojogo"class="form-select" required > 
    <option selected >escolha...</option>
     <option value="1">Ação</option>
     <option value="2">Aventura</option>
     <option value="2">RPG</option>
     <option value="2">Terror</option>
     <option value="2">FPS</option>
    </select>
    </div>
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Pesquisar</button>
  </div>
</form>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Nome</th>
      <th scope="col">Gênero</th>
      <th scope="col">Estudio</th>
      <th scope="col">Valor</th>
    </tr>
  </thead>
  <tbody>
  <?php
$generojogo = isset($_POST["generojogo"])? $_POST["generojogo"] : "";
if($generojogo){
$dado = visuJogoGen($conn,$generojogo);

foreach($dado as $generojogo):
?>
    <tr>
      <td><?=$generojogo["nomejogo"]?></td>
      <td><?=$generojogo["generojogo"]?></td>
      <td><?=$generojogo["studiojogo"]?></td>
      <td><?=$generojogo["valorjogo"]?></td>
    </tr>
<?php  
endforeach;
}
?>
  </tbody>
</table>
</div>