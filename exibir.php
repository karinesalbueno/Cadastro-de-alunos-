
<table border='1px' >
<td><strong>Código</td>
<td><strong>Nome</td>
<td><strong>Idade</td>
<td><strong>Sexo</td>
<td><strong>Email</td>  
<td><strong>Região</strong></td>

<?php include ('./conexao.php');
$mostra = "SELECT * FROM estagiario order by Cod_Local"; $mostra = mysqli_query($conexao, $mostra); ?>

               
<?php while($line =  mysqli_fetch_assoc($mostra)){ ?>
<tr><td>   <?php echo $line['Cod_Estagiario']; ?></td>
<td><?php echo $line['Nome']; ?></td>
<td><?php echo $line['Idade']; ?></td>
<td><?php echo $line['Sexo']; ?></td>
<td><?php echo $line['email']; ?></td>
<td><?php echo $line['Cod_Local']; ?></td>
<td><a href="#">Modificar </a></td>
<td><a href="./ex.php?action=deletar&Cod_Estagiario=<?PHP echo $line['Cod_Estagiario']; ?>">Excluir </a></td>
</tr><?php }  ?></table>
 
