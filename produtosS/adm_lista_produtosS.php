<?php

  include("../necessario/database_connect.php ");

  $sql_consulta = "SELECT * FROM vinicius_componentes_s";

  $resultado_consulta = mysqli_query($conexao, $sql_consulta);

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

  <link rel="stylesheet" href="../style/listaC.css">

  <script src="https://kit.fontawesome.com/7048b0b83b.js" crossorigin="anonymous"></script>

  <title>Squeak Market - lista de compras</title>
</head>
<body>

  <header>
    <div class="voltar">
      <a class="Home" href="../users/adm_pageS.php">Sair</a>
    </div>
  </header>

  <div class="Titulo"> 
    <h3>Lista de produtos</h3>
  <table class="tabela">
        <thead>
          <tr>
            <th>Nome</th>
            <th>Quantidade</th>
            <th>Mercados</th>
            <th>Pagamento</th>
            <th>Retirada</th>
            <th>Local de retirada</th>
          </tr>
        </thead>
        <tbody>
          <?php while($dados = mysqli_fetch_assoc($resultado_consulta)){?>
               
                  <tr>
                    <td><?php echo $dados['nome']; ?>
                    <td><?php echo $dados['qtd']; ?>
                    <td><?php echo $dados['mercados']; ?>
                    <td><?php echo $dados['pagamento']; ?>
                    <td><?php echo $dados['retirada']; ?>
                    <td><?php echo $dados['local_retirada']; ?>
                    

                    <td><a href="form_atualizar_produtosC.php?id=<?php echo $dados['id'];?>">Atualizar</a><i class="fa-solid fa-user-pen"></i></td>

                    <td><a href="excluir_produtosC.php?id=<?php echo $dados['id'];?>">Excluir</a><i class="fa-solid fa-trash"></i></td>
                  </tr>
                
          <?php } ?>
        </tbody>
  </table>
</div>
</body>
</html>