<?php  

	function verifica_msg()
	{
		if(!empty($_GET['msg']))
		{
			$msg = $_GET['msg'];

			if($msg == 'notlogged')
			{
				$texto = "ATENÇÃO: Informe os dados de login para acessar a página!";
			}
			else if($msg == 'invalidlogin')
			{
				$texto = "ATENÇÃO: Login inválido!";
			}
			else if($msg == 'eptfields')
			{
				$texto = "ATENÇÃO: Preencha todos os campos";
			}
			else if($msg == 'caderror')
			{
				$texto = "ERRO AO CADASTRAR PRODUTO, Tente novamente!";
			}
			else if($msg == 'cadok')
			{
				$texto = "Produto Cadastrado com sucesso!";
			}
			else if($msg == 'ok')
			{
				$texto = "Funcionário cadastrado com sucesso!";
			}

			echo '<p><h3 class="alert alert-warning">' . $texto . '</h3></p>';
		}
	}

?>