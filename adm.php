<!DOCTYPE html>
	<html>
		<head>
			<title>Filmes</title>
			<meta charset="utf-8">
			<link rel="stylesheet" type="text/css" href="css/style.css"/>
		</head>
		<body>
			<p><a class="botao verde" id="botaoMaior" href="addFilme.php">Incluir Novo Filme</a></p>
				
			<div class="container">
				<?php
					include_once("listaFilmes.php");


					if($total){ 
						do{
				?>
				<div class="box" id="botoes">
					<img src="img\<?php echo $linha['imgFilme'] ?>"/>
						<div class="textoFilme">
							<div class="text"><?php echo $linha['nomeFilme'] ?></div></br>
							<?php echo $linha['anoFilme'];  
							?>
							
						</div>
					<a class="botao azul" href="<?php echo "atualizaFilme.php?id=".$linha['id_filme']."&nomeFilme=".$linha['nomeFilme']."&anoFilme=".$linha['anoFilme']."&imgFilme=".$linha['imgFilme'] ?>">Atualizar</a>
					<a class="botao vermelho" href="<?php echo "deletaFilme.php?nomeFilme=".$linha['nomeFilme']?>">Excluir</a>
				</div>
			
				<?php 
					} while ($linha = mysqli_fetch_assoc($dados));

					mysqli_free_result($dados);}
					mysqli_close($mysqllink);
				?>
			</div>
		</table>
	</body>
</html>
