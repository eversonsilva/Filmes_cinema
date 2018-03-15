<?php 
	$id = filter_input(INPUT_GET, "id_filme");
	$nome = filter_input(INPUT_GET, "nome");
	$nome1 = filter_input(INPUT_GET, "nomeFilme");
	$ano = filter_input(INPUT_GET, "ano");
	$imgFilme = filter_input(INPUT_GET, "img");

	$mysqllink = mysqli_connect("192.168.14.224","usr_teste","1234");
	mysqli_select_db($mysqllink, "dev_everson");

	if($mysqllink){
		$dados = mysqli_query($mysqllink, "UPDATE filme SET nomeFilme = '$nome', anoFilme = '$ano', imgFilme = '$imgFilme' WHERE nomeFilme = '$nome1'");
	
		if($dados){
			header("Location: adm.php");
		}
	}else{
		die("Erro: ".mysql_error($mysqllink));
	}
?>
