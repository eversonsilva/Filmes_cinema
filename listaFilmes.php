<?php 
	$paramentro = filter_input(INPUT_GET, "parametro");
	$mysqllink = mysqli_connect("192.168.14.224","usr_teste","1234");
	mysqli_select_db($mysqllink, "dev_everson");

	$dados = mysqli_query($mysqllink, "SELECT * FROM filme WHERE nomeFilme LIKE '%".$paramentro."%'");

	$linha = mysqli_fetch_assoc($dados);
	$total = mysqli_num_rows($dados);
	
?>
