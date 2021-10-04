
<?php
include ('./conexao.php');


if (isset($_POST['Cadastrar'])){
$Nome= $_POST['Nome'];
$Idade= $_POST['Idade'];
$Sexo= $_POST['Sexo'];
$email= $_POST['email'];
$Cod_Local= $_POST['Cod_Local'];



 $usu = mysqli_query($conexao,"INSERT INTO estagiario 
                    (Nome, Idade, Sexo, email, Cod_Local)
         VALUES ('$Nome', '$Idade', '$Sexo', '$email', '$Cod_Local')");

    if ($usu){
        echo 'Cadastrado no banco de dados com sucesso!';
    }

}
?>



