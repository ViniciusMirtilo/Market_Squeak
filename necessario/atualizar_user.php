<?php

  include("database_connect.php");

  $id = $_POST['id'];

  $login_user = $_POST['email'];

  $login_password = $_POST['senha'];

  $login_profile = $_POST['users'];


  echo $login_user, $login_password, $login_user;

  $sql_update = "UPDATE vinicius_users SET email = '$login_user', senha = '$login_password', users = '$login_profile' WHERE vinicius_users.id = '$id'";

  if(mysqli_query($conexao,$sql_update)){
    header("Location: lista_usuario.php");
  }else{
    echo"falha ao cadastrar";
  }
?>