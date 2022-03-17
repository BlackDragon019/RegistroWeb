<?php
    require_once "Conexion.php";
    
    class Usuario extends Conectar{
        public function login($usuario,$password)
        {
            $conexion = Conectar::conexion();
            $sql = "SELECT count(*) as existeUsuario 
                    FROM usuarios 
                    WHERE email = '$usuario' 
                            AND Pass = '$password';";
            $result = mysqli_query($conexion,$sql);
            
            $respuesta = mysqli_fetch_array($result)['0'];
            
            if($respuesta > 0)
            {
                $_SESSION['num'] = $usuario;
                
                $sql = "SELECT idUsuario FROM usuarios 
                            WHERE email = '$usuario' 
                            AND Pass = '$password'";
                $result = mysqli_query($conexion,$sql);
                
                $idUsuario = mysqli_fetch_row($result)[0];
                $_SESSION['idUsuario'] = $idUsuario;
                
                
                return 1;
            }
            else
            {
                return 0;
            }
        }
        public function Registrar($datos)
        {
            $conexion = Conectar::conexion();
            $sql="INSERT INTO usuarios(Nombres,ApellidoP,ApellidoM,email,Pass,Telefono)
                                    VALUES
                                    (?,?,?,?,?,?)";
            $query = $conexion->prepare($sql);
            $query->bind_param("sssssi",$datos['Nombre'],
                                        $datos['Apellidop'],
                                        $datos['Apellidom'],
                                        $datos['email'],
                                        $datos['Pass'],
                                        $datos['Telefono']);
            $respuesta = $query->execute();
            
            $query->close();
            
            return $respuesta;
        
        }
        public function ConsultarUsuario($email)
        {
            $conexion = Conectar::conexion();
            $consultaUsuario = "select * from usuarios where email = '".$email."';";
            $resultado = mysqli_query($conexion,$consultaUsuario);
            
            if ($resultado->num_rows > 0) 
            {
                //print_r($resultado);
                
                $datos = mysqli_fetch_array($resultado);
            
                $datos = array("email" => $datos['email']
                               ,"Telefono" => $datos['Telefono']
                              );
                return $datos;
            }
            else
            {
                return 3;
            }
        }
        
    }
?>