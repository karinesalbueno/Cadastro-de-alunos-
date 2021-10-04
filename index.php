<!DOCTYPE html>
<html lang="pt-br">
<head>
<link rel="stylesheet" type="text/css" href="anexado.css">

    <meta charset="utf-8">
    <title>Cadastro de aluno </title>

</head>
<body>

<div>
   <h1 id="titulo"> Estagiário do ano</h1>
</div>
  


<form method="POST" action="cadastro.php" >
	 
        <p><strong>Nome:</strong>
			<input type="text" id="Nome" name="Nome"> </p> 


		<p><strong>Idade:</strong>
			<input type="text" id="Idade" name="Idade" maxlength="2"></p> 
      


		<p><strong>Sexo:</strong>
			<input type="text" maxlength="1" id="Sexo" name="Sexo"></p>


		<p><strong>Email:</strong>
            <input type="Email" name="email" name="email" id="email"></p>

		<p><strong>Região: </strong>
            <select name="Cod_Local">
            <option value="" >--</option>
			
<?php include ('./conexao.php');
$usu = "SELECT Nome, Cod_Local FROM local_estagio";
$usu = mysqli_query($conexao, $usu);
	while($line =  mysqli_fetch_assoc($usu)) {echo '<option value =" '.$line['Cod_Local'].'">'.$line['Nome'].'</option>';}?></select>

</p>
		<input type="submit" value="Cadastrar" name="Cadastrar">
		<a href="Exibir.php" value="exibir" nome="exibir">Exibir</a>

	
	
</form>
</body>
</html>