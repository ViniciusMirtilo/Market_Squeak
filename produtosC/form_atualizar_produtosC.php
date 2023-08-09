<?php

  include("../necessario/database_connect.php");

  $id = $_GET['id'];

  $sql_consult_id = "SELECT * FROM vinicius_componentes_c WHERE id = '$id'";

  $result_consult_id = mysqli_query($conexao,$sql_consult_id);

  $dados_banco = mysqli_fetch_assoc($result_consult_id);
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <link rel="icon" href="./img/icone.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@600&family=Josefin+Sans:ital,wght@1,300&family=Permanent+Marker&display=swap" rel="stylesheet" />

  <link rel="stylesheet" href="../style/updateC.css">

  <script src="https://kit.fontawesome.com/7048b0b83b.js" crossorigin="anonymous"></script>

  <title>Squeak Market - Atualizar compras</title>
</head>

<header>
    <div class="center">
      <div class="logo">

        <a class="Home" href="../home.php"><h2>Squeak Market</h2></a>

      </div>
      <!--Logo-->
      <div class="menu">

        <a class="Login" href="../produtosC/lista_produtosC.php">Sair</a>

      </div>
      <!--Menu-->
    </div>
    <!--Center-->
  </header>

<h3>Atualizar Produtos</h3>


<form action="../produtosC/atualizar_produtosC.php" method="post">

    <input type="hidden" name="id" value="<?php echo $dados_banco['id']?>">

    <label for="qtd">Cervejas</label> <!--Label = etiqueta-->
    <select name="nome_cervejas" id="nome_cervejas"
    class="for-control">
        <option value="Bodebrown Cacau IPA">Bodebrown Cacau IPA</option>
        <option value="Chimay Bleue">Chimay Bleue</option>
        <option value="Colorado Ithaca">Colorado Ithaca</option>
        <option value="Morada Double Vienna">Morada Double Vienna</option>
        <option value="North Coast">North Coast</option>
        <option value="Tripel Karmeliet">Tripel Karmeliet</option>
        <option value="Budweiser">Budweiser</option>
        <option value="Ballast Point Sculpin IPA">Ballast Point Sculpin IPA</option>
        <option value="Bud Light">Bud Light</option>
        <option value="Skol">Skol</option>
    </select>

    <label for="qtd">Quantidade</label> <!--Label = etiqueta-->
    <input type="value" name="qtd" id="qtd" value="<?php echo $dados_banco['qtd']?>">

    <label for="qtd">Mercados</label> <!--Label = etiqueta-->
    <select name="mercados" id="mercados" class="for-control">
      <option value="carrefour">Carrefour</option>
      <option value="assai">Assaí</option>
      <option value="extra">Extra</option>
      <option value="pao_de_acucar">Pão de Açúcar</option>
      <option value="sonda_supermercado">Sonda Supermercado</option>
      <option value="tenda_atacado">Tenda Atacado</option>
    </select>

    <label for="qtd">Pagamento</label> <!--Label = etiqueta-->
    <select name="pagamento" id="pagamento" class="for-control">
        <option value="Cartão de credito">Cartão de credito</option>
        <option value="Cartão de debito">Cartão de debito</option>
        <option value="Dinheiro">Dinheiro</option>
    </select>

    <label for="qtd">Retirada</label> <!--Label = etiqueta-->
    <select name="retirada" id="retirada" class="for-control">
        <option value="Nao muito rapido">Nao muito rapido (Disponivel em ate 2hr)</option>
        <option value="Rapido ">Rapido (Disponivel em ate 1hr)</option>
        <option value="Express">Express(Disponivel em ate 30 min)</option>
    </select>

    <label for="qtd">Local de retirada </label> <!--Label = etiqueta-->
    <select name="local_retirada" id="local_retirada" class="for-control">
        <option value="Av. Jose Pinheiro Borges, s/n - Vila Campanela, Sao Paulo - SP">Av. Jose Pinheiro Borges, s/n - Vila Campanela, Sao Paulo - SP</option>
        <option value="Estrada Dom Joao Nery, 4031 - Itaim Paulista, Sao Paulo - SP">Estrada Dom Joao Nery, 4031 - Itaim Paulista, Sao Paulo - SP</option>
        <option value="Estrada Dom João Nery, 4031 - Itaim Paulista, São Paulo - SP">Av. Josr Pinheiro Borges, - Vila Brasil, Sao Paulo - SP</option>
        <option value="R. Serra de Japi, 647 - Vila Gomes Cardim, Sao Paulo - SP">R. Serra de Japi, 647 - Vila Gomes Cardim, São Paulo - SP</option>
        <option value="Avenida Marechal Tito, 7579 - Itaim Paulista, Sao Paulo - SP">Avenida Marechal Tito, 7579 - Itaim Paulista, São Paulo - SP</option>
        <option value="R. Itu, 500 - Vila Monte Belo, Itaquaquecetuba - SP">R. Itu, 500 - Vila Monte Belo, Itaquaquecetuba - SP</option>
    </select>

    <label for="qtd">Temperatura </label>
    <select name="temperatura" id="temperatura" class="for-control">
        <option value="Bem_gelada">Bem gelada</option>
        <option value="Gelado">Gelado</option>
        <option value="Temperatura_ambiente">Temperatura ambiente</option>
    </select>

    
    <br>
    <input type="submit" value="Atualizar cadastro">

</form>