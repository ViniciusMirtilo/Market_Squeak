<?php

  include("../necessario/database_connect.php");

  $id = $_POST['id'];

  $nome = $_POST['nome'];

  $quantidade = $_POST['qtd'];

  $mercados = $_POST['mercados'];

  $pagamento = $_POST['pagamento'];

  $retirada = $_POST['retirada'];

  $local = $_POST['localr'];

  $tipo = $_POST['tipolegume'];

  $marcas = $_POST['tipomarcas'];


  echo $login_user, $login_password, $login_user;

  $sql_update = "UPDATE vinicius_componentes SET tipomarcas = '$marcas', nome = '$nome', qtd = '$quantidade', mercados = '$mercados', pagamento = '$pagamento', retirada = '$retirada', localr = '$local', tipolegume = '$tipo' WHERE vinicius_componentes.id = '$id'";

  if(mysqli_query($conexao,$sql_update)){
    header("Location: ../produtosV/lista_produtosV.php");
  }else{
    echo"falha ao cadastrar";
  }
?>