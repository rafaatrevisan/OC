<?php 
  require_once('banco.php'); 

  if ($_POST) {
    $id = $_POST['ID_Produto'];
		$marca = $_POST['marca'];
    $modelo = $_POST['modelo'];
    $qntd = $_POST['qntd'];
		$peso = $_POST['peso'];
    $fornecedor = $_POST['fornecedor'];
    $lote = $_POST['lote'];
    $nota_fiscal = $_POST['nota_fiscal'];
    $data_validade = $_POST['data_validade'];

    $conn = abre_bd();
		$sql = "UPDATE produto SET Marca = '$marca', Modelo = '$modelo', Qntd = '$qntd', Peso = '$peso', Fornecedor = '$fornecedor', Lote = '$lote', Nota_fiscal = '$nota_fiscal', Data_validade = '$data_validade' WHERE ID_Produto = $id";
    $conn->query($sql);
		$linhas = mysqli_affected_rows($conn);
    fecha_bd($conn);
		if ($linhas > 0)
      header('location: produtos.php');
		else
    "<script>alert('Erro ao atualizar produto!');window.location='produtos.php';</script>";
  }
?>