<?php

  require("../necessario/database_connect.php");

  $id = $_GET['id'];

  $sql_excluir_id = "DELETE FROM vinicius_componentes_s WHERE vinicius_componentes_s.id = '$id'";

  if(mysqli_query($conexao,$sql_excluir_id)){
    header("Location: ../produtosS/lista_produtosS.php");
  }else{
    echo"falha ao excluir";
  }

?>