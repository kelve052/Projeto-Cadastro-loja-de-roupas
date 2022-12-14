<?php include("./mysqlphp/conexao_direta.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fashion Style</title>
    <link rel="shortcut icon" href="imgs/icone_terno.png" type="image/x-icon">
    <link rel="stylesheet" href="Css/estilo_index.css">
    <link rel="stylesheet" href="Css/header.css">
</head>
<body>
    <header>
        <div class="div_header_h1_img">
            <img id="logo" src="imgs/logo.png" alt="">
            <h1>FASHION STYLE</h1>
        </div>
        <nav>
            <button class="botão_header"><a href="Index.php">Home</a></button>
            <button class="botão_header">Cadastrar
                <div id='links'>
                    <a href="cliente.php">Cliente</a>
                    <a href="produto.php">Produto</a>
                    <a href="funcionario.php">Funcionário</a>
                    <a href="cor.php">Cor do produto</a>
                    <a href="grupo.php">Grupo do produto</a>
                    <a href="fornecedor.php">Fornecedor</a>
                    <a href="tipo_entrega.php">Entrega</a>
                    <a href="venda.php">Venda</a>
                </div>
            </button>
        </nav>
    </header>
    <main>
        <section class="parte_inicial">
            <h2>"Quando se diz que um escritor está na moda, isso quer dizer   que ele é admirado por menores de trinta anos.
                O incapaz se cobre; o rico se enfeita; o presunçoso se disfarça; o elegante se veste.
                A moda passa. O estilo permanece. Quando, afinal, nos acostumamos com uma moda é porque ela já está completamente em decadência.Vista-se mal e notarão o vestido. Vista-se bem e notarão a mulher. Aqueles que são ligados a uma moda, um estilo, uma ideologia que não os agrada apenas usam tal fator para garantir um pseudo-raciocínio, pois não tem capacidade para criar suas próprias idéias. Crie você suas própias idéias na Fashion Style."
            </h2>
            <img id="img_header" src="imgs/mulher_header.png" alt="">
        </section>
        <section class="cards">
            <?php
                $listar = $conn->query('SELECT valor, nome_produto, imagem, avaliacao FROM produto;');
                $registro = $listar->fetchAll(PDO::FETCH_ASSOC);
                foreach($registro as $valor){
                    ?>
                        <div class="card" id="card_php">
                            <img class="img_roupas_grupo1 img_roupa" src="./imgs/<?php echo $valor['imagem']?>" alt="roupa">
                            <img class="img_avaliação" src="imgs/avaliação<?php echo $valor['avaliacao']?>.png" alt="estrelinhas">
                            <img class="img_carrinho_compras" src="imgs/carrinho-de-compras.png" alt="estrelinhas">
                            <p><?php echo $valor['nome_produto']?></p>
                            <p class="preco"><?php echo $valor['valor']?>R$</p>
                        </div>
                    <?php
                }
            ?>
            <div class="card">
                <img class="img_roupas_grupo1 img_roupa" src="imgs/roupa1.png" alt="roupa">
                <img class="img_avaliação" src="imgs/avaliação6.png" alt="estrelinhas">
                <img class="img_carrinho_compras" src="imgs/carrinho-de-compras.png" alt="estrelinhas">
                <p>Casaco Feminino Nova estação</p>
                <p class="preco">600,00R$</p>
            </div>
            <div class="card">
                <img class="img_roupas_grupo1 img_roupa" src="imgs/roupa2.png" alt="roupa">
                <img class="img_avaliação" src="imgs/avaliação6.png" alt="estrelinhas">
                <img class="img_carrinho_compras" src="imgs/carrinho-de-compras.png" alt="estrelinhas">
                <p>Vestido Feminino Darf</p>
                <p class="preco">1193,00R$</p>
            </div>
            <div class="card">
                <img class="img_roupas_grupo1 img_roupa" src="imgs/roupa3.png" alt="roupa">
                <img class="img_avaliação" src="imgs/avaliação6.png" alt="estrelinhas">
                <img class="img_carrinho_compras" src="imgs/carrinho-de-compras.png" alt="estrelinhas">
                <p>Vestido Feminino Óreo</p>
                <p class="preco">1200,00R$</p>
            </div>
            <div class="card">
                <img class="img_roupas_grupo2 img_roupa" src="imgs/roupa4.png" alt="roupa">
                <img class="img_avaliação" src="imgs/avaliação1.png" alt="estrelinhas">
                <img class="img_carrinho_compras" src="imgs/carrinho-de-compras.png" alt="estrelinhas">
                <p>Calça Feminina Jeans</p>
                <p class="preco">100,00R$</p>
            </div>
            <div class="card">
                <img class="img_roupas_grupo2 img_roupa" src="imgs/roupa5.png" alt="roupa">
                <img class="img_avaliação" src="imgs/avaliação3.png" alt="estrelinhas">
                <img class="img_carrinho_compras" src="imgs/carrinho-de-compras.png" alt="estrelinhas">
                <p>Saia Jeans</p>
                <p class="preco">350,00R$</p>
            </div>
            <div class="card">
                <img class="img_roupas_grupo2 img_roupa" src="imgs/roupa6.png" alt="roupa">
                <img class="img_avaliação" src="imgs/avaliação4.png" alt="estrelinhas">
                <img class="img_carrinho_compras" src="imgs/carrinho-de-compras.png" alt="estrelinhas">
                <p>Casaco Masculino Jeans</p>
                <p class="preco">110,00R$</p>
            </div>
            <div class="card">
                <img class="img_roupas_grupo2 img_roupa" src="imgs/roupa7.png" alt="roupa">
                <img class="img_avaliação" src="imgs/avaliação5.png" alt="estrelinhas">
                <img class="img_carrinho_compras" src="imgs/carrinho-de-compras.png" alt="estrelinhas">
                <p>Macacão Jeans</p>
                <p class="preco">100,00R$</p>
            </div>
            <div class="card">
                <img class="img_roupas_grupo2 img_roupa" src="imgs/roupa8.png" alt="roupa">
                <img class="img_avaliação" src="imgs/avaliação5.png" alt="estrelinhas">
                <img class="img_carrinho_compras" src="imgs/carrinho-de-compras.png" alt="estrelinhas">
                <p>Calça Elastano Primavera</p>
                <p class="preco">200,00R$</p>
            </div>
            <div class="card">
                <img class="img_roupas_grupo2 img_roupa" src="imgs/roupa9.png" alt="roupa">
                <img class="img_avaliação" src="imgs/avaliação6.png" alt="estrelinhas">
                <img class="img_carrinho_compras" src="imgs/carrinho-de-compras.png" alt="estrelinhas">
                <p>Macacão Feminino Jeans</p>
                <p class="preco">270,00R$</p>
            </div>
            <div class="card">
                <img class="img_roupas_grupo2 img_roupa" src="imgs/roupa10.png" alt="roupa">
                <img class="img_avaliação" src="imgs/avaliação6.png" alt="estrelinhas">
                <img class="img_carrinho_compras" src="imgs/carrinho-de-compras.png" alt="estrelinhas">
                <p>Short Feminino</p>
                <p class="preco">50,00R$</p>
            </div>
            <div class="card">
                <img class="img_roupas_grupo1 img_roupa" src="imgs/roupa11.png" alt="roupa">
                <img class="img_avaliação" src="imgs/avaliação5.png" alt="estrelinhas">
                <img class="img_carrinho_compras" src="imgs/carrinho-de-compras.png" alt="estrelinhas">
                <p>Calça Feminina Boca de Sino/p>
                <p class="preco">422,00R$</p>
            </div>
            <div class="card">
                <img class="img_roupas_grupo3 img_roupa" src="imgs/roupa12.png" alt="roupa">
                <img class="img_avaliação" src="imgs/avaliação4.png" alt="estrelinhas">
                <img class="img_carrinho_compras" src="imgs/carrinho-de-compras.png" alt="estrelinhas">
                <p>Sapatilha Feminina Vermelha</p>
                <p class="preco">80,00R$</p>
            </div>
            <div class="card">
                <img class="img_roupas_grupo img_roupa" src="imgs/roupa13.png" alt="roupa">
                <img class="img_avaliação" src="imgs/avaliação6.png" alt="estrelinhas">
                <img class="img_carrinho_compras" src="imgs/carrinho-de-compras.png" alt="estrelinhas">
                <p>Tênis Azul com Cadarço Branco</p>
                <p class="preco">340,00R$</p>
            </div>
            <div class="card">
                <img class="img_roupas_grupo img_roupa" src="imgs/roupa14.png" alt="roupa">
                <img class="img_avaliação" src="imgs/avaliação6.png" alt="estrelinhas">
                <img class="img_carrinho_compras" src="imgs/carrinho-de-compras.png" alt="estrelinhas">
                <p>Coturno Verde Selva</p>
                <p class="preco">199,00R$</p>
            </div>
            <div class="card">
                <img class="img_roupas_grupo img_roupa" src="imgs/roupa15.png" alt="roupa">
                <img class="img_avaliação" src="imgs/avaliação5.png" alt="estrelinhas">
                <img class="img_carrinho_compras" src="imgs/carrinho-de-compras.png" alt="estrelinhas">
                <p>Tênis Masculino Esportivo</p>
                <p class="preco">120,00R$</p>
            </div>
            <div class="card">
                <img class="img_roupas_grupo img_roupa" src="imgs/roupa16.png" alt="roupa">
                <img class="img_avaliação" src="imgs/avaliação5.png" alt="estrelinhas">
                <img class="img_carrinho_compras" src="imgs/carrinho-de-compras.png" alt="estrelinhas">
                <p>Coturno Marrom Masculino</p>
                <p class="preco">140,00R$</p>
            </div>
            <div class="card">
                <img class="img_roupas_grupo1 img_roupa" src="imgs/roupa17.png" alt="roupa">
                <img class="img_avaliação" src="imgs/avaliação4.png" alt="estrelinhas">
                <img class="img_carrinho_compras" src="imgs/carrinho-de-compras.png" alt="estrelinhas">
                <p>Jaqueta Escura Redisiana</p>
                <p class="preco">214,00R$</p>
            </div>
            <div class="card">
                <img class="img_roupas_gruponone img_roupa" src="imgs/roupa18.png" alt="roupa">
                <img class="img_avaliação" src="imgs/avaliação6.png" alt="estrelinhas">
                <img class="img_carrinho_compras" src="imgs/carrinho-de-compras.png" alt="estrelinhas">
                <p>Jaqueta Marrom Clara</p>
                <p class="preco">552,00R$</p>
            </div>
            <div class="card">
                <img class="img_roupas_gruponone img_roupa" src="imgs/roupa19.png" alt="roupa">
                <img class="img_avaliação" src="imgs/avaliação6.png" alt="estrelinhas">
                <img class="img_carrinho_compras" src="imgs/carrinho-de-compras.png" alt="estrelinhas">
                <p>Jaqueta Bela Béka</p>
                <p class="preco">600,00R$</p>
            </div>
            <div class="card">
                <img class="img_roupas_grupo1 img_roupa" src="imgs/roupa21.png" alt="roupa">
                <img class="img_avaliação" src="imgs/avaliação4.png" alt="estrelinhas">
                <img class="img_carrinho_compras" src="imgs/carrinho-de-compras.png" alt="estrelinhas">
                <p>Moletom Comprida Social Béka</p>
                <p class="preco">1000,00R$</p>
            </div>
            <div class="card">
                <img class="img_roupas_gruponone img_roupa" src="imgs/roupa22.png" alt="roupa">
                <img class="img_avaliação" src="imgs/avaliação3.png" alt="estrelinhas">
                <img class="img_carrinho_compras" src="imgs/carrinho-de-compras.png" alt="estrelinhas">
                <p>Moletom Esportivo Masculino</p>
                <p class="preco">511,00R$</p>
            </div>
            <div class="card">
                <img class="img_roupas_gruponone img_roupa" src="imgs/roupa23.png" alt="roupa">
                <img class="img_avaliação" src="imgs/avaliação5.png" alt="estrelinhas">
                <img class="img_carrinho_compras" src="imgs/carrinho-de-compras.png" alt="estrelinhas">
                <p>Vestido Azul marinho</p>
                <p class="preco">214,00R$</p>
            </div>
            <div class="card">
                <img class="img_roupas_grupo img_roupa" src="imgs/roupa26.png" alt="roupa">
                <img class="img_avaliação" src="imgs/avaliação4.png" alt="estrelinhas">
                <img class="img_carrinho_compras" src="imgs/carrinho-de-compras.png" alt="estrelinhas">
                <p>Saia Redisiana Look</p>
                <p class="preco">499,00R$</p>
            </div>
            <div class="card">
                <img class="img_roupas_grupo1 img_roupa" src="imgs/roupa27.png" alt="roupa">
                <img class="img_avaliação" src="imgs/avaliação6.png" alt="estrelinhas">
                <img class="img_carrinho_compras" src="imgs/carrinho-de-compras.png" alt="estrelinhas">
                <p>Look Fashion Style</p>
                <p class="preco">339,00R$</p>
            </div>
            <div class="card">
                <img class="img_roupas_gruponone img_roupa" src="imgs/roupa28.png" alt="roupa">
                <img class="img_avaliação" src="imgs/avaliação4.png" alt="estrelinhas">
                <img class="img_carrinho_compras" src="imgs/carrinho-de-compras.png" alt="estrelinhas">
                <p>Jaqueta Sem Manga Feminina</p>
                <p class="preco">200,00R$</p>
            </div>
            <div class="card">
                <img class="img_roupas_grupo img_roupa" src="imgs/roupa29.png" alt="roupa">
                <img class="img_avaliação" src="imgs/avaliação5.png" alt="estrelinhas">
                <img class="img_carrinho_compras" src="imgs/carrinho-de-compras.png" alt="estrelinhas">
                <p>Saia Clara Com Botões</p>
                <p class="preco">99,00R$</p>
            </div>
            <div class="card">
                <img class="img_roupas_grupo img_roupa" src="imgs/roupa30.png" alt="roupa">
                <img class="img_avaliação" src="imgs/avaliação4.png" alt="estrelinhas">
                <img class="img_carrinho_compras" src="imgs/carrinho-de-compras.png" alt="estrelinhas">
                <p>Shorts Curto Médi</p>
                <p class="preco">388,00R$</p>
            </div>
            <div class="card">
                <img class="img_roupas_grupo3 img_roupa" src="imgs/roupa40.png" alt="roupa">
                <img class="img_avaliação" src="imgs/avaliação6.png" alt="estrelinhas">
                <img class="img_carrinho_compras" src="imgs/carrinho-de-compras.png" alt="estrelinhas">
                <p>Chapéu Ace</p>
                <p class="preco">3199,00R$</p>
            </div>
            <div class="card">
                <img class="img_roupas_grupo3 img_roupa" src="imgs/roupa41.png" alt="roupa">
                <img class="img_avaliação" src="imgs/avaliação6.png" alt="estrelinhas">
                <img class="img_carrinho_compras" src="imgs/carrinho-de-compras.png" alt="estrelinhas">
                <p>Chapéu Lufy Mugiwara</p>
                <p class="preco">7249,00R$</p>
            </div>
            <div class="card">
                <img class="img_roupas_grupo3 img_roupa" src="imgs/roupa39.png" alt="roupa">
                <img class="img_avaliação" src="imgs/avaliação6.png" alt="estrelinhas">
                <img class="img_carrinho_compras" src="imgs/carrinho-de-compras.png" alt="estrelinhas">
                <p>Chapéu Sabo</p>
                <p class="preco">3009,00R$</p>
            </div>
            <div class="card">
                <img class="img_roupas_grupo img_roupa" src="imgs/roupa32.png" alt="roupa">
                <img class="img_avaliação" src="imgs/avaliação5.png" alt="estrelinhas">
                <img class="img_carrinho_compras" src="imgs/carrinho-de-compras.png" alt="estrelinhas">
                <p>Saia Feminina Roveyr</p>
                <p class="preco">324,00R$</p>
            </div>
            <div class="card">
                <img class="img_roupas_gruponone img_roupa" src="imgs/roupa33.png" alt="roupa">
                <img class="img_avaliação" src="imgs/avaliação6.png" alt="estrelinhas">
                <img class="img_carrinho_compras" src="imgs/carrinho-de-compras.png" alt="estrelinhas">
                <p>Look Feminino Moda Outono</p>
                <p class="preco">524,00R$</p>
            </div>
            <div class="card">
                <img class="img_roupas_gruponone img_roupa" src="imgs/roupa34.png" alt="roupa">
                <img class="img_avaliação" src="imgs/avaliação6.png" alt="estrelinhas">
                <img class="img_carrinho_compras" src="imgs/carrinho-de-compras.png" alt="estrelinhas">
                <p>Vestido Jeans Ralover</p>
                <p class="preco">98,00R$</p>
            </div>
            <div class="card">
                <img class="img_roupas_grupo3 img_roupa" src="imgs/roupa35.png" alt="roupa">
                <img class="img_avaliação" src="imgs/avaliação6.png" alt="estrelinhas">
                <img class="img_carrinho_compras" src="imgs/carrinho-de-compras.png" alt="estrelinhas">
                <p>Chapéu Tagor Bege</p>
                <p class="preco">846,00R$</p>
            </div>
            <div class="card">
                <img class="img_roupas_grupo3 img_roupa" src="imgs/roupa36.png" alt="roupa">
                <img class="img_avaliação" src="imgs/avaliação6.png" alt="estrelinhas">
                <img class="img_carrinho_compras" src="imgs/carrinho-de-compras.png" alt="estrelinhas">
                <p>Chapéu Tagor Céu</p>
                <p class="preco">850,00R$</p>
            </div>
            <div class="card">
                <img class="img_roupas_grupo3 img_roupa" src="imgs/roupa37.png" alt="roupa">
                <img class="img_avaliação" src="imgs/avaliação5.png" alt="estrelinhas">
                <img class="img_carrinho_compras" src="imgs/carrinho-de-compras.png" alt="estrelinhas">
                <p>Chapéu Tagor Pink</p>
                <p class="preco">839,00R$</p>
            </div>
            <div class="card">
                <img class="img_roupas_grupo3 img_roupa" src="imgs/roupa38.png" alt="roupa">
                <img class="img_avaliação" src="imgs/avaliação6.png" alt="estrelinhas">
                <img class="img_carrinho_compras" src="imgs/carrinho-de-compras.png" alt="estrelinhas">
                <p>Chapéu Tagor Vaquinha-Malhada</p>
                <p class="preco">846,00R$</p>
            </div>
        </section>
    </main>
    <footer>
        <div>
            <div class="div_1">
                <img id="logo_footer" src="imgs/logo.png" alt="">
                <p>&copy;Todos os direitos Reservados Fashion Style</p>
            </div>
            <div class="div_2">
                <img class="icones_footer" src="imgs/facebook.png" alt="">
                <p>@Fashion Style estilo</p>
            </div>
            <div class="div_2">
                <img class="icones_footer" src="imgs/instagram.png" alt="">
                <p>@Fashion Style estilo_gart2080</p>
            </div>
            <div class="div_2">
                <img class="icones_footer" src="imgs/endereco.png" alt="">
                <p>Endereço: Maldivas/ Buenos Aires/ Vinkacom</p>
            </div>
        </div>
    </footer>
</body>
</html>