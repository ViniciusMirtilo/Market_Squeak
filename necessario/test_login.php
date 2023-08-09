<?php

  session_start();

  include("database_connect.php");

  $busca = $conect->query("
    SELECT * FROM vinicius_users;
  ");

  $consulta = $busca->fetchAll(PDO::FETCH_ASSOC);

  /*
  txtemail
  txtPassword
  */

  $login = false;

  foreach($consulta as $user){
    if($_POST['txtemail'] == $user['email'] && $_POST['txtPassword'] == $user['senha']){
      $login = true;
      $_SESSION['id'] = $user['id'];
      $_SESSION['adm'] = $user['users'];
    }
  }

  if($login){
    if($_SESSION['adm'] == 'adm'){
      header('location: ../users/adm_pageV.php');
    }else{
      header('location: ../users/user_pageV.php');
    }
  }else{
    header('location: login.php?login=erro');
  }
?>