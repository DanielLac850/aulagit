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
      <div class="input-group-text">Nome</div>
      <input type="text" class="form-control" id="inlineFormInputGroupUsername" name="nomejogo" placeholder="Nome">
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
$nomejogo = isset($_POST["nomejogo"])? $_POST["nomejogo"] : "";
if($nomejogo){
$dado = visuJogoNom($conn,$nomejogo);

foreach($dado as $nomejogo):
?>
    <tr>
      <td><?=$nomejogo["nomejogo"]?></td>
      <td><?=$nomejogo["generojogo"]?></td>
      <td><?=$nomejogo["studiojogo"]?></td>
      <td><?=$nomejogo["valorjogo"]?></td>
    </tr>
<?php  
endforeach;
}
?>
  </tbody>
</table>
</div>