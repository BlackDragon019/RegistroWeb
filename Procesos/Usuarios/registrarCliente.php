<?php
    
    require_once "../../Clases/Usuario.php";
    $agregar = new Usuario();
    foreach($_POST as $valor => $k)
    {
        if ($k == '') {
            echo $valor;
            die();
        }
    }
    
    $_POST["Pass"] =md5($_POST["Pass"]);
    $respuesta = $agregar->ConsultarUsuario($_POST["email"]);
    
    if ($respuesta == 3) 
    {
        $guardar = $agregar->Registrar($_POST);
        return $guardar;
    }
    else
    {
        print_r("2");
    }
?>
