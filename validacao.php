<?php  

	if(empty($_POST['nome']) || empty($_POST['senha']) || !isset($_POST['cargos'])) //
	{
		header('location:login.php?msg=eptfields'); // Problema está aqui!
	}
	else
	{
		$nome = $_POST['nome'];
		$senha = $_POST['senha'];
		$cargo = $_POST['cargos'];

		include_once 'conn.php';

		$sql = "SELECT * FROM user_tb WHERE nome LIKE '$nome' AND senha LIKE '$senha' AND cargo LIKE '$cargo'"; // 

		$resultado = mysqli_query($conn, $sql);

		if(mysqli_affected_rows($conn) > 0)
		{
			$login = mysqli_fetch_assoc($resultado);

			session_start();

			foreach ($login as $key => $value) 
			{
				$_SESSION[$key] = $value;
			}

			header('location:index.php');
		}
		else
		{
			header('location:login.php?msg=invalidlogin');
		}
	}

?>