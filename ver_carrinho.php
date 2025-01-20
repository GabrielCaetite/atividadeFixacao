<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visualizar carrinho</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <h2 class="titulo">Carrinho</h2>
    <div class="container-carrinho">
        <table>
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Preço</th>
                    <th>Quantidade</th>
                    <th>Subtotal</th>
                    <th class="remover"></th>
                </tr>
            </thead>
            <?php
                $total=0;
                foreach($_SESSION['carrinho'] as $key => $value){
            ?>
            <tbody>
                <tr>
                    <td><?php echo $value['nome'] ?></td>
                    <td><?php echo 'R$ '.$value['preco'] ?></td>
                    <td><?php echo $value['quantidade'] ?></td>
                    <td><?php echo 'R$ '.(float)$value['preco']*$value['quantidade'].',00'?></td>
                    <td class="remover"><a href="remover_item.php" >Remover</a></td>
                </tr>
            </tbody>
            <?php
                $total+=(float)$value['preco']*$value['quantidade'];
                }
            ?>
        </table>
    </div>

    <div class="total-geral">
        <p><?php echo 'Total  geral: R$ '.$total.',00' ?></p>
    </div>

    <div class="total-geral">
        <p><?php echo 'Usuário: '.$_COOKIE['nome']; ?></p>
        <p><?php echo 'Tema: '.$_COOKIE['tema']; ?></p>
    </div>

    <div class="link">
        <a href="limpar_carrinho.php" >Limpar carrinho</a>
        <a href="adicionar_carrinho.php" >Pagina inicial</a>
    </div>

</body>
</html>