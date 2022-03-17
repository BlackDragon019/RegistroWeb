<!DOCTYPE html>
<html lang="es">
<head>
	<title>Periodos Vacacionales</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" href="librerias/boostrap4/bootstrap.min.css">
        <link rel="stylesheet" href="librerias/fontanwesome/css/all.css">
        <link rel="stylesheet" href="librerias/datatable/dataTables.bootstrap4.min.css">
        <link rel="stylesheet" href="librerias/cssEstilo.css">
</head>

<body>
	<div class="container">
	<br>
	<div class="row">
	<div class="col"></div>
	<div class="col">
		<form method="post" id="frmlogin" onsubmit="return entrar()" autocomplete="off">
			<img src="imagenes/user.png" class="circulo-imagen" alt="Avatar" style="height:150px;"><br>
			<div class="form-group">
			<input type="email" class="form-control" name="usuario" id="usuario" placeholder="Usuario" required="">
			</div>
			<div class="form-group">
			<input type="password" class="form-control" name="contra" id="" placeholder="Contraseña" required="">
			</div>
			<input type="submit" class="btn btn-primary" name="Submit">
			<a href="registro.php" style="text-align: center" type="button" class="btn btn-info">Registrarse</a>
		</form>
	</div>
	<div class="col"></div>
	</div>
	
	</div>
	
	<script src="librerias/jquery-3.5.1.min.js"></script>
    <script src="librerias/sweetalert.js"></script>
	
	<script type="text/javascript">
        function entrar()
        {
            $.ajax({
                    type:"POST",
                    data:$('#frmlogin').serialize(),
                    url:"Procesos/Usuarios/login.php",
                    success:function(respuesta){
                        respuesta = respuesta.trim();  
                        console.log(respuesta);
                        if(respuesta == 1)
                           {
                                window.location = "Vistas/Home.php";
                           }
                        else
                            {
                                swal("Fallo al entrar","Error");
                            }
                    }
                });
                return false;
        }
    </script>
	         <script src="librerias/jquery-3.5.1.min.js"></script>
        <script src="librerias/boostrap4/popper.min.js"></script>
        <script src="librerias/boostrap4/bootstrap.min.js"></script>
        <script src="librerias/datatable/jquery.dataTables.min.js"></script>
        <script src="librerias/datatable/dataTables.bootstrap4.min.js"></script>
    </body>
</html>