<?php
    if(isset($_GET['nome'])&&isset($_GET['tema'])){
        if(($_GET['nome']!='') && ($_GET['tema']!='selecione')){
            setcookie('nome', $_GET['nome'], time()+3600);
            setcookie('tema', $_GET['tema'], time()+3600);
            echo '<script>alert("Dados salvos com sucesso!");</script>';
        }else{
            echo '<script>alert("É necessário preencher os campos.");</script>';
        }
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Preferências do usuário</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="link">
        <a href="adicionar_carrinho.php">Pagina inicial</a>
    </div>
</body>
</html>