<?php 
	$email = filter_input(INPUT_GET, "email");
	$password = filter_input(INPUT_GET, "password");

	$mysqllink = mysqli_connect("192.168.14.224","usr_teste","1234");
	mysqli_select_db($mysqllink, "dev_everson");

	if($mysqllink){
		//$dados = Yii::app()->db->createCommand('email','password');
		$dados = mysqli_query($mysqllink, "SELECT acesso FROM login WHERE email = '$email' AND password = '$password'");

		$resultado= mysqli_fetch_assoc($dados);

			//Nível de acesso
			if($resultado['acesso'] == 1){
				header("Location: adm.php");	
			}else{
				header("Location: usuario.php");
			}	
		}else{
			die("Erro: ".mysql_error($mysqllink));
		}
?>
