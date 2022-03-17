function RegistrarCliente()
{
    var nombre = $("#Nombre").val();
    var ap = $("#Ap").val();
    var am = $("#Am").val();
    var correo = $("#Correo").val();
    var contra = $("#contra").val();
    var tel = $("#tel").val();
    
    
    $.ajax({
        type: "POST",
        data: {"Nombre":nombre,"Apellidop":ap,"Apellidom":am,"email":correo,"Pass":contra,"Telefono":tel},
        url:"Procesos/Usuarios/registrarCliente.php",
        success: function(respuesta)
        {
            respuesta = respuesta.trim();
            
            switch(respuesta)
                   {
                       case "":
                           //$("#needs-validation")[0].reset();
                            swal("Agregado con exito", {icon: "success"});
                           break;
                        case "1":
                           //$("#needs-validation")[0].reset();
                            swal("Se registro con exito", {icon: "success"});
                           break;
                       case "2":
                       //$("#needs-validation")[0].reset();
                        swal("Este usuario ya existe", {icon: "warning"});
                       break;
                       default:
                           //$("#needs-validation")[0].reset();
                           swal(respuesta, {icon: "warning"});
                   }
        }
    });
}