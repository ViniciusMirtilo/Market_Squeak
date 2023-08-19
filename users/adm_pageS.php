<?php
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

    <link rel="stylesheet" href="../style/Shops.css">

    <script
      src="https://kit.fontawesome.com/7048b0b83b.js"
      crossorigin="anonymous"
    ></script>

    <title>Squeak Market  - Salgadinhos</title>
  </head>
  <body>
    <header class="menu-img">
      <div class="center">
        <div class="logo">
        <a class="Home" href="home.php"><h2>Squeak Market</h2></a>
        </div>
        <!--Logo-->
        <div class="menu">
          <a class="abou" href="../necessario/lista_usuario.php">Adm Page</a>
          <a class="abou" href="../users/adm_pageV.php">Legumes</a>
          <a class="abou" href="../users/adm_pageC.php">Cervejas</a>
          <a class="abou" href="../produtosS/lista_produtosS.php">Lista de compras</a>
          <a class="login" href="../home.php">Sair</a>
        </div>
        <!--Menu-->
      </div>
    </header>

    <section class="shopt">
      <div class="tshop">
        <h2>Salgadinhos</h2>
      </div>
    </section>

    <form action="../produtosS/cadastro_produtosS.php" method="post">

    <div class="itens-shop">
          <div class="itens">

            <!-- inicio Cogumelo-->
            <div class="cogumelo">
              <img src="../imgS/sal1.png" alt="abrobinha">
              <h2>Batata Chips Sensações Peito Peru 40G</h2>

              <div class="nome">
                <h3>Nome</h3>
                <select name="nome" id="nome" >
                  <option value="Batata Chips Sensações Peito Peru 40G">Batata Chips Sensações Peito Peru 40G</option>
                </select>
              </div>

              <div class="qtn">
                <h3>Quantidade</h3>
                <input type="number" name="qtd" id="qtd" min="0" max="20">
              </div>
              
              <div class="mercado">
                <h3>Mercados</h3>
                <select name="mercados" id="mercados">
                  <option value="carrefour">Carrefour</option>
                  <option value="assai">Assaí</option>
                  <option value="extra">Extra</option>
                  <option value="pao_de_acucar">Pão de Açúcar</option>
                  <option value="sonda_supermercado">Sonda Supermercado</option>
                  <option value="tenda_atacado">Tenda Atacado</option>
                </select>
              </div>

              <div class="pagamento">
                <h3>Forma de pagamento</h3>
                <select name="pagamento" id="pagamento">
                  <option value="Cartao de credito">Cartão de credito</option>
                  <option value="Cartao de debito">Cartão de debito</option>
                  <option value="Vale refeicao">Vale refeição</option>
                  <option value="Dinheiro">Dinheiro</option>
                </select>
              </div>
              
              <div class="retirada">
                <h3>Tipo de disponibilidade</h3>
                  <select name="retirada" id="retirada">
                    <option value="Nao muito rapido">Nao muito rapido (Disponivel em ate 2hr)</option>
                    <option value="Rapido ">Rapido (Disponivel em ate 1hr)</option>
                    <option value="Express">Express(Disponivel em ate 30 min)</option>
                  </select>
              </div>

              <div class="localr">
                <div class="localretirada">
                  <h3>Selecione o local de retirada</h3>
                  <select name="local_retirada" id="local_retirada">
                    <option value="Av. Jose Pinheiro Borges, s/n - Vila Campanela, Sao Paulo - SP">Av. Jose Pinheiro Borges, s/n - Vila Campanela, Sao Paulo - SP</option>
                    <option value="Estrada Dom Joao Nery, 4031 - Itaim Paulista, Sao Paulo - SP">Estrada Dom Joao Nery, 4031 - Itaim Paulista, Sao Paulo - SP</option>
                    <option value="Estrada Dom João Nery, 4031 - Itaim Paulista, São Paulo - SP">Av. Josr Pinheiro Borges, - Vila Brasil, Sao Paulo - SP</option>
                    <option value="R. Serra de Japi, 647 - Vila Gomes Cardim, Sao Paulo - SP">R. Serra de Japi, 647 - Vila Gomes Cardim, São Paulo - SP</option>
                    <option value="Avenida Marechal Tito, 7579 - Itaim Paulista, Sao Paulo - SP">Avenida Marechal Tito, 7579 - Itaim Paulista, São Paulo - SP</option>
                    <option value="R. Itu, 500 - Vila Monte Belo, Itaquaquecetuba - SP">R. Itu, 500 - Vila Monte Belo, Itaquaquecetuba - SP</option>
                  </select>
              </div>
              </div>
              <button type="submit">Adicionar</button>
            </div> 
            <!-- fim Cogumelo-->

    </form>

    <form action="../produtosS/cadastro_produtosS.php" method="post">
    <div class="itens-shop">
          <div class="itens">

            <!-- inicio Abrobinha-->
            <div class="cogumelo">
              <img src="../imgS/sal2.png" alt="abrobinha">
              <h2>Salgadinho de Milho Doritos Queijo Nacho 84g</h2>

              <div class="nome">
                <h3>Nome</h3>
                <select name="nome" id="nome" >
                  <option value="Salgadinho de Milho Doritos Queijo Nacho 84g">Salgadinho de Milho Doritos Queijo Nacho 84g</option>
                </select>
              </div>

              <div class="qtn">
                <h3>Quantidade</h3>
                <input type="number" name="qtd" id="qtd" min="0" max="20">
              </div>
              
              <div class="mercado">
                <h3>Mercados</h3>
                <select name="mercados" id="mercados">
                  <option value="carrefour">Carrefour</option>
                  <option value="assai">Assaí</option>
                  <option value="extra">Extra</option>
                  <option value="pao_de_acucar">Pão de Açúcar</option>
                  <option value="sonda_supermercado">Sonda Supermercado</option>
                  <option value="tenda_atacado">Tenda Atacado</option>
                </select>
              </div>

              <div class="pagamento">
                <h3>Forma de pagamento</h3>
                <select name="pagamento" id="pagamento">
                  <option value="Cartao de credito">Cartão de credito</option>
                  <option value="Cartao de debito">Cartão de debito</option>
                  <option value="Vale refeicao">Vale refeição</option>
                  <option value="Dinheiro">Dinheiro</option>
                </select>
              </div>
              
              <div class="retirada">
                <h3>Tipo de disponibilidade</h3>
                  <select name="retirada" id="retirada">
                    <option value="Nao muito rapido">Nao muito rapido (Disponivel em ate 2hr)</option>
                    <option value="Rapido ">Rapido (Disponivel em ate 1hr)</option>
                    <option value="Express">Express(Disponivel em ate 30 min)</option>
                  </select>
              </div>

              <div class="localr">
                <div class="localretirada">
                  <h3>Selecione o local de retirada</h3>
                  <select name="local_retirada" id="local_retirada">
                    <option value="Av. Jose Pinheiro Borges, s/n - Vila Campanela, Sao Paulo - SP">Av. Jose Pinheiro Borges, s/n - Vila Campanela, Sao Paulo - SP</option>
                    <option value="Estrada Dom Joao Nery, 4031 - Itaim Paulista, Sao Paulo - SP">Estrada Dom Joao Nery, 4031 - Itaim Paulista, Sao Paulo - SP</option>
                    <option value="Estrada Dom João Nery, 4031 - Itaim Paulista, São Paulo - SP">Av. Josr Pinheiro Borges, - Vila Brasil, Sao Paulo - SP</option>
                    <option value="R. Serra de Japi, 647 - Vila Gomes Cardim, Sao Paulo - SP">R. Serra de Japi, 647 - Vila Gomes Cardim, São Paulo - SP</option>
                    <option value="Avenida Marechal Tito, 7579 - Itaim Paulista, Sao Paulo - SP">Avenida Marechal Tito, 7579 - Itaim Paulista, São Paulo - SP</option>
                    <option value="R. Itu, 500 - Vila Monte Belo, Itaquaquecetuba - SP">R. Itu, 500 - Vila Monte Belo, Itaquaquecetuba - SP</option>
                  </select>
              </div>
              </div>
              <button type="submit">Adicionar</button>
            </div> 
            <!-- fim Abrobinha-->
    </form>

    <form action="../produtosS/cadastro_produtosS.php" method="post">
    <div class="itens-shop">
          <div class="itens">

            <!-- inicio Alcachofra-->
            <div class="cogumelo">
              <img src="../imgS/sal3.png" alt="aspargos">
              <h2>Salgadinho de Milho Cheetos Onda Requeijão 45g</h2>

              <div class="nome">
                <h3>Nome</h3>
                <select name="nome" id="nome" >
                  <option value="Salgadinho de Milho Cheetos Onda Requeijão 45g">Salgadinho de Milho Cheetos Onda Requeijão 45g</option>
                </select>
              </div>

              <div class="qtn">
                <h3>Quantidade</h3>
                <input type="number" name="qtd" id="qtd" min="0" max="20">
              </div>
              
              <div class="mercado">
                <h3>Mercados</h3>
                <select name="mercados" id="mercados">
                  <option value="carrefour">Carrefour</option>
                  <option value="assai">Assaí</option>
                  <option value="extra">Extra</option>
                  <option value="pao_de_acucar">Pão de Açúcar</option>
                  <option value="sonda_supermercado">Sonda Supermercado</option>
                  <option value="tenda_atacado">Tenda Atacado</option>
                </select>
              </div>

              <div class="pagamento">
                <h3>Forma de pagamento</h3>
                <select name="pagamento" id="pagamento">
                  <option value="Cartao de credito">Cartão de credito</option>
                  <option value="Cartao de debito">Cartão de debito</option>
                  <option value="Vale refeicao">Vale refeição</option>
                  <option value="Dinheiro">Dinheiro</option>
                </select>
              </div>
              
              <div class="retirada">
                <h3>Tipo de disponibilidade</h3>
                  <select name="retirada" id="retirada">
                    <option value="Nao muito rapido">Nao muito rapido (Disponivel em ate 2hr)</option>
                    <option value="Rapido ">Rapido (Disponivel em ate 1hr)</option>
                    <option value="Express">Express(Disponivel em ate 30 min)</option>
                  </select>
              </div>

              <div class="localr">
                <div class="localretirada">
                  <h3>Selecione o local de retirada</h3>
                  <select name="local_retirada" id="local_retirada">
                    <option value="Av. Jose Pinheiro Borges, s/n - Vila Campanela, Sao Paulo - SP">Av. Jose Pinheiro Borges, s/n - Vila Campanela, Sao Paulo - SP</option>
                    <option value="Estrada Dom Joao Nery, 4031 - Itaim Paulista, Sao Paulo - SP">Estrada Dom Joao Nery, 4031 - Itaim Paulista, Sao Paulo - SP</option>
                    <option value="Estrada Dom João Nery, 4031 - Itaim Paulista, São Paulo - SP">Av. Josr Pinheiro Borges, - Vila Brasil, Sao Paulo - SP</option>
                    <option value="R. Serra de Japi, 647 - Vila Gomes Cardim, Sao Paulo - SP">R. Serra de Japi, 647 - Vila Gomes Cardim, São Paulo - SP</option>
                    <option value="Avenida Marechal Tito, 7579 - Itaim Paulista, Sao Paulo - SP">Avenida Marechal Tito, 7579 - Itaim Paulista, São Paulo - SP</option>
                    <option value="R. Itu, 500 - Vila Monte Belo, Itaquaquecetuba - SP">R. Itu, 500 - Vila Monte Belo, Itaquaquecetuba - SP</option>
                  </select>
              </div>
              </div>
              </div>
              <button type="submit">Adicionar</button>
            </div> 
            <!-- fim Alcachofra-->
    </form>

    <form action="../produtosS/cadastro_produtosS.php" method="post">
    <div class="itens-shop">
          <div class="itens">

            <!-- inicio Alcachofra-->
            <div class="cogumelo">
              <img src="../imgS/sal4.png" alt="alcachofra">
              <h2>Salgadinho de Milho Cebolitos 110g</h2>

              <div class="nome">
                <h3>Nome</h3>
                <select name="nome" id="nome" >
                  <option value="Salgadinho de Milho Cebolitos 110g">Salgadinho de Milho Cebolitos 110g</option>
                </select>
              </div>

              <div class="qtn">
                <h3>Quantidade</h3>
                <input type="number" name="qtd" id="qtd" min="0" max="20">
              </div>
              
              <div class="mercado">
                <h3>Mercados</h3>
                <select name="mercados" id="mercados">
                  <option value="carrefour">Carrefour</option>
                  <option value="assai">Assaí</option>
                  <option value="extra">Extra</option>
                  <option value="pao_de_acucar">Pão de Açúcar</option>
                  <option value="sonda_supermercado">Sonda Supermercado</option>
                  <option value="tenda_atacado">Tenda Atacado</option>
                </select>
              </div>

              <div class="pagamento">
                <h3>Forma de pagamento</h3>
                <select name="pagamento" id="pagamento">
                  <option value="Cartao de credito">Cartão de credito</option>
                  <option value="Cartao de debito">Cartão de debito</option>
                  <option value="Vale refeicao">Vale refeição</option>
                  <option value="Dinheiro">Dinheiro</option>
                </select>
              </div>
              
              <div class="retirada">
                <h3>Tipo de disponibilidade</h3>
                  <select name="retirada" id="retirada">
                    <option value="Nao muito rapido">Nao muito rapido (Disponivel em ate 2hr)</option>
                    <option value="Rapido ">Rapido (Disponivel em ate 1hr)</option>
                    <option value="Express">Express(Disponivel em ate 30 min)</option>
                  </select>
              </div>

              <div class="localr">
                <div class="localretirada">
                  <h3>Selecione o local de retirada</h3>
                  <select name="local_retirada" id="local_retirada">
                    <option value="Av. Jose Pinheiro Borges, s/n - Vila Campanela, Sao Paulo - SP">Av. Jose Pinheiro Borges, s/n - Vila Campanela, Sao Paulo - SP</option>
                    <option value="Estrada Dom Joao Nery, 4031 - Itaim Paulista, Sao Paulo - SP">Estrada Dom Joao Nery, 4031 - Itaim Paulista, Sao Paulo - SP</option>
                    <option value="Estrada Dom João Nery, 4031 - Itaim Paulista, São Paulo - SP">Av. Josr Pinheiro Borges, - Vila Brasil, Sao Paulo - SP</option>
                    <option value="R. Serra de Japi, 647 - Vila Gomes Cardim, Sao Paulo - SP">R. Serra de Japi, 647 - Vila Gomes Cardim, São Paulo - SP</option>
                    <option value="Avenida Marechal Tito, 7579 - Itaim Paulista, Sao Paulo - SP">Avenida Marechal Tito, 7579 - Itaim Paulista, São Paulo - SP</option>
                    <option value="R. Itu, 500 - Vila Monte Belo, Itaquaquecetuba - SP">R. Itu, 500 - Vila Monte Belo, Itaquaquecetuba - SP</option>
                  </select>
              </div>
              </div>
              <button type="submit">Adicionar</button>
            </div> 
            <!-- fim Aspargos-->
    </form>

    <form action="../produtosS/cadastro_produtosS.php" method="post">
    <div class="itens-shop">
          <div class="itens">

            <!-- inicio Batata-doce-->
            <div class="cogumelo">
              <img src="../imgS/sal5.png" alt="batata-doce">
              <h2>Salgadinho de Milho Fandangos Presunto 45g</h2>

              <div class="nome">
                <h3>Nome</h3>
                <select name="nome" id="nome" >
                  <option value="Salgadinho de Milho Fandangos Presunto 45g">Salgadinho de Milho Fandangos Presunto 45g</option>
                </select>
              </div>

              <div class="qtn">
                <h3>Quantidade</h3>
                <input type="number" name="qtd" id="qtd" min="0" max="20">
              </div>
              
              <div class="mercado">
                <h3>Mercados</h3>
                <select name="mercados" id="mercados">
                  <option value="carrefour">Carrefour</option>
                  <option value="assai">Assaí</option>
                  <option value="extra">Extra</option>
                  <option value="pao_de_acucar">Pão de Açúcar</option>
                  <option value="sonda_supermercado">Sonda Supermercado</option>
                  <option value="tenda_atacado">Tenda Atacado</option>
                </select>
              </div>

              <div class="pagamento">
                <h3>Forma de pagamento</h3>
                <select name="pagamento" id="pagamento">
                  <option value="Cartao de credito">Cartão de credito</option>
                  <option value="Cartao de debito">Cartão de debito</option>
                  <option value="Vale refeicao">Vale refeição</option>
                  <option value="Dinheiro">Dinheiro</option>
                </select>
              </div>
              
              <div class="retirada">
                <h3>Tipo de disponibilidade</h3>
                  <select name="retirada" id="retirada">
                    <option value="Nao muito rapido">Nao muito rapido (Disponivel em ate 2hr)</option>
                    <option value="Rapido ">Rapido (Disponivel em ate 1hr)</option>
                    <option value="Express">Express(Disponivel em ate 30 min)</option>
                  </select>
              </div>

              <div class="localr">
                <div class="localretirada">
                  <h3>Selecione o local de retirada</h3>
                  <select name="local_retirada" id="local_retirada">
                    <option value="Av. Jose Pinheiro Borges, s/n - Vila Campanela, Sao Paulo - SP">Av. Jose Pinheiro Borges, s/n - Vila Campanela, Sao Paulo - SP</option>
                    <option value="Estrada Dom Joao Nery, 4031 - Itaim Paulista, Sao Paulo - SP">Estrada Dom Joao Nery, 4031 - Itaim Paulista, Sao Paulo - SP</option>
                    <option value="Estrada Dom João Nery, 4031 - Itaim Paulista, São Paulo - SP">Av. Josr Pinheiro Borges, - Vila Brasil, Sao Paulo - SP</option>
                    <option value="R. Serra de Japi, 647 - Vila Gomes Cardim, Sao Paulo - SP">R. Serra de Japi, 647 - Vila Gomes Cardim, São Paulo - SP</option>
                    <option value="Avenida Marechal Tito, 7579 - Itaim Paulista, Sao Paulo - SP">Avenida Marechal Tito, 7579 - Itaim Paulista, São Paulo - SP</option>
                    <option value="R. Itu, 500 - Vila Monte Belo, Itaquaquecetuba - SP">R. Itu, 500 - Vila Monte Belo, Itaquaquecetuba - SP</option>
                  </select>
              </div>
              </div>
              <button type="submit">Adicionar</button>
            </div> 
            <!-- fim Batata-doce-->
    </form>

    <form action="../produtosS/cadastro_produtosS.php" method="post">
    <div class="itens-shop">
          <div class="itens">

            <!-- inicio Berinjela-->
            <div class="cogumelo">
              <img src="../imgS/sal6.png" alt="berinjela">
              <h2>Batata Frita Lisa Lay's Clássica 80g</h2>

              <div class="nome">
                <h3>Nome</h3>
                <select name="nome" id="nome" >
                  <option value="Batata Frita Lisa Lay's Clássica 80g">Batata Frita Lisa Lay's Clássica 80g</option>
                </select>
              </div>

              <div class="qtn">
                <h3>Quantidade</h3>
                <input type="number" name="qtd" id="qtd" min="0" max="20">
              </div>
              
              <div class="mercado">
                <h3>Mercados</h3>
                <select name="mercados" id="mercados">
                  <option value="carrefour">Carrefour</option>
                  <option value="assai">Assaí</option>
                  <option value="extra">Extra</option>
                  <option value="pao_de_acucar">Pão de Açúcar</option>
                  <option value="sonda_supermercado">Sonda Supermercado</option>
                  <option value="tenda_atacado">Tenda Atacado</option>
                </select>
              </div>

              <div class="pagamento">
                <h3>Forma de pagamento</h3>
                <select name="pagamento" id="pagamento">
                  <option value="Cartao de credito">Cartão de credito</option>
                  <option value="Cartao de debito">Cartão de debito</option>
                  <option value="Vale refeicao">Vale refeição</option>
                  <option value="Dinheiro">Dinheiro</option>
                </select>
              </div>
              
              <div class="retirada">
                <h3>Tipo de disponibilidade</h3>
                  <select name="retirada" id="retirada">
                    <option value="Nao muito rapido">Nao muito rapido (Disponivel em ate 2hr)</option>
                    <option value="Rapido ">Rapido (Disponivel em ate 1hr)</option>
                    <option value="Express">Express(Disponivel em ate 30 min)</option>
                  </select>
              </div>

              <div class="localr">
                <div class="localretirada">
                  <h3>Selecione o local de retirada</h3>
                  <select name="local_retirada" id="local_retirada">
                    <option value="Av. Jose Pinheiro Borges, s/n - Vila Campanela, Sao Paulo - SP">Av. Jose Pinheiro Borges, s/n - Vila Campanela, Sao Paulo - SP</option>
                    <option value="Estrada Dom Joao Nery, 4031 - Itaim Paulista, Sao Paulo - SP">Estrada Dom Joao Nery, 4031 - Itaim Paulista, Sao Paulo - SP</option>
                    <option value="Estrada Dom João Nery, 4031 - Itaim Paulista, São Paulo - SP">Av. Josr Pinheiro Borges, - Vila Brasil, Sao Paulo - SP</option>
                    <option value="R. Serra de Japi, 647 - Vila Gomes Cardim, Sao Paulo - SP">R. Serra de Japi, 647 - Vila Gomes Cardim, São Paulo - SP</option>
                    <option value="Avenida Marechal Tito, 7579 - Itaim Paulista, Sao Paulo - SP">Avenida Marechal Tito, 7579 - Itaim Paulista, São Paulo - SP</option>
                    <option value="R. Itu, 500 - Vila Monte Belo, Itaquaquecetuba - SP">R. Itu, 500 - Vila Monte Belo, Itaquaquecetuba - SP</option>
                  </select>
              </div>
              </div>
              <button type="submit">Adicionar</button>
            </div> 
            <!-- fim Berinjela-->
    </form>

    <form action="../produtosS/cadastro_produtosS.php" method="post">
    <div class="itens-shop">
          <div class="itens">

            <!-- inicio Beterraba-->
            <div class="cogumelo">
              <img src="../imgS/sal7.png" alt="beterraba">
              <h2>Salgadinho Batata Pringles Original 114g</h2>

              <div class="nome">
                <h3>Nome</h3>
                <select name="nome" id="nome" >
                  <option value="Salgadinho Batata Pringles Original 114g">Salgadinho Batata Pringles Original 114g</option>
                </select>
              </div>

              <div class="qtn">
                <h3>Quantidade</h3>
                <input type="number" name="qtd" id="qtd" min="0" max="20">
              </div>
              
              <div class="mercado">
                <h3>Mercados</h3>
                <select name="mercados" id="mercados">
                  <option value="carrefour">Carrefour</option>
                  <option value="assai">Assaí</option>
                  <option value="extra">Extra</option>
                  <option value="pao_de_acucar">Pão de Açúcar</option>
                  <option value="sonda_supermercado">Sonda Supermercado</option>
                  <option value="tenda_atacado">Tenda Atacado</option>
                </select>
              </div>

              <div class="pagamento">
                <h3>Forma de pagamento</h3>
                <select name="pagamento" id="pagamento">
                  <option value="Cartao de credito">Cartão de credito</option>
                  <option value="Cartao de debito">Cartão de debito</option>
                  <option value="Vale refeicao">Vale refeição</option>
                  <option value="Dinheiro">Dinheiro</option>
                </select>
              </div>
              
              <div class="retirada">
                <h3>Tipo de disponibilidade</h3>
                  <select name="retirada" id="retirada">
                    <option value="Nao muito rapido">Nao muito rapido (Disponivel em ate 2hr)</option>
                    <option value="Rapido ">Rapido (Disponivel em ate 1hr)</option>
                    <option value="Express">Express(Disponivel em ate 30 min)</option>
                  </select>
              </div>

              <div class="localr">
                <div class="localretirada">
                  <h3>Selecione o local de retirada</h3>
                  <select name="local_retirada" id="local_retirada">
                    <option value="Av. Jose Pinheiro Borges, s/n - Vila Campanela, Sao Paulo - SP">Av. Jose Pinheiro Borges, s/n - Vila Campanela, Sao Paulo - SP</option>
                    <option value="Estrada Dom Joao Nery, 4031 - Itaim Paulista, Sao Paulo - SP">Estrada Dom Joao Nery, 4031 - Itaim Paulista, Sao Paulo - SP</option>
                    <option value="Estrada Dom João Nery, 4031 - Itaim Paulista, São Paulo - SP">Av. Josr Pinheiro Borges, - Vila Brasil, Sao Paulo - SP</option>
                    <option value="R. Serra de Japi, 647 - Vila Gomes Cardim, Sao Paulo - SP">R. Serra de Japi, 647 - Vila Gomes Cardim, São Paulo - SP</option>
                    <option value="Avenida Marechal Tito, 7579 - Itaim Paulista, Sao Paulo - SP">Avenida Marechal Tito, 7579 - Itaim Paulista, São Paulo - SP</option>
                    <option value="R. Itu, 500 - Vila Monte Belo, Itaquaquecetuba - SP">R. Itu, 500 - Vila Monte Belo, Itaquaquecetuba - SP</option>
                  </select>
              </div>
              </div>
              <button type="submit">Adicionar</button>
            </div> 
            <!-- fim Beterraba-->
    </form>

    <form action="../produtosS/cadastro_produtosS.php" method="post">
    <div class="itens-shop">
          <div class="itens">

            <!-- inicio Cenoura-->
            <div class="cogumelo">
              <img src="../imgS/sal8.png" alt="cenoura">
              <h2>Salgadinho de Trigo Baconzitos 103g</h2>

              <div class="nome">
                <h3>Nome</h3>
                <select name="nome" id="nome" >
                  <option value="Salgadinho de Trigo Baconzitos 103g">Salgadinho de Trigo Baconzitos 103g</option>
                </select>
              </div>

              <div class="qtn">
                <h3>Quantidade</h3>
                <input type="number" name="qtd" id="qtd" min="0" max="20">
              </div>
              
              <div class="mercado">
                <h3>Mercados</h3>
                <select name="mercados" id="mercados">
                  <option value="carrefour">Carrefour</option>
                  <option value="assai">Assaí</option>
                  <option value="extra">Extra</option>
                  <option value="pao_de_acucar">Pão de Açúcar</option>
                  <option value="sonda_supermercado">Sonda Supermercado</option>
                  <option value="tenda_atacado">Tenda Atacado</option>
                </select>
              </div>

              <div class="pagamento">
                <h3>Forma de pagamento</h3>
                <select name="pagamento" id="pagamento">
                  <option value="Cartao de credito">Cartão de credito</option>
                  <option value="Cartao de debito">Cartão de debito</option>
                  <option value="Vale refeicao">Vale refeição</option>
                  <option value="Dinheiro">Dinheiro</option>
                </select>
              </div>
              
              <div class="retirada">
                <h3>Tipo de disponibilidade</h3>
                  <select name="retirada" id="retirada">
                    <option value="Nao muito rapido">Nao muito rapido (Disponivel em ate 2hr)</option>
                    <option value="Rapido ">Rapido (Disponivel em ate 1hr)</option>
                    <option value="Express">Express(Disponivel em ate 30 min)</option>
                  </select>
              </div>

              <div class="localr">
                <div class="localretirada">
                  <h3>Selecione o local de retirada</h3>
                  <select name="local_retirada" id="local_retirada">
                    <option value="Av. Jose Pinheiro Borges, s/n - Vila Campanela, Sao Paulo - SP">Av. Jose Pinheiro Borges, s/n - Vila Campanela, Sao Paulo - SP</option>
                    <option value="Estrada Dom Joao Nery, 4031 - Itaim Paulista, Sao Paulo - SP">Estrada Dom Joao Nery, 4031 - Itaim Paulista, Sao Paulo - SP</option>
                    <option value="Estrada Dom João Nery, 4031 - Itaim Paulista, São Paulo - SP">Av. Josr Pinheiro Borges, - Vila Brasil, Sao Paulo - SP</option>
                    <option value="R. Serra de Japi, 647 - Vila Gomes Cardim, Sao Paulo - SP">R. Serra de Japi, 647 - Vila Gomes Cardim, São Paulo - SP</option>
                    <option value="Avenida Marechal Tito, 7579 - Itaim Paulista, Sao Paulo - SP">Avenida Marechal Tito, 7579 - Itaim Paulista, São Paulo - SP</option>
                    <option value="R. Itu, 500 - Vila Monte Belo, Itaquaquecetuba - SP">R. Itu, 500 - Vila Monte Belo, Itaquaquecetuba - SP</option>
                  </select>
              </div>
              </div>
              <button type="submit">Adicionar</button>
            </div> 
            <!-- fim Cenoura-->
    </form>

    <form action="../produtosS/cadastro_produtosS.php" method="post">
    <div class="itens-shop">
          <div class="itens">

            <!-- inicio pimentão-->
            <div class="cogumelo">
              <img src="../imgS/sal9.png" alt="cogumelo">
              <h2>Salgadinho de Trigo Torcida Pimenta Mexicana 100g</h2>

              <div class="nome">
                <h3>Nome</h3>
                <select name="nome" id="nome" >
                  <option value="Salgadinho de Trigo Torcida Pimenta Mexicana 100g">Salgadinho de Trigo Torcida Pimenta Mexicana 100g</option>
                </select>
              </div>

              <div class="qtn">
                <h3>Quantidade</h3>
                <input type="number" name="qtd" id="qtd" min="0" max="20">
              </div>
              
              <div class="mercado">
                <h3>Mercados</h3>
                <select name="mercados" id="mercados">
                  <option value="carrefour">Carrefour</option>
                  <option value="assai">Assaí</option>
                  <option value="extra">Extra</option>
                  <option value="pao_de_acucar">Pão de Açúcar</option>
                  <option value="sonda_supermercado">Sonda Supermercado</option>
                  <option value="tenda_atacado">Tenda Atacado</option>
                </select>
              </div>

              <div class="pagamento">
                <h3>Forma de pagamento</h3>
                <select name="pagamento" id="pagamento">
                  <option value="Cartao de credito">Cartão de credito</option>
                  <option value="Cartao de debito">Cartão de debito</option>
                  <option value="Vale refeicao">Vale refeição</option>
                  <option value="Dinheiro">Dinheiro</option>
                </select>
              </div>
              
              <div class="retirada">
                <h3>Tipo de disponibilidade</h3>
                  <select name="retirada" id="retirada">
                    <option value="Nao muito rapido">Nao muito rapido (Disponivel em ate 2hr)</option>
                    <option value="Rapido ">Rapido (Disponivel em ate 1hr)</option>
                    <option value="Express">Express(Disponivel em ate 30 min)</option>
                  </select>
              </div>

              <div class="localr">
                <div class="localretirada">
                  <h3>Selecione o local de retirada</h3>
                  <select name="local_retirada" id="local_retirada">
                    <option value="Av. Jose Pinheiro Borges, s/n - Vila Campanela, Sao Paulo - SP">Av. Jose Pinheiro Borges, s/n - Vila Campanela, Sao Paulo - SP</option>
                    <option value="Estrada Dom Joao Nery, 4031 - Itaim Paulista, Sao Paulo - SP">Estrada Dom Joao Nery, 4031 - Itaim Paulista, Sao Paulo - SP</option>
                    <option value="Estrada Dom João Nery, 4031 - Itaim Paulista, São Paulo - SP">Av. Josr Pinheiro Borges, - Vila Brasil, Sao Paulo - SP</option>
                    <option value="R. Serra de Japi, 647 - Vila Gomes Cardim, Sao Paulo - SP">R. Serra de Japi, 647 - Vila Gomes Cardim, São Paulo - SP</option>
                    <option value="Avenida Marechal Tito, 7579 - Itaim Paulista, Sao Paulo - SP">Avenida Marechal Tito, 7579 - Itaim Paulista, São Paulo - SP</option>
                    <option value="R. Itu, 500 - Vila Monte Belo, Itaquaquecetuba - SP">R. Itu, 500 - Vila Monte Belo, Itaquaquecetuba - SP</option>
                  </select>
              </div>
              </div>
              <button type="submit">Adicionar</button>
            </div> 
            <!-- fim pimentão-->
    </form>

    <form action="../produtosS/cadastro_produtosS.php" method="post">
    <div class="itens-shop">
          <div class="itens">

            <!-- inicio Ervilha-->
            <div class="cogumelo">
              <img src="../imgS/sal10.png" alt="ervilha">
              <h2>Salgadinho de Batata Ruffles Original 167g</h2>

              <div class="nome">
                <h3>Nome</h3>
                <select name="nome" id="nome" >
                  <option value="Salgadinho de Batata Ruffles Original 167g">Salgadinho de Batata Ruffles Original 167g</option>
                </select>
              </div>

              <div class="qtn">
                <h3>Quantidade</h3>
                <input type="number" name="qtd" id="qtd" min="0" max="20">
              </div>
              
              <div class="mercado">
                <h3>Mercados</h3>
                <select name="mercados" id="mercados">
                  <option value="carrefour">Carrefour</option>
                  <option value="assai">Assaí</option>
                  <option value="extra">Extra</option>
                  <option value="pao_de_acucar">Pão de Açúcar</option>
                  <option value="sonda_supermercado">Sonda Supermercado</option>
                  <option value="tenda_atacado">Tenda Atacado</option>
                </select>
              </div>

              <div class="pagamento">
                <h3>Forma de pagamento</h3>
                <select name="pagamento" id="pagamento">
                  <option value="Cartao de credito">Cartão de credito</option>
                  <option value="Cartao de debito">Cartão de debito</option>
                  <option value="Vale refeicao">Vale refeição</option>
                  <option value="Dinheiro">Dinheiro</option>
                </select>
              </div>
              
              <div class="retirada">
                <h3>Tipo de disponibilidade</h3>
                  <select name="retirada" id="retirada">
                    <option value="Nao muito rapido">Nao muito rapido (Disponivel em ate 2hr)</option>
                    <option value="Rapido ">Rapido (Disponivel em ate 1hr)</option>
                    <option value="Express">Express(Disponivel em ate 30 min)</option>
                  </select>
              </div>

              <div class="localr">
                <div class="localretirada">
                  <h3>Selecione o local de retirada</h3>
                  <select name="local_retirada" id="local_retirada">
                    <option value="Av. Jose Pinheiro Borges, s/n - Vila Campanela, Sao Paulo - SP">Av. Jose Pinheiro Borges, s/n - Vila Campanela, Sao Paulo - SP</option>
                    <option value="Estrada Dom Joao Nery, 4031 - Itaim Paulista, Sao Paulo - SP">Estrada Dom Joao Nery, 4031 - Itaim Paulista, Sao Paulo - SP</option>
                    <option value="Estrada Dom João Nery, 4031 - Itaim Paulista, São Paulo - SP">Av. Josr Pinheiro Borges, - Vila Brasil, Sao Paulo - SP</option>
                    <option value="R. Serra de Japi, 647 - Vila Gomes Cardim, Sao Paulo - SP">R. Serra de Japi, 647 - Vila Gomes Cardim, São Paulo - SP</option>
                    <option value="Avenida Marechal Tito, 7579 - Itaim Paulista, Sao Paulo - SP">Avenida Marechal Tito, 7579 - Itaim Paulista, São Paulo - SP</option>
                    <option value="R. Itu, 500 - Vila Monte Belo, Itaquaquecetuba - SP">R. Itu, 500 - Vila Monte Belo, Itaquaquecetuba - SP</option>
                  </select>
              </div>
              </div>
              <button type="submit">Adicionar</button>
            </div> 
            <!-- fim Ervilha-->
    </form>

    <form action="../produtosS/cadastro_produtosS.php" method="post">
    <div class="itens-shop">
          <div class="itens">

            <!-- inicio Pepino-->
            <div class="cogumelo">
              <img src="../imgS/sal11.png" alt="pepino">
              <h2>Salgadinho Fofura presunto 90g</h2>

              <div class="nome">
                <h3>Nome</h3>
                <select name="nome" id="nome" >
                  <option value="Salgadinho Fofura presunto 90g">Salgadinho Fofura presunto 90g</option>
                </select>
              </div>

              <div class="qtn">
                <h3>Quantidade</h3>
                <input type="number" name="qtd" id="qtd" min="0" max="20">
              </div>
              
              <div class="mercado">
                <h3>Mercados</h3>
                <select name="mercados" id="mercados">
                  <option value="carrefour">Carrefour</option>
                  <option value="assai">Assaí</option>
                  <option value="extra">Extra</option>
                  <option value="pao_de_acucar">Pão de Açúcar</option>
                  <option value="sonda_supermercado">Sonda Supermercado</option>
                  <option value="tenda_atacado">Tenda Atacado</option>
                </select>
              </div>

              <div class="pagamento">
                <h3>Forma de pagamento</h3>
                <select name="pagamento" id="pagamento">
                  <option value="Cartao de credito">Cartão de credito</option>
                  <option value="Cartao de debito">Cartão de debito</option>
                  <option value="Vale refeicao">Vale refeição</option>
                  <option value="Dinheiro">Dinheiro</option>
                </select>
              </div>
              
              <div class="retirada">
                <h3>Tipo de disponibilidade</h3>
                  <select name="retirada" id="retirada">
                    <option value="Nao muito rapido">Nao muito rapido (Disponivel em ate 2hr)</option>
                    <option value="Rapido ">Rapido (Disponivel em ate 1hr)</option>
                    <option value="Express">Express(Disponivel em ate 30 min)</option>
                  </select>
              </div>

              <div class="localr">
                <div class="localretirada">
                  <h3>Selecione o local de retirada</h3>
                  <select name="local_retirada" id="local_retirada">
                    <option value="Av. Jose Pinheiro Borges, s/n - Vila Campanela, Sao Paulo - SP">Av. Jose Pinheiro Borges, s/n - Vila Campanela, Sao Paulo - SP</option>
                    <option value="Estrada Dom Joao Nery, 4031 - Itaim Paulista, Sao Paulo - SP">Estrada Dom Joao Nery, 4031 - Itaim Paulista, Sao Paulo - SP</option>
                    <option value="Estrada Dom João Nery, 4031 - Itaim Paulista, São Paulo - SP">Av. Josr Pinheiro Borges, - Vila Brasil, Sao Paulo - SP</option>
                    <option value="R. Serra de Japi, 647 - Vila Gomes Cardim, Sao Paulo - SP">R. Serra de Japi, 647 - Vila Gomes Cardim, São Paulo - SP</option>
                    <option value="Avenida Marechal Tito, 7579 - Itaim Paulista, Sao Paulo - SP">Avenida Marechal Tito, 7579 - Itaim Paulista, São Paulo - SP</option>
                    <option value="R. Itu, 500 - Vila Monte Belo, Itaquaquecetuba - SP">R. Itu, 500 - Vila Monte Belo, Itaquaquecetuba - SP</option>
                  </select>
              </div>
              </div>
              <button type="submit">Adicionar</button>
            </div> 
            <!-- fim Pepino-->
    </form>

    <footer>
        <div class="footer-bottom">
          <p>
            copyright &copy;2022 Art box. Design
            <a href="https://github.com/ViniciusMirtilo">Mirtilo Furry uwu</a>
          </p>
        </div>
      </footer>

  </body>
</html>
