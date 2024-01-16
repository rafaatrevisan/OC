<?php
	require_once('banco.php');

	$produtos = null;
	$produto = null;
	try {
		$conn = abre_bd();
		$sql = "SELECT * FROM produto";
		$result = $conn->query($sql);
		if ($result->num_rows > 0) 
			$produtos = $result->fetch_all(MYSQLI_ASSOC);
	} catch (Exception $e) {
		echo $e->GetMessage();
	}
	fecha_bd($conn);
?>
<html lang="pt-br">
<head>
<title>OpenControl</title>
<link rel="icon" type="imagem/png" href="open.png" />

<meta charset="utf-8">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.2/css/font-awesome.min.css">		
<link rel="stylesheet" href="tabela.css">
</head>
	



    <table>
        <thead>
          <tr>
            <th>ID</th>
            <th>Marca</th>
            <th>Modelo</th>
            <th>Quantidade</th>
            <th>Peso</th>
            <th>Fornecedor</th>
            <th>Lote</th>
            <th>Nota fiscal</th>
            <th>Data de validade</th>
            <th>OP</th>
    
          </tr>
        <thead>
        <tbody>
				<?php if ($produtos) : ?>
				<?php foreach ($produtos as $produto) : ?>
				<tr>
					<td><?php echo $produto['ID_Produto']; ?></td>
					<td><?php echo $produto['Marca']; ?></td>
					<td><?php echo $produto['Modelo']; ?></td>
					<td><?php echo $produto['Qntd']; ?></td>
					<td><?php echo $produto['Peso']; ?></td>
					<td><?php echo $produto['Fornecedor']; ?></td>
					<td><?php echo $produto['Lote']; ?></td>
					<td><?php echo $produto['Nota_fiscal']; ?></td>
					<td><?php echo $produto['Data_validade']; ?></td>
					<td class="actions text-right">
						<a href="produto-edita.php?id=<?php echo $produto['ID_Produto']; ?>" class="btn btn-sm" data-toggle="tooltip" data-placement="bottom" title="Editar"><i class="fa fa-pencil"></i> </a>

						<a href="produto-excluir.php?id=<?php echo $produto['ID_Produto']; ?>" class="btn btn-sm" data-toggle="modal" data-target="#delete-modal" data-produto="<?php echo $produto['ID_Produto']; ?>" data-toggle="tooltip" data-placement="bottom" title="Excluir">
							<i class="fa fa-trash"></i> </a>
					</td>
				</tr>
			<?php endforeach; ?>
			<?php else : ?>
				<tr>
					<td colspan="6">Nenhum registro encontrado.</td>
				</tr>
			<?php endif; ?>
			</tbody>
    </table>

	<?php include('modal.php'); ?>

		<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

		<script src="js/main.js"></script>
		

		<div class="color">
		<a href="produto-novo2.html" class="button large">Adicionar produto</a>
		</div>

</body>

</html>