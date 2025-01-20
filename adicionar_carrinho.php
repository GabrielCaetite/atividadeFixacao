<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selecionar produtos</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <h2 class="titulo">Preferências do usuário</h2>
    <div class="form">
        <form action="preferencias_usuario.php" method="get">
            <input type="text" name="nome" id="nome" placeholder="Nome">
            <label for="tema">Tema:</label>
            <select name="tema" id="tema">
                <option value="selecione">Selecione</option>
                <option value="claro">Claro</option>
                <option value="escuro">Escuro</option>
            </select>
            <input type="submit" value="Salvar" class="bt">
        </form>
    </div>

    <h2 class="titulo">Podutos</h2>
    <div class="lista-produtos">
        <?php
            $itens = array(
            ['imagem'=>'bermuda.jpg', 'nome'=>'Bermuda Trekking', 'preco'=>'120,00'],
            ['imagem'=>'tenis.jpg', 'nome'=>'Tênis Fila', 'preco'=>'330,00'],
            ['imagem'=>'relogio.webp', 'nome'=>'Relógio Olevs', 'preco'=>'240,00']);
            
            foreach($itens as $key => $value){
        ?>
        
        <div class="produto">
            <img src="<?php echo 'imagens/' . $value['imagem'] ?>" alt="<?php echo $value['nome'] ?>">
            <p><?php echo $value['nome'] ?></p>
            <p><?php echo "R$ ".$value['preco'] ?></p>
            <a href="?adicionar=<?php echo $key ?>">Adicionar ao carrinho</a>
        </div>

        <?php
            }
        ?>
        <br>
    </div>

    <div class="link">
        <a href="ver_carrinho.php" >Carrinho</a>
    </div>

    <?php
        if(isset($_GET['adicionar'])){
            //se existe 'adicionar', o item sera adicionado ao carrinho
            $idProduto = $_GET['adicionar'];
            if(isset($itens[$idProduto])){
                //se idProduto existe no vetor, a sessao associada tambem
                if(isset($_SESSION['carrinho'][$idProduto])){
                    $_SESSION['carrinho'][$idProduto]['quantidade']++;
                }else{
                    $_SESSION['carrinho'][$idProduto] = array('quantidade'=>'1', 'nome'=>$itens[$idProduto]['nome'],
                    'preco'=>$itens[$idProduto]['preco']);
                }
                echo '<script>alert("O Item selecionando foi adicionado ao carrinho!");</script>';
            }else{
                echo '<script>alert("O Item não existe no carrinho!");</script>';
            }
        }
    ?>

</body>
</html>
