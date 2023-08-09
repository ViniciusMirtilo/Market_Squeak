<?php

  include("database_connect.php");

  $id = $_GET['id'];

  $sql_consult_id = "SELECT * FROM vinicius_users WHERE id = '$id'";

  $result_consult_id = mysqli_query($conexao,$sql_consult_id);

  $dados_banco = mysqli_fetch_assoc($result_consult_id);
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <link rel="icon" href="./img/icone.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@600&family=Josefin+Sans:ital,wght@1,300&family=Permanent+Marker&display=swap" rel="stylesheet" />

  <link rel="stylesheet" href="../style/updateV.css">

  <script src="https://kit.fontawesome.com/7048b0b83b.js" crossorigin="anonymous"></script>

  <title>Hortifrúti - Atualizar usuario</title>
</head>

<header>
    <div class="center">
      <div class="logo">

        <a class="Home" href="home.php"><h2>Hortifrúti</h2></a>

      </div>
      <!--Logo-->
      <div class="menu">

        <a class="Login" href="Home.php">Sair</a>

      </div>
      <!--Menu-->
    </div>
    <!--Center-->
  </header>

<h3>Atualizar usuario</h3>


<form action="../necessario/atualizar_user.php" method="post">

    <input type="hidden" name="id" value="<?php echo $dados_banco['id']?>">

    <label for="email_test">Login:</label> <!--Label = etiqueta-->
    <input type="text" name="email" id="email" value="<?php echo $dados_banco['email']?>">

    <label for="user_password">Password:</label> <!--Label = etiqueta-->
    <input type="text" name="senha" id="senha" value="<?php echo $dados_banco['senha']?>">

    <label for="user_profile">Perfil:</label> <!--Label = etiqueta-->

    <!-- <input type="text" name="user_profile" id="user_profile" placeholder="Perfil o adm ou cliente"> -->

    <select name="users" id="users" placeholder="Perfil o adm ou cliente" class="for-control">
        <option value="adm">Administrador</option>
        <option value="user">Usuario</option>
    </select>
    <br>
    <input type="submit" value="Atualizar cadastro">

</form>