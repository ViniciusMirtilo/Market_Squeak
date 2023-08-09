
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

    <link rel="stylesheet" href="../style/Shopc.css">

    <script
      src="https://kit.fontawesome.com/7048b0b83b.js"
      crossorigin="anonymous"
    ></script>

    <title>Squeak Market - Cervejas</title>
  </head>
  <body>
    <header class="menu-img">
      <div class="center">
        <div class="logo">
        <a class="Home" href="../home.php"><h2>Squeak Market</h2></a>
        </div>
        <!--Logo-->
        <div class="menu">
          <a class="abou" href="../users/user_pageS.php">Salgadinhos</a>
          <a class="abou" href="../users/user_pageV.php">Legumes</a>
          <a class="abou" href="../produtosC/lista_produtosC.php">Lista de compras</a>
          <a class="login" href="../home.php">Sair</a>
          
        </div>
        <!--Menu-->
      </div>
    </header>

    <section class="shopt">
      <div class="tshop">
        <h2>Cervejas </h2>
      </div>
    </section>

    <form action="../produtosC/cadastro_produtosC.php" method="post">

    <div class="itens-shop">
          <div class="itens">

            <!-- inicio Cacau-->
            <div class="cogumelo">
              <img src="../imgC/cel1.png" alt="abrobinha">
              <h2>Bodebrown Cacau IPA</h2>

              <div class="nome">
                <h3>Nome</h3>
                <select name="nome_cervejas" id="nome_cervejas" >
                  <option value="Cogumelo">Bodebrown Cacau IPA</option>
                </select>
              </div>

              <div class="qtn">
                <h3>Quantidade</h3>
                <input type="number" name="qtd" id="qtd" min="0" max="10">
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
                  <option value="Cartão de credito">Cartão de credito</option>
                  <option value="Cartão de debito">Cartão de debito</option>
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

              <div class="tipol">
                <div class="tipoleg">
                  <h3>Temperatura da cerveja</h3>
                  <select name="temperatura" id="temperatura">
                    <option value="Bem_gelada">Bem gelada</option>
                    <option value="Gelado">Gelado</option>
                    <option value="Temperatura_ambiente">Temperatura ambiente</option>
                  </select>
              </div>
              <div class="aviso">
                <h2>Produto para maiores de 18 anos</h2>
              </div>
              </div>
              </div>
              <button type="submit">Adicionar</button>
            </div> 
            <!-- fim Cacau-->

    </form>

    <form action="../produtosC/cadastro_produtosC.php" method="post">
    <div class="itens-shop">
          <div class="itens">

            <!-- inicio Chimay Bleue-->
            <div class="cogumelo">
              <img src="../imgC/cel2.png" alt="abrobinha">
              <h2>Chimay Bleue</h2>

              <div class="nome">
                <h3>Nome</h3>
                <select name="nome_cervejas" id="nome_cervejas" >
                  <option value="Abrobinha">Chimay Bleue</option>
                </select>
              </div>

              <div class="qtn">
                <h3>Quantidade</h3>
                <input type="number" name="qtd" id="qtd" min="0" max="10">
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
                  <option value="Cartão de credito">Cartão de credito</option>
                  <option value="Cartão de debito">Cartão de debito</option>
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

              <div class="tipol">
                <div class="tipoleg">
                  <h3>Temperatura da cerveja</h3>
                  <select name="temperatura" id="temperatura">
                    <option value="Bem_gelada">Bem gelada</option>
                    <option value="Gelado">Gelado</option>
                    <option value="Temperatura_ambiente">Temperatura ambiente</option>
                  </select>
              </div>
              <div class="aviso">
                <h2>Produto para maiores de 18 anos</h2>
              </div>
              </div>
              <button type="submit">Adicionar</button>
            </div> 
            <!-- fim Chimay Bleue-->
    </form>

    <form action="../produtosC/cadastro_produtosC.php" method="post">
    <div class="itens-shop">
          <div class="itens">

            <!-- inicio Duchesse-->
            <div class="cogumelo">
              <img src="../imgC/cel3.png" alt="aspargos">
              <h2>Duchesse de Bourgogne</h2>

              <div class="nome">
                <h3>Nome</h3>
                <select name="nome_cervejas" id="nome_cervejas" >
                  <option value="Aspargos">Duchesse de Bourgogne</option>
                </select>
              </div>

              <div class="qtn">
                <h3>Quantidade</h3>
                <input type="number" name="qtd" id="qtd" min="0" max="10">
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
                  <option value="Cartão de credito">Cartão de credito</option>
                  <option value="Cartão de debito">Cartão de debito</option>
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

              <div class="tipol">
                <div class="tipoleg">
                  <h3>Temperatura da cerveja</h3>
                  <select name="temperatura" id="temperatura">
                    <option value="Bem_gelada">Bem gelada</option>
                    <option value="Gelado">Gelado</option>
                    <option value="Temperatura_ambiente">Temperatura ambiente</option>
                  </select>
              </div>
              <div class="aviso">
                <h2>Produto para maiores de 18 anos</h2>
              </div>
              </div>
              </div>
              <button type="submit">Adicionar</button>
            </div> 
            <!-- fim Duchesse-->
    </form>

    <form action="../produtosC/cadastro_produtosC.php" method="post">
    <div class="itens-shop">
          <div class="itens">

            <!-- inicio Colorado-->
            <div class="cogumelo">
              <img src="../imgC/cel4.png" alt="alcachofra">
              <h2>Colorado Ithaca</h2>

              <div class="nome">
                <h3>Nome</h3>
                <select name="nome_cervejas" id="nome_cervejas" >
                  <option value="Alcachofra">Colorado Ithaca</option>
                </select>
              </div>

              <div class="qtn">
                <h3>Quantidade</h3>
                <input type="number" name="qtd" id="qtd" min="0" max="10">
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
                  <option value="Cartão de credito">Cartão de credito</option>
                  <option value="Cartão de debito">Cartão de debito</option>
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

              <div class="tipol">
                <div class="tipoleg">
                  <h3>Temperatura da cerveja</h3>
                  <select name="temperatura" id="temperatura">
                    <option value="Bem_gelada">Bem gelada</option>
                    <option value="Gelado">Gelado</option>
                    <option value="Temperatura_ambiente">Temperatura ambiente</option>
                  </select>
              </div>
              <div class="aviso">
                <h2>Produto para maiores de 18 anos</h2>
              </div>
              </div>

              </div>
              <button type="submit">Adicionar</button>
            </div> 
            <!-- fim Colorado-->
    </form>

    <form action="../produtosC/cadastro_produtosC.php" method="post">
    <div class="itens-shop">
          <div class="itens">

            <!-- inicio Morada-->
            <div class="cogumelo">
              <img src="../imgC/cel5.png" alt="batata-doce">
              <h2>Morada Double Vienna</h2>

              <div class="nome">
                <h3>Nome</h3>
                <select name="nome_cervejas" id="nome_cervejas" >
                  <option value="Batata-doce">Morada Double Vienna</option>
                </select>
              </div>

              <div class="qtn">
                <h3>Quantidade</h3>
                <input type="number" name="qtd" id="qtd" min="0" max="10">
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
                  <option value="Cartão de credito">Cartão de credito</option>
                  <option value="Cartão de debito">Cartão de debito</option>
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

              <div class="tipol">
                <div class="tipoleg">
                  <h3>Temperatura da cerveja</h3>
                  <select name="temperatura" id="temperatura">
                    <option value="Bem_gelada">Bem gelada</option>
                    <option value="Gelado">Gelado</option>
                    <option value="Temperatura_ambiente">Temperatura ambiente</option>
                  </select>
              </div>
              <div class="aviso">
                <h2>Produto para maiores de 18 anos</h2>
              </div>
              </div>

              </div>
              <button type="submit">Adicionar</button>
            </div> 
            <!-- fim Morada-->
    </form>

    <form action="../produtosC/cadastro_produtosC.php" method="post">
    <div class="itens-shop">
          <div class="itens">

            <!-- inicio Coast-->
            <div class="cogumelo">
              <img src="../imgC/cel6.png" alt="berinjela">
              <h2>North Coast</h2>

              <div class="nome">
                <h3>Nome</h3>
                <select name="nome_cervejas" id="nome_cervejas" >
                  <option value="Berinjela">North Coast</option>
                </select>
              </div>

              <div class="qtn">
                <h3>Quantidade</h3>
                <input type="number" name="qtd" id="qtd" min="0" max="10">
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
                  <option value="Cartão de credito">Cartão de credito</option>
                  <option value="Cartão de debito">Cartão de debito</option>
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

              <div class="tipol">
                <div class="tipoleg">
                  <h3>Temperatura da cerveja</h3>
                  <select name="temperatura" id="temperatura">
                    <option value="Bem_gelada">Bem gelada</option>
                    <option value="Gelado">Gelado</option>
                    <option value="Temperatura_ambiente">Temperatura ambiente</option>
                  </select>
              </div>
              <div class="aviso">
                <h2>Produto para maiores de 18 anos</h2>
              </div>
              </div>

              </div>
              <button type="submit">Adicionar</button>
            </div> 
            <!-- fim Coast-->
    </form>

    <form action="../produtosC/cadastro_produtosC.php" method="post">
    <div class="itens-shop">
          <div class="itens">

            <!-- inicio Karmeliet-->
            <div class="cogumelo">
              <img src="../imgC/cel7.png" alt="beterraba">
              <h2>Tripel Karmeliet</h2>

              <div class="nome">
                <h3>Nome</h3>
                <select name="nome_cervejas" id="nome_cervejas" >
                  <option value="Beterraba">Tripel Karmeliet</option>
                </select>
              </div>

              <div class="qtn">
                <h3>Quantidade</h3>
                <input type="number" name="qtd" id="qtd" min="0" max="10">
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
                  <option value="Cartão de credito">Cartão de credito</option>
                  <option value="Cartão de debito">Cartão de debito</option>
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

              <div class="tipol">
                <div class="tipoleg">
                  <h3>Temperatura da cerveja</h3>
                  <select name="temperatura" id="temperatura">
                    <option value="Bem_gelada">Bem gelada</option>
                    <option value="Gelado">Gelado</option>
                    <option value="Temperatura_ambiente">Temperatura ambiente</option>
                  </select>
              </div>
              <div class="aviso">
                <h2>Produto para maiores de 18 anos</h2>
              </div>
              </div>
              </div>
              <button type="submit">Adicionar</button>
            </div> 
            <!-- fim Karmeliet-->
    </form>

    <form action="../produtosC/cadastro_produtosC.php" method="post">
    <div class="itens-shop">
          <div class="itens">

            <!-- inicio Budweiser-->
            <div class="cogumelo">
              <img src="../imgC/cel8.png" alt="cenoura">
              <h2>Budweiser</h2>

              <div class="nome">
                <h3>Nome</h3>
                <select name="nome_cervejas" id="nome_cervejas" >
                  <option value="Cenoura">Budweiser</option>
                </select>
              </div>

              <div class="qtn">
                <h3>Quantidade</h3>
                <input type="number" name="qtd" id="qtd" min="0" max="10">
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
                  <option value="Cartão de credito">Cartão de credito</option>
                  <option value="Cartão de debito">Cartão de debito</option>
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

              <div class="tipol">
                <div class="tipoleg">
                  <h3>Temperatura da cerveja</h3>
                  <select name="temperatura" id="temperatura">
                    <option value="Bem_gelada">Bem gelada</option>
                    <option value="Gelado">Gelado</option>
                    <option value="Temperatura_ambiente">Temperatura ambiente</option>
                  </select>
              </div>
              <div class="aviso">
                <h2>Produto para maiores de 18 anos</h2>
              </div>
              </div>
              </div>
              <button type="submit">Adicionar</button>
            </div> 
            <!-- fim Budweiser-->
    </form>

    <form action="../produtosC/cadastro_produtosC.php" method="post">
    <div class="itens-shop">
          <div class="itens">

            <!-- inicio Ballast-->
            <div class="cogumelo">
              <img src="../imgC/cel9.png" alt="cogumelo">
              <h2>Ballast Point Sculpin IPA</h2>

              <div class="nome">
                <h3>Nome</h3>
                <select name="nome_cervejas" id="nome_cervejas" >
                  <option value="Pimentão">Ballast Point Sculpin IPA</option>
                </select>
              </div>

              <div class="qtn">
                <h3>Quantidade</h3>
                <input type="number" name="qtd" id="qtd" min="0" max="10">
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
                  <option value="Cartão de credito">Cartão de credito</option>
                  <option value="Cartão de debito">Cartão de debito</option>
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

              <div class="tipol">
                <div class="tipoleg">
                  <h3>Temperatura da cerveja</h3>
                  <select name="temperatura" id="temperatura">
                    <option value="Bem_gelada">Bem gelada</option>
                    <option value="Gelado">Gelado</option>
                    <option value="Temperatura_ambiente">Temperatura ambiente</option>
                  </select>
              </div>
              <div class="aviso">
                <h2>Produto para maiores de 18 anos</h2>
              </div>
              </div>

              </div>
              <button type="submit">Adicionar</button>
            </div> 
            <!-- fim Ballast-->
    </form>

    <form action="../produtosC/cadastro_produtosC.php" method="post">
    <div class="itens-shop">
          <div class="itens">

            <!-- inicio Light-->
            <div class="cogumelo">
              <img src="../imgC/cel10.png" alt="ervilha">
              <h2>Bud Light</h2>

              <div class="nome">
                <h3>Nome</h3>
                <select name="nome_cervejas" id="nome_cervejas" >
                  <option value="Ervilha">Bud Light</option>
                </select>
              </div>

              <div class="qtn">
                <h3>Quantidade</h3>
                <input type="number" name="qtd" id="qtd" min="0" max="10">
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
                  <option value="Cartão de credito">Cartão de credito</option>
                  <option value="Cartão de debito">Cartão de debito</option>
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

              <div class="tipol">
                <div class="tipoleg">
                  <h3>Temperatura da cerveja</h3>
                  <select name="temperatura" id="temperatura">
                    <option value="Bem_gelada">Bem gelada</option>
                    <option value="Gelado">Gelado</option>
                    <option value="Temperatura_ambiente">Temperatura ambiente</option>
                  </select>
              </div>
              <div class="aviso">
                <h2>Produto para maiores de 18 anos</h2>
              </div>
              </div>
              </div>
              <button type="submit">Adicionar</button>
            </div> 
            <!-- fim Light-->
    </form>

    <form action="../produtosC/cadastro_produtosC.php" method="post">
    <div class="itens-shop">
          <div class="itens">

            <!-- inicio Pepino-->
            <div class="cogumelo">
              <img src="../imgC/cel11.png" alt="pepino">
              <h2>Skol</h2>

              <div class="nome">
                <h3>Nome</h3>
                <select name="nome_cervejas" id="nome_cervejas" >
                  <option value="Pepino">Skol</option>
                </select>
              </div>

              <div class="qtn">
                <h3>Quantidade</h3>
                <input type="number" name="qtd" id="qtd" min="0" max="10">
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
                  <option value="Cartão de credito">Cartão de credito</option>
                  <option value="Cartão de debito">Cartão de debito</option>
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

              <div class="tipol">
                <div class="tipoleg">
                  <h3>Temperatura da cerveja</h3>
                  <select name="temperatura" id="temperatura">
                    <option value="Bem_gelada">Bem gelada</option>
                    <option value="Gelado">Gelado</option>
                    <option value="Temperatura_ambiente">Temperatura ambiente</option>
                  </select>
              </div>
              <div class="aviso">
                <h2>Produto para maiores de 18 anos</h2>
              </div>
              </div>
              </div>
              <button type="submit">Adicionar</button>
            </div> 
            <!-- fim Pepino-->
    </form>

    <footer>
        <div class="footer-bottom">
          <p>
            copyright &copy;2022 Hortifrúti Page. Design
            <a href="https://github.com/ViniciusMirtilo">Mirtilo Furry uwu</a>
          </p>
        </div>
      </footer>

  </body>
</html>
