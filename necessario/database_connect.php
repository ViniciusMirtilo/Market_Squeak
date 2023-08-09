<?php
  $host = "...";
  $host_user = "...";
  $host_password = "...";
  $database_name = "...";

  $teste = '...';
  $conect = new PDO($teste , $host_user , $host_password);

  $conexao = mysqli_connect($host, $host_user, $host_password, $database_name);
?>
