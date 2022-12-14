<?php include("./mysqlphp/conexao_direta.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipo Entrega</title>
    <link rel="shortcut icon" href="imgs/icone_terno.png" type="image/x-icon">
    <link rel="stylesheet" href="Css/estilo_tipo_entrega.css">
    <link rel="stylesheet" href="Css/bordas.css">
    <link rel="stylesheet" href="Css/p_valideichon.css">
    <link rel="stylesheet" href="Css/header.css">
</head>
<body>
    <header>
        <div class="div_header_h1_img">
            <img id="logo" src="imgs/logo.png" alt="logo">
            <h1>Cadastrar Entrega</h1>
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
                        <label>ID da Entrega:</label>
                        <input class="not_disabled" placeholder="0" name="ID da Entrega" onclick="crrr('id')" id="id" type="number">
                    </div>
                    <div class="div_inputs_labekl">
                        <label>Taxa da Entrega:</label>
                        <input class="not_disabled" name="Taxa da Entrega" onclick="crrr('salario')" id="salario" type="number" placeholder="1,00R$">
                    </div>
                    <div class="div_inputs_labekl">
                        <label>Veiculo:</label>
                        <select class="not_disabled" onclick="crrr('veiculo')" name="Veiculo" id="veiculo">
                            <option value="Carro">Carro</option>
                            <option value="Moto">Moto</option>
                        </select>
                    </div>
                    <div class="div_inputs_labekl">
                        <label>Descrição da entrega:</label>
                        <textarea class="not_disabled" onclick="crrr('sel')" name="Descrição da entrega" id="sel" cols="30" rows="10"></textarea>
                    </div>
                    <img id='img_home_notbook' src="imgs/personagem_homem.png" alt="">
                    <p id="p_valideichon"></p>
                </section>
                <section class="section_listar">
                    <div class="div_botoes_tabela">
                        <input class="botão_not_header bt_alterar" type="submit" value="Salvar" name="alterar_entrega">
                        <input class="botão_not_header bt_alterar_form" type="submit" onclick="func_alter()" form="" value="Alterar" name="alterar_cor">
                        <input class="botão_not_header bt_excluir" type="submit" value="Excluir" name="deletar_entrega">
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
                                <td class="td_header_nome">NOME</td>
                            </tr>
                            <?php
                            $listar = $conn->query('SELECT * FROM entrega;');
                            $registro = $listar->fetchAll(PDO::FETCH_ASSOC);
                            foreach($registro as $valor){
                                ?>
                                    <tr class="tr">
                                    <td class="td_id <?php echo $valor['id_entrega']?>" onclick="click_t(<?php echo $valor['id_entrega']?>)"><?php echo $valor['id_entrega']?></td>
                                        <td class="td_none <?php echo $valor['id_entrega']?>" onclick="click_t(<?php echo $valor['id_entrega']?>)"><?php echo $valor['veiculo']?></td>
                                        <td class="td_valor <?php echo $valor['id_entrega']?>" onclick="click_t(<?php echo $valor['id_entrega']?>)"><?php echo $valor['descrição']?>R$</td>
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
                <input onclick="valideichon()" class="botão_not_header" id="salvar" type="submit" name="form_tipo_entrega" value="Salvar">
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
        const salario = document.getElementById('salario')
        const veiculo = document.getElementById('veiculo')
        const textarea = document.getElementById('sel')


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
            t(textarea)
            t(veiculo)
            t(salario)
            t(id)
            if(id.value != "" && salario.value != "" && veiculo.value != "" && textarea.value != "" ){
                p_valideichon.innerText = ''
                restet_css()
                butao_cadastrar.style.display = 'none'
                botoa_sava.style.display = 'block'
                id.name = 'id'
                salario.name = 'salario'
                veiculo.name = 'veiculo'
                textarea.name = 'textarea'
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
            id.style.boxShadow = 'none'
            salario.style.boxShadow = 'none'
            veiculo.style.boxShadow = 'none'
            textarea.style.boxShadow = 'none'

            id.style.border = 'var(--rosa-vermelho) solid 1px'
            salario.style.border = 'var(--rosa-vermelho) solid 1px'
            veiculo.style.border = 'var(--rosa-vermelho) solid 1px'
            textarea.style.border = 'var(--rosa-vermelho) solid 1px'
        }
        function crrr (valor) {
            restet_css()
           document.getElementById(valor).style.borderLeft = 'var(--rosa-vermelho) groove 15px'
           document.getElementById(valor).style.boxShadow = '0px 2px 1px var(--rosa-vermelho)'
            document.getElementById(valor).style.transition = '0.2s'
        }

        let selecionado = false
        function click_t(t){
            const f = document.getElementsByClassName(t)
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
                t_sen_reset(salario)
                t_sen_reset(veiculo)
                t_sen_reset(textarea)
                t_sen_reset(id)
                butao_cadastrar.disabled = 'true'
                id.name = 'id'
                salario.name = 'salario'
                veiculo.name = 'veiculo'
                textarea.name = 'textarea'
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
            function desaparecer_listar() {
                section.style.transform = 'scale(0)'
                setTimeout(() => {
                    section.style.display = 'none'
                }, 0500);
            }
    </script>
</body>
</html>