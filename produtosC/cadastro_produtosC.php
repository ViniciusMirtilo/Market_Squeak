<?php

  // connect
  include("../necessario/database_connect.php");

  // recuperação de dados do metodo $_POST
  $nome_cervejas = $_POST['nome_cervejas'];
  
  $quantidade = $_POST['qtd'];

  $mercados = $_POST['mercados'];

  $pagamento = $_POST['pagamento'];

  $retirada = $_POST['retirada'];

  $local_retirada = $_POST['local_retirada'];

  $temperatura = $_POST['temperatura'];
  

  // test para recuperar os dados que foram enviada ao servidor
  // echo $email, $senha, $user;

  $sql = "INSERT INTO vinicius_componentes_c (nome_cervejas, qtd, mercados, pagamento, retirada, local_retirada, temperatura) VALUES ('$nome_cervejas', '$quantidade', '$mercados', '$pagamento', '$retirada', '$local_retirada', '$temperatura')";

  if(mysqli_query($conexao,$sql)){
    header("Location: ../necessario/login.php");
  }
  else{
    header("Location: ../home.php");
  }
?>