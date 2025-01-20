<?php
    session_start();

    unset($_SESSION['']);
    header('Location: ver_carrinho.php');
?>