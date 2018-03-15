<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<link rel="stylesheet" type="text/css" href="css/style.css"/>
	</head>
	<body>

		<form action="deletaFilme.php">
			<select nome="filme">
				<option>Selecione o Filme</option>
					<?php
						$mysqllink = mysqli_connect("192.168.14.224","usr_teste","1234");
						mysqli_select_db($mysqllink, "dev_everson");
	
							$dados = mysqli_query($mysqllink, "SELECT nomeFilme FROM filme");
							$linha = mysqli_fetch_assoc($dados);
							$total = mysqli_num_rows($dados);
					
						if($total){ do{
					?>
						<option><?php echo $linha['nomeFilme'] ?></option>
					<?php 
						} while ($linha = mysqli_fetch_assoc($dados));

						mysqli_free_result($dados);}
						mysqli_close($mysqllink);
					?>
			</select>

			<input type="submit" value="Deletar">
		</form>
	</body>
</html>