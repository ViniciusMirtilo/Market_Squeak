
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

    <link rel="stylesheet" href="../style/Shop.css">

    <script
      src="https://kit.fontawesome.com/7048b0b83b.js"
      crossorigin="anonymous"
    ></script>

    <title>Squeak Market - Saudavel</title>
  </head>
  <body>
    <header class="menu-img">
      <div class="center">
        <div class="logo">
        <a class="Home" href="../home.php"><h2>Hortifrúti</h2></a>
        </div>
        <!--Logo-->
        <div class="menu">
          
          <a class="abou" href="../users/user_pageS.php">Salgadinhos</a>
          <a class="abou" href="../users/adm_pageC.php">Cervejas</a>
          <a class="abou" href="../produtosV/lista_produtosV.php">Lista de compras</a>
          <a class="abou" href="../necessario/lista_usuario.php">Adm Page</a>
          <a class="login" href="../Home.php">Sair</a>
          
        </div>
        <!--Menu-->
      </div>
    </header>

    <section class="shopt">
      <div class="tshop">
        <h2>Legumes </h2>
      </div>
    </section>

    <form action="../produtosV/cadastro_produtosV.php" method="post">

    <div class="itens-shop">
          <div class="itens">

            <!-- inicio Cogumelo-->
            <div class="cogumelo">
              <img src="../img/cogumelo.png" alt="abrobinha">
              <h2>Cogumelo</h2>

              <div class="nome">
                <h3>Nome</h3>
                <select name="nome" id="nome" >
                  <option value="Cogumelo">Cogumelo</option>
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
                  <select name="localr" id="localr">
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
                  <h3>Tipo de legume que deseja</h3>
                  <select name="tipolegume" id="tipolegume">
                    <option value="Congelados">Congelados</option>
                    <option value="Fresco">Fresco</option>
                  </select>
              </div>

              <div class="marcasp">
                <div class="tipomar">
                  <h3>Marcas</h3>
                  <select name="tipomarcas" id="tipomarcas">
                    <option value="Grano">Grano</option>
                    <option value="Copacol">Copacol</option>
                    <option value="De Marchi">De Marchi</option>
                  </select>
              </div>


              </div>
              <button type="submit">Adicionar</button>
            </div> 
            <!-- fim Cogumelo-->

    </form>

    <form action="../produtosV/cadastro_produtosV.php" method="post">
    <div class="itens-shop">
          <div class="itens">

            <!-- inicio Abrobinha-->
            <div class="cogumelo">
              <img src="../img/abrobinha.png" alt="abrobinha">
              <h2>Abrobinha</h2>

              <div class="nome">
                <h3>Nome</h3>
                <select name="nome" id="nome" >
                  <option value="Abrobinha">Abrobinha</option>
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
                  <select name="localr" id="localr">
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
                  <h3>Tipo de legume que deseja</h3>
                  <select name="tipolegume" id="tipolegume">
                    <option value="Congelados">Congelados</option>
                    <option value="Fresco">Fresco</option>
                  </select>
              </div>

              <div class="marcasp">
                <div class="tipomar">
                  <h3>Marcas</h3>
                  <select name="tipomarcas" id="tipomarcas">
                    <option value="Grano">Grano</option>
                    <option value="Copacol">Copacol</option>
                    <option value="De Marchi">De Marchi</option>
                  </select>
              </div>


              </div>
              <button type="submit">Adicionar</button>
            </div> 
            <!-- fim Abrobinha-->
    </form>

    <form action="../produtosV/cadastro_produtosV.php" method="post">
    <div class="itens-shop">
          <div class="itens">

            <!-- inicio Alcachofra-->
            <div class="cogumelo">
              <img src="../img/Aspargos.png" alt="aspargos">
              <h2>Aspargos</h2>

              <div class="nome">
                <h3>Nome</h3>
                <select name="nome" id="nome" >
                  <option value="Aspargos">Aspargos</option>
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
                  <select name="localr" id="localr">
                    <option value="Av. Jose Pinheiro Borges, s/n - Vila Campanela, Sao Paulo - SP">Av. Jose Pinheiro Borges, s/n - Vila Campanela, Sao Paulo - SP</option>
                    <option value="Estrada Dom Joao Nery, 4031 - Itaim Paulista, Sao Paulo - SP">Estrada Dom Joao Nery, 4031 - Itaim Paulista, Sao Paulo - SP</option>
                    <option value="Estrada Dom João Nery, 4031 - Itaim Paulista, São Paulo - SP">Av. Josr Pinheiro Borges, - Vila Brasil, Sao Paulo - SP</option>
                    <option value="R. Serra de Japi, 647 - Vila Gomes Cardim, Sao Paulo - SP">R. Serra de Japi, 647 - Vila Gomes Cardim, São Paulo - SP</option>
                    <option value="Avenida Marechal Tito, 7579 - Itaim Paulista, Sao Paulo - SP">Avenida Marechal Tito, 7579 - Itaim Paulista, São Paulo - SP</option>
                    <option value="R. Itu, 500 - Vila Monte Belo, Itaquaquecetuba - SP">R. Itu, 500 - Vila Monte Belo, Itaquaquecetuba - SP</option>
                  </select>
              </div>
              </div>

              <div class="tipol">
                <div class="tipoleg">
                  <h3>Tipo de legume que deseja</h3>
                  <select name="tipolegume" id="tipolegume">
                    <option value="Congelados">Congelados</option>
                    <option value="Fresco">Fresco</option>
                  </select>
              </div>

              <div class="marcasp">
                <div class="tipomar">
                  <h3>Marcas</h3>
                  <select name="tipomarcas" id="tipomarcas">
                    <option value="Grano">Grano</option>
                    <option value="Copacol">Copacol</option>
                    <option value="De Marchi">De Marchi</option>
                  </select>
              </div>


              </div>
              <button type="submit">Adicionar</button>
            </div> 
            <!-- fim Alcachofra-->
    </form>

    <form action="../produtosV/cadastro_produtosV.php" method="post">
    <div class="itens-shop">
          <div class="itens">

            <!-- inicio Alcachofra-->
            <div class="cogumelo">
              <img src="../img/Alcachofra.png" alt="alcachofra">
              <h2>Alcachofra</h2>

              <div class="nome">
                <h3>Nome</h3>
                <select name="nome" id="nome" >
                  <option value="Alcachofra">Alcachofra</option>
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
                  <select name="localr" id="localr">
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
                  <h3>Tipo de legume que deseja</h3>
                  <select name="tipolegume" id="tipolegume">
                    <option value="Congelados">Congelados</option>
                    <option value="Fresco">Fresco</option>
                  </select>
              </div>

              <div class="marcasp">
                <div class="tipomar">
                  <h3>Marcas</h3>
                  <select name="tipomarcas" id="tipomarcas">
                    <option value="Grano">Grano</option>
                    <option value="Copacol">Copacol</option>
                    <option value="De Marchi">De Marchi</option>
                  </select>
              </div>


              </div>
              <button type="submit">Adicionar</button>
            </div> 
            <!-- fim Aspargos-->
    </form>

    <form action="../produtosV/cadastro_produtosV.php" method="post">
    <div class="itens-shop">
          <div class="itens">

            <!-- inicio Batata-doce-->
            <div class="cogumelo">
              <img src="../img/batata-doce.png" alt="batata-doce">
              <h2>Batata-doce</h2>

              <div class="nome">
                <h3>Nome</h3>
                <select name="nome" id="nome" >
                  <option value="Batata-doce">Batata-doce</option>
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
                  <select name="localr" id="localr">
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
                  <h3>Tipo de legume que deseja</h3>
                  <select name="tipolegume" id="tipolegume">
                    <option value="Congelados">Congelados</option>
                    <option value="Fresco">Fresco</option>
                  </select>
              </div>

              <div class="marcasp">
                <div class="tipomar">
                  <h3>Marcas</h3>
                  <select name="tipomarcas" id="tipomarcas">
                    <option value="Grano">Grano</option>
                    <option value="Copacol">Copacol</option>
                    <option value="De Marchi">De Marchi</option>
                  </select>
              </div>


              </div>
              <button type="submit">Adicionar</button>
            </div> 
            <!-- fim Batata-doce-->
    </form>

    <form action="../produtosV/cadastro_produtosV.php" method="post">
    <div class="itens-shop">
          <div class="itens">

            <!-- inicio Berinjela-->
            <div class="cogumelo">
              <img src="../img/berinjela.png" alt="berinjela">
              <h2>Berinjela</h2>

              <div class="nome">
                <h3>Nome</h3>
                <select name="nome" id="nome" >
                  <option value="Berinjela">Berinjela</option>
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
                  <select name="localr" id="localr">
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
                  <h3>Tipo de legume que deseja</h3>
                  <select name="tipolegume" id="tipolegume">
                    <option value="Congelados">Congelados</option>
                    <option value="Fresco">Fresco</option>
                  </select>
              </div>

              <div class="marcasp">
                <div class="tipomar">
                  <h3>Marcas</h3>
                  <select name="tipomarcas" id="tipomarcas">
                    <option value="Grano">Grano</option>
                    <option value="Copacol">Copacol</option>
                    <option value="De Marchi">De Marchi</option>
                  </select>
              </div>


              </div>
              <button type="submit">Adicionar</button>
            </div> 
            <!-- fim Berinjela-->
    </form>

    <form action="../produtosV/cadastro_produtosV.php" method="post">
    <div class="itens-shop">
          <div class="itens">

            <!-- inicio Beterraba-->
            <div class="cogumelo">
              <img src="../img/beterraba.png" alt="beterraba">
              <h2>Beterraba</h2>

              <div class="nome">
                <h3>Nome</h3>
                <select name="nome" id="nome" >
                  <option value="Beterraba">Beterraba</option>
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
                  <select name="localr" id="localr">
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
                  <h3>Tipo de legume que deseja</h3>
                  <select name="tipolegume" id="tipolegume">
                    <option value="Congelados">Congelados</option>
                    <option value="Fresco">Fresco</option>
                  </select>
              </div>

              <div class="marcasp">
                <div class="tipomar">
                  <h3>Marcas</h3>
                  <select name="tipomarcas" id="tipomarcas">
                    <option value="Grano">Grano</option>
                    <option value="Copacol">Copacol</option>
                    <option value="De Marchi">De Marchi</option>
                  </select>
              </div>


              </div>
              <button type="submit">Adicionar</button>
            </div> 
            <!-- fim Beterraba-->
    </form>

    <form action="../produtosV/cadastro_produtosV.php" method="post">
    <div class="itens-shop">
          <div class="itens">

            <!-- inicio Cenoura-->
            <div class="cogumelo">
              <img src="../img/cenoura.png" alt="cenoura">
              <h2>Cenoura</h2>

              <div class="nome">
                <h3>Nome</h3>
                <select name="nome" id="nome" >
                  <option value="Cenoura">Cenoura</option>
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
                  <select name="localr" id="localr">
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
                  <h3>Tipo de legume que deseja</h3>
                  <select name="tipolegume" id="tipolegume">
                    <option value="Congelados">Congelados</option>
                    <option value="Fresco">Fresco</option>
                  </select>
              </div>

              <div class="marcasp">
                <div class="tipomar">
                  <h3>Marcas</h3>
                  <select name="tipomarcas" id="tipomarcas">
                    <option value="Grano">Grano</option>
                    <option value="Copacol">Copacol</option>
                    <option value="De Marchi">De Marchi</option>
                  </select>
              </div>


              </div>
              <button type="submit">Adicionar</button>
            </div> 
            <!-- fim Cenoura-->
    </form>

    <form action="../produtosV/cadastro_produtosV.php" method="post">
    <div class="itens-shop">
          <div class="itens">

            <!-- inicio pimentão-->
            <div class="cogumelo">
              <img src="../img/pimentao.png" alt="cogumelo">
              <h2>Pimentão</h2>

              <div class="nome">
                <h3>Nome</h3>
                <select name="nome" id="nome" >
                  <option value="Pimentão">Pimentão</option>
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
                  <select name="localr" id="localr">
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
                  <h3>Tipo de legume que deseja</h3>
                  <select name="tipolegume" id="tipolegume">
                    <option value="Congelados">Congelados</option>
                    <option value="Fresco">Fresco</option>
                  </select>
              </div>

              <div class="marcasp">
                <div class="tipomar">
                  <h3>Marcas</h3>
                  <select name="tipomarcas" id="tipomarcas">
                    <option value="Grano">Grano</option>
                    <option value="Copacol">Copacol</option>
                    <option value="De Marchi">De Marchi</option>
                  </select>
              </div>


              </div>
              <button type="submit">Adicionar</button>
            </div> 
            <!-- fim pimentão-->
    </form>

    <form action="../produtosV/cadastro_produtosV.php" method="post">
    <div class="itens-shop">
          <div class="itens">

            <!-- inicio Ervilha-->
            <div class="cogumelo">
              <img src="../img/ervilha.png" alt="ervilha">
              <h2>Ervilha</h2>

              <div class="nome">
                <h3>Nome</h3>
                <select name="nome" id="nome" >
                  <option value="Ervilha">Ervilha</option>
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
                  <select name="localr" id="localr">
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
                  <h3>Tipo de legume que deseja</h3>
                  <select name="tipolegume" id="tipolegume">
                    <option value="Congelados">Congelados</option>
                    <option value="Fresco">Fresco</option>
                  </select>
              </div>

              <div class="marcasp">
                <div class="tipomar">
                  <h3>Marcas</h3>
                  <select name="tipomarcas" id="tipomarcas">
                    <option value="Grano">Grano</option>
                    <option value="Copacol">Copacol</option>
                    <option value="De Marchi">De Marchi</option>
                  </select>
              </div>


              </div>
              <button type="submit">Adicionar</button>
            </div> 
            <!-- fim Ervilha-->
    </form>

    <form action="../produtosV/cadastro_produtosV.php" method="post">
    <div class="itens-shop">
          <div class="itens">

            <!-- inicio Pepino-->
            <div class="cogumelo">
              <img src="../img/pepino.png" alt="pepino">
              <h2>Pepino</h2>

              <div class="nome">
                <h3>Nome</h3>
                <select name="nome" id="nome" >
                  <option value="Pepino">Pepino</option>
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
                  <select name="localr" id="localr">
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
                  <h3>Tipo de legume que deseja</h3>
                  <select name="tipolegume" id="tipolegume">
                    <option value="Congelados">Congelados</option>
                    <option value="Fresco">Fresco</option>
                  </select>
              </div>

              <div class="marcasp">
                <div class="tipomar">
                  <h3>Marcas</h3>
                  <select name="tipomarcas" id="tipomarcas">
                    <option value="Grano">Grano</option>
                    <option value="Copacol">Copacol</option>
                    <option value="De Marchi">De Marchi</option>
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
