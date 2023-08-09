<?php

  require("database_connect.php");

  $id = $_GET['id'];

  $sql_excluir_id = "DELETE FROM vinicius_users WHERE vinicius_users.id = '$id'";

  if(mysqli_query($conexao,$sql_excluir_id)){
    header("Location: ../necessario/lista_usuario.php");
  }else{
    echo"falha ao excluir";
  }

?>