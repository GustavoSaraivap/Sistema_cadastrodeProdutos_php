<?php
	include_once 'conn.php';  

	function cadastrar($usuario)
	{
		global $conn;

		$campos = "('" . $usuario['nomeF'] . "', " .
				  " '" . $usuario['cargoF'] . "', " . 
				  " '" . $usuario['senhaF'] . "') ";

		$sql = "INSERT INTO user_tb (nome, cargo, senha) VALUES " . $campos;

		$resultado = mysqli_query($conn, $sql);

		if(mysqli_affected_rows($conn) > 0)
		{
			header('location:login.php?msg=ok');
		}
		else
		{
			echo "ERRO ao realizar cadastro. Tente novamente!";
		}
	}

	function cadastrar_produtos($prod)
	{
		global $conn;

		$produtos = "('" . $prod['nomeProd'] . "', " .
				    " '" . $prod['catProd'] . "', " . 
				    " '" . $prod['marcaProd'] . "', " . 
				    " '" . $prod['precoProd'] . "') ";

		$sql = "INSERT INTO produtos_tb (nomeProd, catProd, marcaProd, precoProd) VALUES " . $produtos;

		$resultado = mysqli_query($conn, $sql);

		if(mysqli_affected_rows($conn) > 0)
		{
			header('location:cadastro_prod.php?msg=cadok');
		}
		else
		{
			header('location:index.php?msg=caderror');
		}
	}

	function listar_produtos()
	{
		global $conn;

		$sql = "SELECT * FROM produtos_tb (nomeProd, catProd, marcaProd, precoProd)";

		$resultado = mysqli_query($conn, $sql);

		if(mysqli_affected_rows($conn) > 0)
		{
			echo "<h2>Produtos:</h2>";

			while($reg = mysqli_fetch_assoc($resultado))
			{
				echo "<p>";

				foreach ($reg as $key => $value) 
				{
					echo '<strong>' . ucfirst($key) . '</strong>' . $value . '<br>';
				}

				echo "</p>";
			}
		}
	}

?>