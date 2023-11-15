<?php
session_start();
var_dump($_POST);
if(isset($_POST['usuario'], $_POST['senha'] ))
{
    if(($_POST['usuario'] == 'Maria' && $_POST['senha'] == 123 ))
    {
        $_SESSION['usuario'] = $_POST['usuario'];
        header('Location: clientes.php');
    }
}
?>
<form action="" method="post">     
    <input type="text" name='usuario' placeholder='Usuário'>
    <input type="text" name='senha' placeholder='Senha'>
    <input type="submit" name='login' value 'Login'>
</form>