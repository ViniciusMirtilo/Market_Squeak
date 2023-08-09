<?php

  // connect
  include("../necessario/database_connect.php");

  // recuperação de dados do metodo $_POST
  $nome = $_POST['nome'];
  
  $quantidade = $_POST['qtd'];

  $mercados = $_POST['mercados'];

  $pagamento = $_POST['pagamento'];

  $retirada = $_POST['retirada'];

  $local = $_POST['localr'];

  $tipo = $_POST['tipolegume'];
  
  $marcas = $_POST['tipomarcas'];


  // test para recuperar os dados que foram enviada ao servidor
  // echo $email, $senha, $user;

  $sql = "INSERT INTO vinicius_componentes (tipomarcas, nome, qtd, mercados, pagamento, retirada, localr, tipolegume) VALUES ('$marcas', '$nome', '$quantidade', '$mercados', '$pagamento', '$retirada', '$local', '$tipo')";

  if(mysqli_query($conexao,$sql)){
    header("Location: ../necessario/login.php");
  }
  else{
    header("Location: ../home.php");
  }
?>