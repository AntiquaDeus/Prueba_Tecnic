<?php
class cconexion
{
    public static function  ConexionBD(){
    $host ="localhost";
    $dbname="PruebaTecnica";
    $username="postgres";
    $password ="12345";
    

    try{
        $conn= pg_connect("host= $host dbname=$dbname user=$username password=$password");
        //echo("conexion exitosa");
    }
    catch(PDOExeption $err){
        echo("Fallo,$err");

    }
    $query = 'SELECT * FROM "Tabla_tecnica"';
    $consulta=pg_query($conn,$query);
    if($consulta){
        //echo("Se pudo");
    }else{
        echo("no se pudo");
    }  
    return $conn;


  
    }
}

?>