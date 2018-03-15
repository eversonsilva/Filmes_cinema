<?php 
	$nome = filter_input(INPUT_GET, "nomeFilme");

	$mysqllink = mysqli_connect("192.168.14.224","usr_teste","1234");
	mysqli_select_db($mysqllink, "dev_everson");

	if($mysqllink){
		$dados = mysqli_query($mysqllink, "DELETE FROM filme WHERE nomeFilme= '$nome'");
		
		if($dados){
			header("Location: adm.php");
		}
	}else{
		die("Erro: ".mysql_error($mysqllink));
	}
?>
