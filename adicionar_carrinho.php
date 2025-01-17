<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2 class="titulo">Podutos</h2>
    <div class="lista-produtos">
        <?php
            $itens = array(['imagem'=>'bermuda.jpg', 'nome'=>'Bermuda', 'preco'=>'120,00'],
            ['imagem'=>'tenis.jpg', 'nome'=>'Tênis', 'preco'=>'330,00'],
            ['imagem'=>'relogio.webp', 'nome'=>'Relógio', 'preco'=>'240,00']);
            
            foreach($itens as $key => $value){
        ?>
        
        <div class="produto">
            <img src="<?php echo $value['imagem'] ?>" alt="Bermuda">
            <label for=""><?php echo $value['nome'] ?></label>
            <p><?php echo $value['preco'] ?></p>
            <a href="?adicionar = <?php echo $key ?>">Adicionar ao carrinho</a>
        </div>

        <?php
            }
        ?>
        
        <a href="ver_carrinho.php">Visualizar Carrinho</a>
    </div>

</body>
</html>
