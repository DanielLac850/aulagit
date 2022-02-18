<?php
include_once("../view/header.php");

include_once ("../model/conexao.php");
include_once ("../model/jogomodel.php");
extract($_REQUEST,EXTR_OVERWRITE);

 if(inserirJogo($conn,$nomejogo,$valorjogo,$generojogo,
 $qtdjogo,$datalancamentojogo,$studiojogo)){
 echo("O jogo foi cadastrado com Sucesso !!!");
 }else{
 echo("Não foi possível cadastrar os dados do jogo!!!");
 }
include_once("../view/footer.php");

?>