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
    <link rel="stylesheet" href="../style/Cadastro.css">
    <title>Squeak Market - Cadastro</title>
  </head>
  <body>
  <header>
    <div class="center">
      <!--Logo-->
      <div class="menu">
        <a class="Home" href="../home.php">Volta</a>
      </div>
      <!--Menu-->
    </div>
    <!--Center-->
  </header>
    <div class="main_login">
      <div class="left-login">
        <h1>
          Faça seu cadastro e compre com facilidade <br />
        </h1>
        <img
          src="../style/market.svg"
          class="left-login-image"
          alt="Artista"
        />
      </div>

    <form action="cadastro_user.php" method="post">
        <div class="right_login">
          <div class="card-login">
            <h1>Cadastra-se</h1>
            <div class="textfield">
              <label for="email">E-mail</label>
              <input type="email" name="email" placeholder="Usuario" />
            </div>

            <div class="textfield">
              <label for="password">Password</label>
              <input type="password" name="senha" placeholder="Senha" />
            </div>

            <select name="users" id="user_profile" placeholder="Perfil o adm ou cliente" class="escolha">
                <option value="adm">adm</option>
                <option value="user">user</option>
            </select>

            <button class="Cadastrar">Cadastrar</button>
          </div>
        </div>
      </div>
    </form>
  </body>
</html>