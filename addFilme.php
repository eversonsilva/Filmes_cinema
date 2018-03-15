<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<link rel="stylesheet" type="text/css" href="css/style.css"/>
	</head>
	<body>
		<a class="botao vermelho" href="adm.php">Voltar</a>
		<form action="incluiFilme.php">
			<input class="campos" placeholder="Nome do Filme" type="text" name="filme">
			<input class="campos" placeholder="Ano do Filme" type="number" name="ano">
			<input class="campos" type="file" name="imgFilme">
			<input class="botao verde" id="botaoIncluir" type="submit" value="Adicionar">
		</form>
	</body>
</html>