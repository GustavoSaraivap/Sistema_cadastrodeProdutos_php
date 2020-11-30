<?php include_once 'lock.php'; include_once 'validacao.php'; include_once 'funcoes.php'; ?>
<!DOCTYPE html>
<html>

	<head>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
		<meta charset="utf-8">
		<title>Área dos Produtos</title>
	</head>

	<body class="container-fluid">
		
		<h1>Escolha uma opção</h1>

		<p>
			<?php 

				if($cargo == 'Gerente')
				{
					include_once 'menu_gerente.php';
				} 	
				else
				{
					include_once 'menu_fc';
				}

			?>

			<?php listar_produtos(); ?>
		</p>

	</body>

</html>