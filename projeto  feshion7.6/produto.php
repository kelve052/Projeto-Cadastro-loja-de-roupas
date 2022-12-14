<?php include("./mysqlphp/conexao_direta.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produto</title>
    <link rel="shortcut icon" href="imgs/icone_terno.png" type="image/x-icon">
    <link rel="stylesheet" href="Css/estilo_produto.css">
    <link rel="stylesheet" href="Css/bordas.css">
    <link rel="stylesheet" href="Css/p_valideichon.css">
    <link rel="stylesheet" href="Css/header.css">
    
</head>
<body>
    <header>
        <div class="div_header_h1_img">
            <img id="logo" src="imgs/logo.png" alt="logo">
            <h1>Cadastrar Produto</h1>
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
        <form action="./mysqlphp/mydb.php" method="GET">
            <section class="section_inputs_listar">
                <section class="section_inputs">
                    <div id="borda_formulario2"></div>
                    <div id="borda_formulario3"></div>
                    <div id="borda_formulario4"></div>
                    <div id="borda_formulario1"></div>
                    <div class="div_inputs_labekl">
                    <div class="div_inputs_labekl">
                        <label>ID produto:</label>
                        <input placeholder="0" class="not_disabled" onclick="crrr('id')" id="id" type="number" name="ID produto">
                    </div>
                    <div class="div_inputs_labekl">
                        <label>ID Fornecedor:</label>
                        <div class="div_input_e_icone_tabela">
                            <input placeholder="0" onclick="crrr('id1')" id="id1" type="number" name="ID Fornecedor">
                            <img onclick="icone_tabela(1)" class="icone_tabela" src="imgs/icone_tabela.png" alt="">
                            <div class="divi_tabela_input">
                                <table class="table_input">
                                    <tr>
                                        <td class="td_header_id_input">ID</td>
                                        <td class="td_header_nome_inut">NOME</td>
                                    </tr>
                                    <?php
                                    $listar = $conn->query('SELECT id_fornecedor, nome FROM fornecedor;');
                                    $registro = $listar->fetchAll(PDO::FETCH_ASSOC);
                                    foreach($registro as $valor){
                                        ?>
                                            <tr class="tr_input">
                                                <td class="td_id_input <?php echo $valor['id_fornecedor']?>" onclick="click_fornecedor_input(<?php echo $valor['id_fornecedor']?>)"><?php echo $valor['id_fornecedor']?></td>
                                                <td class="td_none_input <?php echo $valor['id_fornecedor']?>" onclick="click_fornecedor_input(<?php echo $valor['id_fornecedor']?>)"><?php echo $valor['nome']?></td>
                                            </tr>
                                        <?php
                                    }
                                    ?>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="div_inputs_labekl">
                        <label>Valor:</label>
                        <input placeholder="2212,00 R$" class="not_disabled" onclick="crrr('valor')" id="valor" type="number" name="Valor">
                    </div>
                    <div class="div_inputs_labekl">
                        <label>Nome do Produto</label>
                        <input placeholder="Salcul" class="not_disabled" onclick="crrr('name')" id="name" name="Nome do Produto" type="text">
                    </div>
                    <div class="div_inputs_labekl">
                        <label>Quantidade:</label>
                        <input placeholder="14" class="not_disabled" onclick="crrr('quantidade')" id="quantidade" type="number" name="Quantidade">
                    </div>
                    <div class="div_inputs_labekl">
                        <label>ID Cor:</label>
                        <div class="div_input_e_icone_tabela">
                            <input name="ID Cor"  onclick="crrr('id_cor')" id="id_cor" type="number">
                            <img onclick="icone_tabela(2)" class="icone_tabela" src="imgs/icone_tabela.png" alt="">
                            <div class="divi_tabela_input">
                                <table class="table_input">
                                    <tr>
                                        <td class="td_header_id_input">ID</td>
                                        <td class="td_header_nome_inut">NOME</td>
                                    </tr>
                                    <?php
                                    $listar = $conn->query('SELECT id_cor, nome FROM cor;');
                                    $registro = $listar->fetchAll(PDO::FETCH_ASSOC);
                                    foreach($registro as $valor){
                                    ?>
                                        <tr class="tr_input">
                                            <td class="td_id_input <?php echo $valor['id_cor']?>" onclick="click_cor_input(<?php echo $valor['id_cor']?>)"><?php echo $valor['id_cor']?></td>
                                            <td class="td_none_input <?php echo $valor['id_cor']?>" onclick="click_cor_input(<?php echo $valor['id_cor']?>)"><?php echo $valor['nome']?></td>
                                        </tr>
                                    <?php
                                    }
                                    ?>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="div_inputs_labekl">
                        <label>Tamanho:</label>
                        <select onclick="crrr('id_tamanho')" id="id_tamanho" class="not_disabled" name="tamanho">
                            <option value="PP">PP</option>
                            <option value="P">P</option>
                            <option value="M">M</option>
                            <option value="G">G</option>
                            <option value="GG">GG</option>
                        </select>
                    </div>
                    <div class="div_inputs_labekl">
                        <label>ID Grupo:</label>
                        <div class="div_input_e_icone_tabela">
                            <input onclick="crrr('id_grupo')" id="id_grupo" type="number" name="ID Grupo">
                            <img onclick="icone_tabela(3)" class="icone_tabela" src="imgs/icone_tabela.png" alt="">
                            <div class="divi_tabela_input">
                                <table class="table_input">
                                    <tr>
                                        <td class="td_header_id_input">ID</td>
                                        <td class="td_header_nome_inut">NOME</td>
                                    </tr>
                                    <?php
                                    $listar = $conn->query('SELECT id, nome FROM grupo;');
                                    $registro = $listar->fetchAll(PDO::FETCH_ASSOC);
                                    foreach($registro as $valor){
                                        ?>
                                            <tr class="tr_input">
                                                <td class="td_id_input <?php echo $valor['id']?>" onclick="click_grupo_input(<?php echo $valor['id']?>)"><?php echo $valor['id']?></td>
                                                <td class="td_none_input <?php echo $valor['id']?>" onclick="click_grupo_input(<?php echo $valor['id']?>)"><?php echo $valor['nome']?></td>
                                            </tr>
                                        <?php
                                    }
                                    ?>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="div_inputs_labekl">
                        <label>Gênero:</label>
                        <select class="not_disabled" onclick="crrr('genero')" name="Gênero" id="genero">
                            <option value="F">F</option>
                            <option value="M">M</option>
                        </select>
                    </div>
                    <div class="div_inputs_labekl">
                        <label>Avaliação:</label>
                        <select class="not_disabled" onclick="crrr('avaliacao')" name="avaliacao" id="avaliacao">
                            <option value="1">1-Estrela</option>
                            <option value="2">2-Estrelas</option>
                            <option value="3">3-Estrelas</option>
                            <option value="4">4-Estrelas</option>
                            <option value="5">5-Estrelas</option>
                            <option value="6">6-Estrelas</option>
                        </select>
                    </div>
                    <div class="div_inputs_labekl">
                        <label>Imagêm:</label>
                        <input placeholder="URL or SRC" class="not_disabled" onclick="crrr('imagem')" id="imagem" name="imagem" type="text">
                    </div>
                    </img src="imgs/personagem_homem.png" alt="">
                    <img id='img_home_notbook' src="imgs/personagem_homem.png" alt="">
                    <p id="p_valideichon"></p>
                </section>
                <section class="section_listar">
                    <div class="div_botoes_tabela">
                        <input class="botão_not_header bt_alterar" type="submit" value="Salvar" name="alterar_produto">
                        <input class="botão_not_header bt_alterar_form" type="submit" onclick="func_alter()" form="" value="Alterar" name="alterar_cor">
                        <input class="botão_not_header bt_excluir" type="submit" value="Excluir" name="deletar_produto">
                        <input class="botão_not_header bt_excluir_form" onclick="menssagem_1_desaparecer(2)" form=""  type="submit" value="Excluir" name="deletar_cor">
                    </div>
                    <div class="tabela">
                        <div id="borda_formulario2"></div>
                        <div id="borda_formulario3"></div>
                        <div id="borda_formulario4"></div>
                        <div id="borda_formulario1"></div>
                        <table>
                            <tr>
                                <td class="td_header_id">ID</td>
                                <td class="td_header_nome">NOME</td>
                                <td class="td_header_nome">VALOR</td>
                            </tr>
                            <?php
                            $listar = $conn->query('SELECT id_produto, valor, nome_produto FROM produto;');
                            $registro = $listar->fetchAll(PDO::FETCH_ASSOC);
                            foreach($registro as $valor){
                                ?>
                                    <tr class="tr">
                                        <td class="td_id <?php echo $valor['id_produto']?>d" onclick="click_t(<?php echo $valor['id_produto']?>)"><?php echo $valor['id_produto']?></td>
                                        <td class="td_none <?php echo $valor['id_produto']?>d" onclick="click_t(<?php echo $valor['id_produto']?>)"><?php echo $valor['nome_produto']?></td>
                                        <td class="td_valor <?php echo $valor['id_produto']?>d" onclick="click_t(<?php echo $valor['id_produto']?>)"><?php echo $valor['valor']?>R$</td>
                                    </tr>
                                <?php
                            }
                            ?>
                        </table>
                    </div>
                    <img onclick="desaparecer_listar()" class="x_btn" src="./imgs/botao-x.png" alt="">
                </section>
            </section>
            <section class="botoes">
                <input onclick="valideichon()" class="botão_not_header" id="salvar" type="submit" name="form_produto" value="Salvar">
                <button onclick="valideichon()" form="" class="botão_not_header" id="cadastrar">Cadastrar</button>
                <button  class="botão_not_header" form="55" onclick="listar()" id="listar">Listar</button>
            </section>
        </form>
        <p id="menssagem_1"><img onclick="menssagem_1_desaparecer(1)" src="./imgs/botao-x.png" alt=""> Selecione primeiro antes de "Alterar" ou "Escluir"</p>
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
    <script>
        const id = document.getElementById('id')
        const name = document.getElementById('name')
        const id1 = document.getElementById('id1')
        const id_quantidade = document.getElementById('quantidade')
        const id_grupo = document.getElementById('id_grupo')
        const id_cor = document.getElementById('id_cor')
        const id_tamanho = document.getElementById('id_tamanho')
        const valor = document.getElementById('valor')
        const genero = document.getElementById('genero')
        const imagem = document.getElementById('imagem')
        const avaliacao = document.getElementById('avaliacao')


        const butao_cadastrar = document.getElementById('cadastrar')
        const botoa_sava = document.getElementById('salvar')
        const p_valideichon = document.getElementById('p_valideichon')

        function valideichon() {
            function t (vari){
                if(vari.value == ''){
                    p_valideichon.innerHTML = `<p id="p_valideichon">O campo <span>"${vari.name}"</span> não pode ser vazio!</p>`
                    restet_css()
                    vari.style.border = '2.5px solid var(--red)'
                    vari.focus()
                    vari.style.transition = '0.5s'
                }
            }
            t(imagem)
            t(id_grupo)
            t(id_tamanho)
            t(id_cor)
            t(id_quantidade)
            t(name)
            t(valor)
            t(id1)
            t(id)
            if(imagem.value != '' && id_grupo.value != '' && id_tamanho.value != '' && id_cor.value != '' && id_quantidade.value != '' && name.value != '' && valor.value != '' && id1.value != '' && id.value != ''){
                p_valideichon.innerText = ''
                restet_css()
                butao_cadastrar.style.display = 'none'
                botoa_sava.style.display = 'block'
                id.name = 'id'
                name.name = 'name'
                id1.name = 'id1'
                id_quantidade.name = 'id_quantidade'
                id_grupo.name = 'id_grupo'
                id_cor.name = 'id_cor'
                id_tamanho.name = 'id_tamanho'
                valor.name = 'valor'
                genero.name = 'genero'
            }
        }



        const section = document.getElementsByClassName('section_listar')[0]
        function listar() {
            section.style.display = 'block'
            setTimeout(() => {
                section.style.transform = 'scale(1)'
            }, 0);
        }

        function restet_css () {
            id.style.border = 'var(--rosa-vermelho) solid 1px'
            name.style.border = 'var(--rosa-vermelho) solid 1px'
            id1.style.border = 'var(--rosa-vermelho) solid 1px'
            valor.style.border = 'var(--rosa-vermelho) solid 1px'
            id_cor.style.border = 'var(--rosa-vermelho) solid 1px'
            id_tamanho.style.border = 'var(--rosa-vermelho) solid 1px'
            id_grupo.style.border = 'var(--rosa-vermelho) solid 1px'
            quantidade.style.border = 'var(--rosa-vermelho) solid 1px'
            genero.style.border = 'var(--rosa-vermelho) solid 1px'

            id.style.boxShadow = 'none'
            name.style.boxShadow = 'none'
            id1.style.boxShadow = 'none'
            valor.style.boxShadow = 'none'
            id_cor.style.boxShadow = 'none'
            id_tamanho.style.boxShadow = 'none'
            id_grupo.style.boxShadow = 'none'
            quantidade.style.boxShadow = 'none'
            genero.style.boxShadow = 'none'
            avaliacao.style.boxShadow = 'none'
            imagem.style.boxShadow = 'none'
        }
        function crrr (valor) {
            restet_css()
            document.getElementById(valor).style.borderLeft = '15px groove var(--rosa-vermelho)'
            document.getElementById(valor).style.boxShadow = '0px 2px 1px var(--rosa-vermelho)'
            document.getElementById(valor).style.transition = '0.2s'
        }

        let selecionado = false
        function click_t(t){
            const f = document.getElementsByClassName(t+"d")
            const gg = document.querySelectorAll('.td_none')
            const gi = document.querySelectorAll('.td_id')
            const gv = document.querySelectorAll('.td_valor')
            for (c=0;c<(gi.length);c++){
                gg[c].style.backgroundColor = 'rgb(156, 156, 156)'
                gi[c].style.backgroundColor = 'rgb(156, 156, 156)'
                gv[c].style.backgroundColor = 'rgb(156, 156, 156)'
            }
            f[0].style.backgroundColor = 'rgb(163, 255, 126)'
            f[0].style.transition = '0.1s'
            f[1].style.backgroundColor = 'rgb(163, 255, 126)'
            f[1].style.transition = '0.1s'
            f[2].style.backgroundColor = 'rgb(163, 255, 126)'
            f[2].style.transition = '0.1s'
            id.name = 'id'
            id.value = t
            selecionado = true
            document.getElementsByClassName('bt_excluir')[0].style.display = 'block'
            document.getElementsByClassName('bt_excluir_form')[0].style.display = 'none'
        }
        function t_sen_reset (vari){
                    p_valideichon.innerHTML = `<p id="p_valideichonn" class="p_editar">Comece a editar os campos</p>`
                    vari.style.border = '2.5px solid yellow'
                    vari.focus()
                    vari.style.transition = '0.5s'
            }
        const bt_alterar = document.getElementsByClassName('bt_alterar')[0]
        const bt_alterar_form = document.getElementsByClassName('bt_alterar_form')[0]
        function func_alter () {
            if (selecionado == true){
                bt_alterar_form.style.display = 'none'
                bt_alterar.style.display = 'block'
                butao_cadastrar.style.backgroundColor = '#ccc'
                butao_cadastrar.style.cursor = 'not-allowed'
                t_sen_reset(imagem)
                t_sen_reset(avaliacao)
                t_sen_reset(name)
                t_sen_reset(id1)
                t_sen_reset(id_quantidade)
                t_sen_reset(id_grupo)
                t_sen_reset(id_cor)
                t_sen_reset(id_tamanho)
                t_sen_reset(valor)
                t_sen_reset(genero)
                t_sen_reset(id)
                butao_cadastrar.disabled = 'true'
                id.name = 'id'
                name.name = 'name'
                id1.name = 'id1'
                id_quantidade.name = 'id_quantidade'
                id_grupo.name = 'id_grupo'
                id_cor.name = 'id_cor'
                id_tamanho.name = 'id_tamanho'
                valor.name = 'valor'
                genero.name = 'genero'
            }else{
                    document.getElementById('menssagem_1').style.transform = 'scale(1)'
            }
        }
        function menssagem_1_desaparecer(v) {
                if (v == 1){
                    document.getElementById('menssagem_1').style.transform = 'scale(0)'
                }else{
                    document.getElementById('menssagem_1').style.transform = 'scale(1)'
                }
            }
            function icone_tabela(vart) {
                if (vart == 1){
                    document.getElementById('img_home_notbook').style.display = 'none'
                    document.getElementsByClassName('divi_tabela_input')[0].style.display = 'block'
                    setTimeout(() => {
                        document.getElementsByClassName('divi_tabela_input')[0].style.transform = 'scale(1)'
                    }, 0);
                }else if (vart == 2){
                    document.getElementsByClassName('divi_tabela_input')[1].style.display = 'block'
                    setTimeout(() => {
                        document.getElementsByClassName('divi_tabela_input')[1].style.transform = 'scale(1)'
                    }, 0);
                }else if(vart == 3){
                    document.getElementsByClassName('divi_tabela_input')[2].style.display = 'block'
                    setTimeout(() => {
                        document.getElementsByClassName('divi_tabela_input')[2].style.transform = 'scale(1)'
                    }, 0);
                }
            }
            function click_fornecedor_input(t){
                id1.value = t
                    document.getElementsByClassName('divi_tabela_input')[0].style.transform = 'scale(0)'
                    setTimeout(() => {
                        document.getElementsByClassName('divi_tabela_input')[0].style.display = 'none'
                        document.getElementById('img_home_notbook').style.display = 'block'
                    }, 0300);
            }
            function click_cor_input(t){
                id_cor.value = t
                    document.getElementsByClassName('divi_tabela_input')[1].style.transform = 'scale(0)'
                    setTimeout(() => {
                        document.getElementsByClassName('divi_tabela_input')[1].style.display = 'none'
                    }, 0300);
            }
            function click_grupo_input(t){
                id_grupo.value = t
                    document.getElementsByClassName('divi_tabela_input')[2].style.transform = 'scale(0)'
                    setTimeout(() => {
                        document.getElementsByClassName('divi_tabela_input')[2].style.display = 'none'
                    }, 0300);
            }
            function desaparecer_listar() {
                section.style.transform = 'scale(0)'
                setTimeout(() => {
                    section.style.display = 'none'
                }, 0500);
            }
    </script>
</body>
</html>