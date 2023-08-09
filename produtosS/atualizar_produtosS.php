<?php

  include("../necessario/database_connect.php");

  $id = $_POST['id'];

  $nome = $_POST['nome'];
  
  $quantidade = $_POST['qtd'];

  $mercados = $_POST['mercados'];

  $pagamento = $_POST['pagamento'];

  $retirada = $_POST['retirada'];

  $local_retirada = $_POST['local_retirada'];


  $sql_update = "UPDATE vinicius_componentes_s SET nome = '$nome', qtd = '$quantidade', mercados = '$mercados', pagamento = '$pagamento', retirada = '$retirada', local_retirada = '$local_retirada' WHERE vinicius_componentes_s.id = '$id'";

  if(mysqli_query($conexao,$sql_update)){
    header("Location: ../produtosS/lista_produtosS.php");
  }else{
    echo"falha ao cadastrar";
  }
?>