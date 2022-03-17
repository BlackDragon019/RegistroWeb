<?php
    session_start();
    require_once "../../Clases/Usuario.php";
    $usuario = $_POST['usuario'];
    $_POST['contra'] =md5($_POST['contra']);
    $password = $_POST['contra'];
    
    $usuarioObj = new Usuario();
    
    echo $usuarioObj->login($usuario,$password);
?>