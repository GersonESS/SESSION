<?php
    session_start();
    $_SESSION['nome'] = "Gerson";
    $_SESSION['idade'] = 66;

    echo "<h2>Sessão</h2>";
    echo "Nome: {$_SESSION['nome']}, Idade: {$_SESSION['idade']} anos <br>";
    echo "ID ".session_id();