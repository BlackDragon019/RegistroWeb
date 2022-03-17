<?php 
       $titulo="Registro";
        include "headerFooterCliente/header.php";  
      ?>

<head>
    <link href="Librerias/css/registro.css" rel="stylesheet">
</head>

<body id="Fondo6">
    <br>
    <form class="container" id="needs-validation" novalidate>
        <div class="row justify-content-center align-items-center">
            <div class="col-5 text-center align-items-center card border-primary " style="min-width: 20rem;">



                <label>Nombre(s)</label>
                <input type="text" id="Nombre" class="form-control" placeholder="Nombre o Nombres" value="" required>

                <label>Apellido Paterno</label>
                <input type="text" id="Ap" class="form-control" placeholder="Paterno" value="" required>

                <label>Apellido Materno</label>
                <input type="text" id="Am" class="form-control" placeholder="Materno" value="" required>

                <label>Correo</label>
                <input type="email" id="Correo" class="form-control" placeholder="ejemplo: alguien@email.com" value="" required>

                <label>Contraseña</label>
                <input type="password" id="contra" class="form-control" placeholder="Minimo 6 digitos" value="" required>

                <label>Teléfono</label>
                <input type="text" id="tel" class="form-control" placeholder="1234567890" value="" required>
                <br>
            </div>




        </div>



        <br>

        <div class="col text-center align-items-center ">
            <button type="button" class="btn btn-primary" id="btnRegistrar" name="btnRegistrar">Registrar</button>
        </div><br>
            <div class="col text-center align-items-center ">
            <a type="button" class="btn btn-success" id="" name="" href="index.php">Iniciar sesión</a>
        </div>
    </form>

    <?php include "headerFooterCliente/footer.php"?>

    <script src="JS/registro.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#btnRegistrar').click(function() {
                RegistrarCliente();
            });
        });

    </script>
</body>