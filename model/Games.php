<?php
require "..//config/conexion.php";

class games
{

    public function __construct()

     {

     }
//insert register method
    public function insert($idgame,$name,$duration,$description)
    {
        $sql="INSERT INTO  games (idgame,name,duration,description)
        VALUES ('$idgame','$name','$duration','$description')";
        return ejecutarConsulta($sql);

    }
//Editing register method
    public function edit($idgame,$name,$duration,$description)
    {
        $sql="UPDATE games SET name='$name', duration='$duration', description='$description'
         WHERE idgame='$idgame'";
         return ejecutarConsulta($sql);
    }
//Show a register
    public function show($idgame)
    {
        $sql="SELECT * FROM games WHERE idgame='$idgame'";
        return ejecutarConsultaSimpleFila($sql);
    }
//Show all registers
    public function listing()
    {
        $sql="SELECT * FROM games";
        return ejecutarConsulta($sql);
    }
}


?>