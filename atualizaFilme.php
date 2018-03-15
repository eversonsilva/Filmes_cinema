<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<link rel="stylesheet" type="text/css" href="css/style.css"/>

		<?php 

			$id = filter_input(INPUT_GET, "id_filme");
			$nome = filter_input(INPUT_GET, "nomeFilme");
			$ano = filter_input(INPUT_GET, "anoFilme");
			$imgFilme = filter_input(INPUT_GET, "imgFilme");

		?>

	</head>
	<body>
		<a class="botao vermelho" href="adm.php">Voltar</a>
		<form action="atFilme.php">
			<input type="hidden" name="id_filme" value="<?php echo $id ?>"/>
			<input type="hidden" name="nomeFilme" value="<?php echo $nome ?>"/>

			<input class="campos" type="text" name="nome" value="<?php echo $nome ?>">
			<input class="campos" type="number" name="ano" value="<?php echo $ano ?>">
			<input class="campos" type="file" name="img" value="img/<?php echo $imgFilme ?>">

			<input class="botao azul" id="botaoIncluir" type="submit" value="Atualizar"/>
		</form>	
	</body>
</html>