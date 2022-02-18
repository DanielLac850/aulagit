<?php 
include_once("../model/conexao.php");
include_once("../model/jogomodel.php");

$nome = $_POST["nomeUsu"];

if(visuUsuarioNome($conn,$nomeusu)){
    header("location:../view/visuJogoGen.php");
}else{
    header("location:../view/visuJogoGen.php");
}
?>