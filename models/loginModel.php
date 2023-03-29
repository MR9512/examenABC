<?php
class loginModel
{
    public function __construct()
    {
        require_once("db/Conect.php");
        $con = new Conect();
        $this->con = $con->conexion();
        $fecha = getdate();
        $this->fecha = $fecha['year']."-".$fecha['mon']."-".$fecha['mday'];
        
    }

    public function saveUser($datos){
       $query = "INSERT INTO usuarios(nombre,apellidos,email,password,telefono,direccion,rol,fecha_registro) VALUES ('".$datos['nombre']."','".$datos['apellidos']."','".$datos['email']."','".$datos['password']."','".$datos['telefono']."','".$datos['direccion']."','".$datos['rol']."','".$this->fecha."')";
       mysqli_query($this->con,$query);
       return true;
    }
    public function validar($datos)
    {
        $query = 'SELECT * FROM usuarios WHERE email = "' . $datos['usuario'] . '" AND password = "' . $datos['contrasena'] . '" AND status = 1';

        $respuesta = mysqli_query($this->con, $query);

        if (mysqli_num_rows($respuesta) > 0) {
            while ($row = mysqli_fetch_assoc($respuesta)) {
                $data['id_usuario'] = $row['id_usuario'];
                $data['nombre_usuario'] = $row['nombre'];
            }
        } else {
            $data['error_usuario'] = "El usuario no existe";
        }
        return $data;
    }
}
