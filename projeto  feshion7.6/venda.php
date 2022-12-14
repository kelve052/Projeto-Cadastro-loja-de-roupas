
<?php include("./mysqlphp/conexao_direta.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Venda</title>
    <link rel="shortcut icon" href="imgs/icone_terno.png" type="image/x-icon">
    <link rel="stylesheet" href="Css/estilo_venda.css">
    <link rel="stylesheet" href="Css/bordas.css">
    <link rel="stylesheet" href="Css/p_valideichon.css">
    <link rel="stylesheet" href="Css/header.css">
</head>
<body>
    <header>
        <div class="div_header_h1_img">
            <img id="logo" src="imgs/logo.png" alt="logo">
            <h1>Cadastrar Venda</h1>
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
                        <label>ID da Venda:</label>
                        <input placeholder="9" class="not_disabled" name="ID da Venda" onclick="crrr('id')" id="id" type="number">
                    </div>
                    <div class="div_inputs_labekl">
                        <label>Valor:</label>
                        <input class="not_disabled" name="Valor" onclick="crrr('valor')" id="valor" type="number" placeholder="R$">
                    </div>
                    <div class="div_inputs_labekl">
                        <label>Produto:</label>
                        <div class="div_input_e_icone_tabela">
                            <input placeholder="Vestido Feminino Óreo" name="Produto" onclick="crrr('produto')" id="produto" type="text">
                            <img onclick="icone_tabela(1)" class="icone_tabela" src="imgs/icone_tabela.png" alt="">
                            <div class="divi_tabela_input">
                                <table class="table_input">
                                    <tr>
                                        <td class="td_header_id_input">ID</td>
                                        <td class="td_header_nome_inut">NOME</td>
                                    </tr>
                                    <?php
                                    $listar = $conn->query('SELECT id_produto, nome_produto FROM produto;');
                                    $registro = $listar->fetchAll(PDO::FETCH_ASSOC);
                                    foreach($registro as $valor){
                                        ?>
                                            <tr class="tr_input">
                                                <td class="td_id_input <?php echo $valor['id_produto']?>" onclick="click_produto_input('<?php echo $valor['nome_produto']?>')"><?php echo $valor['id_produto']?></td>
                                                <td class="td_none_input <?php echo $valor['id_produto']?>" onclick="click_produto_input('<?php echo $valor['nome_produto']?>')"><?php echo $valor['nome_produto']?></td>
                                            </tr>
                                        <?php
                                    }
                                    ?>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="div_inputs_labekl">
                        <label>Data:</label>
                        <input class="not_disabled" name="Data" onclick="crrr('data')" id="data" type="date">
                    </div>
                    <div class="div_inputs_labekl">
                        <label>ID Entrega:</label>
                        <div class="div_input_e_icone_tabela">
                            <input placeholder="9" name="ID Entrega" onclick="crrr('id_entrega')" id="id_entrega" type="number">
                            <img onclick="icone_tabela(2)" class="icone_tabela" src="imgs/icone_tabela.png" alt="">
                            <div class="divi_tabela_input">
                                <table class="table_input">
                                    <tr>
                                        <td class="td_header_id_input">ID</td>
                                        <td class="td_header_nome_inut">Veiculo</td>
                                    </tr>
                                    <?php
                                    $listar = $conn->query('SELECT id_entrega, veiculo FROM entrega;');
                                    $registro = $listar->fetchAll(PDO::FETCH_ASSOC);
                                    foreach($registro as $valor){
                                        ?>
                                            <tr class="tr_input">
                                            <td class="td_id_input <?php echo $valor['id_entrega']?>" onclick="click_entrega_input(<?php echo $valor['id_entrega']?>)"><?php echo $valor['id_entrega']?></td>
                                                <td class="td_none_input <?php echo $valor['id_entrega']?>" onclick="click_entrega_input(<?php echo $valor['id_entrega']?>)"><?php echo $valor['veiculo']?></td>
                                            </tr>
                                        <?php
                                    }
                                    ?>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="div_inputs_labekl">
                        <label>ID Cliente:</label>
                        <div class="div_input_e_icone_tabela">
                            <input placeholder="9" name="ID Cliente" onclick="crrr('id_cliente')" id="id_cliente" type="number">
                            <img onclick="icone_tabela(3)" class="icone_tabela" src="imgs/icone_tabela.png" alt="">
                            <div class="divi_tabela_input">
                                <table class="table_input">
                                    <tr>
                                        <td class="td_header_id_input">ID</td>
                                        <td class="td_header_nome_inut">NOME</td>
                                    </tr>
                                    <?php
                                    $listar = $conn->query('SELECT nome, id_cliente FROM cliente;');
                                    $registro = $listar->fetchAll(PDO::FETCH_ASSOC);
                                    foreach($registro as $valor){
                                        ?>
                                            <tr class="tr_input">
                                                <td class="td_id_input <?php echo $valor['id_cliente']?>" onclick="click_cliente_input(<?php echo $valor['id_cliente']?>)"><?php echo $valor['id_cliente']?></td>
                                                <td class="td_none_input <?php echo $valor['id_cliente']?>" onclick="click_cliente_input(<?php echo $valor['id_cliente']?>)"><?php echo $valor['nome']?></td>
                                            </tr>
                                        <?php
                                    }
                                    ?>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="div_inputs_labekl">
                        <label>ID Funcionário:</label>
                        <div class="div_input_e_icone_tabela">
                            <input placeholder="9" name="ID Funcionário" onclick="crrr('id_funcionario')" id="id_funcionario" type="number">
                            <img onclick="icone_tabela(4)" class="icone_tabela" src="imgs/icone_tabela.png" alt="">
                            <div class="divi_tabela_input">
                                <table class="table_input">
                                    <tr>
                                        <td class="td_header_id_input">ID</td>
                                        <td class="td_header_nome_inut">NOME</td>
                                    </tr>
                                    <?php
                                    $listar = $conn->query('SELECT id_funcionario, nome FROM funcionario;');
                                    $registro = $listar->fetchAll(PDO::FETCH_ASSOC);
                                    foreach($registro as $valor){
                                        ?>
                                            <tr class="tr_input">
                                                <td class="td_id_input <?php echo $valor['id_funcionario']?>" onclick="click_funcionario_input(<?php echo $valor['id_funcionario']?>)"><?php echo $valor['id_funcionario']?></td>
                                                <td class="td_none_input <?php echo $valor['id_funcionario']?>" onclick="click_funcionario_input(<?php echo $valor['id_funcionario']?>)"><?php echo $valor['nome']?></td>
                                            </tr>
                                        <?php
                                    }
                                    ?>
                                </table>
                            </div>
                        </div>
                    </div>
                    <img id='img_home_notbook' src="imgs/personagem_homem.png" alt="">
                    <p id="p_valideichon"></p>
                </section>
                <section class="section_listar">
                    <div class="div_botoes_tabela">
                        <input class="botão_not_header bt_alterar" type="submit" value="Salvar" name="alterar_venda">
                        <input class="botão_not_header bt_alterar_form" type="submit" onclick="func_alter()" form="" value="Alterar" name="alterar_cor">
                        <input class="botão_not_header bt_excluir" type="submit" value="Excluir" name="deletar_venda">
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
                                <td class="td_header_nome">ID CLIENTE</td>
                                <td class="td_header_nome">Valor</td>
                            </tr>
                            <?php
                            $listar = $conn->query('SELECT id_venda, cliente_id_cliente, valor FROM venda;');
                            $registro = $listar->fetchAll(PDO::FETCH_ASSOC);
                            foreach($registro as $valor){
                                ?>
                                    <tr class="tr">
                                        <td class="td_id <?php echo $valor['id_venda']?>d" onclick="click_t(<?php echo $valor['id_venda']?>)"><?php echo $valor['id_venda']?></td>
                                        <td class="td_none <?php echo $valor['id_venda']?>d" onclick="click_t(<?php echo $valor['id_venda']?>)"><?php echo $valor['cliente_id_cliente']?></td>
                                        <td class="td_valor <?php echo $valor['id_venda']?>d" onclick="click_t(<?php echo $valor['id_venda']?>)"><?php echo $valor['valor']?></td>
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
                <input onclick="valideichon()" class="botão_not_header" id="salvar" type="submit" name="form_venda" value="Salvar">
                <button onclick="valideichon()" form="" class="botão_not_header" id="cadastrar">Cadastrar</button>
                <button  class="botão_not_header" form="" onclick="listar()" id="listar">Listar</button>
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
        const valor = document.getElementById('valor')
        const data = document.getElementById('data')
        const id_entrega = document.getElementById('id_entrega')
        const id_cliente = document.getElementById('id_cliente')
        const id_funcionario = document.getElementById('id_funcionario')
        const produto = document.getElementById('produto')


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
                }
            }
            t(id_funcionario)
            t(id_cliente)
            t(id_entrega)
            t(data)
            t(produto)
            t(valor)
            t(id)
            if(produto.value != "" && id_funcionario.value != "" && id_cliente.value != "" && id_entrega.value != "" && data.value != "" && valor.value != "" && id.value != ""){
                p_valideichon.innerText = ''
                restet_css()
                butao_cadastrar.style.display = 'none'
                botoa_sava.style.display = 'block'
                id.name = 'id'
                valor.name = 'valor'
                data.name = 'data'
                id_entrega.name = 'id_entrega'
                id_cliente.name = 'id_cliente'
                id_funcionario.name = 'id_funcionario'
                produto.name = 'produto'
            }
        }

        const section = document.getElementsByClassName('section_listar')[0]
        function listar() {
            section.style.display = 'block'
            setTimeout(() => {
                section.style.transform = 'scale(1)'
            }, 0500);
        }

        function restet_css () {
            id.style.border = 'var(--rosa-vermelho) solid 1px'
            valor.style.border = 'var(--rosa-vermelho) solid 1px'
            data.style.border = 'var(--rosa-vermelho) solid 1px'
            id_cliente.style.border = 'var(--rosa-vermelho) solid 1px'
            id_entrega.style.border = 'var(--rosa-vermelho) solid 1px'
            id_funcionario.style.border = 'var(--rosa-vermelho) solid 1px'
            produto.style.border = 'var(--rosa-vermelho) solid 1px'

            id.style.boxShadow = 'none'
            valor.style.boxShadow = 'none'
            data.style.boxShadow = 'none'
            id_cliente.style.boxShadow = 'none'
            id_entrega.style.boxShadow = 'none'
            id_funcionario.style.boxShadow = 'none'
            produto.style.boxShadow = 'none'
        }
        function crrr (valor) {
            restet_css()
            document.getElementById(valor).style.borderLeft = '15px groove var(--rosa-vermelho)'
            document.getElementById(valor).style.boxShadow = '0px 2px 1px var(--rosa-vermelho)'
            document.getElementById(valor).style.transition = '0.2s'
        }

        let selecionado = false
        function click_t(t){
            const f = document.getElementsByClassName(t+'d')
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
                t_sen_reset(valor)
                t_sen_reset(data)
                t_sen_reset(id_entrega)
                t_sen_reset(id_cliente)
                t_sen_reset(id_funcionario)
                t_sen_reset(produto)
                t_sen_reset(id)
                butao_cadastrar.disabled = 'true'
                id.name = 'id'
                valor.name = 'valor'
                data.name = 'data'
                id_entrega.name = 'id_entrega'
                id_cliente.name = 'id_cliente'
                id_funcionario.name = 'id_funcionario'
                produto.name = 'produto'
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
                else if(vart == 4){
                    document.getElementsByClassName('divi_tabela_input')[3].style.display = 'block'
                    setTimeout(() => {
                        document.getElementsByClassName('divi_tabela_input')[3].style.transform = 'scale(1)'
                    }, 0);
                }
            }
            function click_entrega_input(t){
                id_entrega.value = t
                    document.getElementsByClassName('divi_tabela_input')[1].style.transform = 'scale(0)'
                    setTimeout(() => {
                        document.getElementsByClassName('divi_tabela_input')[1].style.display = 'none'
                    }, 0300);
            }
            function click_produto_input(t){
                produto.value = t
                    document.getElementsByClassName('divi_tabela_input')[0].style.transform = 'scale(0)'
                    setTimeout(() => {
                        document.getElementsByClassName('divi_tabela_input')[0].style.display = 'none'
                        document.getElementById('img_home_notbook').style.display = 'block'
                    }, 0300);
            }
            function click_cliente_input(t){
                id_cliente.value = t
                    document.getElementsByClassName('divi_tabela_input')[2].style.transform = 'scale(0)'
                    setTimeout(() => {
                        document.getElementsByClassName('divi_tabela_input')[2].style.display = 'none'
                    }, 0300);
            }
            function click_funcionario_input(t){
                id_funcionario.value = t
                    document.getElementsByClassName('divi_tabela_input')[3].style.transform = 'scale(0)'
                    setTimeout(() => {
                        document.getElementsByClassName('divi_tabela_input')[3].style.display = 'none'
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