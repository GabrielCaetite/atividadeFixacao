<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selecionando produtos</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    
    <h2 class="titulo">Podutos</h2>
    <div class="lista-produtos">
        <?php
            $itens = array(['imagem'=>'bermuda.jpg', 'nome'=>'Bermuda Trekking', 'preco'=>'120,00'],
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
    <div class="acessar-carrinho">
        <a href="ver_carrinho.php" >Carrinho</a>
    </div>

    <?php
        if(isset($_GET['adicionar'])){
            //se existe 'adicionar', o item sera adicionado ao carrinho
            $idProduto = $_GET['adicionar'];
            if(isset($itens[$idProduto])){
                //se idProduto existe, a sessao associada tambem
                if(isset($_SESSION[$idProduto])){
                    $_SESSION[$idProduto]['quantidade']++;
                }else{
                    $_SESSION[$idProduto] = array('quantidade'=>'1', 'nome'=>$itens[$idProduto]['nome'],
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
