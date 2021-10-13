<?php 


function connection(){
    $conexion = null;
    $host     = 'localhost'; #ip o nombre del servidor remoto o local
    $database = 'schema_dental_entity_login'; //SE ENCUENTRA TODAS LAS ENTIDADES REGISTRADAS
    $username = 'root';
    $password = ''; #PASSWIRD #PASSWORD SERVIDOR REMOTO ==> Pablo_1997
    $utf8mb4  = 'utf8mb4';

    try{
        $conexion = new PDO("mysql:host=$host;dbname=$database;charset=$utf8mb4",$username, $password );
    }catch (PDOException $e){
        echo $e;
    }

    if($conexion){
        echo 'coneccion establesida'; 
    }else{
        echo '<br>error de coneccion'; 
    }
}

connection(); 


?>