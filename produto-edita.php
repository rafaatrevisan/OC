<?php
	require_once('banco.php');
	
	$produto = null;
	$id = $_GET['id'];
	try {
		$con = abre_bd();
		$sql = "SELECT * FROM produto WHERE ID_Produto = " . $id;
		$result = $con->query($sql);
		if ($result->num_rows > 0) {
			$produto = $result->fetch_assoc();
		}
	} catch (Exception $e) {
		echo $e->GetMessage();
	}
	fecha_bd($con);
?>

<!DOCTYPE html>
<html lang="pt-br">
<html>

	<head>
    <title>OpenControl</title>	
    <link rel="icon" type="imagem/png" href="open.png" />
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="a.css" rel="stylesheet">
	</head>

	<body>

<main>
  <section class="container">
    <!-- login -->
    <div class="login">
        
     
        <strong>Open Control</strong>
        <div class="color">
        </div>

        <div class="l">
            <span>Editar produto</span>
        </div>
      

      <form action="produto-edita-gravar.php" method="post">
        <fieldset>

        <div class="form">
            <div class="form-row">
              <label class="form-label" for="input" >ID</label>
              <input type="text" class="form-text" placeholder="ID do produto" name="ID_Produto" value="<?php echo $produto['ID_Produto'] ?>" readonly>
            </div>


            <div class="form-row">
              <label class="form-label" for="input" >Marca</label>
              <input type="text" class="form-text" placeholder="Marca do produto" name="marca" value="<?php echo $produto['Marca'] ?>" required>
            </div>

       
              <div class="form-row">
                <label class="form-label" for="input" >Modelo</label>
                <input type="text" class="form-text" placeholder="Modelo do produto" name="modelo" value="<?php echo $produto['Modelo'] ?>" required>
              </div>

           
                <div class="form-row">
                  <label class="form-label" for="input" >Quantidade</label>
                  <input type="number" class="form-text" placeholder="Quantidade do produto" name="qntd" value="<?php echo $produto['Qntd'] ?>" required>
                </div>

               
                  <div class="form-row">
                    <label class="form-label" for="input" >Peso</label>
                    <input type="text" class="form-text" placeholder="Peso do produto" name="peso" value="<?php echo $produto['Peso'] ?>" required>
                  </div>

                 
                    <div class="form-row">
                      <label class="form-label" for="input" >Fornecedor</label>
                      <input type="text" class="form-text" placeholder="Fornecedor do produto" name="fornecedor" value="<?php echo $produto['Fornecedor'] ?>" required>
                    </div>

                    <div class="form-row">
                      <label class="form-label" for="input" >Lote</label>
                      <input type="text" class="form-text" placeholder="Lote do produto" name="lote" value="<?php echo $produto['Lote'] ?>" required>
                    </div>

                    <div class="form-row">
                      <label class="form-label" for="input" >Nota fiscal</label>
                      <input type="text" class="form-text" placeholder="Nota fiscal do produto" name="nota_fiscal" value="<?php echo $produto['Nota_fiscal'] ?>" required>
                    </div>

                    <div class="form-row">
                      <label class="form-label" for="input" >Data de validade</label>
                      <input type="date" class="form-text" name="data_validade" value="<?php echo $produto['Data_validade'] ?>" required>
                    </div>
                    
              <button type="submit" class="btn btn-login">Salvar<i class="fas fa-arrow-right"></i></button>
              <a href="produtos.php" class="btn btn-login">Cancelar</a>

          </div>
        </fieldset>
      </form>
    </div>
    </div>
  </section>
</main>
</div>