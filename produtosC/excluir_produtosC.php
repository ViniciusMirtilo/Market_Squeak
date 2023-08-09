<?php

  require("../necessario/database_connect.php");

  $id = $_GET['id'];

  $sql_excluir_id = "DELETE FROM vinicius_componentes_c WHERE vinicius_componentes_c.id = '$id'";

  if(mysqli_query($conexao,$sql_excluir_id)){
    header("Location: ../produtosC/lista_produtosC.php");
  }else{
    echo"falha ao excluir";
  }

?>