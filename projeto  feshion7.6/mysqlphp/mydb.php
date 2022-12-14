<!DOCTYPE html>
<html lang="PTBR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../Css/css_mydb.css">
</head>
<body>
    <?php

    $servername = 'localhost';
    $database = 'mydb';
    $username = 'root';
    $password = '';

    $conexao = mysqli_connect($servername, $username, $password, $database);
    









    if (isset($_GET['form_cor'])){
        try{
            $nome_da_cor = "${_GET["Nome_Cor"]}";
            $id_cor = "${_GET["Id_Cor"]}";

            $sql = "INSERT INTO cor () VALUES ($id_cor,'$nome_da_cor');";

            $inserir = mysqli_query($conexao, $sql);
            mysqli_close($conexao);
            salvar('da cor');
        }catch(Exception $e){
            salvar_erro('da Cor');
            exit;
        }
    }else if (isset($_GET['form_cliente'])){
        try{
            $data = "${_GET["data"]}";
            $address = "${_GET["address"]}";
            $sexo = "${_GET["sexo"]}";
            $cpf = "${_GET["cpf"]}";
            $name = "${_GET["name"]}";
            $id = "${_GET["id"]}";

            $sql = "INSERT INTO cliente () VALUES ($id, '$name', '$address', '$sexo', $cpf, '$data');";

            $inserir = mysqli_query($conexao, $sql);
            mysqli_close($conexao);
            salvar('do cliente');
        }catch(Exception $e){
            salvar_erro('do cliente');
            exit;
        }

    }else if (isset($_GET['form_fornecedor'])){
        try{
        $id = "${_GET["id"]}";
        $name = "${_GET["name"]}";
        $cnpj = "${_GET["cnpj"]}";
        $address = "${_GET["address"]}";

        $sql = "INSERT into fornecedor () values ($id, '$name', '$address', $cnpj);";

        $inserir = mysqli_query($conexao, $sql);
        mysqli_close($conexao);
        salvar('do Fornecedor');
        }catch(Exception $e){
            salvar_erro('do Fornecedor');
            exit;
        }

    }else if (isset($_GET['form_funcionario'])){
        try{
        $id = "${_GET["id"]}";
        $name = "${_GET["name"]}";
        $cpf = "${_GET["cpf"]}";
        $sexo = "${_GET["sexo"]}";
        $login = "${_GET["login"]}";
        $senha = "${_GET["senha"]}";
        $salario = "${_GET["salario"]}";

        $sql = "INSERT into funcionario () value ($id, '$name', $cpf, '$sexo', '$login', $senha, $salario);";

        $inserir = mysqli_query($conexao, $sql);
        mysqli_close($conexao);
        salvar('do Funcionario');
        }catch(Exception $e){
            salvar_erro('do Funcionario');
            exit;
        }

    }else if (isset($_GET['form_grupo'])){
        try{
            $id = "${_GET["id"]}";        
            $name = "${_GET["name"]}";   
            
            $sql = "INSERT into grupo () value ($id, '$name');";

            $inserir = mysqli_query($conexao, $sql);
            mysqli_close($conexao);
            salvar('do Grupo');
        }catch(Exception $e){
            salvar_erro('do Grupo');
            exit;
        }
    }else if (isset($_GET['form_produto'])){
        try{
            $id = "${_GET["id"]}";
            $name = "${_GET["name"]}";
            $id1 = "${_GET["id1"]}";
            $quantidade = "${_GET["id_quantidade"]}";
            $id_grupo = "${_GET["id_grupo"]}";
            $id_cor = "${_GET["id_cor"]}";
            $id_tamanho = "${_GET["id_tamanho"]}";
            $valor = "${_GET["valor"]}";
            $genero = "${_GET["genero"]}";
            $img = "${_GET["imagem"]}";
            $avaliacao = "${_GET["avaliacao"]}";
            $sql = "INSERT INTO produto () VALUES ($id, $valor, '$name', $id_cor, '$id_tamanho', $id_grupo, $id1, $quantidade, '$genero', '$img', '$avaliacao');";

            $inserir = mysqli_query($conexao, $sql);
            mysqli_close($conexao);
            salvar('do Produto');
        }catch(Exception $e){
            salvar_erro('do Produto');
            echo $e;
            exit;
        }

    }else if (isset($_GET['form_tipo_entrega'])){

        try{
            $id = "${_GET["id"]}";
            $taxa = "${_GET["salario"]}";
            $veiculo = "${_GET["veiculo"]}";
            $textarea = "${_GET["textarea"]}";

            $sql = "INSERT INTO entrega () values ($id, '$textarea', $taxa, '$veiculo');";

            $inserir = mysqli_query($conexao, $sql);
            mysqli_close($conexao);
            salvar('do Tipo de Entrega');
        }catch(Exception $e){
            salvar_erro('do Tipo de Entrega');
            exit;
        }

    }else if (isset($_GET['form_venda'])){

        try{
            $id = "${_GET["id"]}";
            $valor = "${_GET["valor"]}";
            $data = "${_GET["data"]}";
            $id_entrega = "${_GET["id_entrega"]}";
            $id_cliente = "${_GET["id_cliente"]}";
            $id_funcionario = "${_GET["id_funcionario"]}";
            $produto = "${_GET["produto"]}";

            $sql = "INSERT INTO `mydb`.`venda` () VALUES ($id, $valor, $data, $id_entrega, $id_cliente, $id_funcionario);";

            $inserir = mysqli_query($conexao, $sql);
            mysqli_close($conexao);
            salvar('da Venda');
        }catch(Exception $e){
            salvar_erro('da Venda');
            exit;
        }
    }else{
    }
    // --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
    
    
    if (isset($_GET['deletar_cor'])){
        try{
            $id_cor = "${_GET["Id_Cor"]}";

            $sql = "DELETE FROM `mydb`.`cor` WHERE (`id_cor` = $id_cor);";

            $inserir = mysqli_query($conexao, $sql);
            mysqli_close($conexao);
            deletar('da cor');
        }catch(Exception $e){
            deletar_erro('da cor');
            exit;
        }

    }else if (isset($_GET['deletar_cliente'])){
        try{
            $id = "${_GET["id"]}";

            $sql = "DELETE FROM `mydb`.`cliente` WHERE (`id_cliente` = $id);";

            $inserir = mysqli_query($conexao, $sql);
            mysqli_close($conexao);
            deletar('do cliente');
        }catch(Exception $e){
            deletar_erro('do cliente');
            exit;
        }

    }else if (isset($_GET['deletar_produto'])){
        try{
            $id = "${_GET["id"]}";

            $sql = "DELETE FROM `mydb`.`produto` WHERE (`id_produto` = $id);";

            $inserir = mysqli_query($conexao, $sql);
            mysqli_close($conexao);
            deletar('do produto');
        }catch(Exception $e){
            deletar_erro('do produto');
            exit;
        }
    }else if (isset($_GET['deletar_funcionario'])){
        try{
            $id = "${_GET["id"]}";

            $sql = "DELETE FROM `mydb`.`funcionario` WHERE (`id_funcionario` = $id);";

            $inserir = mysqli_query($conexao, $sql);
            mysqli_close($conexao);
            deletar('do funcinário');
        }catch(Exception $e){
            deletar_erro('do funcinário');
            exit;
        }
    }else if (isset($_GET['deletar_fornecedor'])){
        try{
            $id = "${_GET["id"]}";

            $sql = "DELETE FROM `mydb`.`fornecedor` WHERE (`id_fornecedor` = $id);";

            $inserir = mysqli_query($conexao, $sql);
            mysqli_close($conexao);
            deletar('do fornecedor');
        }catch(Exception $e){
            deletar_erro('do fornecedor');
            exit;
        }

    }else if (isset($_GET['deletar_venda'])){
        try{
            $id = "${_GET["id"]}";

            $sql = "DELETE FROM `mydb`.`venda` WHERE (`id_venda` = $id);";

            $inserir = mysqli_query($conexao, $sql);
            mysqli_close($conexao);
            deletar('da venda');
        }catch(Exception $e){
            deletar_erro('da venda');
            exit;
        }

    }else if (isset($_GET['deletar_entrega'])){
        try{
            $id = "${_GET["id"]}";

            $sql = "DELETE FROM `mydb`.`entrega` WHERE (`id_entrega` = $id);";

            $inserir = mysqli_query($conexao, $sql);
            mysqli_close($conexao);
            deletar('da entrega');
        }catch(Exception $e){
            deletar_erro('da entrega');
            exit;
        }
    }else if (isset($_GET['deletar_grupo'])){
        try{
            $id = "${_GET["id"]}";

            $sql = "DELETE FROM `mydb`.`grupo` WHERE (`id` = $id);";

            $inserir = mysqli_query($conexao, $sql);
            mysqli_close($conexao);
            deletar('do grupo');
        }catch(Exception $e){
            deletar_erro('do grupo');
            exit;
        }
        
// -------------------------------------------------------------------------------------------------------------------------------------------
    }else  if (isset($_GET['alterar_cor'])){
        try{
            $id = "${_GET["id"]}";
            $nome_da_cor = "${_GET["Nome_Cor"]}";

            $sql = "UPDATE `mydb`.`cor` SET`nome` = '$nome_da_cor' WHERE `id_cor` = $id;";

            $inserir = mysqli_query($conexao, $sql);
            mysqli_close($conexao);
            alterar('da cor');
        }catch(Exception $e){
            alterar_erro('da cor');
            exit;
        }
    }else  if (isset($_GET['alterar_cliente'])){
        try{
            $data = "${_GET["data"]}";
            $address = "${_GET["address"]}";
            $sexo = "${_GET["sexo"]}";
            $cpf = "${_GET["cpf"]}";
            $name = "${_GET["name"]}";
            $id = "${_GET["id"]}";
            
            $sql = "UPDATE `mydb`.`cliente` SET `nome` = '$name', `endereço` = '$address', `sexo` = '$sexo', `cpf` = '$cpf', `data_nasicmento` = '$data' WHERE `id_cliente` = $id;";

            $inserir = mysqli_query($conexao, $sql);
            mysqli_close($conexao);
            alterar('do cliente');
        }catch(Exception $e){
            alterar_erro('do cliente');
            exit;
        }
    }else  if (isset($_GET['alterar_produto'])){
        try{
            $id = "${_GET["id"]}";
            $name = "${_GET["name"]}";
            $id1 = "${_GET["id1"]}";
            $quantidade = "${_GET["id_quantidade"]}";
            $id_grupo = "${_GET["id_grupo"]}";
            $id_cor = "${_GET["id_cor"]}";
            $id_tamanho = "${_GET["id_tamanho"]}";
            $valor = "${_GET["valor"]}";
            $genero = "${_GET["genero"]}";
            $img = "${_GET["imagem"]}";
            $avaliacao = "${_GET["avaliacao"]}";

            $sql = "UPDATE `mydb`.`produto` SET `valor` = $valor, `nome_produto` = '$name', `cor_id_cor` = '$id_cor', `tamanho` = '$id_tamanho', `grupo_id` = $id_grupo, `fornecedor_id_fornecedor` = $id1, `quantidade` = $quantidade, `genero` = 1, `imagem` = '$img', `avaliacao` = '$avaliacao' WHERE (`id_produto` = $id);";

            $inserir = mysqli_query($conexao, $sql);
            mysqli_close($conexao);
            alterar('do produto');
        }catch(Exception $e){
            alterar_erro('do produto');
            exit;
        }
    }else if (isset($_GET['alterar_funcionario'])){
        try{
            $id = "${_GET["id"]}";
            $name = "${_GET["name"]}";
            $cpf = "${_GET["cpf"]}";
            $sexo = "${_GET["sexo"]}";
            $login = "${_GET["login"]}";
            $senha = "${_GET["senha"]}";
            $salario = "${_GET["salario"]}";

            $sql = "UPDATE `mydb`.`funcionario` SET `nome` = '$name', `cpf` = $cpf, `sexo` = '$sexo', `login` = '$login', `senha` = '$senha', `salario` = $salario WHERE (`id_funcionario` = $id);";

            $inserir = mysqli_query($conexao, $sql);
            mysqli_close($conexao);
            alterar('do funcionário');
        }catch(Exception $e){
            alterar_erro('do funcionário');
            exit;
        }
    }else if (isset($_GET['alterar_fornecedor'])){
        try{
            $id = "${_GET["id"]}";
            $name = "${_GET["name"]}";
            $cnpj = "${_GET["cnpj"]}";
            $address = "${_GET["address"]}";

            $sql = "UPDATE `mydb`.`fornecedor` SET `nome` = '$name', `endereço` = '$address', `CNPJ` = '$cnpj' WHERE (`id_fornecedor` = $id);
            ";

            $inserir = mysqli_query($conexao, $sql);
            mysqli_close($conexao);
            alterar('do fornecedor');
        }catch(Exception $e){
            alterar_erro('do fornecedor');
            exit;
        }
    }else if (isset($_GET['alterar_grupo'])){
        try{
            $id = "${_GET["id"]}";        
            $name = "${_GET["Nome_Cor"]}";  

            $sql = "UPDATE `mydb`.`grupo` SET `nome` = '$name' WHERE (`id` = $id);";

            $inserir = mysqli_query($conexao, $sql);
            mysqli_close($conexao);
            alterar('do grupo');
        }catch(Exception $e){
            alterar_erro('do grupo');
            exit;
        }
    }else if (isset($_GET['alterar_entrega'])){
        try{
            $id = "${_GET["id"]}";
            $taxa = "${_GET["salario"]}";
            $veiculo = "${_GET["veiculo"]}";
            $textarea = "${_GET["textarea"]}";

            $sql = "UPDATE `mydb`.`entrega` SET `descrição` = '$textarea', `salario_entregador` = $taxa, `veiculo` = '$veiculo' WHERE `id_entrega` = $id;";

            $inserir = mysqli_query($conexao, $sql);
            mysqli_close($conexao);
            alterar('da entrega');
        }catch(Exception $e){
            alterar_erro('da entrega');
            exit;
        }
    }else if (isset($_GET['alterar_venda'])){
        try{
            $id = "${_GET["id"]}";
            $valor = "${_GET["valor"]}";
            $data = "${_GET["data"]}";
            $id_entrega = "${_GET["id_entrega"]}";
            $id_cliente = "${_GET["id_cliente"]}";
            $id_funcionario = "${_GET["id_funcionario"]}";
            $produto = "${_GET["produto"]}";

            $sql = "UPDATE `mydb`.`venda` SET `valor` = $valor, `data` = '$data', `entrega_id_entrega` = $id_entrega, `cliente_id_cliente` = $id_cliente, `funcionario_id_atendente` = $id_funcionario WHERE (`id_venda` = $id);";

            $inserir = mysqli_query($conexao, $sql);
            mysqli_close($conexao);
            alterar('da venda');
        }catch(Exception $e){
            alterar_erro('da venda');
            exit;
        }
    }else{

    }
    ?>
    <?php
    function salvar ($var){
        ?>
         <section class="section_erro">
                <div class="bloco">
                    <div class="bloco_carregamento">
                        <div class="carregamento"></div>
                    </div>
                    <p id="p">Salvando dados <?php echo $var?></p>
                    <div class="div_2">
                        <img src="../imgs/icone_certo.png" alt="">
                        <p id="p_3">procedimento occorrido com sucesso!</p>
                        <a href="../index.php">OK</a>
                    </div>
                </div>
                <script>
                    const bloco_carregamento = document.getElementsByClassName('bloco_carregamento')[0]
                    setTimeout(() => {
                        bloco_carregamento.style.display = 'none'
                        document.getElementById('p').style.display = 'none'
                        document.getElementsByClassName('div_2')[0].style.display = 'block'
                        setTimeout(() => {
                            document.getElementsByClassName('div_2')[0].style.transform = 'scale(1)'
                        }, 0500);
                    }, 6000);
                </script>
        </section>
        <?php
    }
    ?>
    <?php
    function salvar_erro ($var){
        ?>
        <section class="section_erro">
                <div class="bloco">
                    <div class="bloco_carregamento">
                        <div class="carregamento"></div>
                    </div>
                    <p id="p">Salvando dados <?php echo $var?>...</p>
                    <div class="div_2">
                        <img src="../imgs/icone_erro.png" alt="">
                        <p id="p_2">Ops ocorreu um erro, tente novamente!</p>
                        <a href="../index.php">OK</a>
                    </div>
                </div>
                <script>
                    const bloco_carregamento = document.getElementsByClassName('bloco_carregamento')[0]
                    setTimeout(() => {
                        bloco_carregamento.style.display = 'none'
                        document.getElementById('p').style.display = 'none'
                        document.getElementsByClassName('div_2')[0].style.display = 'block'
                        setTimeout(() => {
                            document.getElementsByClassName('div_2')[0].style.transform = 'scale(1)'
                        }, 0500);
                    }, 6000);
                </script>
        </section>
        <?php
    }
    ?>
    <?php
    function deletar ($var){
        ?>
        <section class="section_erro">
                <div class="bloco">
                    <div class="bloco_carregamento">
                        <div class="carregamento"></div>
                    </div>
                    <p id="p">Deletando dados <?php echo $var?>...</p>
                    <div class="div_2">
                        <img src="../imgs/icone_certo.png" alt="">
                        <p id="p_3">procedimento occorrido com sucesso!</p>
                        <a href="../index.php">OK</a>
                    </div>
                </div>
                <script>
                    const bloco_carregamento = document.getElementsByClassName('bloco_carregamento')[0]
                    setTimeout(() => {
                        bloco_carregamento.style.display = 'none'
                        document.getElementById('p').style.display = 'none'
                        document.getElementsByClassName('div_2')[0].style.display = 'block'
                        setTimeout(() => {
                            document.getElementsByClassName('div_2')[0].style.transform = 'scale(1)'
                        }, 0500);
                    }, 6000);
                </script>
        </section>
        <?php
    }
    ?>
    <?php
    function deletar_erro ($var){
        ?>
        <section class="section_erro">
                <div class="bloco">
                    <div class="bloco_carregamento">
                        <div class="carregamento"></div>
                    </div>
                    <p id="p">Deletando dados <?php echo $var?>...</p>
                    <div class="div_2">
                        <img src="../imgs/icone_erro.png" alt="">
                        <p id="p_2">Ops ocorreu um erro, tente novamente!</p>
                        <a href="../index.php">OK</a>
                    </div>
                </div>
                <script>
                    const bloco_carregamento = document.getElementsByClassName('bloco_carregamento')[0]
                    setTimeout(() => {
                        bloco_carregamento.style.display = 'none'
                        document.getElementById('p').style.display = 'none'
                        document.getElementsByClassName('div_2')[0].style.display = 'block'
                        setTimeout(() => {
                            document.getElementsByClassName('div_2')[0].style.transform = 'scale(1)'
                        }, 0500);
                    }, 6000);
                </script>
        </section>
        <?php
    }
    ?>
    <?php
    function alterar_erro ($var){
        ?>
        <section class="section_erro">
                <div class="bloco">
                    <div class="bloco_carregamento">
                        <div class="carregamento"></div>
                    </div>
                    <p id="p">Alterando dados <?php echo $var?>...</p>
                    <div class="div_2">
                        <img src="../imgs/icone_erro.png" alt="">
                        <p id="p_2">Ops ocorreu um erro, tente novamente!</p>
                        <a href="../index.php">OK</a>
                    </div>
                </div>
                <script>
                    const bloco_carregamento = document.getElementsByClassName('bloco_carregamento')[0]
                    setTimeout(() => {
                        bloco_carregamento.style.display = 'none'
                        document.getElementById('p').style.display = 'none'
                        document.getElementsByClassName('div_2')[0].style.display = 'block'
                        setTimeout(() => {
                            document.getElementsByClassName('div_2')[0].style.transform = 'scale(1)'
                        }, 0500);
                    }, 6000);
                </script>
        </section>
        <?php
    }
    ?>
    <?php
    function alterar ($var){
        ?>
        <section class="section_erro">
                <div class="bloco">
                    <div class="bloco_carregamento">
                        <div class="carregamento"></div>
                    </div>
                    <p id="p">Alterando dados <?php echo $var?>...</p>
                    <div class="div_2">
                        <img src="../imgs/icone_certo.png" alt="">
                        <p id="p_3">procedimento occorrido com sucesso!</p>
                        <a href="../index.php">OK</a>
                    </div>
                </div>
                <script>
                    const bloco_carregamento = document.getElementsByClassName('bloco_carregamento')[0]
                    setTimeout(() => {
                        bloco_carregamento.style.display = 'none'
                        document.getElementById('p').style.display = 'none'
                        document.getElementsByClassName('div_2')[0].style.display = 'block'
                        setTimeout(() => {
                            document.getElementsByClassName('div_2')[0].style.transform = 'scale(1)'
                        }, 0500);
                    }, 6000);
                </script>
        </section>
        <?php
    }
    ?>
</body>
</html>