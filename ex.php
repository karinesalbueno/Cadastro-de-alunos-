<?php
include ('./conexao.php');
$Cod_Estagiario = $_GET['Cod_Estagiario'];
$exclui = "DELETE FROM estagiario WHERE Cod_Estagiario= $Cod_Estagiario ";
$exclui = mysqli_query($conexao, $exclui);
if ($exclui){
    echo 'Excluido do banco de dados com sucesso!';
}
?>