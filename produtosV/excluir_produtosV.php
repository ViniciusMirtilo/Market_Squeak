<?php

  require("../necessario/database_connect.php");

  $id = $_GET['id'];

  $sql_excluir_id = "DELETE FROM vinicius_componentes WHERE vinicius_componentes.id = '$id'";

  if(mysqli_query($conexao,$sql_excluir_id)){
    header("Location: ../produtosV/lista_produtosV.php");
  }else{
    echo"falha ao excluir";
  }

?>