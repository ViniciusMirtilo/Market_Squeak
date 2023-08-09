<?php

  // connect
  include("database_connect.php");

  // recuperação de dados do metodo $_POST
  $email = $_POST['email'];
  $senha = $_POST['senha'];
  $users = $_POST['users'];

  // test para recuperar os dados que foram enviada ao servidor
  // echo $email, $senha, $user;

  $sql = "INSERT INTO `vinicius_users` (`email`, `senha`, `users`) VALUES ('$email', '$senha', '$users')";

  if(mysqli_query($conexao,$sql)){
    header("Location: test_login.php");
  }
  else{
    header("Location: cadastro.php");
  }
?>