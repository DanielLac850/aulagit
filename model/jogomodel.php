<?php 

function inserirJogo($conn,$nomejogo,$valorjogo,$generojogo,
$qtdjogo,$datalancamentojogo,$studiojogo){
    $query= "INSERT INTO `tbjogos` (`idjogo`, `nomejogo`, `valorjogo`, `generojogo`,
     `qtdjogo`, `datalancamentojogo`, `studiojogo`) VALUES (NULL,
     '{$nomejogo} ', '{$valorjogo}', '{$generojogo}', '{$qtdjogo}', 
     '{$datalancamentojogo}', '{$studiojogo}')";

    $dados = mysqli_query ($conn,$query);
    return $dados;
}
function visuJogoGen($conn,$generojogo){
    $query = "select * from tbjogos where generojogo like '%{$generojogo}%'";
    $resultado = mysqli_query($conn, $query);
    return $resultado;
}

function visuUsuarioEmail($conn, $emailusu){
    $query = "select * from tbjogos where emailusu like '%{$emailusu}%'";
    $resultado = mysqli_query($conn, $query);
    return $resultado;
    }
function visuJogNom($conn, $nomejogo){
    $query = "select * from tbjogos where nomejogo '%{$nomejogo}";
    $resultado = mysqli_query($conn,$query);
    return $resultado;
}

?>