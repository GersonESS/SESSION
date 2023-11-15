<?php
session_start();
if(!isset($_SESSION['usuario'])){
        header('Locatin: login.php?err-tru');
        exit;
}
echo "<body style='blackground-color:Lightblue'>
        <h1>Clientes!!</h1> 
     </body>";

?> 