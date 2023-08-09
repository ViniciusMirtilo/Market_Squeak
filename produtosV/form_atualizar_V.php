<?php

  include("../necessario/database_connect.php");

  $id = $_GET['id'];

  $sql_consult_id = "SELECT * FROM vinicius_componentes WHERE id = '$id'";

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

  <link rel="stylesheet" href="../style/updateV.css">

  <script src="https://kit.fontawesome.com/7048b0b83b.js" crossorigin="anonymous"></script>

  <title>Squeak Market - Atualizar compras</title>
</head>

<header>
    <div class="center">
      <div class="logo">

        <a class="Home" href="../home.php"><h2>Hortifrúti</h2></a>

      </div>
      <!--Logo-->
      <div class="menu">

        <a class="Login" href="../produtosV/lista_produtosV.php">Sair</a>

      </div>
      <!--Menu-->
    </div>
    <!--Center-->
  </header>

<h3>Atualizar Produtos</h3>


<form action="atualizar_produtosV.php" method="post">

    <input type="hidden" name="id" value="<?php echo $dados_banco['id']?>">

    <label for="qtd">Legume</label> <!--Label = etiqueta-->
    <select name="nome" id="nome"
    class="for-control">
        <option value="Cogumelo">Cogumelo</option>
        <option value="Abrobinha">Abrobinha</option>
        <option value="Aspargos">Aspargos</option>
        <option value="Alcachofra">Alcachofra</option>
        <option value="Berinjela">Berinjela</option>
        <option value="Cenoura">Cenoura</option>
        <option value="Pimentão">Pimentão</option>
        <option value="Ervilha">Ervilha</option>
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
    <select name="localr" id="localr" class="for-control">
        <option value="R. Adhemar de Barros, 188 - Centro, Aruja - SP">R. Adhemar de Barros, 188 - Centro, Arujá - SP</option>
        <option value="Av. Nagib Farah Maluf, 249 - Conj. Res. José Bonifacio, Sao Paulo - SP">Av. Nagib Farah Maluf, 249 - Conj. Res. José Bonifácio, São Paulo - SP</option>
        <option value="Estrada Dom Joao Nery, 4031 - Itaim Paulista, Sao Paulo - SP">Estrada Dom João Nery, 4031 - Itaim Paulista, São Paulo - SP</option>
    </select>

    <label for="qtd">Status do Legume </label>
    <select name="tipolegume" id="tipolegume" class="for-control">
        <option value="Congelados">Congelados</option>
        <option value="Fresco">Fresco</option>
    </select>

    <label for="qtd">Marca de preferencia </label>
    <select name="tipomarcas" id="tipomarcas" class="for-control">
        <option value="Grano">Grano</option>
        <option value="Copacol">Copacol</option>
        <option value="De Marchi">De Marchi</option>
    </select>

    
    <br>
    <input type="submit" value="Atualizar cadastro">

</form>