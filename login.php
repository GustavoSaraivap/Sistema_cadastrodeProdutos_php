<?php include_once 'verifica_msg.php'; ?>
<!DOCTYPE html>
<html lang="pt-br">

	<head>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
		<meta charset="utf-8">
		<title>Cadastro Mercado - Home</title>
	</head>

	<body class="container-fluid">

		<?php verifica_msg(); ?>

		<h1>Entrar no Sistema</h1>

		<form action="validacao.php" method="post">

			<div class="form-group">
				<p>
					<label>Selecione o Cargo</label><br>
					<select name="cargos">
						<option>Selecione uma opçãp</option>
						<option value="gerente">Gerente</option>
						<option value="conferente">Conferente</option>
						<option value="fiscal">Fiscal</option>
					</select>
				</p>

				<p>
					<label for="nome">Nome de Usuário</label><br>
					<input type="text" name="nome" placeholder="Digite o nome de usuário">
				</p>

				<p>
					<label for="senha">Senha</label><br>
					<input type="text" name="senha" placeholder="Digite a senha">
				</p>
			</div>

			<p>
				
				<button type="submit" name="blogin" class="btn btn-primary">Login</button>
				<a href="cadastro.php">Cadastrar-se</a>

			</p>
		</form>

	</body>

</html>