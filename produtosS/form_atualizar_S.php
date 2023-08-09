<?php

  include("../necessario/database_connect.php");

  $id = $_GET['id'];

  $sql_consult_id = "SELECT * FROM vinicius_componentes_s WHERE id = '$id'";

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

  <link rel="stylesheet" href="../style/updateS.css">

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

        <a class="Login" href="../produtosS/lista_produtosS.php">Sair</a>

      </div>
      <!--Menu-->
    </div>
    <!--Center-->
  </header>

<h3>Atualizar Produtos</h3>


<form action="../produtosS/atualizar_produtosS.php" method="post">

    <input type="hidden" name="id" value="<?php echo $dados_banco['id']?>">

    <label for="qtd">Legume</label> <!--Label = etiqueta-->
    <select name="nome" id="nome"
    class="for-control">
        <option value="Batata Chips Sensações Peito Peru 40G">Batata Chips Sensações Peito Peru 40G</option>
        <option value="Salgadinho de Milho Doritos Queijo Nacho 84g">Salgadinho de Milho Doritos Queijo Nacho 84g</option>
        <option value="Salgadinho de Milho Cheetos Onda Requeijão 45g">Salgadinho de Milho Cheetos Onda Requeijão 45g</option>
        <option value="Salgadinho de Milho Cebolitos 110g">Salgadinho de Milho Cebolitos 110g</option>
        <option value="Salgadinho de Milho Fandangos Presunto 45g">Salgadinho de Milho Fandangos Presunto 45g</option>
        <option value="Batata Frita Lisa Lay's Clássica 80g">Batata Frita Lisa Lay's Clássica 80g</option>
        <option value="Salgadinho Batata Pringles Original 114g">Salgadinho Batata Pringles Original 114g</option>
        <option value="Salgadinho de Trigo Baconzitos 103g">Salgadinho de Trigo Baconzitos 103g</option>
        <option value="Salgadinho de Trigo Torcida Pimenta Mexicana 100g">Salgadinho de Trigo Torcida Pimenta Mexicana 100g</option>
        <option value="Salgadinho de Batata Ruffles Original 167g">Salgadinho de Batata Ruffles Original 167g</option>
        <option value="Salgadinho Fofura presunto 90g">Salgadinho Fofura presunto 90g</option>
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
      <option value="Cartao de credito">Cartão de credito</option>
      <option value="Cartao de debito">Cartão de debito</option>
      <option value="Vale refeicao">Vale refeição</option>
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
    
    <br>
    <input type="submit" value="Atualizar cadastro">

</form>