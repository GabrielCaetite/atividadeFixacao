<?php
    session_start();
    if(isset($_GET['adicionar'])){
        echo '<script>alert("vai se fuder");</script>';
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
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
            <img src="<?php echo 'imagens/' . $value['imagem'] ?>" alt="Bermuda">
            <p><?php echo $value['nome'] ?></p>
            <p><?php echo "R$ ".$value['preco'] ?></p>
            <a href="?adicionar=<?php echo $key ?>">Adicionar ao carrinho</a>
        </div>

        <?php
            
            }
        ?>
        <br>
        <a href="ver_carrinho.php">Visualizar Carrinho</a>
    </div>

</body>
</html>
