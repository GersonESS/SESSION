<?php
    session_start();
    
    echo "<h2>TEST</h2>";
    echo "Nome: {$_SESSION['nome']}, Idade: {$_SESSION['nome']} anos <br>";
    echo "ID ".session_id();