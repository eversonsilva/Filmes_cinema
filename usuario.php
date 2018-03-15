<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<link rel="stylesheet" type="text/css" href="css/login.css"/>
	</head>
	<body>
		<?php include_once("listaFilmes.php"); ?>
		<form method=form"GET" action="<?php echo $_SERVER['PHP_SELF']; ?>">
			<input class="campos" placeholder="Busque um filme" type="text" name="filme">
			<input class="botao verde" type="submit" value="Buscar"/>
			</form>
	</body>
</html>
