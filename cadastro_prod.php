<?php include_once 'conn.php'; include_once 'funcoes.php'; ?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
		<meta charset="utf-8">
		<title>Cadastro de Produtos</title>
	</head>

	<body class="container-fluid">

		<h1>Cadastro de Produtos</h1>

		<form action="cadastro_prod.php" method="post">
			<p>
				<label for="nomeProd">Nome do produto:</label><br>
				<input type="text" name="nomeProd">
			</p>

			<p>
				<label for="catProd">Categoria</label><br>
				<input type="text" name="catProd">
			</p>

			<p>
				<label for="marcaProd">Marca</label><br>
				<input type="text" name="marcaProd">
			</p>

			<p>
				<label for="precoProd">Preço</label><br>
				<input type="number" name="precoProd">
			</p>

			<p>
				<button type="submit">Cadastrar</button>
			</p>
		</form>

		<?php  

			if(empty($_POST['nomeProd']) || empty($_POST['catProd']) || empty($_POST['marcaProd']) || empty($_POST['precoProd']))
			{
				echo '<p><h3 class="alert alert-danger">ATENÇÃO: Preencha todos os campos!</h3></p>';
			}
			else
			{
				$prod['nomeProd'] = $_POST['nomeProd'];
				$prod['catProd'] = $_POST['catProd'];
				$prod['marcaProd'] = $_POST['marcaProd'];
				$prod['precoProd'] = $_POST['precoProd'];
			}

			cadastrar_produtos($prod);
		?>
	</body>
</html>