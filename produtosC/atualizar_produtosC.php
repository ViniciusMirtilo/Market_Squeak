<?php

  include("../necessario/database_connect.php");

  $id = $_POST['id'];

  $nome_cervejas = $_POST['nome_cervejas'];

  $quantidade = $_POST['qtd'];

  $mercados = $_POST['mercados'];

  $pagamento = $_POST['pagamento'];

  $retirada = $_POST['retirada'];

  $local_retirada = $_POST['local_retirada'];

  $temperatura = $_POST['temperatura'];


  echo $login_user, $login_password, $login_user;

  $sql_update = "UPDATE vinicius_componentes_c SET nome_cervejas = '$nome_cervejas', qtd = '$quantidade', mercados = '$mercados', pagamento = '$pagamento', retirada = '$retirada', local_retirada = '$local_retirada', temperatura = '$temperatura' WHERE vinicius_componentes_c.id = '$id'";

  if(mysqli_query($conexao,$sql_update)){
    header("Location: lista_produtosC.php");
  }else{
    echo"falha ao cadastrar";
  }
?>