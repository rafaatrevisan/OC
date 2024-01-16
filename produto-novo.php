<?php 
  require_once('banco.php'); 

  if ($_POST) {
    $marca = $_POST['marca'];
    $modelo = $_POST['modelo'];
    $qntd = $_POST['qntd'];
		$peso = $_POST['peso'];
    $fornecedor = $_POST['fornecedor'];
    $lote = $_POST['lote'];
    $nota_fiscal = $_POST['nota_fiscal'];
    $data_validade = $_POST['data_validade'];

    $conn = abre_bd();
    $sql = "INSERT INTO produto (Marca, Modelo, Qntd, Peso, Fornecedor, Lote, Nota_fiscal, Data_validade)" . " VALUES ('" . $marca . "', '" . $modelo . "', '" . $qntd ."', '" . $peso . "', '" . $fornecedor . "', '" . $lote . "', '" . $nota_fiscal . "', '" . $data_validade . "');";

    $conn->query($sql);
		$linhas = mysqli_affected_rows($conn);
    fecha_bd($conn);
		if ($linhas > 0)
      header('location: produtos.php');
		else
			header('location: produtos.php');
  }
?>