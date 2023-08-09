<?php
  if(isset($_GET['cadastro']) && $_GET['cadastro'] == 'success'){
?>
<script>
  alert('usuario registrado com sucesso')
</script>
<?php
  }
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
    <link
      href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@600&family=Josefin+Sans:ital,wght@1,300&family=Permanent+Marker&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="../style/Login.css" />
    <title>Squeak Market - Login</title>
  </head>
  <body>
  <header>
    <div class="center">
      <!--Logo-->
      <div class="menu">
        <a class="About" href="../home.php">Volta</a>
      </div>
      <!--Menu-->
    </div>
    <!--Center-->
  </header>
    <div class="main_login">
      <div class="left-login">
        <h1>
          Compre com facilidade seus produtos
        </h1>
        <img
          src="../style/market.svg"
          class="left-login-image"
          alt="Artista"
        />
      </div>
      
      <form action="test_login.php" name="logon" method="post">
        <div class="right_login">
          <div class="card-login">
            <h1>Login</h1>
            <div class="textfield">
              <label for="email">E-mail</label>
              <input type="text" name="txtemail" placeholder="email" />
            </div>
  
            <div class="textfield">
              <label for="password">password</label>
              <input type="password" name="txtPassword" placeholder="password" />
            </div>
            
            <a type="submit" class="cadastro" href="cadastro.php">Cadastro</a>

            <button type="submit" class="btn-login">Login</button>
          </div>
        </div>
        
      </form>
    </div>
  </body>
</html>
