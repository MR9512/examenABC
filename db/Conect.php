<?php
class Conect
{
    public function conexion()
    {
        $con = mysqli_connect("localhost", "root", "", "abc_php");
        if (!$con) {
            echo "conexion fallida";
        } else {
            return $con;
        }
    }
}
