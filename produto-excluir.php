<?php
	require_once('banco.php');
	
	if ($_GET) {
		$id = $_GET['id'];

		try {
		$con = abre_bd();
		$sql = "DELETE FROM produto WHERE ID_Produto = $id";
		$con->query($sql);
		$linhas = mysqli_affected_rows($con);
		fecha_bd($con);	
		if ($linhas > 0) 
			header('location: produtos.php');
		else
			header('location: produtos.php');
		} catch (Exception $e) {
			echo $e->GetMessage();
		}
	}
?>