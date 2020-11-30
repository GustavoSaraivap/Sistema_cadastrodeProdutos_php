<?php include_once 'funcoes.php'; ?>
<!DOCTYPE html>
<html lang="pt-br">

	<head>

		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
		<meta charset="utf-8">
		<title>Cadastro de Funcionário - Home</title>

	</head>

	<body class="container-fluid">

		<h1>Cadastro de Funcionário - Home</h1>

		<p>
			<h4>Já possui cadastro? clique <a href="login.php">aqui</a></h4>
		</p>

		<form action="cadastro.php" method="post">
			<p>
				<label for="nomeF">Nome:</label><br>
				<input type="text" name="nomeF">
			</p>

			<p>
					<label>Selecione o Cargo</label><br>
					<select name="cargos">
						<option>Selecione uma opção</option>
						<option value="gerente">Gerente</option>
						<option value="conferente">Conferente</option>
						<option value="fiscal">Fiscal</option>
					</select>
			</p>

			<p>
				<label for="senhaF">Senha:</label><br>
				<input type="text" name="senhaF">
			</p>

			<button type="submit" name="cadastrar" class="btn btn-primary">Cadastrar</button>
		</form>

		<?php  

			if(isset($_POST['cadastrar']))
			{
				if(empty($_POST['nomeF']) || !isset($_POST['cargos']) || empty($_POST['senhaF']))
				{
					echo '<p><h3 class="alert alert-danger">ATENÇÃO: Preencha todos os campos!</h3></p>';
				}
				else
				{
					$usuario['nomeF'] = $_POST['nomeF'];
					$usuario['cargoF'] = $_POST['cargos'];
					$usuario['senhaF'] = $_POST['senhaF'];

					cadastrar($usuario);
				}
			}

		?>
	</body>

</html>